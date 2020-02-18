<?php

namespace App\Http\Controllers\Admin\HomeSettings;

use App\Category;
use App\Helper\Facade\General;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Intervention\Image\Facades\Image;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.home-settings.category.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.home-settings.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inputs = General::inputFilter($this->formValidate($request));
        if (empty($inputs['slug']))
            $inputs['slug'] = 'lesson-' . Str::slug($inputs['name']);

        $category = Category::create($inputs);

        if ($request->hasFile('icon')) {
            $file = $request->file('icon');
            $fileName = strtolower($file->getClientOriginalName());
            $imagePath = "/images/category/{$fileName}";
            $imageFullPath = public_path($imagePath);

            $img = Image::make($request->file('icon'));
            $img->resize(50, null, function ($constraint) {
                $constraint->aspectRatio();
            });

            $img->save($imageFullPath);
            $category->update([
                'icon' => $imagePath
            ]);
        }

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Category $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Category $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        if(session()->has('errors')){
            dump(session()->get('errors'));
        }
        return view('admin.home-settings.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in sto rage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Category $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $inputs = General::inputFilter($this->formUpdateValidate($request,$category));
        if (empty($inputs['slug']))
            $inputs['slug'] = 'lesson-' . Str::slug($inputs['name']);

        unset($inputs['icon']);
        $category->update($inputs);

        if ($request->hasFile('icon')) {

            if(!empty($category->icon)){
                echo $category->icon;
                File::delete(public_path($category->icon));
            }

            $file = $request->file('icon');
            $fileName = strtolower($file->getClientOriginalName());
            $imagePath = "/images/category/{$fileName}";
            $imageFullPath = public_path($imagePath);

            $img = Image::make($request->file('icon'));
            $img->resize(50, null, function ($constraint) {
                $constraint->aspectRatio();
            });

            $img->save($imageFullPath);

            $category->update([
                'icon' => $imagePath
            ]);
        }

        return redirect()->route('fc-admin.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Category $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }

    private function formValidate(Request $request)
    {
        return $request->validate([
            'name' => 'required|max:255|unique:categories',
            'description' => 'required|min:3|max:255',
            'slug' => 'sometimes|max:255|unique:categories',
            'icon' => 'sometimes|max:1000|mimes:png,svg,jpeg,jpg',
            'content_addable' => 'boolean'
        ]);
    }

    private function formUpdateValidate(Request $request, Category $category)
    {

        return $request->validate([
            'name' => ['required','max:255',Rule::unique('categories', 'slug')->ignore($category->id)],
            'description' => 'required|min:3|max:255',
            'slug' => ['sometimes', 'max:255', Rule::unique('categories', 'slug')->ignore($category->id)],
            'icon' => 'sometimes|max:1000|mimes:png,svg,jpeg,jpg',
            'content_addable' => 'boolean'
        ]);

    }
}

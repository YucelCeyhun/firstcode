<?php

namespace App\Http\Controllers\Admin\ContentSettings;

use App\Category;
use App\Content;
use App\Helper\Facade\General;
use App\Http\Controllers\Controller;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::with('contents')->where('content_addable', true)->get();
        return view('admin.content-settings.content.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $slug = Str::slug($request->title);
        $request->request->add(['slug' => $slug]);
        $validatedArray = $this->formValidate();
        unset($validatedArray['tag']);
        $body = $validatedArray['body'];
        $inputs = General::inputFilter($validatedArray);
        $inputs['body'] = $body;
        $content = Content::create($inputs);
        $this->tagsExtract($request->tag,$content);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Content $content
     * @return \Illuminate\Http\Response
     */
    public function show(Content $content)
    {
        return $content->body;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Content $content
     * @return \Illuminate\Http\Response
     */
    public function edit(Content $content)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Content $content
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Content $content)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Content $content
     * @return \Illuminate\Http\Response
     */
    public function destroy(Content $content)
    {
        //
    }

    private function formValidate()
    {

        return request()->validate([
            'body' => 'required|min:3',
            'title' => 'required|min:3|unique:contents',
            'description' => 'required|min:3',
            'category_id' => 'required|numeric',
            'tag' => 'string',
            'slug' => 'required|unique:contents'
        ]);
    }

    private function tagsExtract($tags,Content $content)
    {
        $tags = explode(',',$tags);
        $tags = General::inputFilter($tags);
        $tagCollections = Collection::wrap($tags);
        $createTags = [];
        $attachTags = [];

        $tagCollections->each(function ($tag) use(&$createTags,&$attachTags) {
            $tag = ucwords($tag);
            $tagQuery = Tag::whereName($tag);
            if(!$tagQuery->exists())
                array_push($createTags,$tag);
            else {
                array_push($attachTags,$tagQuery->first()->id);
            }
        });
        $content->tags()->attach($attachTags);

        foreach ($createTags as $tag){
            $slug = Str::slug($tag);
            $content->tags()->create([
                'name' => $tag,
                'slug' => $slug
            ]);
        }

    }
}

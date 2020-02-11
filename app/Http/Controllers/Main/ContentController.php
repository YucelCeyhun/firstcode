<?php

namespace App\Http\Controllers\Main;

use App\Content;
use App\Helper\Facade\General;
use App\Http\Controllers\Controller;
use App\Tag;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    private const RANDOM_CONTENT_COUNT = 5;

    public function index(Request $request)
    {
        $breadcrumbList = [];
        if ($request->has('search')) {
            $find = trim(strip_tags($request->get('search')));
            $contents = $this->search($find);

            if ($contents->lastPage() < $contents->currentPage()) {
                $request->request->set('page', $contents->lastPage());
                $contents = $this->search($find);
            }

            return view('main.content.search', compact('contents', 'breadcrumbList', 'find'));
        }

        $contents = Content::with('category')->latest()->paginate(10);
        return view('main.content.index', compact('contents', 'breadcrumbList'));

    }

    public function show(Content $content)
    {
        $breadcrumbList = General::breadcrumbList(
            [
                'name' => 'Dersler', 'route' => ['name' => 'main.lessons']
            ],
            [
                'name' => $content->category->name, 'route' => ['name' => 'main.category.show', $content->category->slug]
            ]

        );

        $similarContents = $this->similarContents($content);

        return view('main.content.show', compact('content', 'breadcrumbList', 'similarContents'));

    }

    private function similarContents(Content $content)
    {
        $tagIds = $content->tags->pluck('id');
        $similarContents = collect([]);

        foreach ($tagIds as $tagId) {
            $contents = Tag::find($tagId)
                ->contents()
                ->where('slug', '<>', $content->slug)
                ->with('tags')
                ->get();

            $similarContents = $similarContents->merge($contents);
        }

        if ($similarContents->count() <= self::RANDOM_CONTENT_COUNT)
            return $similarContents
                ->unique('id')
                ->all();

        return $similarContents
            ->unique('id')
            ->random(self::RANDOM_CONTENT_COUNT)
            ->all();
    }


    private function search($find)
    {
        $find = trim(strip_tags($find));
        $searchingWords = collect(explode(' ', $find));

        $query = Content::query();
        $searchingWords->each(function ($word) use (&$query) {
            $query = $query->orWhere('title', 'LIKE', "%{$word}%")
                ->orWhere('body', 'LIKE', "%{$word}%");
        });

        return $query->with('category')
            ->latest()
            ->paginate(10);
    }

}

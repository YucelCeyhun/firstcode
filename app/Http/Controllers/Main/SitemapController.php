<?php

namespace App\Http\Controllers\Main;

use App\Content;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class SitemapController extends Controller
{
    public function index(){

        $contents = Content::with('category')->latest()->get();

        return response($this->getSitemap($contents))
            ->header('Content-Type','text/xml')
            ->header('version','1.0');
    }

    private function getSitemap($contents){
        $xml = new \SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><urlset/>');
        $xml->addAttribute('xmlns','http://www.sitemaps.org/schemas/sitemap/0.9');
        foreach ($contents as $content){
            $url = $xml->addChild('url');
            $url->addChild('loc',route('main.content.show',$content->slug));
            $url->addChild('lastmod',$content->updated_at->isoFormat('YYYY MM DD'));
            $url->addChild('changefreq','always');
        }

        return $xml->asXML();
    }
}

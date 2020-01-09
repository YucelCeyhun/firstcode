<?php


namespace App\Http\View\Composers;


use Illuminate\Support\Collection;
use Illuminate\View\View;

class RouteNameComposer
{
    public function compose(View $view)
    {
        if (request()->route()) {
            $names = explode('.', request()->route()->getName());
            $names = Collection::wrap($names)->toJson();
            $view->with(compact('names'));
        }
    }
}

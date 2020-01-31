<?php


namespace App\Helper;


class General
{
    public function inputFilter(Array $inputs)
    {
        return array_map(function ($input) {
            return trim(htmlspecialchars($input));
        }, $inputs);
    }

    public function breadcrumbList()
    {
        $breadcrumbList = [];
        $position = 1;
        $args = func_get_args();

        foreach ($args as $arg) {
            $routeName = $arg['route']['name'];
            array_shift($arg['route']);

            array_push($breadcrumbList, [
                'name' => $arg['name'],
                'url' => route($routeName, $arg['route']),
                'position' => $position
            ]);

            $position++;
        }

        return $breadcrumbList;
    }
}

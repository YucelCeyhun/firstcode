<?php


namespace App\Helper;


class General
{
    public function inputFilter(Array $inputs)
    {
        return array_map(function ($input) {
            return trim(strip_tags($input));
        }, $inputs);
    }

    public function breadcrumbList()
    {
        $breadcrumbList = [];
        $position = 2;
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

    public function grecaptcha($recaptchaClient)
    {
        $ch = curl_init();
        curl_setopt_array($ch, [
            CURLOPT_URL => 'https://www.google.com/recaptcha/api/siteverify',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_USERAGENT => $_SERVER['HTTP_USER_AGENT'],
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => [
                'secret' => env('RECAPTCHA_SECRET'),
                'response' => $recaptchaClient
            ],

        ]);


        $gresponse = curl_exec($ch);

        curl_close($ch);

        $gresponse = json_decode($gresponse);

         return $gresponse->success;

    }
}

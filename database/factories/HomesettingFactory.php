<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Homesetting;
use Faker\Generator as Faker;

$factory->define(Homesetting::class, function (Faker $faker) {
    return [
        'description' => 'Laravel ile back-end programlama,vue,javascript ve sass ile font-end programlama öğrenin',
        'title' => 'Firstcode Back-end ve Front-end Programa',
        'footer' => 'tüm hakları saklıdır.copyright © 2020 Firstcode.site'
    ];
});

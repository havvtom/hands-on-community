<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Channel;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Channel::class, function (Faker $faker) {
	$titles = ['PHP', 'Javascript', 'Python', 'Ruby', 'VueJs'];
	$title = $titles[rand(0,4)];
    return [
        'title' => $title,
        'slug' => Str::slug($title),
        'color' => 'blue'
    ];
});

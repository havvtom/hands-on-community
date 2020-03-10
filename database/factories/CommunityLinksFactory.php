<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\CommunityLinks;
use Faker\Generator as Faker;
use App\User;
use App\Channel;

$factory->define(CommunityLinks::class, function (Faker $faker) {
    return [
        'user_id' => factory(User::class),
        'channel_id' => rand(1,6),
        'title' => $faker->word,
        'link' => $faker->url,
        'approved' => 0
    ];
});

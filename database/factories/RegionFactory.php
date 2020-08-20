<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

//$faker = Faker\Factory::create('ar_SA');
$faker = factory(Faker\Factory::class)->create('ar_SA');

$factory->define(App\Region::class, function (Faker $faker) {
    return [
        'region_name' => $faker->cityName,
        'created_at' => now(),
        'updated_at' => now()
    ];
});

<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */


use Faker\Generator as Faker;

$factory->define(\App\MockEntities\AssignmentStatus::class, function (Faker $faker) {
    return [

        'name'   =>   $faker->word(7)
    ];
});

<?php

use Faker\Generator as Faker;
use App\Project;

$factory->define(Project::class, function (Faker $faker) {
    return [
        'name'          => $faker->sentence(),
        'description'   => $faker->text(250),
        'category_id'   => $faker->numberBetween(1, DB::table('categories')->count())
    ];
});

<?php

use Faker\Generator as Faker;

$factory->define(App\Document::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence,
        'type' => $faker->randomLetter,
        'template' => $faker->sentence,
        'path_template' => storage_path('add/documents') . DIRECTORY_SEPARATOR . $faker->name . '.' . $faker->fileExtension,
        'is_active' => $faker->boolean()
    ];
});

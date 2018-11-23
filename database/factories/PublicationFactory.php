<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'user_id' => 6,
        'message' => $faker->paragraph,
        'publication_type' => 0, // secret
        'uploaded_file_id' => 0,
    ];
});

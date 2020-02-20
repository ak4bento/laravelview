<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\inventory;
use Faker\Generator as Faker;

$factory->define(inventory::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'type' => $faker->word,
        'category' => $faker->word,
        'company' => $faker->word,
        'date_of_entry' => $faker->word,
        'warranty' => $faker->word,
        'image' => $faker->word,
        'qty' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});

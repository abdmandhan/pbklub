<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Bahan;
use Faker\Generator as Faker;

$factory->define(Bahan::class, function (Faker $faker) {
    return [
        'Kode'                  => $faker->unique()->regexify('[A-Za-z0-9]{10}'),
        'Nama'                  => $faker->name,
        'Jenis'                 => $faker->randomElement(['Narkotik', 'Non Narkotik']),
        'TempatPenyimpanan'    => $faker->randomElement(['Ruang Bahan', 'Ruang Standar']),
        'Jumlah'                => $faker->numberBetween($min = 0, $max = 100),
        'Harga'                 => $faker->numberBetween($min = 10000, $max = 100000),
        'Satuan'                => $faker->randomElement(['mg', 'ml']),
    ];
});

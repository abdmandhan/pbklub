<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Bahan;
use App\Model\PengajuanBahan;
use App\User;
use Faker\Generator as Faker;

$factory->define(PengajuanBahan::class, function (Faker $faker) {
    return [
        'IDUser'        => User::all()->random()->id,
        'IDBahan'       => Bahan::all()->random()->IDBahan,
        'Jumlah'        => $faker->numberBetween($min = 0, $max = 100),
        'Status'        => $faker->randomElement(['ACCEPTED', 'PENDING', 'CANCELED']),
        'ActionBy'    => User::all()->random()->id,
    ];
});

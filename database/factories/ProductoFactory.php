<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Producto;
use Faker\Generator as Faker;

$factory->define(Producto::class, function (Faker $faker) {
    return [
        'id_material'=>Producto::factory(),
        'descripcion'=>$this->faker->paragraph,
        'unidad_madida'=>$faker->unidad_medida,
        'precio_1'=>1000        
    ];
});

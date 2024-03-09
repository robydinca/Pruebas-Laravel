<?php

namespace Database\Factories;

use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductoFactory extends Factory
{
    protected $model = Producto::class;

    public function definition()
    {
        return [
            'nombre' => $this->faker->word,
            'clase' => $this->faker->randomElement(['tornillería', 'herramientas', 'cocina', 'otros']),
            'proveedor' => $this->faker->company,
            'precio' => $this->faker->randomFloat(2, 1, 100),
        ];
    }
}

<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Curso;
use App\Models\User;
use App\Models\Producto;
use App\Models\ProductoFactory;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        Curso::factory(50)->create();

        Producto::factory()->count(40)->create();

    }
}

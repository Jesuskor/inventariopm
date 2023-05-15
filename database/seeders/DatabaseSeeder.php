<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Customer;
use App\Models\Post;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // Crear carpeta para almacenar las imágenes de los productos
        Storage::deleteDirectory('public/products');
        Storage::makeDirectory('public/products');

        $this->call(UserSeeder::class);
        Customer::factory(10)->create();
        Category::factory(5)->create();
        Product::factory(20)->create();
    }
}

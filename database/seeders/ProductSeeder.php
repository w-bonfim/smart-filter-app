<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = Category::all();
        $brands = Brand::all();

        $products = [
            ['name' => 'iPhone 14', 'category' => 'Eletrônicos', 'brand' => 'Apple'],
            ['name' => 'Tênis Air Max', 'category' => 'Roupas', 'brand' => 'Nike'],
            ['name' => 'Galaxy S23', 'category' => 'Eletrônicos', 'brand' => 'Samsung'],
            ['name' => 'Camiseta Adidas', 'category' => 'Roupas', 'brand' => 'Adidas'],
        ];

        foreach ($products as $prod) {
            $category = $categories->firstWhere('name', $prod['category']);
            $brand = $brands->firstWhere('name', $prod['brand']);

            Product::create([
                'name' => $prod['name'],
                'category_id' => $category->id ?? null,
                'brand_id' => $brand->id ?? null,
            ]);
        }
    }
}

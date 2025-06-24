<?php

namespace Tests\Feature\Livewire;

use App\Livewire\ProductFilter;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use Tests\TestCase;
use Livewire\Livewire;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProductFilterTest extends TestCase
{
    use RefreshDatabase;
    public function test_products_name_search()
    {
        Product::factory()->create(['name' => 'Notebook']);
        Product::factory()->create(['name' => 'Mouse']);

        Livewire::test(ProductFilter::class)
            ->set('search', 'Note')
            ->assertSee('Notebook')
            ->assertDontSee('Mouse');
    }

    public function test_filters_category_and_brand()
    {
        $cat1 = Category::factory()->create();
        $cat2 = Category::factory()->create();
        $brand1 = Brand::factory()->create();
        $brand2 = Brand::factory()->create();

        Product::factory()->create([
            'name' => 'Produto A',
            'category_id' => $cat1->id,
            'brand_id' => $brand1->id,
        ]);
        Product::factory()->create([
            'name' => 'Produto B',
            'category_id' => $cat2->id,
            'brand_id' => $brand2->id,
        ]);

        Livewire::test(ProductFilter::class)
            ->set('categories', [$cat1->id])
            ->set('brands', [$brand1->id])
            ->assertSee('Produto A')
            ->assertDontSee('Produto B');
    }
}

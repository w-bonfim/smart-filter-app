<?php

namespace App\Livewire;

use Livewire\Attributes\Url;
use Livewire\Component;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;

class ProductFilter extends Component
{
    #[Url(as: 'search', history: true)]
    public string $search = '';

    #[Url(as: 'categories', history: true)]
    public array $categories = [];

    #[Url(as: 'brands', history: true)]
    public array $brands = [];

    public function render()
    {
        $products = Product::query()
            ->when($this->search, fn($q) => $q->where('name', 'like', '%' . $this->search . '%'))
            ->when($this->categories, fn($q) => $q->whereIn('category_id', $this->categories))
            ->when($this->brands, fn($q) => $q->whereIn('brand_id', $this->brands))
            ->get();

        return view('livewire.product-filter', [
            'products' => $products,
            'allCategories' => Category::all(),
            'allBrands' => Brand::all(),
        ]);
    }

    public function clearFilters()
    {
        $this->reset(['search', 'categories', 'brands']);
    }
}

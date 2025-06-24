<div class="max-w-2xl mx-auto mt-8 bg-white shadow rounded-lg p-6">
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button
            type="submit"
            class="bg-gray-200 hover:bg-gray-300 text-gray-800 px-4 py-2 rounded transition"
        >
           Sair
        </button>
    </form>

    <h1 class="text-2xl font-bold mb-4 text-center">Busca de Produtos</h1>

    <div class="mb-6">
        <input
            type="text"
            wire:model.live="search"
            placeholder="Buscar produto"
            class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400"
        />
    </div>

    <div class="mb-4">
        <h4 class="font-semibold mb-2">Categorias</h4>
        <div class="flex flex-wrap gap-3">
            @foreach($allCategories as $category)
                <label class="flex items-center space-x-2">
                    <input type="checkbox" wire:model.live="categories" value="{{ $category->id }}" class="rounded border-gray-300 text-blue-600 shadow-sm focus:ring-blue-400">
                    <span>{{ $category->name }}</span>
                </label>
            @endforeach
        </div>
    </div>

    <div class="mb-4">
        <h4 class="font-semibold mb-2">Marcas</h4>
        <div class="flex flex-wrap gap-3">
            @foreach($allBrands as $brand)
                <label class="flex items-center space-x-2">
                    <input type="checkbox" wire:model.live="brands" value="{{ $brand->id }}" class="rounded border-gray-300 text-blue-600 shadow-sm focus:ring-blue-400">
                    <span>{{ $brand->name }}</span>
                </label>
            @endforeach
        </div>
    </div>

    <button
        wire:click="clearFilters"
        class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded transition mb-4"
    >
        Limpar Filtros
    </button>
    <hr class="my-4">

    <table class="w-full border-collapse border rounded">
        <thead>
            <tr class="bg-gray-100">
                <th class="border p-2 text-left">Nome</th>
                <th class="border p-2 text-left">Categoria</th>
                <th class="border p-2 text-left">Marca</th>
            </tr>
        </thead>
        <tbody>
            @forelse($products as $product)
                <tr class="hover:bg-gray-50">
                    <td class="border p-2">{{ $product->name }}</td>
                    <td class="border p-2">{{ $product->category->name ?? '-' }}</td>
                    <td class="border p-2">{{ $product->brand->name ?? '-' }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="border p-2 text-center text-gray-500">Nenhum produto encontrado.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

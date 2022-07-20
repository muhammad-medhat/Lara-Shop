<div class="bg-white rounded-lg shadow-lg p-4">
    <div class="flex flex-col">
        <h2 class="text-lg font-semibold text-gray-900">
            {{ $product->name }}
        </h2>
        <img src="{{ $product->thumbnail }}" alt="{{ $product->name }}" class="h-32 w-32">
        <p class="text-gray-700 text-base">
            {{ $product->description|| 'No description' }}
        </p>
        <a href="products/{{ $product->id }}" class="text-blue-500 hover:text-blue-700">
            View product
        </a>
    </div>
</div>
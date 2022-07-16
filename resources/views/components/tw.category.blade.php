

<div class="bg-white rounded-lg shadow-lg p-4">
    <div class="flex flex-col">
        <a href="category/{{ $category->id }}">
            <h2 class="text-lg font-semibold text-gray-900">
                {{ $category->name }}
            </h2>
            <img src="{{ $category->thumbnail? :asset('images/no-image.png')}}" alt="{{ $category->name }}" class="h-32 w-32">
        </a>
        <p class="text-gray-700 text-base">
            {{ $category->description|| 'No description' }}
        </p>
        <a href="categories/{{ $category->id }}" class="text-blue-500 hover:text-blue-700">
            View products
        </a>

    </div>
</div>
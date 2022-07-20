<x-layout>

    <h1>Categories</h1>

    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
        {{-- if categories found --}}

        @if ($categories)
    
            @unless(count($categories) == 0)
                @foreach($categories as $category)
                    <x-category-card :category="$category" />
                @endforeach
            @endunless
        @else
            <h2>No categories found</h2>
        @endif

    </div>


</x-layout>





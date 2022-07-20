

    <div >
        <a href="categories/show/{{ $category->id }}">
            <h2>
                {{ $category->name }}
            </h2>
            <img src="{{ $category->thumbnail? :asset('images/no-image.png')}}" alt="{{ $category->name }}" class="h-32 w-32">
        </a>
        <p >
            {{ $category->description? :'No description' }}
        </p>
        <a href="categories/{{ $category->id }}" >
            View products
        </a>

    </div>

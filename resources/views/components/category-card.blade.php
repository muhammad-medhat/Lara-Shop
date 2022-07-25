

<div class="card" style="width: 18rem;">
    <a href="categories/show/{{ $category->id }}">
            <h2 class="card-title">
                {{ $category->name }}
            </h2>
            <img src="{{ $category->thumbnail? :asset('images/no-image.png')}}" 
                alt="{{ $category->name }}" class="card-img-top">
        </a>
        <div class="card-body">
            <p class="card-text">
                {{ $category->description }}
            </p>

        <a href="categories/{{ $category->id }}" >
            View products
        </a>
        </div>

    </div>

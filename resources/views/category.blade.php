
@extends('layout')

@section('content')

    <h1>{{ $category->name}}</h1>
    {{-- display category details --}}
    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
        <div class="bg-white rounded-lg shadow-lg p-4">
            <div class="flex flex-col">
                <h2 class="text-lg font-semibold text-gray-900">
                    {{ $category->name }}
                </h2>
                <img src="{{ $category->thumbnail? :asset('images/no-image.png')}}" alt="{{ $category->name }}" class="h-32 w-32">
                <p class="text-gray-700 text-base">
                    {{ $category->description|| 'No description' }}
                </p>
                <a href="/categories/{{ $category->id }}" class="text-blue-500 hover:text-blue-700">
                    View products
                </a>
            </div>
        </div>
    
@endsection

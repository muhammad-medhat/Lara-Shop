@extends('layout')

@section('content')
    
        <h1>products</h1>
    
        <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
    
            {{-- @unless(count($products) == 0) --}}
                @foreach($products as $product)
                    <x-product-card :product="$product" />
                @endforeach
            {{-- @endunless --}}
        </div>

@endsection
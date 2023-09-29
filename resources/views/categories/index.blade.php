@extends('layouts.layout')

@section('content')
    <section class="products-category">
        @foreach($products as $product)
            <a href="{{ route('product.show', $product->id) }}" class="product-category-show">
                <img src="{{ asset($product->image_path) }}" alt="{{ $product->description }}" class="product-category-image">
                <div>
                    <h2>{{ $product->name }}</h2>
                    <p>{{ $product->description }}</p>
                    <p>price: ${{ $product->price }}</p>
                </div>
            </a>
        @endforeach
    </section>
@endsection
@extends('layouts.layout')

@section('content')
    <section class="product-section-show">
        <div class="product-image-wrapper">
            <img src="{{ asset($product->image_path) }}" alt="{{ $product->description }}" class="product-image-show">
        </div>
        <div class="product-details">
            <h2>{{ $product->name }}</h2>
            <p>{{ $product->description }}</p>
            <p>Price: ${{ $product->price }}</p>
        </div>
        <form action="{{ route('order.store') }}" class="order-form" method="POST">
            @csrf
            <input type="hidden" name="product_id" value="{{ $product->id }}">
            <input type="hidden" name="price" value="{{ $product->price }}">
            Number: 
            <input type="number" name="number" value="1" min="1" max="5" style="width: 40px">
            <button type="submit" class="add-to-cart-button">add</button>
        </form>
    </section>
@endsection

@extends('layouts.layout')

@section('content')

<h2>Categories</h2>
<section class="category-section">
    <a href="{{ route('categories.index', $productCategories[0]->id) }}">
        <div class="category-wrapper">
            <img src="{{ $productCategories[0]->image_path }}" alt="{{ $productCategories[0]->name }}" class="category-image">
            <p class="category-name">{{ $productCategories[0]->name }}</p>
        </div>
    </a>
    <a href="{{ route('categories.index', $productCategories[1]->id) }}">
        <div class="category-wrapper">
            <img src="{{ $productCategories[1]->image_path }}" alt="{{ $productCategories[1]->name }}" class="category-image">
            <p class="category-name">{{ $productCategories[1]->name }}</p>
        </div>
    </a>
    <a href="{{ route('categories.index', $productCategories[2]->id) }}">
        <div class="category-wrapper">
            <img src="{{ $productCategories[2]->image_path }}" alt="{{ $productCategories[2]->name }}" class="category-image">
            <p class="category-name">{{ $productCategories[2]->name }}</p>
        </div>
    </a>
    <a href="{{ route('categories.index', $productCategories[3]->id) }}">
        <div class="category-wrapper">
            <img src="{{ $productCategories[3]->image_path }}" alt="{{ $productCategories[3]->name }}" class="category-image">
            <p class="category-name">{{ $productCategories[3]->name }}</p>
        </div>
    </a>
    <a href="{{ route('categories.index', $productCategories[4]->id) }}">
        <div class="category-wrapper">
            <img src="{{ $productCategories[4]->image_path }}" alt="{{ $productCategories[4]->name }}" class="category-image">
            <p class="category-name">{{ $productCategories[4]->name }}</p>
        </div>
    </a>
</section>

<h2>Products</h2>
<section class="product-section">
    <a href="{{ route('product.show', $products[0]->id) }}">
        <div class="product-wrapper">
            <img src="{{ $products[0]->image_path }}" alt="{{ $products[0]->name }}" class="product-image">
            <p class="product-name">{{ $products[0]->name }}</p>
        </div>
    </a>
    <a href="{{ route('product.show', $products[1]->id) }}">
        <div class="product-wrapper">
            <img src="{{ $products[1]->image_path }}" alt="{{ $products[1]->name }}" class="product-image">
            <p class="product-name">{{ $products[1]->name }}</p>
        </div>
    </a>
    <a href="{{ route('product.show', $products[2]->id) }}">
        <div class="product-wrapper">
            <img src="{{ $products[2]->image_path }}" alt="{{ $products[2]->name }}" class="product-image">
            <p class="product-name">{{ $products[2]->name }}</p>
        </div>
    </a>
    <a href="{{ route('product.show', $products[3]->id) }}">
        <div class="product-wrapper">
            <img src="{{ $products[3]->image_path }}" alt="{{ $products[3]->name }}" class="product-image">
            <p class="product-name">{{ $products[3]->name }}</p>
        </div>
    </a>
    <a href="{{ route('product.show', $products[4]->id) }}">
        <div class="product-wrapper">
            <img src="{{ $products[4]->image_path }}" alt="{{ $products[4]->name }}" class="product-image">
            <p class="product-name">{{ $products[4]->name }}</p>
        </div>
    </a>
</section>

@endsection
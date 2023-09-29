@extends('layouts.layout')

@section('content')
    <h2>Hello {{ $user->name }}</h2>
    <p>Here is a list of your orders:</p>

    <section class="product-section" style="height: auto; padding: 10px;">
        @foreach ($orderedProducts as $orderedProduct)
            <a href="{{ route('product.show', $orderedProduct->id) }}">
                <div class="product-wrapper" style="height: auto; padding: 5px;">
                    <img src="{{ asset($orderedProduct->image_path) }}"
                    alt="{{ $orderedProduct->name }}"
                    class="product-image" style="margin: 0px;">
                    <p class="product-name">{{ $orderedProduct->name }}</p>
                    <p>quantity: {{ $orderProducts[$loop->index]->quantity }}</p>
                    <p>Price: ${{ $orderProducts[$loop->index]->price }}</p>
                </div>
            </a>
        @endforeach
    </section>

@endsection
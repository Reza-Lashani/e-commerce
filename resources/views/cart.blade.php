@extends('layouts.layout')

@section('content')

<main>
    <h2>Hello {{ $user->name }}</h2>

    @if (!empty($orderedProducts))
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
                        <form 
                          action="{{ route('items.destroy', $orderProducts[$loop->index]->id) }}"
                          method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                              class="btn-submit"
                              onclick="return confirm('Are you sure you want to delete this item?')">
                                delete
                            </button>
                        </form>
                    </div>
                </a>
            @endforeach
        </section>
        <p>Total price: ${{ $totalPrice }}</p>
        <form action="#">
            <input type="hidden" value="{{ $totalPrice }}">
            <button type="submit" class="btn-complete-order">
                Complete the order 
            </button>
        </form>
    @else
        <p>Your e-commerce Cart is empty.</p>
        <p>search for new products in <a href="#">product categories</a></p> 
    @endif

</main>

@endsection
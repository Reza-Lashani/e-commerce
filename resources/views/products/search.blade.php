@extends('layouts.layout')

@section('content')

    <h1>Search Results for "{{ $query }}"</h1>

    @if (count($results) > 0)

        @foreach($results as $result)
            <a href="{{ route('product.show', $result->id) }}" class="product-category-show">
                <img src="{{ asset($result->image_path) }}" alt="{{ $result->description }}" class="product-category-image">
                <div>
                    <h2>{{ $result->name }}</h2>
                    <p>{{ $result->description }}</p>
                    <p>price: ${{ $result->price }}</p>
                </div>
            </a>
        @endforeach
        
    @else
        <p>No results found for "{{ $query }}".</p>
    @endif


@endsection
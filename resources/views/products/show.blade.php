@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="my-4">Product Details</h1>

        <div class="card">
            <div class="card-header">
                <h2>{{ $product->name }}</h2>
            </div>
            <div class="card-body">
                <p><strong>Category:</strong> {{ $product->categorie->name }}</p>
                <p><strong>Description:</strong> {{ $product->description ?? 'No description provided.' }}</p>
                <p><strong>Price:</strong> ${{ number_format($product->price, 2) }}</p>
            </div>
        </div>

        <a href="{{ route('products.index') }}" class="btn btn-secondary mt-3">Back to Products</a>
    </div>
@endsection

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="my-4">Category Details</h1>

        <!-- Category Information -->
        <div class="card">
            <div class="card-header">
                <h2>{{ $category->name }}</h2>
            </div>
            <div class="card-body">
                <p><strong>Description:</strong></p>
                <p>{{ $category->description ?? 'No description available.' }}</p>
            </div>
        </div>

        <!-- Actions -->
        <div class="mt-4">
            <a href="{{ route('categories.index') }}" class="btn btn-secondary">Back to Categories</a>
            <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('categories.destroy', $category->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this category?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>
@endsection

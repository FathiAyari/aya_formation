@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="my-4">Categories</h1>

        <!-- Success Message -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Create New Category Button -->
        <div class="mb-3">
            <a href="{{ route('categories.create') }}" class="btn btn-primary">Create New Category</a>
        </div>

        <!-- Categories Table -->
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @forelse($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->description }}</td>
                    <td>
                        <!-- View Button -->
                        <a href="{{ route('categories.show', $category->id) }}" class="btn btn-info btn-sm">View</a>

                        <!-- Edit Button -->
                        <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning btn-sm">Edit</a>

                        <!-- Delete Button -->
                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this category?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center">No categories available.</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
@endsection

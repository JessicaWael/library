@extends('layout.master')

@section('content')
<div class="container">
    <div class="create-form">
        <h2>update Books</h2>
        <form action="/books/update" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{ $book->id }}">
            <label for="name">Title</label>
            <input type="text" name="name" id="name" value="{{ $book->name }}"required>

            <label for="description">Description</label>
            <textarea name="description" id="description"  required>{{ $book->description }}</textarea>

            <label for="price">Price</label>
            <input type="number" name="price" id="price" value="{{ $book-> price}}"required>

            <label for="image">Image</label>
            <input type="file" name="image" id="image" accept="image/"  required>
            @if($book->image)
        <img src="{{ asset('image/' . $book->image) }}" alt="{{ $book->name }}" width="50">
    @endif

            <button type="submit" class="btn-submit">update Book</button>
        </form>
    </div>
</div>
@endsection
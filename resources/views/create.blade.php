@extends('layout.master')

@section('content')
<div class="container">
    <div class="create-form">
        <h2>Create a New Book</h2>
        <form action="/books/store" method="post"enctype="multipart/form-data">
            @csrf
            <label for="name">Title</label>
            <input type="text" name="name" id="name" required>

            <label for="description">Description</label>
            <textarea name="description" id="description" required></textarea>

            <label for="price">Price</label>
            <input type="number" name="price" id="price" required>
            
            <label for="image">Image</label>
            <input type="file" name="image" id="image" accept="image/*" required>

            <button type="submit" class="btn-submit">Create Book</button>
        </form>
    </div>
</div>
@endsection
@extends('layout.master')
@section('content')

<div class="container my-5">
    <h1 class="text-center mb-4">Books List</h1>
    
    <div class="table-responsive text-center">
        <table >
            <thead >
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Action</th>

                </tr>
            </thead>
            <tbody >
                @foreach($books as $book)
                    <tr >
                        <td class="text-center">{{ $book->id }}</td>
                        <td class="text-center">{{ $book->name }}</td>
                        <td class="text-center">{{ $book->description }}</td>
                        <td class="text-center">{{ $book->price }}</td>
                        <td class="text-center">
                     <img src="{{ asset('image/' . $book->image) }}" alt="{{ $book->name }}" style="width: 50px; height: 50px;">
</td>
                        <td class="text-center">
                <a href="/books/update/{{ $book->id }}" class="btn btn-success d-inline">
                    Update Book
                   </a>
                    <form action="/books/destroy/{{ $book->id }}" method="post" class="d-inline">
                       @csrf
                         @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Do you want to delete this book?')">
                         Delete
                  </button>
                    </form>
                    </td>


                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection

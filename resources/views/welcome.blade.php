@extends('layout.master')
@section('content')
<div class="position-relative text-center">
    
    <div class="position-relative" 
         style="height: 100vh; background: url('{{ asset('image/book.jpg') }}') center center / cover no-repeat;">
    </div>

    
    <p class="position-absolute top-50 start-50 translate-middle text-white " >
        Welcome to my library
    </p>
</div>
@endsection

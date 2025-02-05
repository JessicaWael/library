<!DOCTYPE html>
<html>
<head>
   @include('layout.head')
</head>
<body>
    @include('layout.header')
    <main>
        @yield("content")
    </main>
    <footer>
    @include('layout.footer')
    </footer>
    <script src="{{ asset('scripts/bootstrap.js') }}"></script>

        
</body>
</html>
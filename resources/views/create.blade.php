<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>library</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <h1> create a new book</h1>
    <form action="/books/store"method="post">
        @csrf
        <label for="title">Title</label>
        <input type="text" name="name">

        <label for="description">description</label>
        <textarea name="description"></textarea>

        <label for="price">price</label>
        <input type="number" name="price">

        <input type="submit" value="create book">



    </form>
</body>
</html>
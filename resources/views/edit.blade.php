<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://matcha.mizu.sh/matcha.css">
    <title>Edit an existing product</title>
</head>
<body>
    <h1>Hello</h1>
    <h6>Edit a product using the form</h6>

    <form action= "/products/{{ $data->id }}" method="delete">
        <button type="submit">Delete</button>
    </form>

    <form action= "/products/{{ $data->id }}/delete" method="post">
        
        <input type="text" name="name" placeholder="Name" value="{{ $data->name }}">
        <input type="text" name="description" placeholder="Description" value="{{ $data->description }}">
        <input type="number" name="price" placeholder="Price" value="{{ $data->price }}">
        <input type="number" name="stock" placeholder="Stock" value="{{ $data->stock }}">
        <input type="text" name="image" placeholder="Image" value="{{ $data->image }}">
        <button type="submit">Update</button>

    </form>
</body>
</html>

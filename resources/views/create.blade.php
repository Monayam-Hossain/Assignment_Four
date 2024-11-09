<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://matcha.mizu.sh/matcha.css">
    <title>Create a new product</title>
</head>
<body>
    <h1>Hello</h1>
    <h6>Create a new product using the form</h6>

    <form action= "/products" method="POST">

        <input type="text" name="product_id" placeholder="Product_id">
        <input type="text" name="name" placeholder="Name">
        <input type="text" name="description" placeholder="Description">
        <input type="number" name="price" placeholder="Price">
        <input type="number" name="stock" placeholder="Stock">
        <input type="text" name="image" placeholder="Image">
        <button type="submit">Submit</button>

    </form>
</body>
</html>

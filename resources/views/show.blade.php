<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://matcha.mizu.sh/matcha.css">
    <title>View a specific product's details</title>
</head>
<body>
    <h1>Hello</h1>
    <h6>Viewing a specific product's details</h6>

    <table>

        <thead>

            <tr>

                <th>id</th>
                <th>product_id</th>                
                <th>name</th>
                <th>description</th>
                <th>price</th>
                <th>stock</th>
                <th>image</th>
                <th>created_at</th>
                <th>updated_at</th>
                <!-- Add table headers for each column you want to display -->

            </tr>

        </thead>

            <tbody>
                @foreach ($data as $item)

                    <tr>

                        <td>{{ $item->id }}</td>
                        <td>{{ $item->product_id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->description }}</td>
                        <td>{{ $item->price }}</td>
                        <td>{{ $item->stock }}</td>
                        <td>{{ $item->image }}</td>
                        <td>{{ $item->created_at }}</td>
                        <td>{{ $item->updated_at }}</td>

                        <!-- Populate table cells with data from each model object -->

                    </tr>

                @endforeach
            </tbody>

    </table>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Products</title>
</head>
<body class="bg-stone-900 text-zinc-300 font-sans p-4">
    <h1 class="text-center decoration-white text-2xl">Products</h1>
    <br>
    
    <form action="{{ route('products.create') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Nombre" class="form-input px-4 py-3 rounded-full bg-stone-800" >
        <input type="text" name="description" placeholder="Descripción" class="form-input px-4 py-3 rounded-full bg-stone-800">
        <input type="text" name="price" placeholder="Precio" class="form-input px-4 py-3 rounded-full bg-stone-800">
        <button type="submit" class="rounded-full p-4 bg-neutral-600" ><span>Crear</span></button>
    </form>
    <br>

    <form action="{{ route('products.search') }}" method="GET">
        @csrf
        <input type="text" name="search" placeholder="Buscar por nombre" class="form-input px-4 py-3 rounded-full bg-stone-800">
        <button type="submit" class="rounded-full p-4 bg-neutral-600">Buscar</button>
    </form>
    <br>

    <form action="{{ route('products.price') }}" method="GET">
        @csrf
        <input type="text" name="price" placeholder="Buscar por precio" class="form-input px-4 py-3 rounded-full bg-stone-800">
        <button type="submit" class="rounded-full p-4 bg-neutral-600">Buscar</button>
    </form>
    <br>

    <form action="{{ route('products.priceRange') }}" method="GET">
        @csrf
        <input type="text" name="min" placeholder="Precio mínimo" class="form-input px-4 py-3 rounded-full bg-stone-800">
        <input type="text" name="max" placeholder="Precio máximo" class="form-input px-4 py-3 rounded-full bg-stone-800">
        <button type="submit" class="rounded-full p-4 bg-neutral-600">Buscar</button>
    </form>
    <br>

    

    <table class="table-fixed border-separate border-spacing-2 bg-neutral-800 border-solid border-2" >
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Precio</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->price }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

@vite('resources/js/app.js')


    

    
    
</body>
</html>
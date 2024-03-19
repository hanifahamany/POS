<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>

    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #6A0DAD; /* Warna ungu yang elegan */
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            flex-direction: column;
            color: #ffffff; 
        }

        h1 {
            color: #ffffff; 
            text-align: center;
            margin-bottom: 20px;
        }

        h3 {
            color: #ffffff;
            text-align: center;
        }

        a {
            color: #ffffff; 
            text-decoration: none;
            display: block;
            margin-top: 10px;
            text-align: center;
            transition: text-decoration 0.3s ease; 
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>Homepage</h1>
    <h3>Menu</h3>
    {{-- <a href="{{ route('profile', ['id' => 08, 'name' => 'Hanifah Amany']) }}">Profile</a> --}}
    <a href="{{ url('/user/08/name/Hanifah Amany')}}">Profile</a>
    <a href="{{ url('/sales') }}">Sales</a>
    <a href="{{ url('/products/category/') }}">Produk</a>
</body>
</html>
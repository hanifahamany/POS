<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perlengkapan Bayi dan Anak</title>

    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            min-height: 100vh;
        }

        h1 {
            color: #6A0DAD; 
            text-align: center;
            margin-bottom: 20px;
        }

        .product-list {
            width: 80%;
            max-width: 600px;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .product-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }

        .button {
            display: inline-block;
            padding: 15px 30px;
            font-size: 16px;
            text-align: center;
            text-decoration: none;
            background-color: #6A0DAD; 
            color: #ffffff;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            cursor: pointer;
            border: none;
            outline: none;
        }

        .button:hover {
            background-color: #4B0082; 
        }
    </style>
</head>
<body>
    <h1>Perlengkapan Bayi dan Anak</h1>
    
    <div class="product-list">
        <div class="product-item">
            <span>Kasur Bayi</span>
            <span>Rp 20.000</span>
        </div>
        <div class="product-item">
            <span>Popok Bayi</span>
            <span>Rp 10.000</span>
        </div>
        <div class="product-item">
            <span>Botol Susu</span>
            <span>Rp 20.000</span>
        </div>
        <div class="product-item">
            <span>Stroller</span>
            <span>Rp 10.000</span>
        </div>
        <div class="product-item">
            <span>Mainan Anak</span>
            <span>Rp 20.000</span>
        </div>
        <div class="product-item">
            <span>Baju Bayi</span>
            <span>Rp 10.000</span>
        </div>
    </div>

    <a class="button" href="{{route('index')}}">Kembali</a>
</body>
</html>

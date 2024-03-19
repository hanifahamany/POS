<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products Category</title>

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
        }

        h1 {
            color: #ffffff; /* Warna teks putih */
            text-align: center;
            margin-bottom: 20px;
        }

        .category-link {
            display: block;
            padding: 10px;
            margin: 10px;
            background-color: #8A2BE2; /* Warna ungu yang lebih gelap */
            color: #ffffff;
            text-decoration: none;
            border-radius: 5px;
            text-align: center;
            transition: background-color 0.3s ease;
            width: 80%; /* Lebar tautan kategori */
            max-width: 300px; /* Lebar maksimum tautan kategori */
            margin: 0 auto; /* Pusatkan tautan kategori */
        }

        .category-link:hover {
            background-color: #9932CC; /* Warna ungu yang lebih gelap saat hover */
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            text-align: center;
            text-decoration: none;
            background-color: #8A2BE2; /* Warna ungu yang lebih gelap */
            color: #ffffff;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            display: block;
            margin: 20px auto; /* Jarak atas dan bawah sebesar 20px, dan pusatkan */
            width: 80%; /* Lebar tombol */
            max-width: 200px; /* Lebar maksimum tombol */
        }

        .button:hover {
            background-color: #9932CC; /* Warna ungu yang lebih gelap saat hover */
        }

        div {
            background-color: #ffffff; /* Warna latar belakang putih */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 400px; /* Lebar maksimum div */
            width: 80%; /* Lebar div */
            margin-bottom: 20px; /* Jarak bawah sebesar 20px */
        }
    </style>
</head>
<body>
    <div>
        <h1>Kategori Produk</h1>
        <a class="category-link" href="{{ route('food') }}">Makanan dan Minuman</a>
        <a class="category-link" href="{{ route('beauty') }}">Kecantikan dan Kesehatan</a>
        <a class="category-link" href="{{ route('homeCare') }}">Perawatan Rumah</a>
        <a class="category-link" href="{{ route('baby') }}">Perlengkapan Bayi dan Anak</a>    
    </div>
    <a class="button" href="/home">Kembali ke Halaman Utama</a>
    
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Penjualan</title>

    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #6A0DAD; /* Warna ungu yang elegan */
            margin: 0;
            padding: 0;
        }

        div {
            max-width: 800px;
            margin: 50px auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #ffffff; /* Warna teks putih */
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #8A2BE2; /* Warna ungu yang lebih gelap */
            color: #ffffff; /* Warna teks putih */
        }

        tbody tr:hover {
            background-color: #f5f5f5;
        }

        h3 {
            color: #ffffff; /* Warna teks putih */
            margin-top: 20px;
            text-align: center;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            text-align: center;
            text-decoration: none;
            background-color: #8A2BE2; /* Warna ungu yang lebih gelap */
            color: #ffffff; /* Warna teks putih */
            border-radius: 5px;
            transition: background-color 0.3s ease;
            display: block; /* Ubah display menjadi block */
            margin: 20px auto; /* Tengahkan tombol */
            width: 80%; /* Lebar tombol */
            max-width: 200px; /* Lebar maksimum tombol */
        }

        .button:hover {
            background-color: #9932CC; /* Warna ungu yang lebih gelap saat hover */
        }
    </style>
</head>
<body>
    <div>
        <h1>Laporan Penjualan</h1>

        {{-- Tabel Laporan Penjualan --}}
        <table border="1">
            <thead>
                <tr>
                    <th>Tanggal</th>
                    <th>Produk</th>
                    <th>Jumlah</th>
                    <th>Total Harga</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>2023-12-10</td>
                    <td>Sabun Cuci Piring</td>
                    <td>1</td>
                    <td>Rp. 10,000</td>
                </tr>
                <tr>
                    <td>2023-12-11</td>
                    <td>Ayam Goreng</td>
                    <td>10</td>
                    <td>Rp. 200,000</td>
                </tr>
                <tr>
                    <td>2023-12-13</td>
                    <td>Obat Flu</td>
                    <td>5</td>
                    <td>Rp. 100,000</td>
                </tr>
            </tbody>
        </table>

        {{-- Total Penjualan --}}
        <h3>Total Penjualan: Rp. 330,000</h3>
        <a class="button" href="/home">Kembali ke Homepage</a>
    </div>
    
</body>
</html>

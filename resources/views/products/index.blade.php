<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;}
        table { width:80%; margin: 20px auto; border-collapse:collapse;}
        th, td { padding: 12px; border: 1px solid #ddd; text-align: left;}
        th { background-color: #007BFF; color:white;}
        tr:nth-child(even) {background-color: #f2f2f2;}
    </style>
</head>
<body>
    <h1 style="text-align: center;">Daftar Produk Kami</h1>]
    <table>
        <thead>
            <tr>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Deskripsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $products as $product )
            <tr>
                <td>{{  $product->name }}</td>
                <td>Rp {{number_format($product->price, 0,",", ".")   }}</td>
                <td>{{  $product->description }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
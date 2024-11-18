<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Artikel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            line-height: 1.6;
        }

        h1 {
            font-size: 24px;
            color: #333;
        }

        p {
            margin: 10px 0;
        }

        .image {
            text-align: center;
            margin-bottom: 20px;
        }

        .image img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    <h1>{{ $artikel['judul'] }}</h1>
    <div class="image">
        <img src="{{ public_path('gambars/' . $artikel['gambar']) }}" alt="Gambar Artikel">
    </div>
    <p>{{ $artikel['deskripsi'] }}</p>
</body>
</html>

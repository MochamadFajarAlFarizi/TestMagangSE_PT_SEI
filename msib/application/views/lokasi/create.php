<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Lokasi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
        }
        h2 {
            color: #333;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            font-weight: bold;
            margin: 10px 0 5px;
            color: #333;
        }
        input[type="text"] {
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 4px;
            margin-bottom: 15px;
        }
        button {
            padding: 10px 15px;
            font-size: 16px;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Tambah Lokasi</h2>
        <form action="<?php echo site_url('lokasi/store'); ?>" method="POST">
            <label for="nama_lokasi">Nama Lokasi</label>
            <input type="text" id="nama_lokasi" name="nama_lokasi" required>

            <label for="negara">Negara</label>
            <input type="text" id="negara" name="negara" required>

            <label for="provinsi">Provinsi</label>
            <input type="text" id="provinsi" name="provinsi" required>

            <label for="kota">Kota</label>
            <input type="text" id="kota" name="kota" required>

            <button type="submit">Simpan</button>
        </form>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Proyek</title>
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
        input[type="text"], input[type="datetime-local"], textarea, select {
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 4px;
            margin-bottom: 15px;
        }
        textarea {
            resize: vertical;
            height: 100px;
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
        <h2>Tambah Proyek</h2>
        <form action="<?php echo site_url('proyek/store'); ?>" method="POST">
            <label for="nama_proyek">Nama Proyek</label>
            <input type="text" id="nama_proyek" name="nama_proyek" required>

            <label for="client">Client</label>
            <input type="text" id="client" name="client" required>

            <label for="tgl_mulai">Tanggal Mulai</label>
            <input type="datetime-local" id="tgl_mulai" name="tgl_mulai" required>

            <label for="tgl_selesai">Tanggal Selesai</label>
            <input type="datetime-local" id="tgl_selesai" name="tgl_selesai" required>

            <label for="pimpinan_proyek">Pimpinan Proyek</label>
            <input type="text" id="pimpinan_proyek" name="pimpinan_proyek" required>

            <label for="keterangan">Keterangan</label>
            <textarea id="keterangan" name="keterangan" required></textarea>

            <label for="lokasi_id">Lokasi</label>
            <select id="lokasi_id" name="lokasi_id" required>
                <?php foreach ($lokasi as $lok): ?>
                    <option value="<?php echo $lok['id']; ?>"><?php echo $lok['nama_lokasi']; ?></option>
                <?php endforeach; ?>
            </select>

            <button type="submit">Simpan</button>
        </form>
    </div>
</body>
</html>

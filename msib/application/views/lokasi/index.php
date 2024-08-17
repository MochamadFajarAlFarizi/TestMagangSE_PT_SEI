<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Lokasi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
        }
        h2 {
            color: #333;
            text-align: center;
            text-transform: uppercase; 
            margin-top: 10px; 
        }
        a {
            text-decoration: none;
            color: #007bff;
            margin-right: 10px;
        }
        a:hover {
            text-decoration: underline;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .actions {
            margin-bottom: 20px;
            text-align: center;
        }
        .actions a {
            display: inline-block;
            margin-right: 10px;
        }
        .lokasi-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }
        .lokasi-item:last-child {
            border-bottom: none;
        }
        .lokasi-item span {
            font-size: 16px;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Daftar Lokasi</h2>
        <div class="actions">
            <a href="<?php echo site_url('lokasi/create'); ?>">Tambah Lokasi</a>
            <a href="<?php echo site_url('proyek'); ?>">Daftar Proyek</a>
        </div>
        <?php if (empty($lokasi)): ?>
            <p>Tidak ada data lokasi.</p>
        <?php else: ?>
            <ul>
                <?php foreach ($lokasi as $lok): ?>
                    <li class="lokasi-item">
                        <span>
                            <?php echo $lok['nama_lokasi']; ?> - <?php echo $lok['kota']; ?>, <?php echo $lok['provinsi']; ?>, <?php echo $lok['negara']; ?>
                        </span>
                        <div>
                            <a href="<?php echo site_url('lokasi/edit/'.$lok['id']); ?>">Edit</a>
                            <a href="<?php echo site_url('lokasi/delete/'.$lok['id']); ?>">Hapus</a>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </div>
</body>
</html>

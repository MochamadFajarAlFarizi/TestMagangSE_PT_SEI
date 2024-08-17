<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Proyek</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
        }
        h2 {
            color: #333;
            text-align: center;
            text-transform: uppercase; /* Mengubah teks menjadi huruf kapital */
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
        .proyek-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }
        .proyek-item:last-child {
            border-bottom: none;
        }
        .proyek-item span {
            font-size: 16px;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Daftar Proyek</h2>
        <div class="actions">
            <a href="<?php echo site_url('proyek/create'); ?>">Tambah Proyek</a>
            <a href="<?php echo site_url('lokasi'); ?>">Daftar Lokasi</a>
        </div>
        <?php if (empty($proyek)): ?>
            <p>Tidak ada data proyek.</p>
        <?php else: ?>
            <ul>
                <?php foreach ($proyek as $pro): ?>
                    <li class="proyek-item">
                        <span>
                            <?php echo isset($pro['nama_proyek']) ? $pro['nama_proyek'] : 'N/A'; ?> - 
                            <?php
                            // Temukan nama lokasi berdasarkan lokasi_id
                            $lokasi_nama = 'N/A';
                            foreach ($lokasi as $lok) {
                                if ($lok['id'] == $pro['lokasi_id']) {
                                    $lokasi_nama = $lok['nama_lokasi'];
                                    break;
                                }
                            }
                            echo $lokasi_nama;
                            ?>
                        </span>
                        <div>
                            <a href="<?php echo site_url('proyek/edit/'.$pro['id']); ?>">Edit</a>
                            <a href="<?php echo site_url('proyek/delete/'.$pro['id']); ?>">Hapus</a>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </div>
</body>
</html>

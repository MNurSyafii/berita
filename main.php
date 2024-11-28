<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Berita</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<style> 
	.navbar-brand {
            font-size: 1.5rem;
            font-weight: bold;
            color: white !important;
            transition: transform 0.5s ease-in-out, color 0.3s ease-in-out;
        }
        .navbar-brand:hover {
            transform: scale(1.1);
            color: #ffc107 !important;
        }
        .btn-animate {
            transition: all 0.3s ease;
        }
        .btn-animate:hover {
            background-color: #ffc107;
            color: white;
            transform: scale(1.05);
        }
        .sticky-top {
            background-color: #343a40;
            z-index: 1030;
        }
</style>
<body>
    <div class="container mt-4">
        <div class="blog-post">
            <?php
            include "admin/koneksi.php";
            $_GET['module'] = isset($_GET['module']) ? $_GET['module'] : '';

            // Fungsi untuk menampilkan daftar berita berdasarkan kategori
            function tampilkanBerita($koneksi, $id_kategori, $kategori_nama) {
                $query = mysqli_query($koneksi, "SELECT * FROM berita WHERE id_kategori='$id_kategori' ORDER BY id_berita DESC");
                echo "<h1>Berita $kategori_nama</h1><hr>";

                if (mysqli_num_rows($query) > 0) {
                    while ($t = mysqli_fetch_array($query)) {
                        $u = mysqli_query($koneksi, "SELECT * FROM user WHERE id='$t[id_user]'");
                        $nu = mysqli_fetch_array($u);
                        ?>
                        <div class="card mb-4">
                            <?php if ($t['gambar'] != '') { ?>
                                <img src="admin/foto_berita/<?php echo $t['gambar']; ?>" class="card-img-top" alt="Gambar Berita" style="object-fit: cover; height: 200px;">
                            <?php } ?>
                            <div class="card-body">
                                <a href="?module=detailberita&id=<?php echo $t['id_berita']; ?>" class="text-decoration-none">
                                    <h2 class="card-title"><?php echo $t['judul']; ?></h2>
                                </a>
                                <p class="card-text">
                                    <small class="text-muted"><?php echo $t['tgl_posting']; ?> | by: <?php echo $nu['username']; ?></small>
                                </p>
                                <p class="card-text">
                                    <?php
                                    $isi_berita = htmlentities(strip_tags($t['isi_berita']));
                                    $isi = substr($isi_berita, 0, 210);
                                    $isi = substr($isi, 0, strrpos($isi, " "));
                                    echo $isi . '...';
                                    ?>
                                </p>
                                <a href="?module=detailberita&id=<?php echo $t['id_berita']; ?>" class="btn btn-warning">Selengkapnya</a>
                            </div>
                        </div>
                        <?php
                    }
                } else {
                    echo "<p>Tidak ada berita dalam kategori $kategori_nama.</p>";
                }
            }

            // Default halaman berita terkini
            if ($_GET['module'] == '') {
                $terkini = mysqli_query($koneksi, "SELECT * FROM berita ORDER BY id_berita DESC");
                echo "<h1>Berita Terkini</h1><hr>";
                while ($t = mysqli_fetch_array($terkini)) {
                    $u = mysqli_query($koneksi, "SELECT * FROM user WHERE id='$t[id_user]'");
                    $nu = mysqli_fetch_array($u);
                    ?>
                    <div class="card mb-4">
                        <?php if ($t['gambar'] != '') { ?>
                            <img src="admin/foto_berita/<?php echo $t['gambar']; ?>" class="card-img-top" alt="Gambar Berita" style="object-fit: cover; height: 200px;">
                        <?php } ?>
                        <div class="card-body">
                            <a href="?module=detailberita&id=<?php echo $t['id_berita']; ?>" class="text-decoration-none">
                                <h2 class="card-title"><?php echo $t['judul']; ?></h2>
                            </a>
                            <p class="card-text">
                                <small class="text-muted"><?php echo $t['tgl_posting']; ?> | by: <?php echo $nu['username']; ?></small>
                            </p>
                            <p class="card-text">
                                <?php
                                $isi_berita = htmlentities(strip_tags($t['isi_berita']));
                                $isi = substr($isi_berita, 0, 210);
                                $isi = substr($isi, 0, strrpos($isi, " "));
                                echo $isi . '...';
                                ?>
                            </p>
                            <a href="?module=detailberita&id=<?php echo $t['id_berita']; ?>" class="btn btn-warning">Selengkapnya</a>
                        </div>
                    </div>
                    <?php
                }
            }
            // Detail berita
            elseif ($_GET['module'] == 'detailberita') {
                $detail = mysqli_query($koneksi, "SELECT * FROM berita WHERE id_berita = '$_GET[id]'");
                $d = mysqli_fetch_array($detail);
                $u = mysqli_query($koneksi, "SELECT * FROM user WHERE id = '$d[id_user]'");
                $nu = mysqli_fetch_array($u);
                ?>
                <div class="card">
                    <?php if ($d['gambar'] != '') { ?>
                        <img src="admin/foto_berita/<?php echo $d['gambar']; ?>" class="card-img-top" alt="Gambar Berita" style="object-fit: cover; height: 400px;">
                    <?php } ?>
                    <div class="card-body">
                        <h2 class="card-title"><?php echo $d['judul']; ?></h2>
                        <p class="card-text">
                            <small class="text-muted"><?php echo $d['tgl_posting']; ?> | by: <?php echo $nu['username']; ?></small>
                        </p>
                        <p><?php echo $d['isi_berita']; ?></p>
                    </div>
                </div>
                <!-- Komentar -->
                <div class="mt-4">
                    <h4>Komentar</h4>
                    <form method="POST" action="">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" name="nama" class="form-control" placeholder="Nama Anda" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Email Anda" required>
                        </div>
                        <div class="mb-3">
                            <label for="komentar" class="form-label">Komentar</label>
                            <textarea name="komentar" class="form-control" rows="5" placeholder="Tulis komentar Anda..." required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" name="btnsubmit">Kirim Komentar</button>
                    </form>
                    <!-- Tampilkan Komentar -->
                    <div class="mt-4">
                        <?php
                        $tampil = mysqli_query($koneksi, "SELECT * FROM komentar WHERE id_berita = $_GET[id]");
                        while ($tam = mysqli_fetch_array($tampil)) {
                            echo "<p><b>" . htmlentities($tam['nama']) . "</b>: " . htmlentities($tam['isi_komentar']) . "</p>";
                        }
                        if (isset($_POST['btnsubmit'])) {
                            $komentar = mysqli_query($koneksi, "INSERT INTO komentar (id_berita, nama, email, isi_komentar) VALUES ('$_GET[id]', '$_POST[nama]', '$_POST[email]', '$_POST[komentar]')");
                            if ($komentar) {
                                echo "<script>alert('Komentar berhasil ditambahkan!');</script>";
                                echo "<meta http-equiv='refresh' content='0'>";
                            }
                        }
                        ?>
                    </div>
                </div>
                <?php
            }
            // Berita berdasarkan kategori
            elseif ($_GET['module'] == 'teknologi') {
                tampilkanBerita($koneksi, 1, 'Teknologi');
            } elseif ($_GET['module'] == 'kesehatan') {
                tampilkanBerita($koneksi, 2, 'Kesehatan');
            } elseif ($_GET['module'] == 'sport') {
                tampilkanBerita($koneksi, 6, 'Olahraga');
            } elseif ($_GET['module'] == 'politik') {
                tampilkanBerita($koneksi, 7, 'Politik');
            } elseif ($_GET['module'] == 'travel') {
                tampilkanBerita($koneksi, 8, 'Travel');
            } else {
                echo "<p>Halaman tidak ditemukan.</p>";
            }
            ?>
        </div>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Berita Elskanza</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <!-- Font Awesome for Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
       body {
            font-family: 'Poppins', sans-serif;
        }
        .navbar {
        background-color: #224abe;
        padding: 10px 0;
        position: sticky;
        top: 0;
        z-index: 1030; /* Pastikan lebih tinggi dari elemen lain */
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .navbar-brand {
            color: white;
            font-size: 1.5rem;
            font-weight: 600;
        }
        .navbar-nav .nav-link {
            color: white;
            font-weight: 600;
            transition: color 0.3s ease;
        }
        .navbar-nav .nav-link:hover {
            color: #ffcb05;
        }
        .search-form input {
            border-radius: 5px;
        }
        .search-form button {
            background-color: #ffcb05;
            border: none;
            border-radius: 5px;
        }
        .search-form button:hover {
            background-color: #ffc107;
        }
        .card-title {
            font-size: 1.25rem;
            font-weight: 600;
        }
        footer {
            background-color: #f8f9fa;
            padding: 20px 0;
        }
        footer p {
            margin: 0;
            font-size: 0.9rem;
            color: black;
        }
        .social-icons a {
            color:  black;
            margin: 0 10px;
            font-size: 1.5rem;
            transition: color 0.3s ease;
        }
        .social-icons a:hover {
            color: #007bff;
        }
        .sidebar {
            padding-left: 15px;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="./">Berita Elskanza</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="?module=teknologi">Teknologi</a></li>
                    <li class="nav-item"><a class="nav-link" href="?module=kesehatan">Kesehatan</a></li>
                    <li class="nav-item"><a class="nav-link" href="?module=sport">Sport</a></li>
                    <li class="nav-item"><a class="nav-link" href="?module=politik">Politik</a></li>
                    <li class="nav-item"><a class="nav-link" href="?module=travel">Travel</a></li>
                    <li class="nav-item"><a class="nav-link" href="admin/login.php">Admin</a></li>
                </ul>
                <form class="d-flex search-form ms-3" method="GET" action="index.php">
                    <input class="form-control" type="search" name="search" placeholder="Cari berita..." aria-label="Search">
                    <button class="btn btn-warning ms-2" type="submit">Cari</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mt-4">
        <div class="row">
            <!-- Main Content -->
            <div class="col-md-8">
                <?php 
                require "koneksi.php";
                if (isset($_GET['search'])) {
                    $search = $_GET['search'];
                    $result = mysqli_query($koneksi, "SELECT * FROM berita WHERE judul LIKE '%$search%'");
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_array($result)) {
                            echo "
                            <div class='card mb-3'>
                                <div class='card-body'>
                                    <h5 class='card-title'>{$row['judul']}</h5>
                                    <p class='card-text'>".substr($row['isi_berita'], 0, 200)."...</p>
                                    <a href='?module=detailberita&id={$row['id_berita']}' class='btn btn-warning text-dark'>Baca selengkapnya</a>
                                </div>
                            </div>";
                        }
                    } else {
                        echo "<p>Berita tidak ditemukan.</p>";
                    }
                } else {
                    include 'main.php';
                }
                ?>
            </div>
            <!-- Sidebar -->
            <aside class="col-md-4 sidebar">
                <div class="widget">
                    <h4>Berita Terbaru</h4>
                    <ul class="list-unstyled">
                        <?php
                        $sebelum = mysqli_query($koneksi, "SELECT * FROM berita ORDER BY id_berita DESC LIMIT 5");
                        while ($s = mysqli_fetch_array($sebelum)) {
                            echo "<li><a href='?module=detailberita&id=$s[id_berita]'>$s[judul]</a></li>";
                        }
                        ?>
                    </ul>
                </div>
            </aside>
        </div>
    </div>

    <!-- Footer -->
    <footer class="text-center">
    <div class="container">
        <p>&copy; <script>document.write(new Date().getFullYear());</script> Web Berita Elskanza. All rights reserved.</p>
        <div class="social-icons mt-3">
            <a href="#" class="me-2"><i class="fa-brands fa-twitter"></i></a>
            <a href="#" class="me-2"><i class="fa-brands fa-facebook"></i></a>
            <a href="#" class="me-2"><i class="fa-brands fa-instagram"></i></a>
            <a href="#" class="me-2"><i class="fa-brands fa-youtube"></i></a>
        </div>
    </div>
</footer>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

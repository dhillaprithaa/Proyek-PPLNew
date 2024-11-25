{{-- <!-- resources/views/dashboard.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        /* Header styling */
        .header {
            background-color: #3c8dbc;
            color: white;
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header h1 {
            margin: 0;
            font-size: 24px;
            font-weight: bold;
        }

        .header .logout {
            cursor: pointer;
            background-color: #f44336;
            color: white;
            padding: 8px 12px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 16px;
        }

        /* Main content styling */
        .main-content {
            padding: 30px;
            text-align: center;
        }

        .profile-section {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin-bottom: 30px;
        }

        .profile-section img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background-color: #ccc;
            margin-bottom: 15px; /* Tambahkan margin untuk spasi antara gambar dan tombol */
        }

        .btn-profile {
            background-color: #d8a354;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 14px;
            display: inline-block;
            margin-top: 10px;
            margin-bottom: 15px; /* Tambahkan margin untuk menempatkan tombol di tengah */
        }

        .profile-section h2 {
            margin: 5px 0;
            font-size: 22px;
            font-weight: bold;
        }

        .profile-section p {
            font-size: 18px;
            color: #555;
            margin: 5px 0;
        }

        /* Menu container */
        .menu-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
            margin-top: 20px;
        }

        .menu-card {
            background-color: #4a90e2;
            color: white;
            width: 220px;
            height: 100px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            border-radius: 10px;
            font-size: 18px;
            cursor: pointer;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s ease;
        }

        .menu-card:hover {
            background-color: #a9a9a9;
        }

        .menu-card img {
            width: 30px;
            height: 30px;
            margin-right: 10px;
        }

    </style>
</head>
<body>

    <!-- Header -->
    <div class="header">
        <h1>Dashboard</h1>
        <a href="#" class="logout">LogOut</a>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Profile Section -->
        <div class="profile-section">
            <img src="https://via.placeholder.com/100" alt="Profile Picture">
            <a href="#" class="btn-profile">Lihat Profil</a>
            <h2>Prof. Dr. Susilo Budi, S.Si., M.Si.</h2>
            <p>NIP: 1233535454</p>
        </div>

        <!-- Menu Container -->
        <div class="menu-container">
            <div class="menu-card">
                <img src="https://via.placeholder.com/30" alt="Icon">
                Kuliah Online
            </div>
            <div class="menu-card">
                <img src="https://via.placeholder.com/30" alt="Icon">
                Jadwal Mengajar
            </div>
            <div class="menu-card">
                <img src="https://via.placeholder.com/30" alt="Icon">
                Akses IRS
            </div>
            <div class="menu-card">
                <img src="https://via.placeholder.com/30" alt="Icon">
                Verifikasi IRS
            </div>
            <div class="menu-card">
                <img src="https://via.placeholder.com/30" alt="Icon">
                Berita
            </div>
            <div class="menu-card">
                <img src="https://via.placeholder.com/30" alt="Icon">
                Informasi Perubahan Pertemuan Perkuliahan
            </div>
            <div class="menu-card">
                <img src="https://via.placeholder.com/30" alt="Icon">
                Pengelolaan Ruangan
            </div>
            <div class="menu-card">
                <img src="https://via.placeholder.com/30" alt="Icon">
                Verifikasi Jadwal Dosen dan Mata Kuliah
            </div>
        </div>
    </div>

</body>
</html> --}}

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard Pembimbing Akademik</title>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <style>
        .custom-navbar {
            background-color: #003f5c;
        }

        .nav-link:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body class="bg-light">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-md custom-navbar shadow-lg">
        <div class="container">
            <a class="navbar-brand text-white" href="#">
                <strong>SIMPATI</strong>
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                    class="bi bi-list" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                </svg>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav flex-grow-1">
                        <!-- Menu Home -->
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#" style="text-decoration: none;">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="/irs" style="text-decoration: none;">Perwalian</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#" style="text-decoration: none;">Jadwal</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ms-auto">
                        <!-- Dropdown User -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#!" id="accountDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Hello, Pembimbing Akademik
                            </a>
                            <ul class="dropdown-menu border-0 shadow" aria-labelledby="accountDropdown">
                                <li>
                                    <a class="dropdown-item" href="#">Logout</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <div class="container">
        <div class="card border-0 shadow my-5">
            <div class="card-header bg-light">
                <h3 class="h5 pt-2">Dashboard Pembimbing Akademik</h3>
            </div>
            <div class="card-body">
                <p>Welcome to the Pembimbing Akademik Dashboard</p>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>

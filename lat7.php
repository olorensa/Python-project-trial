<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
    body, html {
        height: 100%;
        margin: 0;
        font-family: Arial, sans-serif;
    }
    .navbar {
        background-color: #4A90E2; /* Blue color */
    }
    .sidebar {
        background-color: #34495E; /* Dark blue color */
        width: 250px;
    }
    .sidebar-link {
        display: block;
        color: #ECF0F1; /* Light gray color */
        padding: 10px 15px;
        text-decoration: none;
    }
    .sidebar-link:hover {
        background-color: #2C3E50; /* Darker blue shade */
        text-decoration: none;
        transition: background-color 0.3s ease;
    }
    #content {
        background-color: #ECF0F1; /* Light gray background */
        width: 100%;
        padding: 20px;
    }
    iframe {
        width: 100%;
        height: 600px;
        border: none;
    }
</style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Dashboard</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="document.getElementById('contentFrame').src='home_content.html';">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="document.getElementById('contentFrame').src='features_content.html';">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="document.getElementById('contentFrame').src='pricing_content.html';">Pricing</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Sidebar and Content -->
    <div class="d-flex">
        <div class="sidebar">
        </div>

        <div id="content">
        <div class="container mt-5">
    <h1 class="mb-3">Form Input Nilai Mahasiswa</h1>
    <form action="hasilat7.php" method="post" class="needs-validation" novalidate>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama:</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
        </div>
        <div class="mb-3">
            <label for="nim" class="form-label">NIM:</label>
            <input type="text" class="form-control" id="nim" name="nim" required>
        </div>
        <div class="mb-3">
            <label for="kelas" class="form-label">Kelas:</label>
            <input type="text" class="form-control" id="kelas" name="kelas" required>
        </div>
        <div class="mb-3">
            <label for="mata_kuliah" class="form-label">Mata Kuliah:</label>
            <select class="form-select" id="mata_kuliah" name="mata_kuliah">
                <option value="Dasar Pemrograman">Dasar Pemrograman</option>
                <option value="Database">Database</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="nilai1" class="form-label">Nilai 1:</label>
            <input type="number" class="form-control" id="nilai1" name="nilai1" min="0" max="100" required>
        </div>
        <div class="mb-3">
            <label for="nilai2" class="form-label">Nilai 2:</label>
            <input type="number" class="form-control" id="nilai2" name="nilai2" min="0" max="100" required>
        </div>
        <div class="mb-3">
            <label for="uts" class="form-label">UTS :</label>
            <input type="number" class="form-control" id="uts" name="uts" min="0" max="100" required>
        </div>
        <div class="mb-3">
            <label for="uas" class="form-label">UAS :</label>
            <input type="number" class="form-control" id="uas" name="uas" min="0" max="100" required>
        </div>
        <div class="mb-3">
            <label for="absen" class="form-label">ABSEN :</label>
            <input type="number" class="form-control" id="absen" name="absen" min="0" max="100" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
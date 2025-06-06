<?php
require 'function.php';
require 'cek.php';

// Proses update status jika tombol diklik
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'], $_POST['status'])) {
    $id = intval($_POST['id']);
    $status = $_POST['status'];
    $allowed = ['Diterima', 'Tidak Diterima'];
    if (in_array($status, $allowed)) {
        mysqli_query($conn, "UPDATE pendaftaran SET status='$status' WHERE id=$id");
    }
}

// Ambil data pendaftar
$query = mysqli_query($conn, "SELECT * FROM pendaftaran ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Pendaftar</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/admin.css">
</head>
<body>
    <!-- start: Sidebar -->
    <div class="sidebar position-fixed top-0 bottom-0 bg-white border-end">
        <div class="d-flex align-items-center p-3">
            <a href="admin.php" class="sidebar-logo text-uppercase fw-bold text-decoration-none text-indigo fs-2">Taud Rabbani Depok</a>
        </div>
        <ul class="sidebar-menu p-3 m-0 mb-0">
            <li class="sidebar-menu-item"><a href="admin.php"><i class="ri-dashboard-line sidebar-menu-item-icon"></i>Dashboard</a></li>
            <li class="sidebar-menu-divider mt-3 mb-1 text-uppercase">Data Sekolah</li>
            <li class="sidebar-menu-item"><a href="guru.php"><i class="ri-user-line sidebar-menu-item-icon"></i>Data Guru</a></li>
            <li class="sidebar-menu-item"><a href="siswa.php"><i class="ri-user-line sidebar-menu-item-icon"></i>Data Siswa</a></li>
            <li class="sidebar-menu-item"><a href="fasilitas.php"><i class="ri-star-line sidebar-menu-item-icon"></i>Fasilitas</a></li>
            <li class="sidebar-menu-divider mt-3 mb-1 text-uppercase">Pendaftaran</li>
            <li class="sidebar-menu-item active"><a href="pendaftar.php"><i class="ri-user-add-line sidebar-menu-item-icon"></i>Data Pendaftar</a></li>
            <li class="sidebar-menu-divider mt-3 mb-1 text-uppercase">Events</li>
            <li class="sidebar-menu-item"><a href="berita.php"><i class="ri-article-line sidebar-menu-item-icon"></i>Berita</a></li>
            <li class="sidebar-menu-item"><a href="galeri.php"><i class="ri-gallery-line sidebar-menu-item-icon"></i>Galeri</a></li>
            <?php if ($_SESSION['level'] == 1 or $_SESSION['level'] == 2) : ?>
                <li class="sidebar-menu-divider mt-3 mb-1 text-uppercase">Users</li>
                <li class="sidebar-menu-item"><a href="users.php"><i class="ri-user-settings-fill sidebar-menu-item-icon"></i>Kelola Users</a></li>
            <?php endif; ?>
        </ul>
    </div>
    <div class="sidebar-overlay"></div>
    <!-- end: Sidebar -->

    <!-- start: Main -->
    <main class="bg-light">
        <div class="p-2">
            <!-- start: Navbar -->
            <nav class="px-3 py-2 bg-white rounded shadow-sm">
                <i class="ri-menu-line sidebar-toggle me-3 d-block d-md-none"></i>
                <h5 class="fw-bold mb-0 me-auto">Data Pendaftar</h5>
                <div class="dropdown">
                    <div class="d-flex align-items-center cursor-pointer dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="me-2 d-none d-sm-block">Admin</span>
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"><i class="ri-map-pin-user-fill"></i></a>
                    </div>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                    </ul>
                </div>
            </nav>
            <!-- end: Navbar -->

            <!-- start: Content -->
            <div class="py-4">
                <div class="container-fluid">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h4 class="mb-4">Daftar Pendaftar</h4>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead class="table-dark">
                                        <tr>
                                            <th>No</th>
                                            <th>Nomor Registrasi</th>
                                            <th>Nama Lengkap</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Tempat, Tanggal Lahir</th>
                                            <th>Alamat</th>
                                            <th>No HP</th>
                                            <th>Email</th>
                                            <th>Akta Kelahiran</th>
                                            <th>Kartu Keluarga</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        while ($row = mysqli_fetch_assoc($query)) {
                                            echo "<tr>";
                                            echo "<td>" . $no++ . "</td>";
                                            echo "<td>" . htmlspecialchars($row['nomor_registrasi']) . "</td>";
                                            echo "<td>" . htmlspecialchars($row['nama_lengkap']) . "</td>";
                                            echo "<td>" . htmlspecialchars($row['jenis_kelamin']) . "</td>";
                                            echo "<td>" . htmlspecialchars($row['tempat_lahir']) . ", " . htmlspecialchars($row['tanggal_lahir']) . "</td>";
                                            echo "<td>" . htmlspecialchars($row['alamat']) . "</td>";
                                            echo "<td>" . htmlspecialchars($row['no_hp']) . "</td>";
                                            echo "<td>" . htmlspecialchars($row['email']) . "</td>";
                                            echo "<td>" . (!empty($row['akta_kelahiran']) ? "<a href='uploads/{$row['akta_kelahiran']}' target='_blank'>Download</a>" : "-") . "</td>";
                                            echo "<td>" . (!empty($row['kartu_keluarga']) ? "<a href='uploads/{$row['kartu_keluarga']}' target='_blank'>Download</a>" : "-") . "</td>";
                                            echo "<td>" . (!empty($row['status']) ? $row['status'] : 'Belum Diproses') . "</td>";
                                            echo "<td>
                                                <form method='post' style='display:inline-block;'>
                                                    <input type='hidden' name='id' value='{$row['id']}'>
                                                    <input type='hidden' name='status' value='Diterima'>
                                                    <button type='submit' class='btn btn-success btn-sm mb-1'>Diterima</button>
                                                </form>
                                                <form method='post' style='display:inline-block;'>
                                                    <input type='hidden' name='id' value='{$row['id']}'>
                                                    <input type='hidden' name='status' value='Tidak Diterima'>
                                                    <button type='submit' class='btn btn-danger btn-sm'>Tidak</button>
                                                </form>
                                            </td>";
                                            echo "</tr>";
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end: Content -->
        </div>
    </main>
    <!-- end: Main -->

    <!-- start: JS -->
    <script src="./assets/js/jquery.min.js"></script>
    <script src="./assets/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/script.js"></script>
    <!-- end: JS -->
</body>
</html>

<?php 
    require 'function.php';
    require 'cek.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- start: Icons -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <!-- start: Icons -->
    <!-- start: CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/admin.css">
    <!-- end: CSS -->
    <title>Dashboard Admin Taud Rabbani Depok</title>
</head>

<body>

    <!-- start: Sidebar -->
    <div class="sidebar position-fixed top-0 bottom-0 bg-white border-end">
        <div class="d-flex align-items-center p-3">
            <a href="admin.php" class="sidebar-logo text-uppercase fw-bold text-decoration-none text-indigo fs-2">Taud Rabbani Depok</a>
        </div>
        <ul class="sidebar-menu p-3 m-0 mb-0">
            <li class="sidebar-menu-item ">
                <a href="admin.php">
                    <i class="ri-dashboard-line sidebar-menu-item-icon"></i>
                    Dashboard
                </a>
            </li>
            <li class="sidebar-menu-divider mt-3 mb-1 text-uppercase">Data Sekolah</li>
            <!-- Data Guru Start -->
			<li class="sidebar-menu-item">
                <a href="guru.php">
					<i class="ri-user-line sidebar-menu-item-icon"></i>
                    Data Guru
                </a>
            </li>
			<!-- Data Guru End -->

			<!-- Data Siswa Start -->
            <li class="sidebar-menu-item active">
                <a href="siswa.php">
                    <i class="ri-user-line sidebar-menu-item-icon"></i>
                    Data Siswa
                </a>
            </li>
			<!-- Data Siswa End -->

			<!-- Fasilitas Start -->
            <li class="sidebar-menu-item">
                <a href="fasilitas.php">
                    <i class="ri-star-line sidebar-menu-item-icon"></i>
                    Fasilitas
                </a>
            </li>
			<!-- Fasilitas End -->
<li class="sidebar-menu-divider mt-3 mb-1 text-uppercase">Pendaftaran</li>
<li class="sidebar-menu-item">
    <a href="pendaftar.php">
        <i class="ri-user-add-line sidebar-menu-item-icon"></i>
        Data Pendaftar
    </a>
</li>

			<!-- Events Start -->
            <li class="sidebar-menu-divider mt-3 mb-1 text-uppercase">Events</li>
            <li class="sidebar-menu-item">
                <a href="berita.php">
                    <i class="ri-article-line sidebar-menu-item-icon"></i>
                    Berita
                </a>
            </li>
            <li class="sidebar-menu-item">
                <a href="galeri.php">
                    <i class="ri-gallery-line sidebar-menu-item-icon"></i>
                    Galeri
                </a>
            </li>

            <!-- Kelola User Start -->
            <?php if($_SESSION['level'] == 1 or $_SESSION['level'] == 2 ) : ?>
                <li class="sidebar-menu-divider mt-3 mb-1 text-uppercase">Users</li>
                <li class="sidebar-menu-item">
                    <a href="users.php">
                        <i class="ri-user-settings-fill sidebar-menu-item-icon"></i>
                        Kelola Users
                    </a>
                </li>
            <?php endif; ?>
        </ul>
    </div>
    <div class="sidebar-overlay"></div>
    <!-- End: Sidebar -->

    <!-- Start: Main -->
    <main class="bg-light">
        <div class="p-2">
            <!-- Start: Navbar -->
            <nav class="px-3 py-2 bg-white rounded shadow-sm">
                <i class="ri-menu-line sidebar-toggle me-3 d-block d-md-none"></i>
                <h5 class="fw-bold mb-0 me-auto">Data Siswa</h5>
				<!-- Admin Info Start -->
                <div class="dropdown">
                    <div class="d-flex align-items-center cursor-pointer dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <span class="me-2 d-none d-sm-block">Admin</span>
                        <a class="nav-link cursor-pointer dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="ri-map-pin-user-fill"></i></a>
                    </div>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                    </ul>
                </div>
				<!-- Admin Info End -->
            </nav>
            <!-- End: Navbar -->

            <!-- Start: Content -->
            <div class="container-fluid px-4">
                <div class="card mb-4">
                    <div class="card-header">
                        <!-- Button Modal Tambah Data Siswa Start -->
                        <?php if($_SESSION['level'] == 1) : ?>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                                Tambah Data Siswa
                            </button>
                        <?php endif; ?>
                        <!-- Button Modal Tambah Data Siswa End -->
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Nama Siswa</th>
                                        <th>ID Siswa</th>
                                        <th>Usia</th>
                                        <th>Tempat Tinggal</th>
                                        <?php if($_SESSION['level'] == 1) : ?>
                                            <th>Aksi</th>
                                        <?php endif; ?>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                        $ambilsemuadatasiswa = mysqli_query($conn, "SELECT * FROM data_siswa");
                                        while($data = mysqli_fetch_array($ambilsemuadatasiswa)){
                                            $nama_siswa = $data['nama_siswa'];
                                            $id_siswa = $data['id_siswa'];
                                            $usia = $data['usia'];
                                            $alamat = $data['alamat'];
                                            $ids = $data['id_siswa'];
                                    ?>

                                    <tr>
                                        <td><?=$nama_siswa;?></td>
                                        <td><?=$id_siswa;?></td>
                                        <td><?=$usia;?></td>
                                        <td><?=$alamat;?></td>
                                        <?php if($_SESSION['level'] == 1) : ?>
                                            <td>
                                                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#edit<?=$ids;?>">
                                                    Edit
                                                </button>
                                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete<?=$ids;?>">
                                                    Delete
                                                </button>
                                            </td>
                                        <?php endif; ?>
                                    </tr>

                                    <!-- Modal Edit Data Siswa -->
                                    <div class="modal fade" id="edit<?=$ids;?>">
                                        <div class="modal-dialog">
                                            <div class="modal-content">

                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title">Edit Data Siswa</h4>
                                            </div>

                                            <!-- Modal body -->
                                            <form method="post">
                                                <div class="modal-body">
                                                    <input type="text" name="nama_siswa" value="<?=$nama_siswa;?>" class="form-control" required>
                                                    <br>
                                                    <input type="text" name="id_siswa" value="<?=$id_siswa;?>" class="form-control" required>
                                                    <br>
                                                    <input type="text" name="usia" value="<?=$usia;?>" class="form-control" required>
                                                    <br>
                                                    <input type="text" name="alamat" value="<?=$alamat;?>" class="form-control" required>
                                                    <br>
                                                    <input type="hidden" name="ids" value="<?=$ids?>">
                                                    <button type="submit" class="btn btn-primary" name="updatesiswa">Submit</button>
                                                </div>
                                            </form>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Modal Delete Data Siswa -->
                                    <div class="modal fade" id="delete<?=$ids;?>">
                                        <div class="modal-dialog">
                                            <div class="modal-content">

                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title">Hapus Data Siswa</h4>
                                            </div>

                                            <!-- Modal body -->
                                            <form method="post">
                                                <div class="modal-body">
                                                    Apakah Anda Yakin Ingin Menghapus Data Siswa
                                                    <br>
                                                    Atas Nama :
                                                    <br>
                                                    <?=$nama_siswa;?> ?
                                                    <input type="hidden" name="ids" value="<?=$ids?>">
                                                    <br>
                                                    <br>
                                                    <button type="submit" class="btn btn-danger" name="hapussiswa">Hapus</button>
                                                </div>
                                            </form>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <?php 
                                        };
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End: Content -->
        </div>
    </main>
    <!-- End: Main -->

    <!-- Start: JS -->
    <script src="./assets/js/jquery.min.js"></script>
    <script src="./assets/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/script.js"></script>
    <!-- End: JS -->
</body>

<!-- The Modal -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
            <h4 class="modal-title">Tambah Data Siswa</h4>
        </div>

        <!-- Modal body -->
        <form method="post">
            <div class="modal-body">
                <input type="text" name="nama_siswa" placeholder="Nama Siswa" class="form-control" required>
                <br>
                <input type="text" name="id_siswa" placeholder="ID Siswa" class="form-control" required>
                <br>
                <input type="text" name="usia" placeholder="Usia" class="form-control" required>
                <br>
                <input type="text" name="alamat" placeholder="Tempat Tinggal" class="form-control" required>
                <br>
                <button type="submit" class="btn btn-primary" name="addnewsiswa">Submit</button>
            </div>
        </form>
        </div>
    </div>
</div>

</html>
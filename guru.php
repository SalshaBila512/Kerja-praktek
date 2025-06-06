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
			<li class="sidebar-menu-item active">
                <a href="guru.php">
					<i class="ri-user-line sidebar-menu-item-icon"></i>
                    Data Guru
                </a>
            </li>
			<!-- Data Guru End -->

			<!-- Data Siswa Start -->
            <li class="sidebar-menu-item">
                <a href="siswa.php">
                    <i class="ri-user-line sidebar-menu-item-icon"></i>
                    Data Siswa
                </a>
            </li>
			<!-- Data Siswa End -->

			<!-- Fasilitas Start -->
            <li class="sidebar-menu-item ">
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
                <h5 class="fw-bold mb-0 me-auto">Data Guru</h5>
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
                        <!-- Button Modal Tambah Data Guru Start -->
                        <?php if($_SESSION['level'] == 1) : ?>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                                Tambah Data Guru
                            </button>
                        <?php endif; ?>
                        <!-- Button Modal Tambah Data Guru End -->
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>ID Guru</th>
                                        <th>Gambar</th>
                                        <th>Nama Guru</th>
                                        <th>Nomor Telepon</th>
                                        <th>Tempat Tinggal</th>
                                        <th>Mata Pelajaran</th>
                                        <?php if($_SESSION['level'] == 1) : ?>
                                            <th>Aksi</th>
                                        <?php endif; ?>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <?php 
                                        $ambilsemuadataguru = mysqli_query($conn, "SELECT * FROM data_guru");
                                        $i = 1;
                                        while($data = mysqli_fetch_array($ambilsemuadataguru)){
                                            $nama_guru = $data['nama_guru'];
                                            $no_telp = $data['no_telp'];
                                            $alamat = $data['alamat'];
                                            $mapel = $data['mapel'];
                                            $idg = $data['id'];

                                            // Cek ada gambar atau tidak
                                            $gambar = $data['image']; //Ambil Gambar
                                            if($gambar==null){
                                                // Jika Tidak Ada Gambar
                                                $image = 'No Image';
                                            } else {
                                                // Jika Ada Gambar
                                                $image = '<img src="image/'.$gambar.'" class="zoomable">';
                                            }
                                    ?>

                                    <tr>
                                        <td><?=$i++?></td>
                                        <td><?=$image;?></td>
                                        <td><?=$nama_guru;?></td>
                                        <td><?=$no_telp;?></td>
                                        <td><?=$alamat;?></td>
                                        <td><?=$mapel;?></td>
                                        <?php if($_SESSION['level'] == 1) : ?>
                                            <td>
                                                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#edit<?=$idg;?>">
                                                    Edit
                                                </button>
                                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete<?=$idg;?>">
                                                    Delete
                                                </button>
                                            </td>
                                        <?php endif; ?>
                                    </tr>

                                    <!-- Modal Edit Data Guru -->
                                    <div class="modal fade" id="edit<?=$idg;?>">
                                        <div class="modal-dialog">
                                            <div class="modal-content">

                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title">Edit Data Guru</h4>
                                            </div>

                                            <!-- Modal body -->
                                            <form method="post" enctype="multipart/form-data">
                                                <div class="modal-body">
                                                    <input type="text" name="nama_guru" value="<?=$nama_guru;?>" class="form-control" required>
                                                    <br>
                                                    <input type="text" name="no_telp" value="<?=$no_telp;?>" class="form-control" required>
                                                    <br>
                                                    <input type="text" name="alamat" value="<?=$alamat;?>" class="form-control" required>
                                                    <br>
                                                    <input type="text" name="mapel" value="<?=$mapel;?>" class="form-control" required>
                                                    <br>
                                                    <input type="file" name="file" class="form-control">
                                                    <br>
                                                    <input type="hidden" name="idg" value="<?=$idg?>">
                                                    <button type="submit" class="btn btn-primary" name="updateguru">Submit</button>
                                                </div>
                                            </form>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Modal Delete Data Guru -->
                                    <div class="modal fade" id="delete<?=$idg;?>">
                                        <div class="modal-dialog">
                                            <div class="modal-content">

                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title">Hapus Data Guru</h4>
                                            </div>

                                            <!-- Modal body -->
                                            <form method="post">
                                                <div class="modal-body">
                                                    Apakah Anda Yakin Ingin Menghapus Data Guru
                                                    <br>
                                                    Atas Nama :
                                                    <br>
                                                    <?=$nama_guru;?> ?
                                                    <input type="hidden" name="idg" value="<?=$idg?>">
                                                    <br>
                                                    <br>
                                                    <button type="submit" class="btn btn-danger" name="hapusguru">Hapus</button>
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
            <h4 class="modal-title">Tambah Data Guru</h4>
        </div>

        <!-- Modal body -->
        <form method="post" enctype="multipart/form-data">
            <div class="modal-body">
                <input type="text" name="nama_guru" placeholder="Nama Guru" class="form-control" required>
                <br>
                <input type="text" name="no_telp" placeholder="Nomor Telepon" class="form-control" required>
                <br>
                <input type="text" name="alamat" placeholder="Tempat Tinggal" class="form-control" required>
                <br>
                <input type="text" name="mapel" placeholder="Mata Pelajaran" class="form-control" required>
                <br>
                <input type="file" name="file" class="form-control" required>
                <br>
                <button type="submit" class="btn btn-primary" name="addnewguru">Submit</button>
            </div>
        </form>
        </div>
    </div>
</div>


</html>
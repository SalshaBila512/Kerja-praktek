<?php 
    require 'function.php';
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="assets/images/logo.jpeg">
    <title>taud_rabbani_depok</title>

    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- CSS Scrolling (Animate On Scroll) -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" /> 

    <!-- Fonts & Icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar">

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg bg-white sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets/images/logo2.jpg" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#activities">Activites</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#facilities">Facilities</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#gallery">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#team">Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#news">News</a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link" href="pendaftaran.php">Pendaftaran</a>
                    </li>
                </ul>
                <a href="login.php" class="btn btn-brand ms-lg-3"><i class="ri-map-pin-user-fill navbar-menu-item-icon"></i>&nbsp;&nbsp;Login (Admin)</a>
            </div>
        </div>
    </nav>

    <!-- HOME -->
   <section id="home" class="min-vh-100 d-flex align-items-center text-center" style="background: linear-gradient(rgba(166, 50, 205, 0.5), rgba(122, 50, 205, 0.5)), url('image/1.jpeg'); background-position: center; background-size: cover; background-repeat: no-repeat;">

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 data-aos="fade-left" class="text-uppercase text-white fw-semibold display-1">TAUD RABBANI DEPOK</h1>
                    <h5 class="text-white mt-3 mb-4" data-aos="fade-right">Jl. Margonda No.417, Kec.Pancoran Mas</h5>
                    <h6 class="text-white mt-3 mb-4" data-aos="fade-right">Kota Depok, Jawa Barat</h6>
                </div>
            </div>
        </div>
    </section>

    <!-- ABOUT -->
    <section id="about" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="50">
                    <div class="section-title">
                        <h1 class="display-4 fw-semibold">TAUD RABBANI DEPOK</h1>
                        <div class="line"></div>
                        <p>School of Qur'anic Leaderpreneur.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6" data-aos="fade-down" data-aos-delay="50">
                    <img src="assets/images/zindani.jpeg" alt="">
                </div>
                <div data-aos="fade-down" data-aos-delay="150" class="col-lg-5">
                    <div class="d-flex pt-4 mb-3">
                        <div class="iconbox me-4">
                            <i class='bx bx-target-lock'></i>
                        </div>
                        <div>
                            <h5 class="display-3 fw-semibold">VISI</h5>
                            <p>Menyiapkan peserta didik calon pemimpin dan pengusaha muslim yang Berjiwa Qur’ani dalam menyosong kegemilangan Islam.</p>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="iconbox me-4">
                            <i class='bx bx-target-lock'></i>
                        </div>
                        <div>
                            <h5 class="display-3 fw-semibold">MISI</h5>
                            <p> - Sebagai Lembaga Pendidikan yang berdakwah untuk menyiapkan calon pengusaha muslim yang Qur’ani.<br>
                                - Memberikan layanan Pendidikan Qur’an yang berkualitas.<br>
                                - Mewujudkan lingkungan Penidikan Rabbani yang berintergrasikan dengan keluarga dan masyarakat.<br>
                                - Menjadikan nilai – nilai Al – Qur’an dan As Sunnah sebagai sumber aktivitas pendidikan.<br>
                                - Menyelenggarakan kegiatan belajar berbasis Project Based Learning, Habbit Learning, Quran Based Learning, Design Thinking, dan Contextual Learning.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ACTIVITES -->
    <section id="activities" class="section-padding border-top">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="150">
                    <div class="section-title">
                        <h1 class="display-4 fw-semibold">BERAGAM KEGIATAN SEKOLAH</h1>
                        <div class="line"></div>
                        <p>Sekolah Rabbani menawarkan beragam program bagi siswa. Program-program ini
bertujuan menciptakan lingkungan belajar yang menyenangkan bagi siswa.</p>
                    </div>
                </div>
            </div>
            <div class="row g-4 text-center">
                <div id="swimming" class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="150">
                    <div class="service theme-shadow p-lg-5 p-4">
                        <div class="iconbox">
                            <i class='bx bx-swim'></i>
                        </div>
                        <h5 class="mt-4 mb-3">Berenang</h5>
                        <p>Dive into adventure with the refreshing sport of swimming!</p>
                    </div>
                </div>
                <div id="painting" class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="250">
    <div class="service theme-shadow p-lg-5 p-4">
        <div class="iconbox">
            <i class="fas fa-horse"></i>
        </div>
        <h5 class="mt-4 mb-3">Berkuda</h5>
        <p>Unleash your inner adventurer with the graceful art of horseback riding!</p>
    </div>
</div>

               <div id="archery" class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="350">
    <div class="service theme-shadow p-lg-5 p-4">
        <div class="iconbox">
            <i class="fas fa-bullseye"></i> <!-- Jika tidak muncul, ganti dengan fa-bullseye -->
        </div>
        <h5 class="mt-4 mb-3">Memanah</h5>
        <p>Raih ketenangan dan fokus dengan olahraga memanah yang menantang!</p>
    </div>
</div>

                <div id="reading" class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="450">
                    <div class="service theme-shadow p-lg-5 p-4">
                        <div class="iconbox">
                            <i class="ri-book-read-line"></i>
                        </div>
                        <h5 class="mt-4 mb-3">Zindani</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet fugiat sunt distinctio?</p>
                    </div>
                </div>
               <div id="writing" class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="550">
    <div class="service theme-shadow p-lg-5 p-4">
        <div class="iconbox">
            <i class="fas fa-quran"></i>
        </div>
        <h5 class="mt-4 mb-3">Tahfidz On the Stage (TOS)</h5>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet fugiat sunt distinctio?</p>
    </div>
</div>

              <div id="calculating" class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="650">
    <div class="service theme-shadow p-lg-5 p-4">
        <div class="iconbox">
            <i class="fas fa-kaaba"></i>
        </div>
        <h5 class="mt-4 mb-3">Manasik Haji</h5>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet fugiat sunt distinctio?</p>
    </div>
</div>

            </div>
        </div>
    </section>

    <!-- Card Facilities -->
    <section id="facilities" class="section-padding border-top">
        <div class="container">
            <div class="row justify-content-center mb-2">
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="150">
                    <div class="section-title">
                        <h1 class="display-4 fw-semibold">Facilities</h1>
                        <div class="line"></div>
                        <p>Taud Rabbani Depok memiliki Fasilitas yg nyaman dan bersih</p>
                    </div>
                </div>
            </div>
                <div class="container">
                    <div class="row justify-content-center">
                        <?php 
                            $conn = mysqli_connect("localhost", "root", "", "taud_rabbani_depok", 3307); // contoh pakai port 3307

                            $query = "SELECT * FROM fasilitas";
                            $query_run = mysqli_query($conn, $query);
                            $check_data = mysqli_num_rows($query_run) > 0;

                            if($check_data) 
                            {
                                while($row = mysqli_fetch_assoc($query_run))
                                    {
                                    ?>
                                    <div class="col-12 col-md-6 col-lg-4 mt-4">
                                        <div class="cards-item">
                                            <!-- <div class="cards-wrapper">
                                                <div class="col-md-12"> -->
                                                    <div class="card" data-aos="fade-down" data-aos-delay="150">
                                                        <div class="portfolio-item image-zoom">
                                                            <img src="image/<?php echo $row['image']; ?>" class="card-img-top">
                                                            <a href="image/<?php echo $row['image']; ?>" data-fancybox="gallery" class="iconbox" data-caption="<?php echo $row['nama_fasilitas'] ?>"><i class="ri-search-2-line"></i></a>
                                                            <div class="card-body">
                                                                <h5 class="card-title text-center"><?php echo $row['nama_fasilitas'] ?></h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <!-- </div>
                                            </div> -->
                                        </div>
                                    </div>
                                    <?php
                                    }
                            }
                        ?>
                    </div>
                </div>
        </div>
    </section>

    <!-- Gallery -->
    <section id="gallery" class="section-padding border-top">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="150">
                    <div class="section-title">
                        <h1 class="display-4 fw-semibold">Gallery</h1>
                        <div class="line"></div>
                        <p>Exploring Our Gallery : A Visual Journey <br> Through Our Best Moments</p>
                    </div>
                </div>
            </div>
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-aos="fade-down" data-aos-delay="150">
            <div class="carousel-indicators">
                <?php 
                    $i=0;
                    $result = $conn->query("SELECT * FROM galeri");
                    foreach ($result as $row) {
                        $actives = '';
                        if($i == 0){
                            $actives = 'active';
                        }
                ?>

                <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="<?= $i; ?>" class=" <?= $actives; ?>" aria-current="true" aria-label="Slide 1"></button>
                <?php $i++; } ?>
            </div>
                <div class="carousel-inner" role="listbox">
                <?php
                    $conn = mysqli_connect("localhost", "root", "", "taud_rabbani_depok", 3307); // contoh pakai port 3307
                    $query = "SELECT * FROM galeri";
                    $query_run = mysqli_query($conn, $query);
                    $rowcount = mysqli_num_rows($query_run);

                    for($i=1;$i<=$rowcount;$i++)
                    {
                        $row = mysqli_fetch_array($query_run);
                        
                ?>
                
                <?php 
                if($i==1)
                {
                ?>
                <div class="carousel-item active">
                    <img class="d-block img-fluid" src="image/<?php echo $row['image']; ?>" alt="First slide" width="100%" height="400">
                </div>
                <?php	
                }
                else
                {
                    ?> 
                    <div class="carousel-item">
                        <img class="d-block img-fluid" src="image/<?php echo $row['image']; ?>" alt="First slide" width="100%">
                    </div>
                
                <?php
                }
                }
                ?>
                
                    
            </div>
            
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

    </section> -->
    
    <!-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 col-lg-4 mt-4">
                <img src="" class="gallery-item" alt="">
            </div>
        </div>
    </div> -->

    <section class="gallery min-vh-100 section-padding border-top">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="150">
                    <div class="section-title">
                        <h1 class="display-4 fw-semibold">Gallery</h1>
                        <div class="line"></div>
                        <p>Exploring Our Gallery : A Visual Journey <br> Through Our Best Moments</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-lg">
            <div class="row gy-4 row-cols-1 row-cols-sm-2 row-cols-md-3">
                <?php 
                    $conn = mysqli_connect("localhost", "root", "", "taud_rabbani_depok", 3307); // contoh pakai port 3307

                    $query = "SELECT * FROM galeri";
                    $query_run = mysqli_query($conn, $query);
                    $check_data = mysqli_num_rows($query_run) > 0;

                    if($check_data) 
                        {
                            while($row = mysqli_fetch_assoc($query_run))
                                {
                                ?>
                    <div class="col" data-aos="fade-down" data-aos-delay="150">
                        <img src="image/<?php echo $row['image']; ?>" class="gallery-item" alt="gallery">
                    </div>
                    <?php
                                }
                        }
                    ?>
            </div>
        </div>
    </section>
   <!-- TEAM -->
   <section id="team" class="section-padding border-top">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="150">
                    <div class="section-title">
                        <h1 class="display-4 fw-semibold">Team Members</h1>
                        <div class="line"></div>
                        <p>Teamwork makes the dream work</p>
                        <p>- These are such talented & dedicated members on our school -</p>
                    </div>
                </div>
            </div>
            <div class="row g-4 text-center ">
                <?php 
                    $conn = mysqli_connect("localhost", "root", "", "taud_rabbani_depok", 3307); // contoh pakai port 3307

                    $query = "SELECT * FROM data_guru";
                    $query_run = mysqli_query($conn, $query);
                    $check_data = mysqli_num_rows($query_run) > 0;

                    if($check_data) 
                    {
                        while($row = mysqli_fetch_assoc($query_run))
                            {
                            ?>
                            <div class="col-md-3" data-aos="fade-down" data-aos-delay="150">
                                <div class="team-member image-zoom">
                                    <div class="image-zoom-wrapper">
                                        <img src="image/<?php echo $row['image']; ?>" data-bs-toggle="modal" data-bs-target="#modal-<?php echo $row['id']; ?>">
                                        <div class="modal fade" id="modal-<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="modal-<?php echo $row['id']; ?>-label" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content text-center">
                                                    <div class="modal-header">
                                                        <h2 class="modal-title text-center" id="modal-<?php echo $row['id']; ?>-label"><?php echo $row['nama_guru']; ?></h2>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <img src="image/<?php echo $row['image']; ?>" style="max-width: 100px; max-height: 100px;"></img>
                                                        <br><br>
                                                        <p><?php echo $row['mapel']; ?></p>
                                                        <p><?php echo $row['no_telp']; ?></p>
                                                        <p><?php echo $row['alamat']; ?></p>
                                                        <!-- Add any additional content here -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="team-member-content">
                                        <h4 class="text-white"><?php echo $row['nama_guru'] ?></h4>
                                        <p class="mb-0 text-white"><?php echo $row['mapel'] ?></p>
                                    </div>
                                </div>
                            </div>
                            <?php
                            }
                    }
                ?>


                <!-- <div class="col-md-3" data-aos="fade-down" data-aos-delay="250">
                    <div class="team-member image-zoom">
                        <div class="image-zoom-wrapper">
                            <img src="./assets/images/guru2.jpg" alt="">
                        </div>
                        <div class="team-member-content">
                            <h4 class="text-white">Dewi Yasmina</h4>
                            <p class="mb-0 text-white">Guru Pendamping</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3" data-aos="fade-down" data-aos-delay="350">
                    <div class="team-member image-zoom">
                        <div class="image-zoom-wrapper">
                            <img src="./assets/images/guru3.jpg" alt="">
                        </div>
                        <div class="team-member-content">
                            <h4 class="text-white">Titin Rosanti</h4>
                            <p class="mb-0 text-white">Guru Kelompok A</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3" data-aos="fade-down" data-aos-delay="350">
                    <div class="team-member image-zoom">
                        <div class="image-zoom-wrapper">
                            <img src="./assets/images/guru4.jpg" alt="">
                        </div>
                        <div class="team-member-content">
                            <h4 class="text-white">Indrayati</h4>
                            <p class="mb-0 text-white">Guru Musik</p>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </section>


                <!-- <div class="col-md-3" data-aos="fade-down" data-aos-delay="250">
                    <div class="team-member image-zoom">
                        <div class="image-zoom-wrapper">
                            <img src="./assets/images/guru2.jpg" alt="">
                        </div>
                        <div class="team-member-content">
                            <h4 class="text-white">Dewi Yasmina</h4>
                            <p class="mb-0 text-white">Guru Pendamping</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3" data-aos="fade-down" data-aos-delay="350">
                    <div class="team-member image-zoom">
                        <div class="image-zoom-wrapper">
                            <img src="./assets/images/guru3.jpg" alt="">
                        </div>
                        <div class="team-member-content">
                            <h4 class="text-white">Titin Rosanti</h4>
                            <p class="mb-0 text-white">Guru Kelompok A</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3" data-aos="fade-down" data-aos-delay="350">
                    <div class="team-member image-zoom">
                        <div class="image-zoom-wrapper">
                            <img src="./assets/images/guru4.jpg" alt="">
                        </div>
                        <div class="team-member-content">
                            <h4 class="text-white">Indrayati</h4>
                            <p class="mb-0 text-white">Guru Musik</p>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </section>

    <!-- CONTACT -->
    <section class="section-padding bg-light" id="contact" >
        <div class="container" >
            <div class="row" >
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="150">
                    <div class="section-title">
                        <h1 class="display-4 text-white fw-semibold">Bergabunglah Bersama Kami</h1>
                        <div class="line bg-white"></div>
                        <p class="text-white">"Membentuk Sumber Daya Manusia yang RABBANI untuk Menjadi Peserta Didik Berjiwa Qur'anic Leaderpreneur (QLP)"</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center" data-aos="fade-down" data-aos-delay="250">
                <div class="col-lg-8">
                    <form method="post" class="row g-3 p-lg-5 p-4 bg-white theme-shadow">
                        <div class="form-group col-lg-6">
                            <input type="text" name="name" class="form-control" placeholder="Enter Name" required>
                        </div>  
                        <div class="form-group col-lg-6">
                            <input type="text" name="number" class="form-control" placeholder="Enter Phone Number" required>
                        </div>
                        <div class="form-group col-lg-12">
                            <input type="text" name="address" class="form-control" placeholder="Enter Email Address" required>
                        </div>
                        <div class="form-group col-lg-12">
                            <input type="text" name="subject" class="form-control" placeholder="Enter subject" required>
                        </div>
                        <div class="form-group col-lg-12">
                            <textarea name="message" rows="5" class="form-control" placeholder="Enter Message" required></textarea>
                        </div>
                        <div class="form-group col-lg-12 d-grid">
                            <button type="submit" name="submit" class="btn btn-brand">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
            <br>
            <br>
            <!-- Google Maps -->
            <div class="row justify-content-center" data-aos="fade-down" data-aos-delay="250">
                <h1 class="display-4 text-white fw-semibold" align="center">Our Location</h1>
                <br>
                <iframe class="mt-4" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.963150479422!2d106.77397442021442!3d-6.268576814863641!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f1adf28091d3%3A0xc30822c24d147a69!2sKB-TK%20Islam%20Asy%20Syifa!5e0!3m2!1sid!2sid!4v1684342935582!5m2!1sid!2sid" width="600" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>

    <!-- News -->
    <section id="news" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="150">
                    <div class="section-title">
                        <h1 class="display-4 fw-semibold">Recent News & Articles</h1>
                        <div class="line"></div>
                        <p>We love to craft digital experiances for brands rather than crap and more lorem ipsums and do crazy skills</p>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <?php 
                    $conn = mysqli_connect("localhost", "root", "", "taud_rabbani_depok", 3307); // contoh pakai port 3307

                    $query = "SELECT * FROM berita";
                    $query_run = mysqli_query($conn, $query);
                    $check_data = mysqli_num_rows($query_run) > 0;

                    if($check_data) 
                    {
                        while($row = mysqli_fetch_assoc($query_run))
                            {
                            ?>
                            <div class="col-md-4" data-aos="fade-down" data-aos-delay="150">
                                <div class="team-member image-zoom">
                                    <div class="image-zoom-wrapper">
                                        <img src="image/<?php echo $row['image']; ?>" width="100%" height="100px">
                                    </div>
                                    <h5 class="mt-4"><?php echo $row['nama_berita'] ?></h5>
                                    <p class="mt-2"><?php echo $row['sinopsis'] ?></p>
                                    <br>
                                    <a href="detail-artikel.php">Read More Info</a>
                                </div>
                            </div>
                            <?php
                            }
                    }
                ?>
                <div class="col-md-4" data-aos="fade-down" data-aos-delay="250">
                    <div class="team-member image-zoom">
                        <div class="image-zoom-wrapper">
                            <img src="./assets/images/zindani.jpeg" alt="">
                        </div>
                        <h5 class="mt-4">Zindani Akbar</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit sequi quos magni!</p>
                        <a href="#">Read More</a>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-down" data-aos-delay="350">
                    <div class="team-member image-zoom">
                        <div class="image-zoom-wrapper">
                            <img src="./assets/images/manasik haji.jpg" alt="">
                        </div>
                        <h5 class="mt-4">Manasik Haji</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit sequi quos magni!</p>
                        <a href="#">Read More</a>
                    </div>
                </div> 
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="bg-dark">
        <div class="footer-top">
            <div class="container">
                <div class="row gy-5">
                    <div class="col-lg-3 col-sm-6">
                        <a href="index.php"><img src="./assets/images/logo.jpeg" alt=""></a>
                        <hr>
                        <div class="social-icons">
                            <a href="https://www.instagram.com/sekolahrabbanidepok?igsh=MTc5ZHR3Ym44eHhueQ=="><i class="ri-instagram-fill"></i></a>
                            <a href="https://wa.me/0895401474997"><i class="ri-whatsapp-line"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <h5 class="mb-0 text-white">Activities</h5>
                        <div class="line"></div>
                        <ul>
                            <li><a href="#Manasik Haji">Manasik Haji</a></li>
                            <li><a href="#Tahfidz On the Stage (TOS)">Tahfidz On the Stage (TOS)</a></li>
                            <li><a href="#Zindani">Zindani</a></li>
                            <li><a href="#Memanah">Memanah</a></li>
                            <li><a href="#Berkuda">Berkuda</a></li>
                            <li><a href="#Berenang">Berenang</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <h5 class="mb-0 text-white">About</h5>
                        <div class="line"></div>
                        <ul>
                            <li><a href="#facilities">Facilities</a></li>
                            <li><a href="#gallery">Gallery</a></li>
                            <li><a href="#news">News</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <h5 class="mb-0 text-white">Contact</h5>
                        <div class="line"></div>
                        <ul>
                            <li>Jl. Margonda No.471 Kec.Pancoran Mas</li>
                            <li>Kota Depok, Jawa Barat</li>
                            <li>(+62) 819-0806-7675</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row g-4 justify-content-between">
                    <div class="col-auto">
                        <p class="mb-0">© Copyright Taud Rabbani Depok. All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="./assets/js/main.js"></script>
</body>

</html>
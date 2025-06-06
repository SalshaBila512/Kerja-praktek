<?php 
    require 'function.php';
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="./assets/images/logo2.jpg">
    <title>Taud Rabbani Depok</title>

    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css"> -->
    <link rel="stylesheet" href="./assets/css/style.css">

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
                <img src="./assets/images/logo2.jpg" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#activities">Activites</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#facilities">Facilities</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#gallery">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#team">Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#news">News</a>
                    </li>
                </ul>
                <a href="./login.php" class="btn btn-brand ms-lg-3"><i class="ri-map-pin-user-fill navbar-menu-item-icon"></i>&nbsp;&nbsp;Login (Admin)</a>
            </div>
        </div>
    </nav>

    <!-- Section Detail Artikel -->
        <div class="container">
            <div class="row mt-5">
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="150">
                    <div class="section-title">
                        <h1 class="display-4 fw-semibold">Recent News & Articles</h1>
                        <div class="line"></div>
                        <p>We love to craft digital experiances for brands rather than crap and more lorem ipsums and do crazy skills</p>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                    <?php 
                       $conn = mysqli_connect("localhost", "root", "", "taud_rabbani_depok", 3307);

                        $query = "SELECT * FROM berita";
                        $query_run = mysqli_query($conn, $query);
                        $check_data = mysqli_num_rows($query_run) > 0;

                        if($check_data) 
                        {
                            while($row = mysqli_fetch_assoc($query_run))
                                {
                                ?>
                                <div class="col-md-6" data-aos="fade-down" data-aos-delay="150">
                                    <div class="team-member image-zoom">
                                        <div class="image-zoom-wrapper">
                                            <img src="image/<?php echo $row['image']; ?>" width="100%" height="100px">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6" data-aos="fade-down" data-aos-delay="150">
                                    <h5 class="mt-4"><?php echo $row['nama_berita'] ?></h5>
                                    <p class="mt-4"><?php echo $row['isi'] ?></p>
                                </div>
                                <hr>
                                <?php
                                }
                        }
                    ?>
            </div>
        </div>

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
                            <li><a href="#calculating">Calculating</a></li>
                            <li><a href="#painting">Painting</a></li>
                            <li><a href="#reading">Reading</a></li>
                            <li><a href="#swimming">Swimming</a></li>
                            <li><a href="#speaking">Speaking</a></li>
                            <li><a href="#writing">Writing</a></li>
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
                            <li>Jl. Ciputat Raya No.18, RT.9/RW.2</li>
                            <li>Jakarta Selatan, DKI Jakarta, 12310</li>
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
        <!-- <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script> -->
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script src="./assets/js/main.js"></script>
</body>

</html>
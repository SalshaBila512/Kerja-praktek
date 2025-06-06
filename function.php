<?php 

session_start();

// Melakukan Koneksi Ke Database
$conn = mysqli_connect("localhost", "root", "", "taud_rabbani_depok", 3307); // contoh pakai port 3307



// Awal Section Siswa
    // Menambah Data Siswa
    if(isset($_POST['addnewsiswa'])){
        $nama_siswa = $_POST['nama_siswa'];
        $id_siswa = $_POST['id_siswa'];
        $usia = $_POST['usia'];
        $alamat = $_POST['alamat'];

        $addtotable = mysqli_query($conn, "INSERT INTO data_siswa (nama_siswa, id_siswa, usia, alamat) values('$nama_siswa','$id_siswa','$usia','$alamat')");
        if($addtotable){
            header('location:siswa.php');
        } else {
            echo 'Gagal Tambah Data';
            header('location:siswa.php');
        }
    };

    // Update Data Siswa
    if(isset($_POST['updatesiswa'])){
        $ids = $_POST['id_siswa'];
        $nama_siswa = $_POST['nama_siswa'];
        $id_siswa = $_POST['id_siswa'];
        $usia = $_POST['usia'];
        $alamat = $_POST['alamat'];

        $update = mysqli_query($conn, "UPDATE data_siswa SET nama_siswa = '$nama_siswa' , id_siswa = '$id_siswa' , usia = '$usia' , alamat = '$alamat' WHERE id_siswa = '$ids' ");
        if($update){
            header('location:siswa.php');
        } else {
            echo 'Gagal Edit Data';
            header('location:siswa.php');
        }
    };

    // Hapus Data Siswa
    if(isset($_POST['hapussiswa'])){
        $ids = $_POST['ids'];

        $hapus = mysqli_query($conn, "DELETE FROM data_siswa WHERE id_siswa = '$ids'");
        if($hapus){
            header('location:siswa.php');
        } else {
            echo 'Gagal Hapus Data';
            header('location:siswa.php');
        }
    };
// Akhir Section Siswa

// Awal Section Guru
    // Menambah Data Guru
    if(isset($_POST['addnewguru'])){
        $nama_guru = $_POST['nama_guru'];
        $no_telp = $_POST['no_telp'];
        $alamat = $_POST['alamat'];
        $mapel = $_POST['mapel'];

        // Tambah Gambar
        $allowed_extension = array('png','jpg','jpeg');
        $nama = $_FILES['file']['name']; //Ambil Nama Gambar
        $dot = explode('.',$nama);
        $ekstensi = strtolower(end($dot)); //Ambil Ekstensi Gambar
        $ukuran = $_FILES['file']['size']; //Ambil Size Gambar
        $file_tmp = $_FILES['file']['tmp_name']; //Ambil Lokasi File

        // Penamaan File -> Enkripsi
        $image = md5(uniqid($nama,true) . time()).'.'.$ekstensi; //Menggabungkan Nama File Yang Dienkripsi Dengan Ekstensinya

        // Proses Upload Gambar
        if(in_array($ekstensi, $allowed_extension) === true){
            // Validasi Ukuran File Gambar
            if($ukuran < 1500000){
                move_uploaded_file($file_tmp, 'image/'.$image);

                $addtotable = mysqli_query($conn, "INSERT INTO data_guru (nama_guru,image, no_telp, alamat, mapel) values('$nama_guru','$image','$no_telp','$alamat','$mapel')");
                if($addtotable){
                    header('location:guru.php');
                } else {
                    echo 'Gagal Tambah Data';
                    header('location:guru.php');
                }
            } else{
                // Jika Ukuran File Lebih dari 1.5 mb
                echo '
                <script>
                    alert("Ukuran File Terlalu Besar")
                    window.location.href = "guru.php";
                </script>
                ';
            }
        } else{
            // Jika File Tidak Sesuai (Bukan JPG dan Bukan PNG)
            echo '
            <script>
                alert("File Harus PNG / JPG")
                window.location.href = "guru.php";
            </script>
            ';
        }
    };

    // Update Data Guru
    if(isset($_POST['updateguru'])){
        $idg = $_POST['idg'];
        $nama_guru = $_POST['nama_guru'];
        $no_telp = $_POST['no_telp'];
        $alamat = $_POST['alamat'];
        $mapel = $_POST['mapel'];

        // Tambah Gambar
        $allowed_extension = array('png','jpg','jpeg');
        $nama = $_FILES['file']['name']; //Ambil Nama Gambar
        $dot = explode('.',$nama);
        $ekstensi = strtolower(end($dot)); //Ambil Ekstensi Gambar
        $ukuran = $_FILES['file']['size']; //Ambil Size Gambar
        $file_tmp = $_FILES['file']['tmp_name']; //Ambil Lokasi File

        // Penamaan File -> Enkripsi
        $image = md5(uniqid($nama,true) . time()).'.'.$ekstensi; //Menggabungkan Nama File Yang Dienkripsi Dengan Ekstensinya

        if($ukuran==0){
            // Jika Tidak Ingin Dirubah Gambarnya
            $update = mysqli_query($conn, "UPDATE data_guru SET nama_guru = '$nama_guru' , no_telp = '$no_telp' , alamat = '$alamat' , mapel = '$mapel' WHERE id = '$idg' ");
            if($update){
                header('location:guru.php');
            } else {
                echo 'Gagal Edit Data';
                header('location:guru.php');
            }
        } else{
            // Jika Ingin Dirubah Gambarnya
            move_uploaded_file($file_tmp, 'image/'.$image);

            $update = mysqli_query($conn, "UPDATE data_guru SET nama_guru = '$nama_guru', image = '$image' , no_telp = '$no_telp' , alamat = '$alamat' ,  mapel = '$mapel' WHERE id = '$idg' ");
            if($update){
                header('location:guru.php');
            } else {
                echo 'Gagal Edit Data';
                header('location:guru.php');
            }
        }
    };

    // Hapus Data Guru
    if(isset($_POST['hapusguru'])){
        $idg = $_POST['idg'];

        $gambar = mysqli_query($conn, "SELECT * FROM data_guru WHERE id = '$idg'");
        $get = mysqli_fetch_array($gambar);
        $img = 'image/'.$get['image'];
        unlink($img);

        $hapus = mysqli_query($conn, "DELETE FROM data_guru WHERE id = '$idg'");
        if($hapus){
            header('location:guru.php');
        } else {
            echo 'Gagal Hapus Data';
            header('location:guru.php');
        }
    };
// Akhir Section Guru

//////////////////////////////////////////

// Awal Section Fasilitas

    // Menambah Data Fasilitas
    if(isset($_POST['addnewfasilitas'])){
        $nama_fasilitas = $_POST['nama_fasilitas'];
        $jenis_fasilitas = $_POST['jenis_fasilitas'];
        $kapasitas = $_POST['kapasitas'];

        // Tambah Gambar
        $allowed_extension = array('png','jpg','jpeg');
        $nama = $_FILES['file']['name']; //Ambil Nama Gambar
        $dot = explode('.',$nama);
        $ekstensi = strtolower(end($dot)); //Ambil Ekstensi Gambar
        $ukuran = $_FILES['file']['size']; //Ambil Size Gambar
        $file_tmp = $_FILES['file']['tmp_name']; //Ambil Lokasi File

        // Penamaan File -> Enkripsi
        $image = md5(uniqid($nama,true) . time()).'.'.$ekstensi; //Menggabungkan Nama File Yang Dienkripsi Dengan Ekstensinya

        // Proses Upload Gambar
        if(in_array($ekstensi, $allowed_extension) === true){
            // Validasi Ukuran File Gambar
            if($ukuran < 1500000){
                move_uploaded_file($file_tmp, 'image/'.$image);

                $addtotable = mysqli_query($conn, "INSERT INTO fasilitas (id_fasilitas, nama_fasilitas, jenis_fasilitas, kapasitas, image) values('$id_fasilitas','$nama_fasilitas','$jenis_fasilitas','$kapasitas','$image')");
                if($addtotable){
                    header('location:fasilitas.php');
                } else {
                    echo 'Gagal Tambah Data';
                    header('location:fasilitas.php');
                }
            } else{
                // Jika Ukuran File Lebih dari 1.5 mb
                echo '
                <script>
                    alert("Ukuran File Terlalu Besar")
                    window.location.href = "fasilitas.php";
                </script>
                ';
            }
        } else{
            // Jika File Tidak Sesuai (Bukan JPG dan Bukan PNG)
            echo '
            <script>
                alert("File Harus PNG / JPG")
                window.location.href = "fasilitas.php";
            </script>
            ';
        }

        
    };

    // Update Data Fasilitas
    if(isset($_POST['updatefasilitas'])){
        $idf = $_POST['idf'];
        $nama_fasilitas = $_POST['nama_fasilitas'];
        $jenis_fasilitas = $_POST['jenis_fasilitas'];
        $kapasitas = $_POST['kapasitas'];

        // Tambah Gambar
        $allowed_extension = array('png','jpg','jpeg');
        $nama = $_FILES['file']['name']; //Ambil Nama Gambar
        $dot = explode('.',$nama);
        $ekstensi = strtolower(end($dot)); //Ambil Ekstensi Gambar
        $ukuran = $_FILES['file']['size']; //Ambil Size Gambar
        $file_tmp = $_FILES['file']['tmp_name']; //Ambil Lokasi File

        // Penamaan File -> Enkripsi
        $image = md5(uniqid($nama,true) . time()).'.'.$ekstensi; //Menggabungkan Nama File Yang Dienkripsi Dengan Ekstensinya

        if($ukuran==0){
            // Jika Tidak Ingin Dirubah Gambarnya
            $update = mysqli_query($conn, "UPDATE fasilitas SET nama_fasilitas = '$nama_fasilitas' , jenis_fasilitas = '$jenis_fasilitas' , kapasitas = '$kapasitas' WHERE id_fasilitas = '$idf' ");
            if($update){
                header('location:fasilitas.php');
            } else {
                echo 'Gagal Edit Data';
                header('location:fasilitas.php');
            }
        } else{
            // Jika Ingin Dirubah Gambarnya
            move_uploaded_file($file_tmp, 'image/'.$image);

            $update = mysqli_query($conn, "UPDATE fasilitas SET nama_fasilitas = '$nama_fasilitas' , jenis_fasilitas = '$jenis_fasilitas' , kapasitas = '$kapasitas', image = '$image' WHERE id_fasilitas = '$idf' ");
            if($update){
                header('location:fasilitas.php');
            } else {
                echo 'Gagal Edit Data';
                header('location:fasilitas.php');
            }
        }
    };

    // Hapus Data Fasilitas
    if(isset($_POST['hapusfasilitas'])){
        $idf = $_POST['idf'];

        $gambar = mysqli_query($conn, "SELECT * FROM fasilitas WHERE id_fasilitas = '$idf'");
        $get = mysqli_fetch_array($gambar);
        $img = 'image/'.$get['image'];
        unlink($img);

        $hapus = mysqli_query($conn, "DELETE FROM fasilitas WHERE id_fasilitas = '$idf'");
        if($hapus){
            header('location:fasilitas.php');
        } else {
            echo 'Gagal Hapus Data';
            header('location:fasilitas.php');
        }
    };
// Akhir Section Fasilitas

//////////////////////////////////////////

// Awal Section Berita

    // Menambah Data Berita
    if(isset($_POST['addnewberita'])){
        $nama_berita = $_POST['nama_berita'];
        $isi = $_POST['isi'];
        $sinopsis = $_POST['sinopsis'];

        // Tambah Gambar
        $allowed_extension = array('png','jpg','jpeg');
        $nama = $_FILES['file']['name']; //Ambil Nama Gambar
        $dot = explode('.',$nama);
        $ekstensi = strtolower(end($dot)); //Ambil Ekstensi Gambar
        $ukuran = $_FILES['file']['size']; //Ambil Size Gambar
        $file_tmp = $_FILES['file']['tmp_name']; //Ambil Lokasi File

        // Penamaan File -> Enkripsi
        $image = md5(uniqid($nama,true) . time()).'.'.$ekstensi; //Menggabungkan Nama File Yang Dienkripsi Dengan Ekstensinya

        // Proses Upload Gambar
        if(in_array($ekstensi, $allowed_extension) === true){
            // Validasi Ukuran File Gambar
            if($ukuran < 1500000){
                move_uploaded_file($file_tmp, 'image/'.$image);

                $addtotable = mysqli_query($conn, "INSERT INTO berita (id_berita, nama_berita, sinopsis, isi, image) values('$id_berita','$nama_berita','$sinopsis','$isi','$image')");
                if($addtotable){
                    header('location:berita.php');
                } else {
                    echo 'Gagal Tambah Data';
                    header('location:berita.php');
                }
            } else{
                // Jika Ukuran File Lebih dari 1.5 mb
                echo '
                <script>
                    alert("Ukuran File Terlalu Besar")
                    window.location.href = "berita.php";
                </script>
                ';
            }
        } else{
            // Jika File Tidak Sesuai (Bukan JPG dan Bukan PNG)
            echo '
            <script>
                alert("File Harus PNG / JPG")
                window.location.href = "berita.php";
            </script>
            ';
        }

        
    };

    // Update Data Berita
    if(isset($_POST['updateberita'])){
        $idnews = $_POST['idnews'];
        $nama_berita = $_POST['nama_berita'];
        $isi = $_POST['isi'];
        $sinopsis = $_POST['sinopsis'];

        // Tambah Gambar
        $allowed_extension = array('png','jpg','jpeg');
        $nama = $_FILES['file']['name']; //Ambil Nama Gambar
        $dot = explode('.',$nama);
        $ekstensi = strtolower(end($dot)); //Ambil Ekstensi Gambar
        $ukuran = $_FILES['file']['size']; //Ambil Size Gambar
        $file_tmp = $_FILES['file']['tmp_name']; //Ambil Lokasi File

        // Penamaan File -> Enkripsi
        $image = md5(uniqid($nama,true) . time()).'.'.$ekstensi; //Menggabungkan Nama File Yang Dienkripsi Dengan Ekstensinya

        if($ukuran==0){
            // Jika Tidak Ingin Dirubah Gambarnya
            $update = mysqli_query($conn, "UPDATE berita SET nama_berita = '$nama_berita', sinopsis = '$sinopsis', isi = '$isi' WHERE id_berita = '$idnews'");
            if($update){
                header('location:berita.php');
            } else {
                echo 'Gagal Edit Data';
                header('location:berita.php');
            }
        } else{
            // Jika Ingin Dirubah Gambarnya
            move_uploaded_file($file_tmp, 'image/'.$image);

            $update = mysqli_query($conn, "UPDATE berita SET nama_berita = '$nama_berita' , sinopsis = '$sinopsis', isi = '$isi', image = '$image' WHERE id_berita = '$idnews' ");
            if($update){
                header('location:berita.php');
            } else {
                echo 'Gagal Edit Berita';
                header('location:berita.php');
            }
        }
    };

    // Hapus Data Berita
    if(isset($_POST['hapusberita'])){
        $idnews = $_POST['idnews'];

        $gambar = mysqli_query($conn, "SELECT * FROM berita WHERE id_berita = '$idnews'");
        $get = mysqli_fetch_array($gambar);
        $img = 'image/'.$get['image'];
        unlink($img);

        $hapus = mysqli_query($conn, "DELETE FROM berita WHERE id_berita = '$idnews'");
        if($hapus){
            header('location:berita.php');
        } else {
            echo 'Gagal Hapus Berita';
            header('location:berita.php');
        }
    };
// Akhir Section Berita

//////////////////////////////////////////

// Awal Section Galeri

    // Menambah Data Galeri
    if(isset($_POST['addnewgambar'])){
        $nama_gambar = $_POST['nama_gambar'];

        // Tambah Gambar
        $allowed_extension = array('png','jpg','jpeg');
        $nama = $_FILES['file']['name']; //Ambil Nama Gambar
        $dot = explode('.',$nama);
        $ekstensi = strtolower(end($dot)); //Ambil Ekstensi Gambar
        $ukuran = $_FILES['file']['size']; //Ambil Size Gambar
        $file_tmp = $_FILES['file']['tmp_name']; //Ambil Lokasi File

        // Penamaan File -> Enkripsi
        $image = md5(uniqid($nama,true) . time()).'.'.$ekstensi; //Menggabungkan Nama File Yang Dienkripsi Dengan Ekstensinya

        // Proses Upload Gambar
        if(in_array($ekstensi, $allowed_extension) === true){
            // Validasi Ukuran File Gambar
            if($ukuran < 1500000){
                move_uploaded_file($file_tmp, 'image/'.$image);

                $addtotable = mysqli_query($conn, "INSERT INTO galeri (id_gambar, nama_gambar, image) values('$id_gambar','$nama_gambar','$image')");
                if($addtotable){
                    header('location:galeri.php');
                } else {
                    echo 'Gagal Tambah Data';
                    header('location:galeri.php');
                }
            } else{
                // Jika Ukuran File Lebih dari 1.5 mb
                echo '
                <script>
                    alert("Ukuran File Terlalu Besar")
                    window.location.href = "galeri.php";
                </script>
                ';
            }
        } else{
            // Jika File Tidak Sesuai (Bukan JPG dan Bukan PNG)
            echo '
            <script>
                alert("File Harus PNG / JPG")
                window.location.href = "galeri.php";
            </script>
            ';
        }

        
    };

    // Update Data Galeri
    if(isset($_POST['updategaleri'])){
        $idimg = $_POST['idimg'];
        $nama_gambar = $_POST['nama_gambar'];

        // Tambah Gambar
        $allowed_extension = array('png','jpg','jpeg');
        $nama = $_FILES['file']['name']; //Ambil Nama Gambar
        $dot = explode('.',$nama);
        $ekstensi = strtolower(end($dot)); //Ambil Ekstensi Gambar
        $ukuran = $_FILES['file']['size']; //Ambil Size Gambar
        $file_tmp = $_FILES['file']['tmp_name']; //Ambil Lokasi File

        // Penamaan File -> Enkripsi
        $image = md5(uniqid($nama,true) . time()).'.'.$ekstensi; //Menggabungkan Nama File Yang Dienkripsi Dengan Ekstensinya

        if($ukuran==0){
            // Jika Tidak Ingin Dirubah Gambarnya
            $update = mysqli_query($conn, "UPDATE galeri SET nama_gambar = '$nama_gambar' WHERE id_gambar = '$idimg'");
            if($update){
                header('location:galeri.php');
            } else {
                echo 'Gagal Edit Data';
                header('location:galeri.php');
            }
        } else{
            // Jika Ingin Dirubah Gambarnya
            move_uploaded_file($file_tmp, 'image/'.$image);

            $update = mysqli_query($conn, "UPDATE galeri SET nama_gambar = '$nama_gambar' , image = '$image' WHERE id_gambar = '$idimg' ");
            if($update){
                header('location:galeri.php');
            } else {
                echo 'Gagal Edit Data';
                header('location:galeri.php');
            }
        }
    };

    // Hapus Data Galeri
    if(isset($_POST['hapusgaleri'])){
        $idimg = $_POST['idimg'];

        $gambar = mysqli_query($conn, "SELECT * FROM galeri WHERE id_gambar = '$idimg'");
        $get = mysqli_fetch_array($gambar);
        $img = 'image/'.$get['image'];
        unlink($img);

        $hapus = mysqli_query($conn, "DELETE FROM galeri WHERE id_gambar = '$idimg'");
        if($hapus){
            header('location:galeri.php');
        } else {
            echo 'Gagal Hapus Data';
            header('location:galeri.php');
        }
    };
// Akhir Section Galeri

//////////////////////////////////////////

// Awal Section Users
    // Menambah Data Users
    if(isset($_POST['addnewuser'])){
        $nama_user = $_POST['nama_user'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $level = $_POST['level'];

        $addtotable = mysqli_query($conn, "INSERT INTO login (nama_user, email, password, level) values('$nama_user','$email','$password','$level')");
        if($addtotable){
            header('location:users.php');
        } else {
            echo 'Gagal Tambah Data';
            header('location:users.php');
        }
    };

    // Update Data Users
    if(isset($_POST['updateuser'])){
        $newuser = $_POST['newuser'];
        $newemail = $_POST['newemail'];
        $newpassword = $_POST['newpassword'];
        $newlevel = $_POST['newlevel'];
        $id = $_POST['id'];

        $update = mysqli_query($conn, "UPDATE login SET nama_user = '$newuser' , email = '$newemail' , password = '$newpassword' , level = '$newlevel' WHERE iduser = '$id' ");
        if($update){
            header('location:users.php');
        } else {
            echo 'Gagal Edit Data';
            header('location:users.php');
        }
    };

    // Hapus Data Users
    if(isset($_POST['hapususer'])){
        $id = $_POST['id'];

        $hapus = mysqli_query($conn, "DELETE FROM login WHERE iduser = '$id'");
        if($hapus){
            header('location:users.php');
        } else {
            echo 'Gagal Hapus Data';
            header('location:users.php');
        }
    };
// Akhir Section Users

//////////////////////////////////////////

// Menambah Messages
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $number = $_POST['number'];
    $address = $_POST['address'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $addtotable = mysqli_query($conn, "INSERT INTO contact (name, number, address, subject, message) values('$name','$number','$address','$subject','$message')");
    if($addtotable){
        header('location:index.php');
    } else {
        echo 'Gagal Kirim Pesan';
        header('location:index.php');
    }
}

//////////////////////////////////////////

// Awal Menghitung Jumlah Data
    // Data Guru
    $query1 = $conn->query("SELECT * FROM data_guru");
    $jmlh_data_guru = mysqli_num_rows($query1);

    // Data Siswa
    $query2 = $conn->query("SELECT * FROM data_siswa");
    $jmlh_data_siswa = mysqli_num_rows($query2);

    // Data Fasilitas
    $query3 = $conn->query("SELECT * FROM fasilitas");
    $jmlh_data_fasilitas = mysqli_num_rows($query3);

    // Data Berita
    $query4 = $conn->query("SELECT * FROM berita");
    $jmlh_data_berita = mysqli_num_rows($query4);

    // Data Galeri
    $query5 = $conn->query("SELECT * FROM galeri");
    $jmlh_data_galeri = mysqli_num_rows($query5);

    // Data Prestasi

// Akhir Menghitung Jumlah Data
?>
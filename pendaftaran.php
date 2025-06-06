<?php
$conn = mysqli_connect("localhost", "root", "", "taud_rabbani_depok", 3307);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$success = '';
$error = '';
$nomor_registrasi = '';
$search_result = null; // Hasil pencarian

// Proses pencarian nomor registrasi
if (isset($_GET['search_reg'])) {
    $search_reg = $conn->real_escape_string($_GET['search_reg']);
    if (!empty($search_reg)) {
        $search_query = $conn->query("SELECT nomor_registrasi, nama_lengkap, status FROM pendaftaran WHERE nomor_registrasi = '$search_reg'");
        if ($search_query && $search_query->num_rows > 0) {
            $search_result = $search_query->fetch_assoc();
        } else {
            $error = "Nomor registrasi tidak ditemukan.";
        }
    }
}

// Proses submit pendaftaran
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama_lengkap = $conn->real_escape_string($_POST['nama_lengkap']);
    $jenis_kelamin = $conn->real_escape_string($_POST['jenis_kelamin']);
    $tempat_lahir = $conn->real_escape_string($_POST['tempat_lahir']);
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $alamat = $conn->real_escape_string($_POST['alamat']);
    $no_hp = $conn->real_escape_string($_POST['no_hp']);
    $email = $conn->real_escape_string($_POST['email']);

    // Upload file
    $upload_dir = 'uploads/';
    if (!is_dir($upload_dir)) {
        mkdir($upload_dir, 0777, true);
    }

    // Fungsi bantu upload file
    function uploadFile($fileInputName, $upload_dir) {
        if (!isset($_FILES[$fileInputName]) || $_FILES[$fileInputName]['error'] == UPLOAD_ERR_NO_FILE) {
            return ''; // file optional, boleh kosong
        }

        $allowed_types = ['image/jpeg', 'image/png', 'application/pdf'];
        $file = $_FILES[$fileInputName];
        if ($file['error'] !== UPLOAD_ERR_OK) {
            return false; // error upload
        }
        if (!in_array($file['type'], $allowed_types)) {
            return false; // tipe file tidak diizinkan
        }
        $filename = uniqid() . '-' . basename($file['name']);
        $target_file = $upload_dir . $filename;

        if (move_uploaded_file($file['tmp_name'], $target_file)) {
            return $filename;
        } else {
            return false;
        }
    }

    $akte_kelahiran_file = uploadFile('akte_kelahiran', $upload_dir);
    $kartu_keluarga_file = uploadFile('kartu_keluarga', $upload_dir);

    if ($akte_kelahiran_file === false || $kartu_keluarga_file === false) {
        $error = "Upload file gagal atau format tidak sesuai (hanya jpg, png, pdf).";
    } elseif (empty($nama_lengkap) || empty($jenis_kelamin) || empty($tempat_lahir) || empty($tanggal_lahir) || empty($alamat) || empty($no_hp)) {
        $error = "Semua field wajib diisi kecuali email dan berkas.";
    } else {
        // Generate nomor registrasi unik
        $tanggal_reg = date('Ymd');
        $random_number = rand(1000, 9999);
        $nomor_registrasi = 'REG' . $tanggal_reg . $random_number;

        $cek_reg = $conn->query("SELECT * FROM pendaftaran WHERE nomor_registrasi='$nomor_registrasi'");
        while ($cek_reg->num_rows > 0) {
            $random_number = rand(1000, 9999);
            $nomor_registrasi = 'REG' . $tanggal_reg . $random_number;
            $cek_reg = $conn->query("SELECT * FROM pendaftaran WHERE nomor_registrasi='$nomor_registrasi'");
        }

        $sql = "INSERT INTO pendaftaran 
            (nomor_registrasi, nama_lengkap, jenis_kelamin, tempat_lahir, tanggal_lahir, alamat, no_hp, email, akte_kelahiran, kartu_keluarga)
            VALUES 
            ('$nomor_registrasi', '$nama_lengkap', '$jenis_kelamin', '$tempat_lahir', '$tanggal_lahir', '$alamat', '$no_hp', '$email', '$akte_kelahiran_file', '$kartu_keluarga_file')";

        if ($conn->query($sql) === TRUE) {
            $success = "Pendaftaran berhasil dikirim! Nomor Registrasi Anda: <strong>$nomor_registrasi</strong>";
        } else {
            $error = "Error: " . $conn->error;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Formulir Pendaftaran & Cek Status</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
<div class="container mt-5 mb-5">
    <h2 class="mb-4">Cek Status Pendaftaran</h2>
    <form method="GET" action="">
        <div class="input-group mb-4" style="max-width: 500px;">
            <input type="text" class="form-control" name="search_reg" placeholder="Masukkan Nomor Registrasi" required 
                   value="<?= isset($_GET['search_reg']) ? htmlspecialchars($_GET['search_reg']) : '' ?>" />
            <button class="btn btn-primary" type="submit">Cari</button>
        </div>
    </form>

    <?php if ($search_result): ?>
        <div class="alert alert-info">
            <h5>Hasil Pencarian:</h5>
            <p><strong>Nomor Registrasi:</strong> <?= htmlspecialchars($search_result['nomor_registrasi']) ?></p>
            <p><strong>Nama Lengkap:</strong> <?= htmlspecialchars($search_result['nama_lengkap']) ?></p>
            <p><strong>Status:</strong> <?= !empty($search_result['status']) ? htmlspecialchars($search_result['status']) : 'Belum Diproses' ?></p>
        </div>
    <?php elseif ($error && isset($_GET['search_reg'])): ?>
        <div class="alert alert-warning"><?= $error ?></div>
    <?php endif; ?>

    <hr />
    
    <h2 class="mb-4">Formulir Pendaftaran</h2>

    <?php if($success): ?>
        <div class="alert alert-success"><?= $success ?></div>
    <?php elseif($error && !isset($_GET['search_reg'])): ?>
        <div class="alert alert-danger"><?= $error ?></div>
    <?php endif; ?>

    <form method="POST" action="" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="nama_lengkap" class="form-label">Nama Lengkap *</label>
            <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" required />
        </div>

        <div class="mb-3">
            <label class="form-label">Jenis Kelamin *</label><br />
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki" value="Laki-laki" required />
                <label class="form-check-label" for="laki">Laki-laki</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="Perempuan" />
                <label class="form-check-label" for="perempuan">Perempuan</label>
            </div>
        </div>

        <div class="mb-3">
            <label for="tempat_lahir" class="form-label">Tempat Lahir *</label>
            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" required />
        </div>

        <div class="mb-3">
            <label for="tanggal_lahir" class="form-label">Tanggal Lahir *</label>
            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required />
        </div>

        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat *</label>
            <textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
        </div>

        <div class="mb-3">
            <label for="no_hp" class="form-label">No. HP *</label>
            <input type="tel" class="form-control" id="no_hp" name="no_hp" required />
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email (Opsional)</label>
            <input type="email" class="form-control" id="email" name="email" />
        </div>

        <div class="mb-3">
            <label for="akte_kelahiran" class="form-label">Berkas Akte Kelahiran (jpg, png, pdf)</label>
            <input type="file" class="form-control" id="akte_kelahiran" name="akte_kelahiran" accept=".jpg,.jpeg,.png,.pdf" />
        </div>

        <div class="mb-3">
            <label for="kartu_keluarga" class="form-label">Berkas Kartu Keluarga (jpg, png, pdf)</label>
            <input type="file" class="form-control" id="kartu_keluarga" name="kartu_keluarga" accept=".jpg,.jpeg,.png,.pdf" />
        </div>

        <button type="submit" class="btn btn-primary">Daftar</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

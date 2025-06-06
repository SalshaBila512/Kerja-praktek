<?php 
    
    if(isset($_SESSION['log'])){
    
    } else {
        header('location:login.php'); // Jika Belum Login, Maka Login Terlebih Dahulu
    }
?>
<?php
session_start();

// If the user is not logged in, redirect them to login.php
if (!isset($_SESSION["authenticated"]) || $_SESSION["authenticated"] !== true) {
    header("Location: login.php");
    exit;
}
?>

<?php
include "config.php";

if (isset($_POST["tambah"])) {
    // cek keberhasilan query
    if (pesantiket($_POST) > 0) {
        echo "<script>
        alert('data berhasil ditambah');
        document.location.href = 'index.html';
        </script>";
    } else {
        echo "<script>
        alert('data gagal diinputkan!');
        document.location.href = 'index.html';
        </script>";
    }
}
?>

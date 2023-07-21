<?php 
function koneksi()
{
  $conn = mysqli_connect("localhost", "root", "", "jwdwisata") or die("koneksi gagal");
  return $conn;
}
function query($query)
{
  $conn = koneksi();

  $result = mysqli_query($conn, $query);
  $rows = array();
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}
function pesantiket(){
    $conn = koneksi();

  // Menangkap data yang di kirim dari form
  $nama = $_POST['nama'];
  $noidentitas = $_POST['noidn'];
  $nohp = $_POST['nohp'];
  $tglkunjungan = $_POST['tanggal'];
  $jmldewasa = $_POST['jumlah_dewasa'];
  $jmlanak = $_POST['jumlah_anak'];
  $totalbayar = $_POST['total_bayar'];

  // insert data ke database
  $query = "INSERT INTO reservasi
  VALUES ('', '$nama', '$noidentitas', '$nohp', '$tglkunjungan', '$jmldewasa', '$jmlanak', '$totalbayar')";
  mysqli_query($conn, $query);
  return mysqli_affected_rows($conn);
}
?>
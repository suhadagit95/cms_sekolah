<?php
define("BASEPATH", dirname(__FILE__));
if(isset($_POST['login'])){
include "koneksi_db.php";

//mendapatkan nilai dari form
//Untuk alasan keamanan sebaiknya di sanitize dan filter
//caranya lihat di w3schools.com
$username = $_POST['uname'];
$pass     = md5($_POST['pword']);
$row = 0;


try {
	$sql = "SELECT * FROM users WHERE username='$username' AND password='$pass' AND blokir='N'";
	$stmt = $conn->prepare($sql); 
	$stmt->execute();

    //set the resulting array to associative
    $data = $stmt->fetch(PDO::FETCH_ASSOC); 
	//mendapatkan jumlah baris
	$row  = $stmt->rowCount();
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// Apabila username dan password ditemukan
// nilai $row pasti > 0
if ($row > 0){
 
  session_start();
  //include file timeout.php
  //untuk menentukan waktu time out 1 jam ke depan
  //jika user tidak menggunakan admin
  include "timeout.php";
  
  //mendaftarkan session untuk untuk data user
  $_SESSION['namauser']     = $data['username'];
  $_SESSION['namalengkap']  = $data['nama_lengkap'];
  $_SESSION['passuser']     = $data['password'];
  $_SESSION['leveluser']    = $data['level'];
  $_SESSION['fotouser']     = $data['foto'];
  
  //menentukan status session timeout dengan 1; 1 artinya aktif
  $_SESSION['login'] = 1;
  timer();
  
  $sid_lama = session_id();
  session_regenerate_id();
  //mendapatkan session_id baru
  $sid_baru = session_id();
  
  try {
	//mengupdate tabel user dengan id_session yang baru
	$sql = "UPDATE users SET id_session='$sid_baru' WHERE username='$username'";
	$stmt = $conn->prepare($sql); 
	$stmt->execute();
	header('location:../admin/');
  }
  catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
  }
}
else{
  //tampil jika username dan password salah
  echo" <script> ;window.location = '../up_login.php?stat=1'</script>";

}
//menutup koneksi dengan database
$conn = null;
}
?>

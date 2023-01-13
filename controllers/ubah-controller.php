<?php
session_start();

if( !isset($_SESSION["login"]) ) {
	header("Location: login-page.php");
	exit;
}

require '../functions.php';

// ambil data di URL
$id = $_GET["id"];

// query data mahasiswa berdasarkan id
$pokemon = query("SELECT * FROM pokemon WHERE id = $id")[0];


// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
	// // cek apakah data berhasil diubah ataus tidak
	if( ubahPokemon($_POST) > 0 ) {
		echo "
			<script>
				// alert('Data berhasil diubah!');
				document.location.href = 'index-page.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('Data gagal diubah!');
			</script>
		";
	}
}
?>
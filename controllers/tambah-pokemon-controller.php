<?php
session_start();

if( !isset($_SESSION["login"]) ) {
	header("Location: login-page.php");
	exit;
}

require '../functions.php';

// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
	
	// cek apakah data berhasil di tambahkan atau tidak
	if( tambahPokemon($_POST) > 0 ) {
		echo "
			<script>
				// alert('data berhasil ditambahkan!');
				document.location.href = 'index-page.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('data gagal ditambahkan!');
				// document.location.href = 'index-page.php';
			</script>
		";
	}


}
?>
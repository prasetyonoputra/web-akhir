<?php 
session_start();

if( !isset($_SESSION["login"]) ) {
	header("Location: login-page.php");
	exit;
}

require '../functions.php';

$id = $_GET["id"];

if( hapusPokemon($id) > 0 ) {
	echo "
		<script>
			// alert('Data berhasil dihapus!');
			document.location.href = 'index-page.php';
		</script>
	";
} else {
	echo "
		<script>
			alert('Data gagal dihapus!');
			document.location.href = 'index-page.php';
		</script>
	";
}

?>s
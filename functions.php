<?php
$conn = mysqli_connect("localhost", "root", "", "db_tugas_besar_web");

function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;
}

function register($data){
	global $conn;
	$username = strtolower(stripslashes($data["username"]));
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$password2 = mysqli_real_escape_string($conn, $data["password2"]);
	
	//username sudah ada atau belum
	$result = mysqli_query($conn, "SELECT username FROM user WHERE username='$username'");
	if (mysqli_fetch_assoc($result)){
		echo "<script> alert ('Username telah dipakai!');
		   </script>";
		return false;
	}
	
	//cek password 
	if ($password !== $password2){
	  echo "<script>
			  alert ('Konfirmasi Password tidak sesuai');
		   </script>";
	  return false;
	}
	// encripsi password 
	$password = password_hash($password, PASSWORD_DEFAULT);
	
	//TAMBAHKAN USER BARU KE DATABASE
	mysqli_query ($conn, "insert into user values ('', '$username', '$password')");
	return mysqli_affected_rows($conn);
}

function tambahPokemon($data) {
	global $conn;

	$nama = htmlspecialchars($data["nama"]);
	$type = htmlspecialchars($data["tipe"]);
	$deskripsi = htmlspecialchars($data["deskripsi"]);
	$hitpoint = htmlspecialchars($data["hitpoint"]);
	$damage = htmlspecialchars($data["damage"]);

	// upload gambar
	$gambar = upload();
	if( !$gambar ) {
		return false;
	}

	$query = "INSERT INTO pokemon VALUES ('', '$nama', '$gambar', '$deskripsi', '$type', '$hitpoint', '$damage')";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function hapusPokemon($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM pokemon WHERE id = $id");
	return mysqli_affected_rows($conn);
}

function upload() {

	$namaFile = $_FILES['gambar']['name'];
	$ukuranFile = $_FILES['gambar']['size'];
	$error = $_FILES['gambar']['error'];
	$tmpName = $_FILES['gambar']['tmp_name'];

	// cek apakah tidak ada gambar yang diupload
	if( $error === 4 ) {
		echo "<script>
				alert('pilih gambar terlebih dahulu!');
			  </script>";
		return false;
	}

	// cek apakah yang diupload adalah gambar
	$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));
	if( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
		echo "<script>
				alert('yang anda upload bukan gambar!');
			  </script>";
		return false;
	}

	// cek jika ukurannya terlalu besar
	if( $ukuranFile > 2000000 ) {
		echo "<script>
				alert('ukuran gambar terlalu besar!');
			  </script>";
		return false;
	}

	// lolos pengecekan, gambar siap diupload
	// generate nama gambar baru
	// $namaFileBaru = uniqid();
	// $namaFileBaru .= '.';
	// $namaFileBaru .= $ekstensiGambar;

	// move_uploaded_file($tmpName, '/src/images/temp/' . $namaFileBaru);

	return $namaFile;
}

function ubahPokemon($data) {
	global $conn;

	$id = $data["id"];
	$nama = htmlspecialchars($data["nama"]);
	$type = htmlspecialchars($data["tipe"]);
	$deskripsi = htmlspecialchars($data["deskripsi"]);
	$hitpoint = htmlspecialchars($data["hitpoint"]);
	$damage = htmlspecialchars($data["damage"]);
	$gambarLama = htmlspecialchars($data["gambarLama"]);
	
	// cek apakah user pilih gambar baru atau tidak
	if( $_FILES['gambar']['error'] === 4 ) {
		$gambar = $gambarLama;
	} else {
		$gambar = upload();
	}

	$query = "UPDATE pokemon SET nama = '$nama', deskripsi = '$deskripsi', tipe = '$type', hitpoint = '$hitpoint', damage = '$damage', gambar='$gambar WHERE id = '$id'";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);	
}
?>
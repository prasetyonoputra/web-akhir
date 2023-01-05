<?php
require '../functions.php';

if( isset($_POST["register"]) ) {
	if(register($_POST) > 0) {
		echo "
		<script>
			alert('User baru berhasil ditambahkan!');
		</script>"
		;
        // header("Location: ../login/login-page.php");

	} else {
		echo mysqli_error($conn);
	}
}

?>
<?php
    require '../controllers/ubah-controller.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style-ubah.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">

    <title>Ubah - Pokemon</title>
</head>

<body>
    <form action="" method="post" enctype="multipart/form-data">
        <h3>Ubah Pokemon</h3>

        
		<input type="hidden" name="id" value="<?= $pokemon["id"]; ?>">
		<input type="hidden" name="gambarLama" value="<?= $pokemon["gambar"]; ?>">

        <div class="form-container">
            <div class="data-form">
                <label for="nama">Nama Pokemon:</label>
                <input type="text" placeholder="" name="nama" id="nama" value="<?= $pokemon["nama"]; ?>">

                <label for="tipe">Type Pokemon:</label>
                <input type="text" placeholder="" name="tipe" id="tipe" value="<?= $pokemon["tipe"]; ?>">

                <label for="deskripsi">Deskripsi Pokemon :</label>
                <textarea name="deskripsi" id="deskripsi" cols="40" rows="1000000"><?= $pokemon["deskripsi"]; ?></textarea>

                <label for="hitpoint">Hitpoint Pokemon :</label>
                <input type="number" name="hitpoint" id="hitpoint" value="<?= $pokemon["hitpoint"]; ?>">

                <label for="damage">Damage Pokemon :</label>
                <input type="number" name="damage" id="damage" value="<?= $pokemon["damage"]; ?>">
            </div>

            <div class="data-gambar">
                <img src="../src/images/pokemon/<?= $pokemon['gambar']; ?>" id="image-upload" width="80%" />
				<input type="file" name="gambar" id="gambar">
            </div>
        </div>
        <div class="btn-b">
            <button type='button' onclick="kembali()">Kembali</button>
        </div>
        <div class="btn-b">
            <button type="submit" name="submit">Ubah Data</button>
        </div>
    </form>

    <script>
        function kembali() {
            window.location.href = "deskripsi-page.php?id=<?= $pokemon["id"]; ?>";
        }

        let imageButton = document.getElementById("gambar");
        let imageUpload = document.getElementById("image-upload");
        imageButton.onchange = evt => {
            const [file] = imageButton.files
            if (file) {
                imageUpload.src = URL.createObjectURL(file);
            }
        }
    </script>
</body>

</html>
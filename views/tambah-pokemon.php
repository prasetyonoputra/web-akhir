<?php
    require '../controllers/tambah-pokemon-controller.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style-tambah-pokemon.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">

    <title>Tambah - Pokemon</title>
</head>

<body>
    <form action="" method="post" enctype="multipart/form-data">
        <h3>Tambah Pokemon</h3>
        
        <div class="form-container">
            <div class="data-form">
                <label for="nama">Nama Pokemon:</label>
                <input type="text" placeholder="" name="nama" id="nama" autocomplete="off">

                <label for="tipe">Type Pokemon:</label>
                <input type="text" placeholder="" name="tipe" id="tipe" autocomplete="off">

                <label for="deskripsi">Deskripsi Pokemon :</label>
                <textarea name="deskripsi" id="deskripsi" cols="40" rows="1000000"></textarea>

                <label for="hitpoint">Hitpoint Pokemon :</label>
                <input type="number" name="hitpoint" id="hitpoint" autocomplete="off">

                <label for="damage">Damage Pokemon :</label>
                <input type="number" name="damage" id="damage" autocomplete="off">
            </div>

            <div class="data-gambar">
                <img id="image-upload" src="#" width="80%"/>
				<input type="file" name="gambar" id="gambar">
            </div>
        </div>
        <div class="btn-b">
            <button type='button' onclick="kembali()">Kembali</button>
        </div>
        <div class="btn-b">
            <button type="submit" name="submit">Simpan</button>
        </div>
    </form>


    <script>
        let imageButton = document.getElementById("gambar");
        let imageUpload = document.getElementById("image-upload");
        imageButton.onchange = evt => {
            const [file] = imageButton.files
            if (file) {
                imageUpload.src = URL.createObjectURL(file);
            }
        }
        
        function kembali() {
            window.location.href = "index-page.php";
        }
    </script>
</body>

</html>
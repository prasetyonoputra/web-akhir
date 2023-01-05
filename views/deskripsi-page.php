<?php
    require '../controllers/deskripsi-controller.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style-deskripsi.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">

    <title>Deskripsi - Pokemon</title>
</head>

<body>
    <form action="" method="post" enctype="multipart/form-data">
        <h3>Deskripsi Pokemon</h3>

        <div class="form-container">
            <div class="data-form">
                <label for="nama">Nama Pokemon:</label>
                <input type="text" placeholder="" name="nama" id="nama" value="<?= $pokemon["nama"]; ?>" disabled>

                <label for="type">Type Pokemon:</label>
                <input type="text" placeholder="" name="type" id="type" value="<?= $pokemon["tipe"]; ?>" disabled>

                <label for="deskripsi">Deskripsi Pokemon :</label>
                <textarea name="deskripsi" id="deskripsi" cols="40" rows="1000000"
                    disabled><?= $pokemon["deskripsi"]; ?></textarea>

                <label for="hitpoint">Hitpoint Pokemon :</label>
                <input type="number" name="hitpoint" id="hitpoint" value="<?= $pokemon["hitpoint"]; ?>" disabled>

                <label for="damage">Damage Pokemon :</label>
                <input type="number" name="damage" id="damage" value="<?= $pokemon["damage"]; ?>" disabled>
            </div>

            <div class="data-gambar">
                <img src="../src/images/pokemon/<?= $pokemon['gambar']; ?>" width="80%" />
            </div>
        </div>
        <div class="btn-a">
            <a href="index-page.php">Kembali</a>
        </div>
        <div class="btn-a">
            <a href="ubah-page.php?id=<?= $pokemon["id"]; ?>">Ubah</a>
        </div>
        <div class="btn-a">
            <a href="hapus.php?id=<?= $pokemon["id"]; ?>" onclick="return confirm('Yakin?');">Hapus</a>
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
    </script>
</body>

</html>
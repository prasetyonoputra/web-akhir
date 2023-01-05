<?php

require '../controllers/index-controller.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style-index.css">
    <title>Main - Pokemon</title>
</head>

<body>
    <h1>Ini Index</h1>
    <a href="logout.php" class="logout">Logout</a>

    <div class="box-container">
        <!-- <div class="box">
            <table border="solid" width="100%">
                <tr><td><img src="../src/images/pokemon/pikachu.png" alt="pikachu" width="300px"></td></tr>
                <tr><td>Pikachu</td></tr>
                <tr><td>Listrik</td></tr>
                <tr><td><button>Description</button></td></tr>
            </table>
        </div> -->

        <?php foreach( $allPokemon as $pokemon ) : ?>
        <div class="box">
            <table width="80%" class="styled-table">
                <tr>
                    <td><img src="../src/images/pokemon/<?= $pokemon["gambar"]; ?>" alt="<?= $pokemon["nama"]; ?>"
                            width="200px"></td>
                </tr>
                <tr>
                    <td>
                        <h3><?= $pokemon["nama"]; ?></h3>
                    </td>
                </tr>
                <tr>
                    <td><?= $pokemon["type"]; ?></td>
                </tr>
                <tr>
                    <td><button class="btn-deskripsi" onclick="showModalDeksripsi(<?= $pokemon["id"]; ?>)">Deskripsi Pokemon</button></td>
                </tr>
                <!-- <tr><td><a href="deskripsi.php?id=">Deskripsi</a></td></tr> -->
            </table>
        </div>
        <?php endforeach; ?>

        <div class="box">
            <!-- <a href="tambah-pokemon.php">Tambah</a> -->
            <button style="width: 200px" class="btn-deskripsi" id="btnTambahPokemon">Tambah</button>
        </div>

        <!-- The Modal -->
        <div id="modalTambahPokemon" class="modal">
            <!-- Modal content -->
            <span class="close">&times;</span>

            <form action="" method="post" enctype="multipart/form-data">
                <h3>Tambah Pokemon</h3>

                <div class="form-container">
                    <div class="data-form">
                        <label for="nama">Nama Pokemon:</label>
                        <input type="text" placeholder="" name="nama" id="nama">

                        <label for="type">Type Pokemon:</label>
                        <input type="text" placeholder="" name="type" id="type">

                        <label for="deskripsi">Deskripsi Pokemon :</label>
                        <textarea name="deskripsi" id="deskripsi" cols="40" rows="1000000"></textarea>

                        <label for="hitpoint">Hitpoint Pokemon :</label>
                        <input type="number" name="hitpoint" id="hitpoint">

                        <label for="damage">Damage Pokemon :</label>
                        <input type="number" name="damage" id="damage">
                    </div>

                    <div class="data-gambar">
                        <img id="image-upload" src="#" width="80%" />
                        <input type="file" name="gambar" id="gambar">
                    </div>
                </div>
                <button type="submit" name="tambah-pokemon">Tambah</button>
                <a href="index-page.php">Kembali</a>
            </form>
        </div>
    </div>

    <script src="scripts/script-index.js"></script>
    <script>
        function showModalDeksripsi(id, nama, type, deskripsi, hitPoint, damage) {
            console.log(id);
            <?php
                
            ?>
        }
    </script>
</body>

</html>
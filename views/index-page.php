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
    <link rel="stylesheet" href="styles/style-header.css">
    <link rel="stylesheet" href="styles/style-footer.css">
    <title>Main - Pokemon</title>
</head>

<body>
    <div class="header">
        <div class="headerBox">
            <img src="../src/images/pokemon/pokeball2.png" height="80px">
        </div>

        <div class="headerBox">
            <h3>Gotta Catch 'Em All!</h3>
        </div>
        
        <div class="headerBox">
            <img src="../src/images/pokemon/pokeball2.png" height="80px">
        </div>
    </div>

    <div class="header-blank">
        <div class="boxheader">
            <a href="logout.php" class="logout"><b>Logout</b></a>
        </div>

        <div class="boxheader">
            <a href="../cetak.php" target="_blank"><b>Cetak</b></a>
        </div>
    </div>

    <div class="main">
        <div class="logo">
            <center><img src="../src/images/pokemon/logo.png" alt="Logo" width="500px"></center>
        </div>

        <div class="box-form">
            <form action="" method="post" class="form-cari">
                <input type="text" id="keyword" name="keyword" size="40" autofocus placeholder="Cari Pokemon" autocomplete="off">
                <div class="buttonHolder">
                    <input type="submit" name="cari" id="tombolCari" value="Cari" disabled>
                </div>
            </form>
        </div>

        <div class="box-container" id="container">
            <?php foreach( $allPokemon as $pokemon ) : ?>
            <div class="box">
                <table width="80%" class="styled-table">
                    <tr>
                        <td><img src="../src/images/pokemon/<?= $pokemon["gambar"]; ?>" alt="<?= $pokemon["nama"]; ?>"
                                height="200px"></td>
                    </tr>
                    <tr>
                        <td>
                            <h3><?= $pokemon["nama"]; ?></h3>
                        </td>
                    </tr>
                    <tr>
                        <td><?= $pokemon["tipe"]; ?></td>
                    </tr>
                    <tr>
                    <tr>
                        <td>
                            <div class="btn-deskripsi">
                                <div style="padding-top:12px;">
                                    <a href="deskripsi-page.php?id=<?= $pokemon["id"]; ?>">Deskripsi</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    </tr>
                </table>
            </div>
            <?php endforeach; ?>

            <div class="box">
                <table width="80%" class="styled-table">
                    <tr>
                        <td><img src="../src/images/pokemon/pokeball.png"
                        height="200px"></td>
                    </tr>
                    <tr>
                        <td>
                            <h3>-</h3>
                        </td>
                    </tr>
                    <tr>
                        <td>-</td>
                    </tr>
                    <tr>
                    <tr>
                        <td>
                            <div class="btn-deskripsi">
                                <div style="padding-top:12px;">
                                    <a href="tambah-pokemon.php">Tambah</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <div class="footer">
        <div class="footerBox">
            <img src="../src/images/pokemon/pokeball2.png" height="80px">
        </div>

        <div class="footerBox">
            <h5>Made by Prasetyono Putra</h5>
        </div>

        <div class="footerBox">
            <img src="../src/images/pokemon/pokeball2.png" height="80px">
        </div>
    </div>
    <script src="scripts/script-index.js"></script>
</body>

</html>
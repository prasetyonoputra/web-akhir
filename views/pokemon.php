<?php
require '../functions.php';
$keyword = $_GET["keyword"];

$query = "SELECT * FROM pokemon
    WHERE
    nama LIKE '%$keyword%' OR
    tipe LIKE '%$keyword%'
    ";

$allPokemon = query($query);
?>

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
        <a href="tambah-pokemon.php">Tambah</a>
    </div>
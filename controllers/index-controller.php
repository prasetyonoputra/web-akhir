<?php 
session_start();
require '../functions.php';

if( !isset($_SESSION["login"]) ) {
	header("Location: login-page.php"); 
	exit;
}


$allPokemon = query("SELECT * FROM pokemon");

?>
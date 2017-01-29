<?php
include '../config/connection.php';
//$judul = "judul artikel yang baru";
//$isi = "isi artikel baru yang akan diinputkan ke database";
$judul 	= trim($_POST['judul']);
$isi 	= trim($_POST['isi']);

if($judul =='' && $isi =='') {
	header('Location: ../form_post.php');
} else {
	$sql_insert = "INSERT INTO `artikel` (`judul`,`isi`) VALUES (?,?)";
	$query = $pdo->prepare($sql_insert);
	$query->bindParam(1, $judul);
	$query->bindParam(2, $isi);
	$query->execute();

	header('Location: ../list_post.php');
}
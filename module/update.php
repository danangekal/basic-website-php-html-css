<?php
include '../config/connection.php';

//$judul = "judul artikel yang baru";
//$isi = "isi artikel baru yang akan diinputkan ke database";
//$id = 1;
$id 	= trim($_POST['id']);
$judul 	= trim($_POST['judul']);
$isi 	= trim($_POST['isi']);

if($id =='') {
	header('Location: ../form_post.php');
} else {
	$sql_update = "UPDATE `artikel` SET `judul` = ?, `isi` = ? WHERE `id` = ?";
	$query = $pdo->prepare($sql_update);
	$query->bindParam(1, $judul);
	$query->bindParam(2, $isi);
	$query->bindParam(3, $id);
	$query->execute();

	header('Location: ../list_post.php');
}
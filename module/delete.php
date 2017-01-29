<?php

include '../config/connection.php';

//$id = 2;
$id 	= $_GET['id'];

if ($id) {
	$sql_delete = "DELETE FROM `artikel` WHERE `id` = ?";
	$query = $pdo->prepare($sql_delete);
	$query->execute(array($id)); 	
} 

header('Location: ../list_post.php');
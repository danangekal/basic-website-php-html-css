<?php
// koneksi pdo tanpa error handling
// $hostname = 'localhost';
// $dbname = 'latihan';
// $username = 'root';
// $password = '';
// $pdo = new PDO('mysql:host='.$hostname.';dbname='.$dbname, $username, $password, array(
//   PDO::ATTR_PERSISTENT => true
// ));


// koneksi dengan error handling
$hostname = 'localhost';
$dbname = 'latihan';
$username = 'root';
$password = '';
try {
	$pdo = new PDO('mysql:host='.$hostname.';dbname='.$dbname, $username, $password, array(
		PDO::ATTR_PERSISTENT => true
	));
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
	echo "Ada error gan: ".$e->getMessage();
}
<?php
include 'config/connection.php';

$sql_select = "SELECT * FROM `artikel`";
$query = $pdo->prepare($sql_select);
$query->execute();
$row = $query->fetchAll();
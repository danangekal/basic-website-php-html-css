<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Form Post</title>
</head>
<body>

<?php 
$id 	= $_GET['id'];

if ($id) {
	$sql_select = "SELECT * FROM `artikel` WHERE `id` = ?";
	$query = $pdo->prepare($sql_select);
	$query->bindParam(1, $id);
	$query->execute();
	$row = $query->fetch();

	$judul 	= $row['judul'];
	$isi 	= $row['isi'];
} 

$id = $id? $id:'';
$judul 	= $row['judul'];
	$isi 	= $row['isi'];
?>

<?php if ($id) { ?>
	<form action="module/update.php" method="POST">
<?php } else { ?>
	<form action="module/insert.php" method="POST">
<?php } ?>

	<input type="hidden" id="id" name="id" value="<?php echo $id;?>">
	<input type="text" id="judul" name="judul" placeholder="Judul" value="<?php echo $judul;?>">
	<textarea name="isi" id="isi" cols="30" rows="5" placeholder="Isi"><?php echo $isi;?></textarea>

	<button type="submit" id="submit" name="submit">Simpan</button>	
</form>
	
</body>
</html>
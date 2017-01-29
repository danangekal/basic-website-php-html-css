<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>List Post</title>
</head>
<body>
	<table>
		<tr>
			<th>No</th>
			<th>Judul</th>
			<th>Isi</th>
			<th>Aksi</th>
		</tr>
		<?php include 'module/select.php'; ?>
		<?php $no=0; ?>
		<?php foreach ($row as $data) { ?>
			<?php $no++; ?>
			<tr>
				<td><?php echo $no;?></td>
				<td><?php echo $data['judul'];?></td>
				<td><?php echo $data['isi'];?></td>
				<td>
					<a href="form_post.php?id=<?=$data['id']?>">Edit</a>
					<a href="module/delete.php?id=<?=$data['id']?>">Delete</a>
				</td>
			</tr>
		<?php } ?>
	</table>
</body>
</html>
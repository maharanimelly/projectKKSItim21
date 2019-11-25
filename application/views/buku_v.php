<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body background="bb2.jpg">
	<br>

<center> <h2 class="table table-info" style="color:darkgreen">DATA BUKU</h2></center>
	
	<table class="table table-info">
		<thead>
			<a href="add_new" class="btn btn-info" type="button" style="color:darkgreen">Tambah Buku</a>
			<br>
			<tr>
				<th style="color:darkgreen">No</th>
				<th style="color:darkgreen">ID Buku</th>
				<th style="color:darkgreen">Judul</th>
				<th style="color:darkgreen">Pengarang</th>
				<th style="color:darkgreen">Penerbit</th>
				<th style="color:darkgreen">Tahun</th>
				<th style="color:darkgreen">Edit/Hapus</th>
		</tr>
	</thead>
	<tbody>

	<?php	
	$no = 0;
	foreach($query->result_array() as $row)
	{

		$no++;
		$link_edit = anchor('buku/edit/'.$row['id_buku'], 'Edit');
		$link_delete = anchor('buku/delete/'.$row['id_buku'], 'Hapus', "onclick='return confirm(\"Yakin Buku Ingin Dihapus?\")'");
		echo "<tr>
				<td>".$no."</td>
				<td>".$row['id_buku']."</td>
				<td>".$row['judul']."</td>
				<td>".$row['pengarang']."</td>
				<td>".$row['penerbit']."</td>
				<td>".$row['tahun']."</td>
				<td>".$link_edit.' '.$link_delete."</td>
			</tr>";

		}
		echo "</table>";
		?>

</tbody>
</table>
</body>
</html>
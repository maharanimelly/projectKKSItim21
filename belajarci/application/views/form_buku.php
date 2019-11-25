<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body background="bb2.jpg">

<?php
	echo form_open('buku/save/'.$is_update);
	if (!empty($query)){
		$row = $query->row_array();
	}
	else
	{
		$row['id_buku'] ='';
		$row['judul'] ='';
		$row['pengarang'] ='';
		$row['penerbit'] ='';
		$row['tahun'] ='';
	}
	?>
	<br>

	 <center> <h2 class="table table-info" style="color:darkgreen">TAMBAH DATA BUKU</h2></center>
	 <div class="container">
	 	<div class="row">
	 		<div class="col-md-6 offset-md-3">
        <br><br><br>
	 			<?php echo form_open('buku/save/'.$is_update);?>
          <table width="319" border="0" class="table table-info">
          <tr>
  			<td width="152"style="color:darkgreen">ID Buku</td>
    		<td width="160"><?php echo form_input('id_buku',$row['id_buku'],"size='50' maxlength='100'"); ?></td>
   		 <tr>
  			<td width="152"style="color:darkgreen">Judul</td>
    		<td width="160"><?php echo form_input('judul',$row['judul'],"size='50' maxlength='100'"); ?></td>
    	<tr>
  			<td width="152"style="color:darkgreen">Pengarang</td>
    		<td width="160"><?php echo form_input('pengarang',$row['pengarang'],"size='50' maxlength='100'"); ?></td>
    	<tr>
  			<td width="152"style="color:darkgreen">Penerbit</td>
    		<td width="160"><?php echo form_input('penerbit',$row['penerbit'],"size='50' maxlength='100'"); ?></td>
    	<tr>
  			<td width="152"style="color:darkgreen">Tahun</td>
   		 	<td width="160"><?php echo form_input('tahun',$row['tahun'],"size='50' maxlength='100'"); ?></td>
   		 </tr>
   		 <tr>
      <td width="92"><button class="btn btn-info" type="submit" style="color:darkgreen">Simpan</a></button></td>
      <td width="92"><button class="btn btn-info" type="button" style="color:darkgreen">Batal</a></button></td>
  </tr>

</table>
</body>
</html>

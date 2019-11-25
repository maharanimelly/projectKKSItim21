<?php

include("index.php");
$username=$_POST['user'];
$password=md5($_POST['pass']);
$input="insert into login(username,password) values ('$username','$password')";

	if ($username=="" or $password==""){
		echo '<script type="text/javascript"> var answer = alert("Data masih belum lengkap")window.location = "daftar.php";
</script>';

}else{
	$hasil=mysqli_query($conn,$input);

if ($hasil){
	header('location:buku.php');

}else{
	echo '<script type="text/javascript">

	var answer = alert("Sudah ada user dengan username tersebut")
	window.location = "buku.php";
	</script>';

}
}
?>
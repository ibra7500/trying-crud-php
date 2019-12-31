<?php 
if(isset($_GET['pesan'])){
	if($_GET['pesan'] == "gagal"){
		echo "Login gagal! username dan password salah!";
	}else if($_GET['pesan'] == "logout"){
		echo "Anda telah berhasil logout";
	}else if($_GET['pesan'] == "belum_login"){
		echo "Anda harus login untuk mengakses aplikasi ini!";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>WEBSITE</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body bgcolor="#cfc8c8">
<div id="layout">
<div id="header"></div>
<div id="kolom2" align="center">
	<form action="proseslogin.php" method="post">
				<table border="0">
				<tr align="center">
					<td>Username : </td> 
					<td>
				<input type="text" name="username"> </center> </td>
			</tr>
			<tr align="center">
				<td>Password : </td>
				 <td> <input type="password" name="password"> </td> 
				</tr>
				<tr align="center">
				<td> <input type="submit" value="Login"> </td>
				</tr>
			</table>
	</div>
</form>
<div id="kolom1">
</div>	
<div id="footer">
	<b>Copykanan &copy;2019 IBER</b>
</div>
</div>
</body>
</html>
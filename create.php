<!DOCTYPE html>
<html>
<head>
		<title>CREATE NEW ACCOUNT</title>
		<?php
		require 'koneksi.php';
		if (isset($_POST['submit'])) {
				$id 					= $_POST['1'];
				$username			 	= $_POST['2'];
				$password 				= $_POST['3'];
				$nama 					= $_POST['4'];
				$email					= $_POST['5'];
				$jk 					= $_POST['6'];
				$usia					= $_POST['7'];
				$alamat					= $_POST['8'];
				$regional				= $_POST['9'];
				$privillage				= $_POST['10'];
				$quer 					= 	mysql_query("INSERT INTO `enter` (`id`, `username`, `password`, `nama`, `email`, `jk`, `usia`, `alamat`, `regional`, `privillage`) VALUES (NULL, '$username', '$password', '$nama', '$email', '$jk', '$usia', '$alamat', '$regional', '$privillage')");
			if($quer){
					header('location: ./read.php');
			} else{
				?>
				<script type="text/javascript">
					alert("Username already Exist or incorrect value");
				</script>
				<?php
			}
			}
				?>
</head>
<center>
<body>
<h2>WELCOME, PLEASE REGISTER BEFORE !</h2>
<form method="POST">
</center>
<center>
<table>
		<tr>
				<td>ID*</td>
				<td><input type="text" name="1"></td>
		</tr>
		<tr>
				<td>Username*</td>
				<td><input type="text" maxlength="30" name="2"></td>
		</tr>
		<tr>
				<td>Password*</td>
				<td><input type="password" maxlength="30" name="3"></td>
		</tr>
		<tr>
				<td>Name</td>
				<td><input type="text" maxlength="40" name="4"></td>
		</tr>
		
				<td>Email*</td>
				<td><input type="text" maxlength="30" name="5"></td>
		</tr>
		<tr>
				<td>Gender*</td>
				<td>
					<input type="radio" name="6" value="Male">Male
					<input type="radio" name="6" value="Female">Female
					
				</td>
				</tr>
				<tr>
				<td>Age</td>
				<td><input type="text" maxlength="30" name="7"></td>
		</tr>
		
				<tr>
				<td>Address</td>
				<td><input type="text" maxlength="30" name="8"></td>
		</tr>
		<tr>
				<td>Regional</td>
				<td>
					<select maxlength="30" name="9">
						<option value="Riau">Riau</option>
						<option value="Bali">Bali</option>
						<option value="NTT">NTB</option>
						<option value="Jawa Tengah">Jawa Tengah</option>
						<option value="Jawa Timur">Jawa Timur</option>
						<option value="Jawa Barat">Jawa Barat</option>
						<option value="DIY">DIY</option>
						<option value=" DKI Jakarta"> DKI Jakarta</option>
					</select>
				</td>
		</tr>
		
		<tr>
				<td>Privillage</td>
				<td>
					<select maxlength="30" name="10">
						<option value="0">User</option>
						<option value="1">Admin</option>
					</select>
				</td>
		</tr>
		
		<tr>
			<td>
			(*) Can't be blank
			</td>
		</tr>
		<tr>
		<br>
				<td><input type="submit" name="submit" value="SAVE"></td>
				</tr>
		</br>		
		
		</center>
		
</table>
</form>
</body>
</html>
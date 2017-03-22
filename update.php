<!DOCTYPE html>
<html>
<head>
		<title>UPDATE ACCOUNT</title>
		<link rel="stylesheet" href="assets/css/main.css" />
		<?php
		require 'koneksi.php';
		if (isset($_POST['submit'])) {
				$id 					= $_POST['0'];
				$username			 	= $_POST['1'];
				$password 				= $_POST['2'];
				$nama 					= $_POST['3'];
				$email					= $_POST['4'];
				$jk 					= $_POST['5'];
				$usia					= $_POST['6'];
				$alamat					= $_POST['7'];
				$regional				= $_POST['8'];
				$privillage				= $_POST['9'];
				$quer = mysql_query("UPDATE enter SET id='$id', username='$username', password='$password', nama='$nama', email='$email', jk='$jk', usia='$usia', alamat='$alamat',regional='$regional', privillage='$privillage' WHERE id='$id';");


			if($quer){
					header('location: ./read.php');
			} else{
				echo "Error" ;
			}
			}
			
		if (isset($_GET['id'])) {
				$id = $_GET['id'];
		$query = mysql_query("SELECT * FROM enter WHERE id ='$id'");
			$hasil = mysql_fetch_array($query);
			?>
			}
		</head>
		<body>
		
		<form method="POST">
				<input type="hidden" name="0" value="<?php echo $hasil[0] ?>">
<table>
		<tr>
		<td>Username*</td>
				<td><input type="text" maxlength="30" name="1" value="<?php echo $hasil[2] ?>"></td>
		</tr>
		<tr>
				<td>Password*</td>
				<td><input type="password" maxlength="30" name="2" value="<?php echo $hasil[3] ?>"></td>
		</tr>
		<tr>
				<td>Name</td>
				<td><input type="text" maxlength="40" name="3" value="<?php echo $hasil[4] ?>"></td>
		</tr>


</tr>
		<tr>
				<td>Email*</td>
				<td><input type="text" maxlength="30" name="4" value="<?php echo $hasil[5] ?>"></td>
		</tr>



		<tr>
				<td>Gender*</td>
				<td>
					<input type="radio" name="5" value="Male">Male
					<input type="radio" name="5" value="Female">Female
					
				</td>
		</tr>
		<tr>
				</td>
				</tr>
				<tr>
				<td>Age</td>
				<td><input type="text" maxlength="30" name="6"></td>
		</tr>
		
				<tr>
				<td>Address</td>
				<td><input type="text" maxlength="30" name="7"></td>
		</tr>
		<tr>
				<td>Regional</td>
				<td>
					<select maxlength="30" name="8">
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
					<select maxlength="30" name="9">
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
		<td><input type="submit" name="submit" value="UPDATE"></td>
</tr>
							</table>
							<?php }?>
		</form>
		</body>
		</html>
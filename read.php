<!DOCTYPE html>
<html>
<head>
		<title>TUGAS DI RUMAH PEMWEB</title>
</head>
<body>
<h2>Data Account</h2>
<table border="1">
<tr>
		<th>Id</th>
		<th>Username</th>
		<th>Password</th>
		<th>Name</th>
		<th>Email</th>
		<th>Gender</th>
		<th>Age</th>
		<th>Address</th>
		<th>Regional</th>
		<th>Privillage</th>
		
		
</tr>
		<?php
				require 'koneksi.php';
				$no = 1;
				$query = mysql_query("SELECT * FROM enter");
				while ($hasil = mysql_fetch_array($query)) { ?>
				<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $hasil[1]?></td>
				<td><?php echo $hasil[2]?></td>
				<td><?php echo $hasil[3]?></td>
				<td><?php echo $hasil[4]?></td>
				<td><?php echo $hasil[5]?></td>
				<td><?php echo $hasil[6]?></td>
				<td><?php echo $hasil[7]?></td>
				<td><?php echo $hasil[8]?></td>

				<td>
				<?php 
				if($hasil[9]==1)
				{
					echo "Admin";
				}
				else
				{
					echo "User";
				}
				?>
				</td>
				<td> 
				<a href="update.php?id=<?php echo $hasil[0]?>"><input type= "submit" name="submit" value ="Update"></a>
				<a href="delete.php?id=<?php echo $hasil[0]?>"><input type= "submit" name="submit" value ="Delete"></a>
				</td>
				</tr>
<?php }?>
		</table>
		<td><a href="create.php"><input type= "submit" name="submit" value ="Create new account"></td>
		<td><a href="login.php"><input type= "submit" name="submit" value ="Exit"></td>
		
</body>
</html>
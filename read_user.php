<!DOCTYPE html>
<html>
<head>
		<title>TUGAS  3 PEMWEB </title>
</head>
<body>
<center>
<h2>Our Visitor</h2>
<table border="1">
<tr>
		<th>Id</th>
		<th>Username</th>
		
		<th>Name</th>
		<th>Email</th>
		<th>Gender</th>
		<th>Age</th>
		<th>Address</th>
		<th>Regional</th>
		<th>Privillage</th>
	</center>	
		
</tr>
		<?php
				require 'koneksi.php';
				$no = 1;
				$query = mysql_query("SELECT * FROM enter Where privillage=0");
				while ($hasil = mysql_fetch_array($query)) { ?>
				<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $hasil[1]?></td>
			
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
				
				</tr>
<?php }?>
		</table>
		<br>
		<td><a href="login.php"><input type= "submit" name="submit" value ="Exit"></td>
		</br>

<ul align="left">
<center>
   
  <a href='dapodik.php'> Lihat Data Dapodik</a> <br>
  <a href='negeri.php'>Lihat Sekolah Negeri</a><br>
  <a href='sd_swasta.php'> Lihat SD Swasta</a><br>
  </center>


</body>
</html>

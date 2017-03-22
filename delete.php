<?php
require 'koneksi.php';
if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$query = mysql_query("DELETE FROM enter WHERE id ='$id'");
		if($query){
				echo "Succesful deleted";
				header('location: ./read.php');
		}else{
				echo "Can't Delete";
				header('location: ./read.php');
		}
}
?>
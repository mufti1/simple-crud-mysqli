<?php 
	$conn = new mysqli('localhost', 'root', '', 'pk5-xirpl3-lab-20');
	
	if (isset($_GET['nis'])) {
		$sql = "delete from siswa where nis =".$_GET['nis'];
		if ($conn->query($sql)) {
			header('Location:input.php');
		}
		else{
			echo "ERROR deleting records";
		}
	}
 ?>
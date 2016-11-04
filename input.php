<?php 
    //kode konek ke database
    $con = new mysqli('localhost', 'root', '', 'pk5-xirpl3-lab-20');
    //bikin insert ke database
    //ambil data
    if(isset($_POST['nis'])){
    $nama=$_POST['nama'];
    $nis=$_POST['nis'];
    $nisn=$_POST['nisn'];
    $kelas=$_POST['kelas'];
    $jurusan=$_POST['jurusan'];
    $agama=$_POST['agama'];
    $password=$_POST['password'];
    $con->query("INSERT INTO siswa(nama,nis,nisn,kelas,jurusan,agama,password)VALUES('$nama','$nis','$nisn','$kelas','$jurusan','$agama','$password')");
  }
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.theme.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>NGE-TEST | ADMIN</title>
</head>
<body>
	<div class="navbar-tes">
		<nav class="navbar navbar-default navbar-color" role="navigation">
			<div class="navbar-header">
				<a class="navbar-brand" href="input.php">NGE-TEST | Admin Page</a>
			</div>
			<div>
				<ul class="nav navbar-nav">
					<li class="username"><a href="index.php">Home</a></li>
					<li><a href="#">Hello siapa</a></li>
				</ul>
			</div>
		</nav>
	</div>
	<div class="menu">
		<div class="container">
			<nav class="navbar navbar-default" role="navigation">
				<div class="navbar-header">
					<button class="btn btn-success navbar-btn login"data-toggle="modal" data-target="#inputModal"><a href="#">INPUT SISWA</a>
				</div>
				<div>
					<form class="navbar-form navbar-left" role="search">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Search">
						</div>
					<button type="submit" class="btn btn-default">Submit</button>
					</form>
				</div>
			</nav>
		</div>
	</div>
	<!--modal input-->
	  <div class="modal fade" id="inputModal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">INPUT SISWA</h4>
        </div>
        <div class="modal-body">
        	<form role="form" action="" method="post">
  				<div class="form-group text-left">
  					<label for="pass">NIS</label>
             		<input type="text" class="form-control" id="nis" placeholder="Masukan NIS" required="required" name="nis">
   					<label for="name">Nama</label>
    				<input type="text" class="form-control" id="nama" placeholder="Masukan Nama" required="required" autofocus="autofocus" name="nama">
             		<label for="pass">NISN</label>
             		<input type="text" class="form-control" id="nisn" placeholder="Masukan NISN" required="required" name="nisn">
             		<label for="kelas">Kelas</label>
             		<select class="form-control" name="kelas">
               			<option value="X">X</option>
               			<option value="XI">XI</option>
               			<option value="XII">XII</option>
             		</select>
             		<label for="jurusan">Jurusan</label>
             		<select class="form-control" name="jurusan">
               			<option value="TJA">TJA</option>
               			<option value="TKJ">TKJ</option>
               			<option value="RPL">RPL</option>
             		</select>
             		<label for="agama">Agama</label>
             		<select class="form-control" name="agama">
               			<option value="Islam">Islam</option>
               			<option value="Budha">Budha</option>
               			<option value="Hindu">Hindu</option>
               			<option value="Kristen">Kristen</option>
             		</select>
    				<label for="pass">Password</label>
    				<input type="password" class="form-control" id="pass" placeholder="Masukan Password" required="required" name="password"><br>
    				<button type="submit" class="btn btn-success">Input</button>
  				</div>
		    </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
 <!--modal input end-->
 <div class="data-siswa">
 	<div class="container">
 		<table class="table">
 			<caption>TABEL DATA SISWA</caption>
 			<thead>
 			<tr>
 				<td>Nis</td>
 				<td>Nama</td>
 				<td>Kelas</td>
 				<td>NISN</td>
 				<td>Jurusan</td>
 				<td>Agama</td>
 				<td>Password</td>
 				<td colspan="2" class="text-center">Action</td>
 			</tr>
 			</thead>
 			<tbody>
      <?php 
          $res = $con->query("SELECT * from siswa");
          while($row = $res->fetch_array(MYSQLI_ASSOC)){  
       ?>
 			<tr>
 				<td><?php echo $row['nis']; ?></td>
 				<td><?php echo $row['nama']; ?></td>
 				<td><?php echo $row['kelas']; ?></td>
 				<td><?php echo $row['nisn']; ?></td>
 				<td><?php echo $row['jurusan']; ?></td>
 				<td><?php echo $row['agama']; ?></td>
 				<td><?php echo $row['password'];?></td>
        		<td><a href="edit.php?nis=<?=$row['nis']?>" class="btn btn-primary navbar-btn login">EDIT SISWA</a></td>
 				<td><a href="delete.php?nis=<?=$row['nis']?>" class="btn btn-danger navbar-btn login">DELETE SISWA</a></td>
        <?php } ?>
 			</tr>
 			</tbody>
 		</table>
 	</div>
 </div>
</body>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>
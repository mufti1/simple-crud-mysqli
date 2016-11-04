<?php 
    //kode konek ke database
    $con = new mysqli('localhost', 'root', '', 'pk5-xirpl3-lab-20');
    if(isset($_POST['nis'])){
    $nama=$_POST['nama'];
    $nis=$_POST['nis'];
    $nisn=$_POST['nisn'];
    $kelas=$_POST['kelas'];
    $jurusan=$_POST['jurusan'];
    $agama=$_POST['agama'];
    $password=$_POST['password'];
    $sql ="UPDATE siswa set nis='$nis', nama='$nama', nisn='$nisn', kelas='$kelas', jurusan='$jurusan', agama='$agama', password='$password' where nis=".$_GET['nis'];
    if ($con->query($sql)) {
      header('Location:input.php');
    }
    else{
      echo "gagal mengedit data";
    }
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
  <?php 
      if (isset($_GET['nis'])){
        $res = $con->query("SELECT * from siswa where nis=".$_GET['nis']);
        while($row = $res->fetch_array(MYSQLI_ASSOC)){

    ?>
  <div class="container">
    <h4 class="text-center">EDIT DATA SISWA</h4>
    <form role="form" method="POST" action="">
      <div class="form-group text-left">
        <label for="pass">NIS</label>
        <input type="text" class="form-control" id="nis" placeholder="Masukan NIS" required="required" name="nis" value="<?php echo $row['nis']; ?>">
        <label for="name">Nama</label>
        <input type="text" class="form-control" id="nama" placeholder="Masukan Nama" required="required" autofocus="autofocus" name="nama" value="<?php echo $row['nama']; ?>">
        <label for="pass">NISN</label>
        <input type="text" class="form-control" id="nisn" placeholder="Masukan NISN" required="required" name="nisn" value="<?php echo $row['nisn'];}}?>">
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
</body>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</html>
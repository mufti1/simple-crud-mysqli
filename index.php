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
	<script src="script.js"></script>
	<title>NGE-TEST | Test Your Brain</title>
</head>
<body>
	<div class="home">
		<div class="container">
			<div class="navbar row">
				<nav class="navbar navbar-default" role="navigation">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-item">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a href="index.html" class="navbar-brand">Nge-Test</a>
					</div>
					<div class="collapse navbar-collapse" id="navbar-item">
						<ul class="nav navbar-nav">
							<li><a href="#about">About</a></li>
							<li><a href="#team">Our Team</a></li>
							<li><a href="#contact">Contact</a></li>
							<li><a href="test.php">Take a Test</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li><button class="btn btn-primary navbar-btn login"data-toggle="modal" data-target="#signModal"><a href="#">SIGN UP</a></button></li><li>&nbsp;</li>
							<li><button class="btn btn-success navbar-btn login"data-toggle="modal" data-target="#myModal"><a href="#">LOGIN</a></button></li>
						</ul>
					</div>
				</nav>
			</div>
			<div class="row">
				<h1>WELCOME TO NGE-TEST</h1>
				<p class="atas">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				<p>Pellentesque laoreet lobortis tellus, a luctus libero fermentum ut.</p>
				<p>Sed neque odio, mollis vitae nisl eget, bibendum imperdiet metus.</p>
				<hr/>
				<div class="sign">
					<h2>Explore This</h2>
					<a href="#team"><button class="btn btn-read">Read More</button></a>
				</div>
			</div>
		</div>
	</div>
	<!--modal login-->
	  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">LOGIN</h4>
        </div>
        <div class="modal-body">
        	<form role="form">
  				<div class="form-group">
   					 <label for="name">NIS</label>
    				 <input type="text" class="form-control" id="name" placeholder="Enter NIS" required="required" autofocus="autofocus" name="nisn">
    				 <label for="pass">Password</label>
    				 <input type="password" class="form-control" id="pass" placeholder="Enter Password" required="required" name="password"><br>
    				 <label>
						<input type="checkbox"> Remember me
					 </label><br>
    				 <button type="submit" class="btn btn-success">LOGIN</button>
  				</div>
		    </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <!--modal input-->
	  <div class="modal fade" id="signModal" role="dialog">
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
   					 <label for="name">Nama</label>
    				 <input type="text" class="form-control" id="nama" placeholder="Masukan Nama" required="required" autofocus="autofocus" name="nama">
             <label for="pass">NIS</label>
             <input type="text" class="form-control" id="nis" placeholder="Masukan NIS" required="required" name="nis">
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
  <!--team-->
	<div id="team" class="container-fluid text-center">
		<h1>Our Team</h1>
		<p>The Best Team To Test Your Brain</p><br>
		<div class="row">
			<div class="col-sm-6 col-md-4">
				<div class="thumbnail">
					<img src="img/t1.jpg" alt="team1"></img>
					<h4>George Randalf</h4>
					<p>Hot Brain Maker</p>
				</div>
			</div>
			<div class="col-sm-6 col-md-4">
				<div class="thumbnail">
					<img src="img/t1.jpg" alt="team2"></img>
					<h4>George Randalf</h4>
					<p>Hot Brain Maker</p>
				</div>
			</div>
			<div class="col-sm-6 col-md-4">
				<div class="thumbnail">
					<img src="img/t1.jpg" alt="team3"></img>
					<h4>George Randalf</h4>
					<p>Hot Brain Maker</p>
				</div>
			</div>
		</div>
		<h3>The team is sudah nglampaui survey</h3>
		<p>team selalu diacak per bulanya</p><br><br>
	</div>
	<!--about-->
	<div id="about" class="about">
		<div class="container">
			<div class="row">
				<h1>ABOUT</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				<p>Pellentesque laoreet lobortis tellus, a luctus libero fermentum ut.</p>
				<p>Sed neque odio, mollis vitae nisl eget, bibendum imperdiet metus.</p>
				<br>
			</div>
		</div>
	</div><br>
	<!--comment-->
	<div class="komentar">
	<h1>TESTIMONI PELANGGAN</h1><br/>
		<div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
            <center><img src="img/t1.jpg"></center>
            <div class="carousel-caption">
              <h1>Frederik</h1>
              <p>"Test ini sangat membantu"</p>
            </div>
            </div>

            <div class="item">
            <center><img src="img/t1.jpg"></center>
            <div class="carousel-caption">
              <h1>Julius</h1>
              <p>"Dengan test ini otaku menjadi panas"</p>
            </div>
            </div>

            <div class="item">
            <center><img src="img/t1.jpg"></center>
            <div class="carousel-caption">
              <h1>Albert</h1>
              <p>"Ganu inyong raisa jawa tapi setelah test ini Iam Can Speak English"</p>
            </div>
            </div>

            <div class="item">
            <center><img src="img/t1.jpg"></center>
            <div class="carousel-caption">
              <h1>Budi</h1>
              <p>"Dengan ini keluarga budi sudah tidak masuk di soal"</p>
            </div>
            </div>
          </div>

          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div><br/><br/><br/>
	</div>
	<!--contact-->
	<div id="contact" class="contact">
		<div class="container">
			<div class="row">
			<h1>CONTACT US</h1>
			<div class="col-md-4"></div>
			<div class="col-md-4"><form role="form">
  				<div class="form-group">
    				 <input type="text" class="form-control" id="namee" placeholder="Enter Name"><br/>
    				 <input type="text" class="form-control" id="pass" placeholder="Address"><br/>
    				 <input type="text" class="form-control" id="pass" placeholder="Email"><br/>
    				 <button type="submit" class="btn btn-success">SUBMIT</button>
  				</div>
		    </form>
		    	<p>&copy;Copyrigth 2016 All Right Reserved</p>
		    </div>
			<div class="col-md-4"></div>
			</div>
		</div>
	</div>
</body>
<script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</html>
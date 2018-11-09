<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Input Kerjaan</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/stylish-portfolio.min.css" rel="stylesheet">

  </head>
 
<body>
	<a href="index.html">Go to Home</a>
	<br/><br/>
 
	<!-- <form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>Kerjaan</td>
				<td><input type="text" name="kerjaan"></td>
			</tr>
			<tr> 
				<td>Data Diperlukan</td>
				<td><input type="text" name="data"></td>
			</tr>
			<tr> 
				<td>Target Selesai</td>
				<td><input type="text" name="target"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form> -->
	
	<?php
 
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$name = $_POST['kerjaan'];
		$email = $_POST['data'];
		$mobile = $_POST['target'];
		
		// include database connection file
		include_once("config.php");
				
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO users(name,email,mobile) VALUES('$name','$email','$mobile')");
		
		// Show message when user added
		echo "User added successfully. <a href='job.php'>View Pekerjaan</a>";
	}
	?>
	<section class="content-section bg-primary text-white text-left" id="services">
      <div class="container">
        <div class="content-section-heading">
         <!--  <h3 class="text-secondary mb-0">Services</h3>
          <h2 class="mb-5">Motivasi Kerja</h2>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
            <span class="service-icon rounded-circle mx-auto mb-3">
              <i class="icon-screen-smartphone"></i>
            </span>
           </div>
       </div> -->
       <form action="add.php" method="post" name="form1">
		<table width="75%" border="0">
			<tr> 
				<td>Kerjaan </font></td>
				<td><input type="text" name="kerjaan" size="140px"></td>
			</tr>
			<tr> 
				<td>Data Diperlukan</td>
				<td><input type="text" name="data" size="140px"></td>
			</tr>
			<tr> 
				<td>Target Selesai</td>
				<td><input type="text" name="target" size="70px"></td>
			</tr>
			<tr> 
				<td></td>
				<td><!-- <button type="button" class="btn btn-default" value="add" name="Submit">ADD</button> --><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
   </div>
</section>
	<div class="row">
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
              <a class="navbar-brand" href="#"></a>
          </div>
          <ul class="nav navbar-nav">
              <li class="active"><a href="#"></a></li>
              <li><a href="job.php"> Back </a>
              <a href="#">Page 2</a>
              <a href="#">Page 3</a>
              <a href="#">Page 4</a> </li>
          </ul>
        </div>
    </nav>
    </div>
	<footer class="footer text-center">
      <div class="container">
        <ul class="list-inline mb-5">
          <li class="list-inline-item">
            <a class="social-link rounded-circle text-white mr-3" href="#">
              <i class="icon-social-facebook"></i>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="social-link rounded-circle text-white mr-3" href="#">
              <i class="icon-social-twitter"></i>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="social-link rounded-circle text-white" href="#">
              <i class="icon-social-github"></i>
            </a>
          </li>
        </ul>
        <p class="text-muted small mb-0">Copyright &copy; rons'2018</p>
      </div>
    </footer>

    <!-- Scroll to Top Button
    <a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/stylish-portfolio.min.js"></script>
</body>
</html>
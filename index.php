<?php

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=100">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Cotizador de Productos Online</title>
   <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
 
 <body background="./img/bg.jpg">
   <style> 
div {
 border-radius: 50px;
  
}
</style>
    <div class="container">
		 
				
	<nav class="navbar navbar-expand-lg navbar-primary bg-primary w-100 fixed-right" id="nav-p">
			<div class="row-fluid">
			<div class="col-md-12">
			<img src="./img/logo.png">
			
			
	
		<div align="right" >

		
					
			<form class="form-inline my-2 my-lg-0"  >

				
					<a href="#" class="btn btn-info animated pulse" data-toggle="modal" data-target="#exampleModal" >Registrate&nbsp;&nbsp;&nbsp;<i class="fas fa-user-plus"></i></a>&nbsp;&nbsp;&nbsp;
					<a href="#" id="login-btn" onclick="openNav()" class="btn btn-success animated tada">Ingresa&nbsp;&nbsp;&nbsp;<i class="fas fa-sign-in-alt"></i></a>
			
						
			</form>
			<br>
		</div>
		<div align="center" >

		
					
			<form class="form-inline my-2 my-lg-0"  >

				
					<a href="./indexcotizar.php" class="btn btn-danger btn-lg btn-block" >Cotiza YA!!&nbsp;&nbsp;&nbsp;<i class="fas fa-user-plus"></i></a>&nbsp;&nbsp;&nbsp;
					
			
						
			</form>
			<br>
		</div>
		




	</nav>
	
<div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="./img/r1.png" class="d-block w-100" alt="bootstrap" 
                                width="620px" height="350px">
                            </div>
                            <div class="carousel-item">
                                <img src="./img/r2.png" class="d-block w-100" alt="..." 
                                width="620px" height="350px">
                            </div>
                            <div class="carousel-item">
                                <a href="https://developer.mozilla.org/es/docs/Web/JavaScript" target="_blanck">
                                    <img src="./img/r3.jpg" class="d-block w-100" alt="..." 
                                        width="620px" height="350px">
                                </a>
                                
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
     
  </body>
</html>
<?php


$conectar = mysqli_connect("localhost","root","");
    if(!$conectar)
    {
        echo"Error al conectar con la base de datos";
    }
	
	$email = $_POST['email'];
	$nombre = $_POST['nombre'];
	;

    $datab="registro";
    $db=mysqli_select_db($conectar,$datab);

    if(!$db){
        echo"Hubo un error";
    }
    else{
        echo"";
        }
	
    $sql="INSERT INTO usuarios (email,nombre)
     VALUES('$email','$nombre')";

    $ejecutar=mysqli_query($conectar,$sql);

    if(!$ejecutar){
        echo"Hubo un error";
    }
    else{
        echo"";
        }
       
        
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <title>Closet de Maf-Contactanos</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="vendor/jquery/boton.js">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/tooplate-main.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/flex-slider.css">
    <link rel="stylesheet" href="assets/css/botones.css">
    <link rel='stylesheet' href="assets/css/estilos.css">
  </head>

  <body>
    
    <!-- Pre Header -->
    <div id="pre-header">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <span>Hay detalles que roban sonrisas e invaden corazones y en Closet de Maf seguro lo encontrar??s.</span>
          </div>
        </div>
      </div>
    </div>
    

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
  <div class="container">
    <a class="navbar-brand" href="#"><img src="assets/images/header-logo.png" alt="" ></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.html">Home
            <span class="sr-only"></span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="products.html">Productos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="entregas.html">Entregas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.html">Nosotros</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.html">Contactanos</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

    <!-- Page Content -->
    <!-- About Page Starts Here -->
    <div class="contact-page">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <div class="line-dec"></div>
              <h1>Contactanos</h1>
            </div>
          </div>
          <div class="col-md-6">
            <div id="map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d940.3267191988714!2d-99.11275227083038!3d19.48542866347341!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f983324f73ef%3A0x96bde47a73797de8!2sFrancisco%20Echeverr%C3%ADa%2021%2C%20Mart%C3%ADn%20Carrera%2C%20Gustavo%20A.%20Madero%2C%2007070%20Ciudad%20de%20M%C3%A9xico%2C%20CDMX!5e0!3m2!1ses!2smx!4v1651094994167!5m2!1ses!2smx" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
         
          <div class="col-md-6">
            <div class="right-content">
              <div class="container">
                <form action="registrobd.php" method="post">
                  <div class="row">
                    <div class="col-md-6">
                      <fieldset>
                        <input name="email" type="text" class="form-control" id="email" placeholder="Email..." required="">
                      </fieldset>
                    </div>
                    <div class="col-md-6">
                      <fieldset>
                        <input name="nombre" type="text" class="form-control" id="nombre" placeholder="Nombre..." required="">
                      </fieldset>
                    </div>
                    
                    
                    <div class="col-md-12">
                      <fieldset>
                        <button type="submit" id="form-submit" class="button">Ok</button>
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                      <div class="share">
                        <h6>Contactanos: <span><a href="https://www.facebook.com/ClosetdeMaf"><i class="fa fa-facebook"></i></a><a href="#"><a href="https://www.instagram.com/closet_de_maf/"><i class="fa fa-instagram"></i></a></span></h6>
                        <h7><i class="bi bi-envelope-fill">  closetdemaf@gmail.com</i></h7>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- boton flotante -->
<div class="container2">
  <input type="checkbox" id="btn-mas">
  <div class="redes">
      <a href="https://www.facebook.com/ClosetdeMaf" class="fa fa-facebook"></a>
      <a href="https://www.instagram.com/closet_de_maf/" class="fa fa-instagram"></a>
  </div>
  <div class="btn-mas">
      <label for="btn-mas" class="fa fa-plus"></label>
  </div>
</div>
    
    <div class="alert alert-info" role="alert">
      10% de descuento al registrarse! - 10% de descuento al registrarse! - 10% de descuento al registrarse! - 10% de descuento al registrarse! - 10% de descuento al registrarse! - 10% de 
    </div>
    <!-- About Page Ends Here -->

   
    
     <!-- Sub Footer Starts Here -->
     <div class="sub-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="copyright-text">
              <p>Copyright &copy; 2022 Closet de Maf
                
                - Design: <a rel="nofollow" href="https://www.facebook.com/ClosetdeMaf">Maf Cepeda</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Sub Footer Ends Here -->


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/flex-slider.js"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>


  </body>

</html>
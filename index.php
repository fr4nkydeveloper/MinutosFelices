<!DOCTYPE html>
<html lang="es">
<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-112416361-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-112416361-1');
</script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Bodas, esposos, felicitaciones">
<title>Minutos Felices</title>

<link href="css/bootstrap.css" rel="stylesheet"> 
<link href="css/animate.min.css" rel="stylesheet">
<link href="css/alertify.min.css" rel="stylesheet">
<link href="css/startup.css" rel="stylesheet">
<link href="css/sweetalert.min.css" rel="stylesheet">

<!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
<![endif]-->

<link rel="shortcut icon" href="images/minutos-felices.png">
<script src="js/pace.js"></script>

<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,600' rel='stylesheet' type='text/css'>
</head>
<body class="signup-v-layout">
	<div class="preloader"></div>

<main id="top" class="masthead" role="main">
<div class="container">
<div class="logo"> <a href="index-v-signup.html#"><img src="images/logo.png" alt="startup-logo" width="223" height="99"></a> </div>

<!--<h1>Agregale 30 minutos <span data-typer-targets="divertidos,modernos,emotivos">emotivos</span> <strong>a tu boda</strong> </h1>-->
<!--<h3>  </h3> -->
<!--<h1 class="tituloPrincipal">Ponle la cereza del pastel a tu boda</h1>
<h3>Sorprende a tus invitados y recibe un regalo increíble</h3>-->
<h2 class="tituloHeader">Llevamos la magia <strong>de tu boda</strong>  al mundo digital</h2>
<h3>Durante 30 minutos le damos un toque <span data-typer-targets="emotivo, especial, moderno"></span> a tu evento</h3>



<div class="row">
<div class="col-md-4 col-sm-12 col-md-offset-4 signupContainer">
<div class="signup-block"><form class="form" role="form" method="POST" name="registration" id="registerForm"
	action="https://minutosfelices.us17.list-manage.com/subscribe/post?u=c32564ffba00eca03bc95243f&amp;id=4c2b23c5d0">
<div class="form-group">
<input class="form-control input-lg" name="NOMBRE" type="text" placeholder="Nombre">
</div>
<div class="form-group">
<input class="form-control input-lg" name="EMAIL" type="email" placeholder="Email" >
</div>
<div class="form-group">
<input class="form-control input-lg" name="PHONE" type="tel" placeholder="Teléfono" >
</div>
<div class="form-group last">
 <button type="submit" class="btn btn-success btn-block btn-lg">PRUEBALO GRATIS</button>
</div>
</form>
<span id="result" class="alertMsg"></span> </div>
</div>
</div>

</div>

<section id="section03" class="demo">
  <a href="#caracteristicasProducto" id="featuresProducto"><span></span></a>
</section>

</main>

<div class="container" >

<div class="section-title">
<h2 id="caracteristicasProducto">¿Cómo funciona minutos felices?</h2>
<h4>Activamos la web-app en el evento durante 30 minutos y la magia comienza a suceder. </h4>
</div>
<section class="row features">

<div class="col-sm-6 col-md-4">
<div class="thumbnail"> <img src="images/flat-feature-icon-1.png" alt="analytics-icon">
<div class="caption">
<h3>1. Recibe amor</h3>
<p class="description-features"> Tus invitados suben felicitaciones 
y fotos desde su smartphone utilizando minutos felices</p>
</div>
</div>
</div>

<div class="col-sm-6 col-md-4">
<div class="thumbnail"> <img src="images/flat-feature-icon-2.png" alt="analytics-icon">
<div class="caption">
<h3>2. Sorprendete</h3>
<p class="description-features">Las felicitaciones y fotos se van mostrando en la pantalla principal del evento formando un collage espectacular</p>
</div>
</div>
</div>

<div class="col-sm-12 col-md-4">
<div class="thumbnail"> <img src="images/flat-feature-icon-3.png" alt="analytics-icon">
<div class="caption">
<h3>3. Te mandamos tu regalo</h3>
<p class="description-features">Llegará a tu casa un libro impreso personalizado con las felicitaciones y fotos generadas desde minutos felices </p>
</div>
</div>
</div>

</section>

</div>

<div class="container" id="explore">

<div class="flexApp">

<div class="app">
<img src="images/app.png" class="animated infinite bounce">  
</div>

<div class="tv">  
<img src="images/app.png" class="animated infinite pulse">  
</div>

<div class="book">
<img src="images/app.png" class="animated infinite swing">  
</div>

</div>

</div> <!--Container -->


<main class="footercta" role="main">
<div class="container">

<h1>We love <strong>weddings</strong> <br>
and we love <strong>technology</strong></h1>

<div class="row">
<div class="col-md-12 breath text-center"> <a href="#top" class="btn btn-success btn-lg" id="footerBtn">PRUEBALO GRATIS</a> </div>
</div>
</div>
</main>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/easing.js"></script>
<script src="js/typer.js"></script>
<script src="js/alertify.min.js"></script>
<script src="js/jquery.validate.js"></script>
<script src="js/sweetalert.min.js"></script> 


<script>

    $(function () {
      $('[data-typer-targets]').typer();
    });

    $(function() {
  $('#featuresProducto').on('click', function(e) {
		e.preventDefault();
		$('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top}, 500, 'linear');
	  });
	});

    $(function() {
	  $('#footerBtn').on('click', function(e) {
		e.preventDefault();
		$('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top}, 700, 'linear');
	  });
	});

</script>

<script>

$(document).ready(function(){
	
	if (<?php echo array_key_exists('MAILCHIMP_SIGNUP', $_POST) ? 'true': 'false' ?>) {
		swal("Gracias por registrarte!", "Te hemos enviado un correo electrónico", "success");
	}

  $('#registerForm').validate({

     rules: {
      NOMBRE: {
        required: true
      },
      EMAIL: {
        required: true,
        email: true
      }
    }, 

    messages:{
      NOMBRE: {
        required: "Ingresa tu nombre"
      },
      EMAIL: {
        required: "Ingresa un email válido"
      }
    },


    invalidHandler: function(event, validator) {
    // 'this' refers to the form
  

      var errors = validator.numberOfInvalids();
      if (errors) {
        alertify.error('Por favor revisa tus datos');
      } 
    },

    submitHandler: function(form) {
      form.submit();
    }

  });

});

</script>


</body>
</html>

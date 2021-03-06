<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AutoSoporteTI</title>
  <!-- Tell the browser to be responsive to screen width -->

  <link rel="icon" href="vistas/img/plantilla/logo_sencillo.png">

    <!--===========================================
  =            PRLUGINS DE CSS            =
  ============================================-->

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="vistas/bower_components/bootstrap/dist/css/bootstrap.min.css">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="vistas/bower_components/font-awesome/css/font-awesome.min.css">

  <!-- Ionicons -->
  <link rel="stylesheet" href="vistas/bower_components/Ionicons/css/ionicons.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="vistas/dist/css/AdminLTE.css">

  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="vistas/dist/css/skins/_all-skins.min.css">

      <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">


  <!--===========================================
  =            PRLUGINS DE JAVASCRIP            =
  ============================================-->
  

 <!-- jQuery 3 -->
 <script src="vistas/bower_components/jquery/dist/jquery.min.js"></script>

 <!-- Bootstrap 3.3.7 -->
 <script src="vistas/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

  <!-- FastClick -->
 <script src="vistas/bower_components/fastclick/lib/fastclick.js"></script>

 <!-- AdminLTE App -->
 <script src="vistas/dist/js/adminlte.min.js"></script>

 <!-- Fontawesome -->
 <script src="https://kit.fontawesome.com/5cd8bf78dd.js" crossorigin="anonymous"></script>

 
 <!--====  CUEPO DEL DOCUMENTO   ====-->

</head>
<body class="hold-transition skin-blue sidebar-collapse sidebar-mini login-page">




  <?php

  if(isset($_SESSION["iniciarsesion"]) && $_SESSION["iniciarsesion"] == "ok"){

  echo '<div class="wraper">';

  /*================================
  =          CABEZOTE            =
  ================================*/   
  
      include"modulos/cabezote.php";

  /*================================
  =          MENU         =
  ================================*/

    include"modulos/menu.php";

  /*================================
  =          INICIO       =
  ================================*/
  if(isset($_GET['ruta'])){
    if($_GET['ruta'] == "inicio" ||
       $_GET['ruta'] == "cliente" ||
       $_GET['ruta'] == "caso" ||
       $_GET['ruta'] == "revisar" ||
       $_GET['ruta'] == "tecnico" ||
       $_GET['ruta'] == "usuario" ||
       $_GET['ruta'] == "factura"  ) {

      include"modulos/".$_GET['ruta'].".php";


    }else{

      include "modulos/404.php";
    }
  } else{

    include "modulos/inicio.php";

  }    

  /*================================
  =          footer       =
  ================================*/

    include"modulos/footer.php";


    echo '</div>';

  } else {

    include"modulos/login.php";

  }
    
  ?>
  }
 

 
</div>
<!-- ./wrapper -->

<script src="vistas/js/plantilla.js"></scrip>script
</body>
</html>

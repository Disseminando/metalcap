<?php require_once('Connections/con01.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

//consulta cargo
mysql_select_db($database_con01, $con01);
$query_cs_cargo = "SELECT cargo_id, cargo_nome FROM cargo ORDER BY cargo_nome ASC";
$cs_cargo = mysql_query($query_cs_cargo, $con01) or die(mysql_error());
$row_cs_cargo = mysql_fetch_assoc($cs_cargo);
$totalRows_cs_cargo = mysql_num_rows($cs_cargo);

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>

  <!-- Global site tag (gtag.js) - Google Analytics -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-72548584-1"></script>
      <script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
      <script src="SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-72548584-1');
      </script>

  
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MetalCap</title>
  <meta content="Compramos aluminio, cobre, ferro, chumbo, offset, motores, radiadores e sucatas em geral." name="description">

  <meta content="coleta de sucata, reciclagem taguatinga, reciclagem brasilia, prensa de sucata, compra de cobre, compra de ferro, compra de aluminio, compra de zinco, compra de sucata, sucata brasilia, sucata taguatinga, aluminio, cobre, ferro, perfil, telhas de aço, offset, motor, radiador" name="keywords">

  <meta name="robots" content="index, follow"> 
  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

<link href="SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto">Metalcap</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="assets/img/logo.png" alt=""></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="index.php">Inicio</a></li>
          <li><a href="index.php">A Empresa</a></li>
          <li><a href="index.php">Produtos</a></li>
          <li><a href="administra.php">Administra</a></li>
          <li><a href="index.php">Contato</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Intro Section ======= -->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active">
            <div class="carousel-background"><img src="assets/img/intro-carousel/1.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Coleta Sucata</h2>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="assets/img/intro-carousel/2.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Coleta Sucata</h2>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="assets/img/intro-carousel/3.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
               <h2>Coleta Sucata</h2>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="assets/img/intro-carousel/4.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Coleta Sucata</h2>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="assets/img/intro-carousel/5.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Prensa Sucatas</h2>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="assets/img/intro-carousel/6.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Coleta Sucatas</h2>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="assets/img/intro-carousel/7.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Coleta Sucatas</h2>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- End Intro Section -->

  <main id="main">

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="section-bg wow fadeInUp">      

      <div class="container">
  <div class="row justify-content-center">
    <div class="col-12 col-md-8 col-lg-6 pb-5">


                    <!--Form with header-->
                    <form action="validaCurriculo.php" method="post" name="form1" enctype="multipart/form-data">
                        <div class="card border-primary rounded-0">
                            <div class="card-header p-0">
                                <div class="bg-info text-white text-center py-2">
                                    <h3><i class="fa fa-envelope"></i> Cadastra Curriculo</h3>
                                </div>
                            </div>
                            <div class="card-body p-3">

                                <!--Body-->
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-calendar text-info"></i></div>
                                        </div>
                                        <input type="text" class="form-control" id="arq_data" name="arq_data" value="<?php  
                                            $date = date('d/m/Y');
                                            echo $date;
                                            ?>" readonly required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                        </div>
                        <span id="sprytextfield1">
                                        <input type="text" class="form-control" id="arq_nome" name="arq_nome" placeholder="Seu nome" required>
                                        <span class="textfieldRequiredMsg">Um valor é necessário.</span></span></div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-phone text-info"></i></div>
                                        </div>
                                    <span id="sprytextfield2">
                                    <input type="text" class="form-control" id="arq_telefone" name="arq_telefone" placeholder="Seu telefone" required>
                                    <span class="textfieldRequiredMsg">Um valor é necessário.</span><span class="textfieldInvalidFormatMsg">Formato inválido.</span></span></div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-database text-info"></i></div>
                                        </div>
                                    <span id="spryselect1">
                                    <select name="arq_cargo" id="arq_cargo">
                                      <option value="0">Selecione...</option>
                                      <?php
										do {  
										?>
                                      <option value="<?php echo $row_cs_cargo['cargo_id']?>"><?php echo $row_cs_cargo['cargo_nome']?></option>
                                      <?php
										} while ($row_cs_cargo = mysql_fetch_assoc($cs_cargo));
										  $rows = mysql_num_rows($cs_cargo);
										  if($rows > 0) {
											  mysql_data_seek($cs_cargo, 0);
											  $row_cs_cargo = mysql_fetch_assoc($cs_cargo);
										  }
										?>
                                    </select>
                                  <span class="selectInvalidMsg">Selecione um item válido.</span><span class="selectRequiredMsg">Selecione um item.</span></span></div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-comment text-info"></i></div>
                                        </div>
                                        <input type="file" class="form-control" id="arq_curriculo" name="arq_curriculo" placeholder="Seu curriculo" required>
                                    </div>
                                </div>

                                <div class="text-center">
                                    <input type="submit" value="Enviar" class="btn btn-info btn-block rounded-0 py-2">
                                </div>
                            </div>

                        </div>
                    </form>
                    <!--Form with header-->


                </div>
  </div>
</div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h4></h4>
            <img src="assets/img/logo03.png" alt="Metalcap" title="Metalcap">
          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4></h4>
            <a href="#" target="_blank"><img src="assets/img/portfolio/vagas01.png" alt="Vagas de Emprego" title="Vagas de Emprego" width="256" height="155"></a>
          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4></h4>
            <a href="#" target="_blank"><img src="assets/img/portfolio/curriculo.png" alt="Curriculo" title="Curriculo" width="256" height="155"></a>
          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4></h4>
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="assets/img/portfolio/gerador02.png" alt="">
                  <h5>Gerador Elétrico 330Kva</h5>
                  <h6 style="color: red; padding-top: 1px">R$55.000,00</h6>
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="assets/img/portfolio/geradordiesel02.png" alt="">
                  <h5>Gerador Diesel 15Kva</h5>
                  <h6 style="color: red; padding-top: 1px">R$8.000,00</h6>
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="assets/img/portfolio/geradoreletrico04.png" alt="">
                  <h5>Gerador Elétrico 400Kva</h5>
                  <h6 style="color: red; padding-top: 1px">R$75.000,00</h6>
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
    </div>

    <div class="container">
      <div class="copyright" style="color: #012f61">
        &copy; Desenvolvido por: <strong><a href="https://www.facebook.com/antonioborgesti2019/" target="_blank"><font color="white">&nbspAMB Tecnologia</font></a></strong>. Todos os direitos reservados.
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Vendor JS Files -->
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/wow/wow.min.js"></script>
<script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="assets/vendor/counterup/counterup.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/venobox/venobox.min.js"></script>
<script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="assets/vendor/superfish/superfish.min.js"></script>
<script src="assets/vendor/hoverIntent/hoverIntent.js"></script>
<script src="assets/vendor/jquery-touchswipe/jquery.touchSwipe.min.js"></script>

  <!-- Template Main JS File -->
<script src="assets/js/main.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "custom", {pattern:"(xx)xxxxx-xxxx", validateOn:["change"], useCharacterMasking:true});
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1", {invalidValue:"0", validateOn:["blur"]});
</script>
</body>

</html>
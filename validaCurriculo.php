<!DOCTYPE html>
<html lang="pt-br">

<head>

  <!-- Global site tag (gtag.js) - Google Analytics -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-72548584-1"></script>
      <script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
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

<script>
  window.setTimeout("location.href='index.php'",5000)
</script>

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
          <li><a href="#">Administra</a></li>
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
          <div class="row">
          <div class="col">         
                  <?php 

                  $script = EOT
                  function validaCaptcha(){
                    if(grecaptcha.getResponse() == ""){
                        alert("Favor marcar o Captcha!");
                        window.location("index.php")
                        return false;
                  }
                  EOT;
     								
									if(isset($_FILES['arq_curriculo'])){
									
									$data = $_POST['arq_data'];
									$data = explode("/", $data);
									$data = $data[2]."-".$data[1]."-".$data[0];
									$nome = $_POST['arq_nome'];	
									$telefone = $_POST['arq_telefone'];
									$cargo = $_POST['arq_cargo'];
									$arquivo = $_FILES['arq_curriculo']['name'];
									$diretorio = "acervo/";
									
									// Pasta onde o arquivo vai ser salvo
									$_UP['pasta'] = 'acervo/';
									 
									// Tamanho máximo do arquivo (em Bytes)
									$_UP['tamanho'] = 1024 * 1024 * 10; // 10Mb
									 
									// Array com as extensões permitidas
									$_UP['extensoes'] = array('pdf', 'PDF');
									 
									// Renomeia o arquivo? (Se true, o arquivo será salvo como .jpg e um nome único)
									$_UP['renomeia'] = false;
									 
									// Array com os tipos de erros de upload do PHP
									$_UP['erros'][0] = 'Não houve erro';
									$_UP['erros'][1] = 'O arquivo no upload é maior do que o limite do PHP';
									$_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especifiado no HTML';
									$_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
									$_UP['erros'][4] = 'Não foi feito o upload do arquivo';
									 
									// Verifica se houve algum erro com o upload. Se sim, exibe a mensagem do erro
									if ($_FILES['arq_curriculo']['error'] != 0) {
									die("Não foi possível fazer o upload, erro:<br />" . $_UP['erros'][$_FILES['arq_curriculo']['error']]);
									exit; // Para a execução do script
									}
									 
									// Caso script chegue a esse ponto, não houve erro com o upload e o PHP pode continuar
									 
									// Faz a verificação da extensão do arquivo
										 
									// Faz a verificação do tamanho do arquivo
									 // Verifica a extensão do arquivo	
									else if ($_FILES['arq_curriculo']['type']!="application/pdf") {
									   echo "Permitido apenas arquivo em PDF";
									}									
									else if ($_UP['tamanho'] < $_FILES['arq_curriculo']['size']){
									echo "O arquivo enviado é muito grande, envie arquivos de até 10Mb.";
									}
									// O arquivo passou em todas as verificações, hora de tentar movê-lo para a pasta
									else {
									// Primeiro verifica se deve trocar o nome do arquivo
									if ($_UP['renomeia'] == true) {
									// Cria um nome baseado no UNIX TIMESTAMP atual e com extensão .ppsx
									$nome_final = time().'.pdf';
									} else {
									// Mantém o nome original do arquivo
									$nome_final = $_FILES['arq_curriculo']['name'];
									}
									 
									// Depois verifica se é possível mover o arquivo para a pasta escolhida
									
									if (move_uploaded_file($_FILES['arq_curriculo']['tmp_name'], $diretorio.$nome_final)) {		
									
									// Upload efetuado com sucesso, exibe uma mensagem e um link para o arquivo
									
									include('Connections/insert_arquivo.php');
									 
									}
									}
								
									}
									?>
                
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

</body>

</html>
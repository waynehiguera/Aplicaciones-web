


<?php
if(!isset($_SESSION)) {
  session_start();
//session_destroy();




  if(!isset($_SESSION['usuarioId'])) header('Location: index_usr.php?authError=true');
}
include("conn/connLocalhost.php");

include("includes/utils.php");

function eliminar(){

}



?>
<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Site Metas -->
    <title>Inicio</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Design fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- FontAwesome Icons core CSS -->
    <link href="css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="style.css" rel="stylesheet">

    <!-- Animate styles for this template -->
    <link href="css/animate.css" rel="stylesheet">

    <!-- Responsive styles for this template -->
    <link href="css/responsive.css" rel="stylesheet">

    <!-- Colors for this template -->
    <link href="css/colors.css" rel="stylesheet">

    <!-- Version Marketing CSS for this template -->
    <link href="css/version/marketing.css" rel="stylesheet">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

    <div id="wrapper">
        <header class="market-header header">
            <div class="container-fluid">
                <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand" href="marketing-index.html"><img src="images/version/market-logo.png" alt=""></a>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav mr-auto"style=" position: relative; left: 254px;">
                            <li class="nav-item">
                                <a class="nav-link" href="index_usr.php">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="categoria.php">Categorias</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="marketing-category.html">Compras</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="marketing-contact.html">Contactanos</a>
                            </li>
                        </ul>
                        <form class="form-inline " style=" position: absolute; top: 19px; left: 1298px;">
                          <a class="btn btn-outline-success" href="log_out.php" >Cerrar sesion</a>

                        </form>
                    </div>
                </nav>
            </div><!-- end container-fluid -->
        </header><!-- end market-header -->

        <div class="page-title db">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <h2> Bienvenido <small class="hidden-xs-down hidden-sm-down">Usted a iniciado sesion. </small></h2>
                    </div><!-- end col -->
                    <div class="col-lg-4 col-md-4 col-sm-12 hidden-xs-down hidden-sm-down">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>

                        </ol>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end page-title -->

        <section class="section lb">
          
        </section>

        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                        <div class="widget">
                            <h2 class="widget-title">Productos populares</h2>
                            <div class="blog-list-widget">
                                <div class="list-group">
                                    <a href="marketing-single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                        <div class="w-100 justify-content-between">
                                            <img src="https://cdn.shopify.com/s/files/1/0061/8826/9657/products/16993_bff7f485-819d-4a07-b6e0-fdbcd10b9330.jpg?v=1571713731" alt="" class="img-fluid float-left">
                                            <h5 class="mb-1">Zapatos Flexi negros (Hombre)</h5>
                                            <small>Precio: $526 MXN</small>
                                            <span class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
                                        </div>
                                    </a>

                                    <a href="marketing-single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                        <div class="w-100 justify-content-between">
                                            <img src="https://http2.mlstatic.com/blusa-azul-massimo-dutti-D_NQ_NP_495905-MLM25127882119_102016-F.jpg" alt="" class="img-fluid float-left">
                                            <h5 class="mb-1">Blusa Massimo Dutti azul</h5>
                                            <small>Precio: $342 MXN</small>
                                            <span class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
                                        </div>
                                    </a>

                                    <a href="marketing-single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                        <div class="w-100 last-item justify-content-between">
                                            <img src="https://http2.mlstatic.com/jeans-levis-dama-pana-pantalon-pana-levis-20-w-comodo-nuevo-D_NQ_NP_705744-MLM29336911624_022019-Q.jpg" alt="" class="img-fluid float-left">
                                            <h5 class="mb-1">Pantalones Levis oscuros (Hommbre)</h5>
                                            <small>Precio: $745 MXN</small>
                                            <span class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
                                        </div>
                                    </a>
                                </div>
                            </div><!-- end blog-list -->
                        </div><!-- end widget -->
                    </div><!-- end col -->

                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                        <div class="widget">
                            <h2 class="widget-title">Algunas opciones</h2>
                            <div class="blog-list-widget">
                                <div class="list-group">
                                    <a href="marketing-single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                        <div class="w-100 justify-content-between">
                                            <img src="https://closeando.com/files/product_images/000/093/393/original/6fc663e1014ca1646844e5cba90c65c6d88e6f406a9335b42a5b3c14d690c2ca.jpg" alt="" class="img-fluid float-left">
                                            <h5 class="mb-1">Vestido Calvin Klein rojo</h5>
                                            <small>Precio: $240 MXN</small>
                                        </div>
                                    </a>

                                    <a href="marketing-single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                        <div class="w-100 justify-content-between">
                                            <img src="https://http2.mlstatic.com/tacones-clemence-anne-klein-como-nuevos-mujer-morados-t6-D_NQ_NP_800811-MLM20650389530_032016-Q.jpg" alt="" class="img-fluid float-left">
                                            <h5 class="mb-1">Tacones morados Anne Klein</h5>
                                            <small>Precio: $334 MXN</small>
                                        </div>
                                    </a>

                                    <a href="marketing-single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                        <div class="w-100 last-item justify-content-between">
                                            <img src="https://static.ellahoy.es/ellahoy/fotogallery/1200X0/395759/blusa-verde-dvf.jpg" alt="" class="img-fluid float-left">
                                            <h5 class="mb-1">Blusa verde esmeralda Cortefiel</h5>
                                            <small>Precio: $382 MXN</small>
                                        </div>
                                    </a>
                                </div>
                            </div><!-- end blog-list -->
                        </div><!-- end widget -->                   </div><!-- end col -->

                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                        <div class="widget">
                            <h2 class="widget-title">Nuestros productos:</h2>
                            <div class="link-widget">
                                <ul>
                                    <li><a href="#">Zapatos <span>(21)</span></a></li>
                                    <li><a href="#">Pantalones <span>(15)</span></a></li>
                                    <li><a href="#">Blusas <span>(31)</span></a></li>
                                    <li><a href="#">Vestidos <span>(22)</span></a></li>
                                </ul>
                            </div><!-- end link-widget -->
                        </div><!-- end widget -->

                    </div><!-- end col -->
                </div><!-- end row -->
                <div class="row">
                    <div class="col-md-12 text-center">
                        <br>
                        <br>
                        <div class="copyright">&copy; Markedia. Design: <a href="http://html.design">HTML Design</a>.</div>
                    </div>
                </div>
            </div><!-- end container -->
        </footer><!-- end footer -->

        <div class="dmtop">Scroll to Top</div>

    </div><!-- end wrapper -->

    <!-- Core JavaScript
    ================================================== -->
    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/animate.js"></script>
    <script src="js/custom.js"></script>

</body>
</html>

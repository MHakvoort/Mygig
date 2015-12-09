<DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Blank | Creative - Bootstrap 3 Responsive Admin Template</title>

    <!-- Bootstrap CSS -->
    <link href="content/css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="content/css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="content/css/elegant-icons-style.css" rel="stylesheet" />
    <link href="content/css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="content/css/style.css" rel="stylesheet">
    <link href="content/css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
    <script src="scripts/js/html5shiv.js"></script>
    <script src="scripts/js/respond.min.js"></script>
    <script src="scripts/js/lte-ie7.js"></script>
    <![endif]-->
  </head>
  <body>
  <!-- container section start -->
  <section id="container" class="">

      <?php require_once('views/topmenu.php'); ?>

      <?php require_once('views/sidebar.php'); ?>

      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <div class="row">
                  <div class="col-lg-12">
                      <h3 class="page-header"><i class="fa fa fa-bars"></i> Pages</h3>
                      <ol class="breadcrumb">
                          <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                          <li><i class="fa fa-bars"></i>Pages</li>
                          <li><i class="fa fa-square-o"></i>Pages</li>
                      </ol>
                  </div>
              </div>
              <!-- page start-->
              <?php require_once('routes.php'); ?>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
  </section>
  <!-- container section end -->
  <!-- javascripts -->
  <script src="scripts/js/jquery.js"></script>
  <script src="scripts/js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="scripts/js/jquery.scrollTo.min.js"></script>
  <script src="scripts/js/jquery.nicescroll.js" type="text/javascript"></script><!--custome script for all page-->
  <script src="scripts/js/scripts.js"></script>


  </body>
<html>
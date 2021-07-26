<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Covid-19 Testing Management System</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="static/img/favicon.png" rel="icon">
  <link href="static/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="static/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="static/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="static/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="static/vendor/owl.carousel/static/owl.carousel.min.css" rel="stylesheet">
  <link href="static/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="static/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="static/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: BizLand - v1.2.1
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-envelope"></i> <a href="mailto:contact@example.com">contact@example.com</a>
        <i class="icofont-phone"></i> +1 5589 55488 55
      </div>
      <div class="social-links">
        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="#" class="skype"><i class="icofont-skype"></i></a>
        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto">COVID19<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="static/img/logo.png" alt=""></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.php">Home</a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

    <section>
    <hr />
    <hr />
    <hr />
    <hr />
    <hr />
    <div class="container">

            <div class="section-title">
            <h2>India StateWise Covid Cases</h2>
            </div>

            <div class="table-responsive">
            <table class="table table-striped table-bordered text-center">
                <thead class="thead-dark">
                    <tr>
                        <th>State</th>
                        <th>Confirmed </th>
                        <th>Active</th>
                        <th>Recovered</th>
                        <th>Deaths</th>
                    </tr>
                </thead>
                <?php
                    $data=file_get_contents('https://api.covid19india.org/data.json');
                    $coronalive=json_decode($data,true);
                    $count_states=count($coronalive['statewise']);
                    $i=1;
                    while($i< $count_states){
                        ?>
                        <tr>
                        <td><?php echo $coronalive['statewise'][$i]['state']?></td>
                        <td><?php echo $coronalive['statewise'][$i]['confirmed']?></td>
                        <td><?php echo $coronalive['statewise'][$i]['active']?></td>
                        <td><?php echo $coronalive['statewise'][$i]['recovered']?></td>
                        <td><?php echo $coronalive['statewise'][$i]['deaths']?></td>
                        </tr>
                        <?php
                        $i++;
                    }

                
                ?>
            </table>
            </div>
    </div>
    </section>

  <!-- ======= Footer ======= -->
  

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="static/vendor/jquery/jquery.min.js"></script>
  <script src="static/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="static/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="static/vendor/php-email-form/validate.js"></script>
  <script src="static/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="static/vendor/counterup/counterup.min.js"></script>
  <script src="static/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="static/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="static/vendor/venobox/venobox.min.js"></script>
  <script src="static/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="static/js/main.js"></script>

</body>

</html>
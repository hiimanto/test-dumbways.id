<?php
	include"config/koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Membuat Layout Website Bootstrap</title>

    <!-- Bootstrap -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link type="text/css" href="assets/style.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
        <!-- Bagian Header -->
        <div class="row">
          <div class="col-md-12 header">
            <h1 class="logo">Dumbways.id</h1>
          </div>
        </div>

        <nav class="menus">
          <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Portfolio</a></li>
          </ul>
        </nav>


        <!-- End Bagian Header -->

        <!-- Bagian Wrapper 2 kolom -->
        <div class="row">
            <div class="col-md-8 articles">
               <!-- isi content -->
              
            </div>

            <div class="col-md-4 sidebar">
                <!-- isi sidebar -->
                <aside class="widgets">
                  <h3 class="widget-title">Latest Posts</h3>
                  <ul>
                      <li><a href="#">Lorem Ipsum</a></li>
                      <li><a href="#">Lorem Ipsum</a></li>
                      <li><a href="#">Lorem Ipsum</a></li>
                      <li><a href="#">Lorem Ipsum</a></li>
                      <li><a href="#">Lorem Ipsum</a></li>
                  </ul>
                </aside>
            </div>
        </div>
        <!-- End Bagian wrapper -->

        <!-- Bagian footer -->
        <div class="row">
            <div class="col-md-12 footer">
                <!-- isi footer -->
                <footer>
                  <p>&copy; 2018 Test-Dumbways.id</p>
                </footer>
            </div>
        </div>
        <!-- End Bagian footer -->
  </div>


    <!-- jQuery lokal -->
    <script src="assets/jquery/jquery.min.js"></script>
     <script src="assets/bootstrap/js/bootstrap.min.js"></script>

    <!-- Custom JS -->
    <script src="assets/custom.js"></script>
  </body>
</html>

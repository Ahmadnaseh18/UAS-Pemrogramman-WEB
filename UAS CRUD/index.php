<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <!--bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Datatables -->
    <link href="assets/datatables/dataTables.dataTables.css" rel="stylesheet">
    
    <!-- css-->
    <link href="assets/css/style2.css" rel="stylesheet">

    <style>
      html, body {
        height: 100%;
        display: flex;
        flex-direction: column;
        margin: 0;
      }

      body > * {
        flex-shrink: 0;
      }

      main {
        flex-grow: 1;
      }
    </style>

  </head>

  <body>
<!--
    <div class="background-container">
      <div class="image-section">
      </div>
    </div> 
-->


    <!-- Page Header-->
    <?php require "includes/pageHeader.php"
    ?>
    <!-- Page Header-->

    <header>
      <h1 class="text-center p-3">Daftar Kuliner Tradisional</h1>
    </header>
    
      <!-- Menu --> 
      <?php require "includes/navbar.php"
      ?>
      <!-- Menu -->

      <!-- Konten -->
    <div class="container mt-3">
          <?php require "includes/konten.php"?>
    </div>
      <!-- Konten -->

    <footer class="bg-dark p-3 mt-auto ">
      <div class="text-light text-center">
              Pemrogramman Web 1 UAS <?= date ("Y") ?> @ Ahmad Naseh Mujamal
      </div>
    </footer>
    
    <!-- Page Footer-->
    <?php require "includes/pageFooter.php"?>
    <!-- Page Footer-->


    <script src="assets/jquery-3.7.1.js"></script>
    <script src="assets/datatables/dataTables.js"></script>

    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script> new DataTable('#example'); </script>

  </body>
</html>
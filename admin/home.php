<?php 
  session_start();
  $id_user = $_SESSION['id_user'];
  $username = $_SESSION['username'];
  $status_user = $_SESSION['status_user'];

  if ($status_user!="admin") {
    echo "
      <script>
        window.location.href = 'index.php'
      </script>
    ";
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SEKOLAH HARAPAN | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/font-awesome-4.4.0/css/font-awesome.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="plugins/select2/select2.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
    <!-- DataTable -->
    <link rel="stylesheet" type="text/css" href="plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.min.css"/>

  </head>
  <body class="hold-transition skin-green sidebar-mini">
    <div class="wrapper">

      <?php
        include 'include/header.php';

        //Left side column. contains the logo and sidebar
        include 'include/menu.php';
      ?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <!-- <h1>
            Dashboard
            <small>Control panel</small>
          </h1> -->
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          <?php
            if ($_GET) {
              $page = $_GET['page'];
              include 'include/'.$page;
            } else {
              include 'include/content.php';
            }
          ?>

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <?php
        require 'include/footer.php';
      ?>

    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="plugins/jQueryUI/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- Select2 -->
    <script src="plugins/select2/select2.full.min.js"></script>
    <!-- DataTables -->
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- datepicker -->
    <script src="plugins/datepicker/bootstrap-datepicker.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script>
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
    </script>
    <script type="text/javascript">
      $(function(){
        //Initialize Select2 Elements
        $(".select2").select2();
        //Initialize datepicker Elements
        $("#datepicker").datepicker();
      });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js"></script>
    <script>
      $(".chosen").chosen();
    </script>
    <script>
        function validasiFile(){
            var inputFile = document.getElementById('file');
            var pathFile = inputFile.value;
            var ekstensiOk = /(.jpg|.jpeg|.png|.gif)$/i;
            if(!ekstensiOk.exec(pathFile)){
                alert('Silakan upload file yang memiliki ekstensi .jpeg/.jpg/.png/.gif');
                inputFile.value = '';
                return false;
            }else{
                //Pratinjau gambar
                if (inputFile.files && inputFile.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        document.getElementById('pratinjauGambar').innerHTML = '<img width="200" src="'+e.target.result+'"/>';
                    };
                    reader.readAsDataURL(inputFile.files[0]);
                }
            }
        }
    </script>
  </body>
</html>

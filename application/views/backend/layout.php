<!DOCTYPE html>
<html>
<head>
	<base href="<?php echo base_url(); ?>"></base>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $title ?></title>
  <link rel="icon" type="image/x-icon" href="public/images/iconu.png">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link href="<?php echo base_url() ?>/public/template/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url() ?>/public/template/css/sb-admin-2.min.css" rel="stylesheet">
    <script src="<?php echo base_url() ?>/public/template/vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?php echo base_url() ?>/public/template/js/demo/chart-area-demo.js"></script>
<script src="<?php echo base_url() ?>/public/template/js/demo/chart-pie-demo.js"></script>
    <script src="//cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
  <meta property="fb:app_id" content="659513967881060">
  
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->

  
   
</head>
<body id="page-top">
<div id="wrapper">
    <!-- Vung Header -->
    <?php $this->load->view('backend/modules/menu'); ?>


    <!-- ./Vung Header -->
    <?php $this->load->view('backend/modules/header'); ?>
    <?php 
    if(isset($com, $view))
    {
      $this->load->view('backend/components/'.$com.'/'.$view);
    }

    ?>

  </div><!-- ./wrapper -->
  <!-- jQuery 2.2.3 -->
 <!-- all js -->

 <script src="<?php echo base_url() ?>/public/template/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>/public/template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url() ?>/public/template/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url() ?>/public/template/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?php echo base_url() ?>/public/template/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo base_url() ?>/public/template/js/demo/chart-area-demo.js"></script>
    <script src="<?php echo base_url() ?>/public/template/js/demo/chart-pie-demo.js"></script>
    <script src="<?php echo base_url() ?>/public/template/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url() ?>/public/template/vendor/datatables/dataTables.bootstrap4.min.js"></script>


<!--  -->
</body>
</html>

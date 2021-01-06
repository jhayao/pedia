<?php include_once('head.php');
include_once("command/connection.php");
if(!isset($_SESSION['username']))
{
  header( "Location: login.php" );
}
?>

<body class="bg-theme bg-theme1">

  <!-- start loader -->
  <div id="pageloader-overlay" class="visible incoming">
    <div class="loader-wrapper-outer">
      <div class="loader-wrapper-inner">
        <div class="loader"></div>
      </div>
    </div>
  </div>
  <!-- end loader -->

  <!-- Start wrapper-->
  <div id="wrapper">

    <!--Start sidebar-wrapper-->
    <?php include('sidebar.php')?>
    <div class="clearfix"></div>

    <div class="content-wrapper">
      <div class="container-fluid">
        <!--Start Dashboard Content-->
      </div>
    </div>
  </div>

  <?php 
  include('theme.php');
  include('script.php');
  ?>
  
</body>
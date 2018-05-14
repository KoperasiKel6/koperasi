<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>KOPERASI SIMPAN PINJAM CERIA</title>

    <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="../assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="../assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="../assets/lineicons/style.css">    
    
    <!-- Custom styles for this template -->
    <link href="../assets/css/style.css" rel="stylesheet">
    <link href="../assets/css/style-responsive.css" rel="stylesheet">

    <script src="../assets/js/chart-master/Chart.js"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="../home" class="logo"><b>KOPERASI SIMPAN PINJAM CERIA</b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">

            </div>
            <div class="top-menu">
              <ul class="nav pull-right top-menu">
                    <li><a class="logout" href="login.html">Logout</a></li>
              </ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
                  <p class="centered"><a href="../home"><img src="../assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
                  <h5 class="centered">ADMIN</h5>
                    
                  <li class="mt">
                      <a  href="../home">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="../ctrNasabah">
                          <i class="fa fa-desktop" ></i>
                          <span>Data Anggota</span>
                          
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="../ctrpinjam">
                          <i class="fa fa-cogs"></i>
                          <span>Data Pinjaman</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a class="active" href="../ctrAngsuran" >
                          <i class="fa fa-book"></i>
                          <span>Data Angsuran</span>
                      </a>
                  </li>               
               <li class="sub-menu">
                      <a href="ctrUser" >
                          <i class="fa fa-book"></i>
                          <span>Data User</span>
                      </a>
                  </li>

              </ul>
              <!-- sidebar menu end-->
          </div>
          <section id="main-content">
      <section class="wrapper">
<div class="container">
     <?php
      $this->form_validation->set_error_delimiters('<div class="alert alert-warning" role="alert">', '</div>');
    ?>
    <?php echo validation_errors(); ?>
      <?php
        echo form_open('ctrAngsuran/tambah', array('class'=>'needs-validation', 'novalidate'=>'')); 
       ?>
       <h1>Tambah Angsuran</h1>
       <br></br>
       <table>
        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Nama Anggota</label>
          <div class="col-sm-10">
            <select name="id_anggota" class="form-control" required>
              <option value="">Pilih Nama Anggota</option>
              <?php foreach($data as $data): ?>
              <option value="<?php echo $data->id_anggota; ?>"><?php echo $data->nama_anggota; ?></option>
              <div class="invalid-feedback">Isi Id Anggota</div></td>
              <?php endforeach; ?>
            </select>
         </div>
        </div>
        <br></br>
        <br></br>
         <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Id Pinjaman</label>
          <div class="col-sm-10">
            <select name="id_pinjaman" class="form-control" required>
              <option value="">Pilih Id Pinjaman</option>
              <?php foreach($pinjam as $pinjam): ?>
              <option value="<?php echo $pinjam->id_pinjaman; ?>"><?php echo $pinjam->id_pinjaman; ?></option>
              <div class="invalid-feedback">Isi Id Pinjaman</div></td>
              <?php endforeach; ?>
            </select>
       </div>
        </div>
        <br></br>
        <br></br>

        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Tanggal Angsuran</label>
          <div class="col-sm-10">
            <input type="date" class= "form-control" name="tanggal_angsuran" value="<?php echo set_value('tanggal_angsuran') ?>" required>
            <div class="invalid-feedback">Isi Tanggal Angsuran</div></td>
          </div>
        </div>
        <br></br>
        <br></br>
        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Besar Angsuran</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="besar_angsuran" value="<?php echo set_value('besar_angsuran'); ?>" required>
            <div class="invalid-feedback">Isi Besar Angsuran</div></td>
          </div>
        </div>
        <br></br>
        <br></br>
        
          <center><input id="submitBtn" type="submit" name="simpan" value="simpan"></center>
        
      </table>
    </div>
</section>
</section>
 </body>

<script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/jquery-1.8.3.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="../assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="../assets/js/jquery.scrollTo.min.js"></script>
    <script src="../assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="../assets/js/jquery.sparkline.js"></script>


    <!--common script for all pages-->
    <script src="../assets/js/common-scripts.js"></script>
    
    <script type="text/javascript" src="../assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="../assets/js/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="../assets/js/sparkline-chart.js"></script>    
  <script src="../assets/js/zabuto_calendar.js"></script>  

  <link rel="stylesheet" href="<?php echo base_url() ?>assets/assets/css/bootstrap.min.css">
        
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/assets/css/custom.css">

        <script src="<?php echo base_url() ?>assets/assets/js/jquery-1.9.1.min.js"></script>

  <script src="<?php echo base_url() ?>assets/assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="<?php echo base_url() ?>assets/assets/js/holder.min.js"></script>

    <!-- Custom -->
    <script src="<?php echo base_url() ?>assets/assets/js/custom.js"></script>
  </body>
</html>
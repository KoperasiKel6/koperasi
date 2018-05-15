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
    <link href="<?php echo base_url() ?>assets/css/bootstrap.css" rel="stylesheet">
    
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/style-responsive.css" rel="stylesheet">

        <script src="<?php echo base_url() ?>assets/assets/js/jquery-1.9.1.min.js"></script>
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
            <a href="index.html" class="logo"><b>KOPERASI SIMPAN PINJAM CERIA</b></a>
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
              
                  <p class="centered"><a href="profile.html"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
                  <h5 class="centered">ADMIN</h5>
                    
                    <li class="mt">
                      <a  href="home">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="CtrNasabah">
                          <i class="fa fa-desktop" ></i>
                          <span>Data Anggota</span>
                          
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="ctrpinjam">
                          <i class="fa fa-cogs"></i>
                          <span>Data Pinjaman</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a class="active" href="ctrangsuran" >
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
      </aside>
       <section id="main-content">
      <section class="wrapper">
            <br></br>
      <h1>List Angsuran Koperasi Ceria</h1><br>
                             <td><a href='ctrAngsuran/tambah' class='btn btn-sm btn-info'>Tambah</a></td>
                             <br></br>
                             <br></br><div class="card-content table-responsive">
            <table id="dt-basic" class="table">
                <thead class="text-primary">
                    <th>Id Angsuran</th>
                    <th>Id Anggota</th>
                    <th>Id Pinjam</th>
                    <th>Tanggal Angsuran</th>
                    <th>Besar Angsuran</th>
                    <!-- <th>Sisa Angsuran</th> -->
                    <!-- <th>Aksi</th> -->
                </thead>

                <tbody>
                  <?php
                        foreach($angsuran as $i):
                              $id_angsuran=$i['id_angsuran'];
                              $id_anggota=$i['id_anggota'];
                              $id_pinjaman=$i['id_pinjaman'];
                              $tanggal_angsuran=$i['tanggal_angsuran'];
                              $besar_angsuran=$i['besar_angsuran'];
                              // $besar_pinjaman=$i['besar_pinjaman'];
                  ?>
                  <tr>
                        <td><?php echo $id_angsuran;?> </td>
                        <td><?php echo $id_anggota;?> </td>
                        <td><?php echo $id_pinjaman;?> </td>
                        <td><?php echo $tanggal_angsuran;?> </td>
                        <td><?php echo $besar_angsuran;?> </td>
                        <!-- <td><?php echo $besar_pinjaman;?></td> -->

                        
                        <!-- <td><a href='ctrAngsuran/delete/<?php echo $id_angsuran; ?>' class='btn btn-sm btn-danger'>Delete</a></td> -->
                  </tr>
                  <?php endforeach;?>
            </tbody>
        </table>
    </div>
    <link rel="stylesheet" href="<?php echo base_url()?>assets/assets/css/jquery.dataTables.min.css">
<script src="<?php echo base_url(). 'assets/assets/js/jquery.dataTables.min.js'?>"></script>
<script src="<?php echo base_url(). 'assets/assets/js/jquery.dataTables.bootstrap4.min.js'?>"></script>
<script >
         $(document).ready(function(){

        // Contoh inisialisasi Datatable tanpa konfigurasi apapun
        // #dt-basic adalah id html dari tabel yang diinisialisasi
        $('#dt-basic').DataTable();
    });
</script>

    <!-- js placed at the end of the document so the pages load faster -->
  <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/assets/css/bootstrap.min.css">
  </body>
</html>

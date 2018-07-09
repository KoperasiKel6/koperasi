    <?php $this->load->view('template/header'); ?>
    
        <script src="<?php echo base_url() ?>assets/assets/js/jquery-1.9.1.min.js"></script>
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
  </section>
</section>
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
        <?php $this->load->view('template/footer'); ?>
</html>

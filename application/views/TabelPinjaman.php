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
                      <a class="active" href="ctrpinjam">
                          <i class="fa fa-cogs"></i>
                          <span>Data Pinjaman</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="ctrangsuran" >
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
      <section class="wrapper">      <br></br>
      <h1>List Anggota Koperasi Ceria</h1><br>
                             <td><a href='ctrpinjam/tambah' class='btn btn-sm btn-info'>Tambah</a></td>
                             <br></br>
                             <br></br>
        <div class="card-content table-responsive">
            <table id="dt-basic" class="table">
                <thead class="text-primary">
                    <th>Id Anggota</th>
                    <th>Id Pinjaman</th>
                    <th>Besar Pinjaman</th>
                    <th>Sisa Pinjaman</th>
                    <th>Tanggal Pinjaman</th>
                    <th>Jatuh Tempo</th>
                    <th>Aksi</th>
                </thead>

                <tbody>
                  <?php
                        foreach($Pinjam as $i):
                              $id_anggota=$i['id_anggota'];
                              $id_pinjaman=$i['id_pinjaman'];
                              $besar_pinjaman=$i['besar_pinjaman'];
                              $sisa_angsuran=$i['sisa_angsuran'];
                              $tanggal_pinjaman=$i['tanggal_pinjaman'];
                              $tanggal_pelunasan=$i['tangga_pelunasan'];
                  ?>
                  <tr>
                        <td><?php echo $id_anggota;?> </td>
                        <td><?php echo $id_pinjaman;?> </td>
                        <td><?php echo $besar_pinjaman;?> </td>
                        <td><?php echo $sisa_angsuran;?> </td>
                        <td><?php echo $tanggal_pinjaman;?> </td>
                        <td><?php echo $tanggal_pelunasan;?> </td>
                        
                        <td><a href='ctrpinjam/delete/<?php echo $id_pinjaman; ?>' class='btn btn-sm btn-danger'>Delete</a></td>
                  </tr>
                  <?php endforeach;?>
            </tbody>
        </table>
    </div>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->
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

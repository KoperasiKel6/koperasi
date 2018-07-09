<?php $this->load->view('template/header'); ?>

<section id="main-content">
<section class="wrapper">

<div class="container">
<h1>FORM PEMINJAMAN</h1>
<br>
<br>
    <?php echo validation_errors(); ?>
    <?php
      $this->form_validation->set_error_delimiters('<div class="alert alert-warning" role="alert">', '</div>');
    ?>
      <?php
        echo form_open('Ctrpinjam/tambah', array('class'=>'needs-validation', 'novalidate'=>'')); 
       ?>
       
      <table>   
          <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Nama Anggota</label>
          <div class="col-sm-10">
            <select name="id_anggota" class="form-control" required>
              <option value="">Pilih Nama Anggota</option>
              <?php foreach($data as $pinjam): ?>
              <option value="<?php echo $pinjam->id_anggota; ?>"><?php echo $pinjam->nama_anggota; ?></option>
              <div class="invalid-feedback">Isi Nama Anggota</div></td>
              <?php endforeach; ?>
            </select>
            </div>
            </div>
        
        <br>
        <br>
        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Besar Pinjaman</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="besar_pinjaman" value="<?php echo set_value('besar_pinjaman'); ?>" required>
            <div class="invalid-feedback">Isi Besar Pinjaman</div>
          </div>
        </div>
        <br>
        <br>
        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Tanggal Pinjam</label>
          <div class="col-sm-10">
            <input type="date" class="form-control" name="tanggal_pinjaman" value="<?php echo set_value('tanggal_pinjaman'); ?>" required>
            <div class="invalid-feedback">Isi Tanggal Pinjam</div>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Tanggal Pelunasan</label>
          <div class="col-sm-10">
            <input type="date" class="form-control" name="tangga_pelunasan" value="<?php echo set_value('tangga_pelunasan'); ?>" required>
            <div class="invalid-feedback">Isi Tanggal Pelunasan</div>
          </div>
        </div>
        <tr>
          <td colspan="3"><input id="submitBtn" type="submit" name="simpan" value="simpan"></td>
        </tr>
      </table>
    </div>
  </section>
</section>

<?php $this->load->view('template/footer'); ?>
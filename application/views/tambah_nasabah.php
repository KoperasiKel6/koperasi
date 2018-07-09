<?php $this->load->view('template/header'); ?>

<div class="container">
  <?php
      $this->form_validation->set_error_delimiters('<div class="alert alert-warning" role="alert">', '</div>');
    ?>
    <?php echo validation_errors(); ?>
      <?php
        echo form_open_multipart('ctrNasabah/tambah', array('class'=>'needs-validation', 'novalidate'=>''));
       ?>
      <table>
        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Nama</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="nama" value="<?php echo set_value('nama_anggota'); ?>" required>
            <div class="invalid-feedback">Isi Nama</div>
          </div>
        </div>
        <br></br>
        <br></br>
        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Alamat Anggota</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="alamat" value="<?php echo set_value('alamat_anggota') ?>" required>
            <div class="invalid-feedback">Isi Alamat</div>
          </div>
        </div>
        <br></br>
        <br></br>
        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Tempat Lahir</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="tempat" value="<?php echo set_value('tempat_lahir_anggota') ?>" required>
            <div class="invalid-feedback">Isi Tempat Lahir</div>
          </div>
        </div>
        <br></br>
        <br></br>
        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Tanggal Lahir</label>
          <div class="col-sm-10">
            <input type="date" class="form-control" name="tanggal" value="<?php echo set_value('tanggal_lahir_anggota') ?>" required>
            <div class="invalid-feedback">Isi Tanggal Lahir</div>
          </div>
        </div>
        <br></br>
        <br></br>
        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Jenis Kelamin</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="jenis_kelamin" value="<?php echo set_value('jk_anggota') ?>" required>
            <div class="invalid-feedback">Isi Jenis Kelamin</div>
          </div>
        </div>
         <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Foto</label>
          <div class="col-sm-10">
            <input type="file" name="gambar" value="<?php echo set_value('gambar') ?>">
          </div>
        </div>
          
          <td colspan="3"><input id="submitBtn" type="submit" name="simpan" value="simpan"></td>
        </table>
      </div>


<?php $this->load->view('template/footer'); ?>
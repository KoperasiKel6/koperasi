<?php $this->load->view('template/header'); ?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>

</body>
</html>
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
<?php $this->load->view('template/footer'); ?>
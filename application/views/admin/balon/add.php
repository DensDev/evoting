
<?php 
//notifikasi error
echo validation_errors('<div class="alert alert-warning">','</div>');
if($this->session->flashdata('sukses')) 
{ 
	echo '<div class="alert alert-success">';
	echo $this->session->flashdata('sukses');
	echo '</div>'; 
} 
echo form_open(base_url('admin/balon/add'),' class="form-horizontal"');



 ?>
<div class="form-group">
	<label  class="col-md-2 control-label">Nama Bakal Calon</label>
		<div class="col-md-5">
			<input type="text" name="nama" class="form-control"  placeholder="Nama Bakal Calon" value="<?php echo set_value('nama')?>" required>
		</div>
</div>
<div class="form-group">
	<label  class="col-md-2 control-label"></label>
		<div class="col-md-5">
			<button class="btn btn-success btn-lg" name="submit" type="submit"><i class="fa fa-save"></i> Save
			</button>
		</div>
</div>
 <?php 

echo form_close();

  ?>
<?php 

//notifikasi error
echo validation_errors('<div class="alert alert-warning">','</div>');

echo form_open(base_url('admin/user/add'),' class="form-horizontal"');



 ?>
<div class="form-group">
	<label  class="col-md-2 control-label">Nama</label>
		<div class="col-md-5">
			<input type="text" name="nama" class="form-control"  placeholder="Nama" value="<?php echo set_value('nama')?>" required>
		</div>
</div>
<div class="form-group">
	<label  class="col-md-2 control-label">Username</label>
		<div class="col-md-5">
			<input type="text" name="username" class="form-control"  placeholder="Username" value="<?php echo set_value('username')?>" required>
		</div>
</div>
<div class="form-group">
	<label  class="col-md-2 control-label">Hak ases</label>
		<div class="col-md-5">
			<select name="akses_level" class="form-control">
				<option value="2">Peserta</option>
				<option value="3">Peninjau</option>
			</select>
		</div>
</div>
<div class="form-group">
	<label  class="col-md-2 control-label"></label>
		<div class="col-md-5">
			<button class="btn btn-success btn-lg" name="submit" type="submit"><i class="fa fa-save"></i> Save
			</button>
			<button class="btn btn-info btn-lg" name="submit" type="reset"><i class="fa fa-times"></i> Reset
			</button>
		</div>
</div>
 <?php 

echo form_close();

  ?>
<button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete-<?php echo $calon->id_calon?>">
<i class="fa fa-trash-o"></i> Delete
</button>


<div class="modal fade" id="delete-<?php echo $calon->id_calon?>">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Hapus Data Calon Ketua</h4>
      </div>
      <div class="modal-body">
        <div class="callout callout-warning">
	        <h4>WARNING!</h4>
	        	<h5>Yakin ingin menghapus Data ini? Data yang sudah dihapus tidak dapat dikembalikan</h5>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal"><i class="fa fa-times"></i>Close</button>
        <a href="<?php echo base_url('admin/balon/delete/'.$calon->id_calon)?>" class="btn btn-danger"><i class="fa fa-trash-o"></i> Delete</a>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
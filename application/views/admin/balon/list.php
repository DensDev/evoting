<p>
	<a href="<?php echo base_url('admin/balon/add')?>" class="btn btn-success btn-lg"><i class="fa fa-plus"></i> Add Bakal Calon</a>
</p>

<?php 

if($this->session->flashdata('sukses')) 
{ 
	echo '<div class="alert alert-success">';
	echo $this->session->flashdata('sukses');
	echo '</div>'; 
}

 ?>

 <table class="table table-bordered" id="example1">
 	<thead>
 		<tr>
 			<th>No</th>
 			<th>Nama</th>
 			<th>Action</th>
 		</tr>
 	</thead>
 	<tbody>
 		<?php $no = 1; foreach($balon as $balon) { ?>
 		<tr>
 			<td><?php echo $no++;?></td>
 			<td><?php echo $balon->nama;?></td>
 			<td>
 				<a href="<?php echo base_url('admin/balon/edit/'.$balon->id_balon)?>" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i> Edit</a>
                 <?php include('delete.php') ?>
            </td>
 		</tr>
 		<?php } ?>
 	</tbody>
 </table>
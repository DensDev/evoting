<p>
	<a href="<?php echo base_url('admin/user/add')?>" class="btn btn-success btn-lg"><i class="fa fa-plus"></i> Add User</a>
</p>

<?php 

if ($this->session->flashdata('sukses')) 
{
	echo '<p class="alert alert-success">';
	echo $this->session->flashdata('success');
	echo '</div>';
}

 ?>

 <table class="table table-bordered" id="example1">
 	<thead>
 		<tr>
 			<th>No</th>
 			<th>Nama</th>
 			<th>Username</th>
 			<th>Level</th>
 			<th>Action</th>
 		</tr>
 	</thead>
 	<tbody>
 		<?php $no = 1; foreach($user as $users) { ?>
 		<tr>
 			<td><?php echo $no++;?></td>
 			<td><?php echo $users->nama;?></td>
 			<td><?php echo $users->username;?></td>
 			<td><?php if ($users->akses_user == 1) {?>
                <?php echo "Admin"; ?>
            <?php }elseif($users->akses_user == 2){ ?>
                <?php echo "Peserta"; ?>
            <?php }else{?>
                <?php echo "Peninjau"; ?>
            <?php }?>
            </td>
 			<td>
 				<a href="<?php echo base_url('admin/user/edit/'.$users->id_user)?>" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i> Edit</a>
                 <?php include('delete.php') ?>

            </td>
 		</tr>
 		<?php } ?>
 	</tbody>
 </table>
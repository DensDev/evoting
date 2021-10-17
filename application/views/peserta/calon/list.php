<?php if($users->is_vote_calon == 0 ){?>
	<table class="table table-bordered" id="example1">
 	<thead>
 		<tr>
 			<th>No</th>
 			<th>Nama</th>
			<th>Action</th>
 		</tr>
 	</thead>
 	<tbody>
 		<?php $no = 1; foreach($calon as $calon) { ?>
 		<tr>
 			<td><?php echo $no++;?></td>
 			<td><?php echo $calon->nama;?></td>
			 <td>
			 <a href="#" class="btn btn-info btn-xs"><i class="fa fa-check"></i> Vote</a>
			 </td>
 		</tr>
 		<?php } ?>
 	</tbody>
 </table>
 <?php }else{?>
	
 <strong><p>Mohon Maaf Anda Sudah Melakukan Voting Calon !!</p></strong>
 
 <?php }?>
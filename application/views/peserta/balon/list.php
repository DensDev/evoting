<?php error_reporting(0);?>
<?php if($hasil_balon->id_user == $id_user AND $hasil_balon->is_vote_balon != 1 ){?>
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
			 <a type="button" href="<?php echo base_url('peserta/balon/vote/'.$balon->id_balon)?>" class="btn btn-info btn-xs"><i class="fa fa-check" ></i> Vote</a>
			 </td>
 		</tr>
 		<?php } ?>
 	</tbody>
 </table>
 <?php }else{?>
	
 <strong><p>Mohon Maaf Anda Sudah Melakukan Voting Bakal Calon !!</p></strong>
 
 <?php }?>
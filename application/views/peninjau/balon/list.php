
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
 		</tr>
 	</thead>
 	<tbody>
 		<?php $no = 1; foreach($balon as $balon) { ?>
 		<tr>
 			<td><?php echo $no++;?></td>
 			<td><?php echo $balon->nama;?></td>
 		</tr>
 		<?php } ?>
 	</tbody>
 </table>
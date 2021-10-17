

 <table class="table table-bordered" id="example1">
 	<thead>
 		<tr>
 			<th>No</th>
 			<th>Nama</th>
 		</tr>
 	</thead>
 	<tbody>
 		<?php $no = 1; foreach($calon as $calon) { ?>
 		<tr>
 			<td><?php echo $no++;?></td>
 			<td><?php echo $calon->nama;?></td>
 		</tr>
 		<?php } ?>
 	</tbody>
 </table>
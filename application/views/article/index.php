<div class="posts col-md-9">
	
	<table class='table table-striped table-bordered'>
		<caption><h2>Articles</h2></caption>
		
		<thead>
			<tr>
				<th>Title</th>
				<th>Abstract</th>
			</tr>
		</thead>
		
		<tfoot>
			<div>
				<a href="<?php echo base_url('article/add'); ?>" class='btn btn-success'>Crear</a>
			</div>
			<?php echo $total . ' registros'; ?>
		</tfoot>
		
		<tbody>
			<?php foreach ( $articles as $key => $value ) { ?>
			<tr>
				<td><?php echo $value->title; ?></td>
				<td><?php echo $value->abstract; ?></td>
			</tr>
			<?php } ?>
		</tbody>
		
		
	</table>
	
</div>
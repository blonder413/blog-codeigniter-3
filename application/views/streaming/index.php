<div class="posts col-md-9">
	
	<?php if ( $this->session->flashdata("mensaje") != "" ) { ?>
	<div class="alert alert-<?php echo $this->session->flashdata('css'); ?>">
		<?php echo $this->session->flashdata("mensaje"); ?>
	</div>
	<?php } ?>
	
	<table class='table table-striped table-bordered table-hover'>
		<caption><h2>Streamings</h2></caption>
		
		<thead>
			<tr>
				<th>Title</th>
				<th>Description</th>
				<th>Embed</th>
				<th></th>
			</tr>
		</thead>
		
		<tfoot>
			<div>
				<a href="<?php echo base_url('streaming/add'); ?>" class='btn btn-success'>Crear</a>
			</div>
			<?php echo $total . ' registros'; ?>
		</tfoot>
		
		<tbody>
			<?php foreach ( $streamings as $key => $value ) { ?>
			<tr>
				<td><?php echo $value->title; ?></td>
				<td><?php echo $value->description; ?></td>
				<td><?php echo $value->embed; ?></td>
				<td>
					<a href="<?php echo base_url('streaming/edit/' . $value->id ); ?>">Editar</a>
					<a href="<?php echo base_url('streaming/delete/' . $value->id ); ?>">Eliminar</a>
				</td>
			</tr>
			<?php } ?>
		</tbody>
		
		
	</table>
	
</div>
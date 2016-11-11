<div class="posts col-md-9">
	
	<?php if ( $this->session->flashdata("mensaje") != "" ) { ?>
	<div class="alert alert-<?php echo $this->session->flashdata('css'); ?> alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		<?php echo $this->session->flashdata("mensaje"); ?>
	</div>
	<?php } ?>
	
	<div>
		<a href="<?php echo base_url('streaming/add'); ?>" class='btn btn-success'>Crear</a>
		<br>
		<?php echo $total . ' registros'; ?>
	</div>
	
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

		<tbody>
			<?php foreach ( $streamings as $key => $value ) { ?>
			<tr>
				<td><?php echo $value->title; ?></td>
				<td><?php echo $value->description; ?></td>
				<td><?php echo $value->embed; ?></td>
				<td>
					<a href="<?php echo base_url('streaming/edit/' . $value->id . '/' . $page ); ?>" title="Editar"><span class="fa fa-pencil fa-lg"></span></a>
					<a href="<?php echo base_url('streaming/delete/' . $value->id . '/' . $page ); ?>" title="Eliminar"><span class="fa fa-trash fa-lg"></span></a>
				</td>
			</tr>
			<?php } ?>
		</tbody>
		
		
	</table>

	<div>
		<?php echo $this->pagination->create_links(); ?>
	</div>	
</div>
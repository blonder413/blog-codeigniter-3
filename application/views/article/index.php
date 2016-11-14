<div class="posts col-md-9">
	<?php if ( $this->session->flashdata("mensaje") != "" ) { ?>
	<div class="alert alert-<?php echo $this->session->flashdata('css'); ?> alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		<?php echo $this->session->flashdata("mensaje"); ?>
	</div>
	<?php } ?>
	
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
				<td>
					<a href="<?php echo base_url('article/edit/' . $value->id . '/' . $page ); ?>" title="Editar"><span class="fa fa-pencil fa-lg"></span></a>
					<a href="<?php echo base_url('article/delete/' . $value->id . '/' . $page ); ?>" title="Eliminar"><span class="fa fa-trash fa-lg"></span></a>
				</td>
			</tr>
			<?php } ?>
		</tbody>
		
		
	</table>
	<div class="text-center">
		<?php echo $this->pagination->create_links(); ?>
	</div>
</div>
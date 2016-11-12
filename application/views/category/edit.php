<div class="posts col-md-9">
	
	<p>
		<a href="<?php echo base_url('category/index/' . $page); ?>">
			Volver
		</a>
	</p>
	
	<div class='panel panel-default'>
		<div class='panel panel-heading'>			
			<h4>Editar Category</h4>
		</div>
		<div class='panel panel-body'>
			
			<?php if(validation_errors()) { ?>
				<div class='alert alert-danger'>
					<?php echo validation_errors(); ?>
				</div>
			<?php } ?>
			
			<?php
			$attributes = array('id' => 'form_streaming');
			echo form_open("category/edit/$category->id", $attributes);
			?>
			
			<div class="form-group">
				<?php echo form_label('Category', 'category'); ?>
			
				<?php
				$data = array(
						'class'			=> 'form-control',
						'name'          => 'category',
						'id'            => 'category',
						'value'			=> set_value_input($category,'category',$category->category),
						'maxlength'     => '150',
						'size'          => '50',
						'style'         => 'width:50%'
				);
				echo form_input($data);
				?>
			</div>
			
			<div class="form-group">
				<?php echo form_label('Image', 'image'); ?>
			
				<?php
				$data = array(
					'class'			=> 'form-control',
					'name'          => 'image',
					'id'            => 'image',
					'rows'			=> 2,
					'value'			=> set_value_input($category, 'image', $category->image),
				);
			
				echo form_textarea($data);
				?>
			</div>
			
			<div class="form-group">
				<?php echo form_label('Description', 'description'); ?>
			
				<?php
				$data = array(
					'class'			=> 'form-control',
					'name'          => 'description',
					'id'            => 'description',
					'value'			=> set_value_input($category,'description',$category->description),
				//        'maxlength'     => '150',
				//        'size'          => '50',
				//        'style'         => 'width:50%'
				);
			
				echo form_textarea($data);
				?>
			</div>
			
			<div class="controls">
				<?php
				$attributes = array( 'class' => 'btn btn-primary' );
				echo form_submit('guardar', 'Guardar', $attributes);
				?>
			</div>
			
		</div>
	</div>
	
</div>
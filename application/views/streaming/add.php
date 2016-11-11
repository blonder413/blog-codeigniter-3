<div class="posts col-md-9">
	<div class='panel panel-default'>
		<div class='panel panel-heading'>
			<h4>Crear Streaming</h4>
		</div>
		<div class='panel panel-body'>
			
			<?php if(validation_errors()) { ?>
				<div class='alert alert-danger'>
					<?php echo validation_errors(); ?>
				</div>
			<?php } ?>
			
			<?php
			$attributes = array('id' => 'form_streaming');
			echo form_open('streaming/add', $attributes);
			?>
			
			<div class="form-group">
				<?php echo form_label('Title', 'streaming_title'); ?>
			
				<?php
				$data = array(
						'class'			=> 'form-control',
						'name'          => 'streaming_title',
						'id'            => 'streaming_title',
						'value'			=> set_value_input(array(),'streaming_title','streaming_title'),
						'maxlength'     => '150',
						'size'          => '50',
						'style'         => 'width:50%'
				);
				echo form_input($data);
				?>
			</div>
			
			<div class="form-group">
				<?php echo form_label('Description', 'streaming_description'); ?>
			
				<?php
				$data = array(
					'class'			=> 'form-control',
					'name'          => 'streaming_description',
					'id'            => 'streaming_description',
				//        'value'         => 'johndoe',
				//        'maxlength'     => '150',
				//        'size'          => '50',
				//        'style'         => 'width:50%'
				);
			
				echo form_textarea($data);
				?>
			</div>
			
			<div class="form-group">
				<?php echo form_label('Embed', 'streaming_embed'); ?>
			
				<?php
				$data = array(
					'class'			=> 'form-control',
					'name'          => 'streaming_embed',
					'id'            => 'streaming_embed',
					'rows'			=> 2,
				);
			
				echo form_textarea($data);
				?>
			</div>
			
			<div class="form-group">
				<?php echo form_label('Start', 'streaming_start'); ?>
			
				<?php
				$data = array(
						'class'			=> 'form-control',
						'name'          => 'streaming_start',
						'id'            => 'streaming_start',
						'value'			=> set_value_input(array(),'streaming_start','streaming_start'),
						'maxlength'     => '150',
						'size'          => '50',
						'style'         => 'width:50%'
				);
				echo form_input($data);
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
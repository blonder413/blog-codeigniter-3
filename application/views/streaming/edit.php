<div class="posts col-md-9">
	
	<p>
		<a href="<?php echo base_url('streaming/index/' . $page); ?>">
			Volver
		</a>
	</p>
	
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
			echo form_open("streaming/edit/$streaming->id", $attributes);
			?>
			
			<div class="form-group">
				<?php echo form_label('Title', 'title'); ?>
			
				<?php
				$data = array(
						'class'			=> 'form-control',
						'name'          => 'title',
						'id'            => 'title',
						'value'			=> set_value_input($streaming,'title',$streaming->title),
						'maxlength'     => '150',
						'size'          => '50',
						'style'         => 'width:50%'
				);
				echo form_input($data);
				?>
			</div>
			
			<div class="form-group">
				<?php echo form_label('Description', 'description'); ?>
			
				<?php
				$data = array(
					'class'			=> 'form-control',
					'name'          => 'description',
					'id'            => 'description',
					'value'			=> set_value_input($streaming,'description',$streaming->description),
				//        'maxlength'     => '150',
				//        'size'          => '50',
				//        'style'         => 'width:50%'
				);
			
				echo form_textarea($data);
				?>
			</div>
			
			<div class="form-group">
				<?php echo form_label('Embed', 'embed'); ?>
			
				<?php
				$data = array(
					'class'			=> 'form-control',
					'name'          => 'embed',
					'id'            => 'embed',
					'rows'			=> 2,
					'value'			=> set_value_input($streaming, 'embed', $streaming->embed),
				);
			
				echo form_textarea($data);
				?>
			</div>
			
			<div class="form-group">
				<?php echo form_label('Start', 'start'); ?>
			
				<?php
				$data = array(
						'class'			=> 'form-control',
						'name'          => 'start',
						'id'            => 'start',
						'value'			=> set_value_input($streaming,'start',$streaming->start),
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
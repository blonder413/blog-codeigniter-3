<div class="posts col-md-9">
	<div class='panel panel-default'>
		<div class='panel panel-heading'>
			<h4>Crear Artículo</h4>
		</div>
		<div class='panel panel-body'>
			
			<?php if(validation_errors()) { ?>
				<div class='alert alert-danger'>
					<?php echo validation_errors(); ?>
				</div>
			<?php } ?>
			
			<?php
			$attributes = array('id' => 'form_article');
			echo form_open('article/add', $attributes);
			?>
			
			<?php
			/*
			$errors = validation_errors('<li>','</li>');
			if ( $errors != '' ) {
			?>
			<div class='alert alert-danger'>
				<ul>
					<?php echo $errors; ?>
				</ul>
			</div>
			<?php
			}
			*/
			?>
			
			<div class="form-group">
				<?php echo form_label('Title', 'article_title'); ?>
			
				<?php
				$data = array(
						'class'			=> 'form-control',
						'name'          => 'article_title',
						'id'            => 'article_title',
						'value'			=> set_value_input(array(),'article_title','article_title'),
						'maxlength'     => '150',
						'size'          => '50',
						'style'         => 'width:50%'
				);
				echo form_input($data);
				?>
			</div>
			
			<div class="form-group">
				<?php echo form_label('Detail', 'article_detail'); ?>
			
				<?php
				$data = array(
					'class'			=> 'form-control',
					'name'          => 'article_detail',
					'id'            => 'article_detail',
				//        'value'         => 'johndoe',
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
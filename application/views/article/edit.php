<div class="posts col-md-9">
	<p>
		<a href="<?php echo base_url('article/index/' . $page); ?>">
			Volver
		</a>
	</p>
	<div class='panel panel-default'>
		<div class='panel panel-heading'>
			<h4>Editar Artículo <?php echo $article->title; ?></h4>
		</div>
		<div class='panel panel-body'>
			
			<?php if(validation_errors()) { ?>
				<div class='alert alert-danger'>
					<?php echo validation_errors(); ?>
				</div>
			<?php } ?>
			
			<?php
			$attributes = array('id' => 'form_article');
			echo form_open("article/edit/$article->id/$page", $attributes);
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
				<?php echo form_label('Number', 'number'); ?>
			
				<?php
				$data = array(
						'class'			=> 'form-control',
						'name'          => 'number',
						'id'            => 'number',
						'value'			=> set_value_input($article,'number', $article->number),
						'maxlength'     => '150',
						'size'          => '50',
						'style'         => 'width:50%'
				);
				echo form_input($data);
				?>
			</div>
			
			<div class="form-group">
				<?php echo form_label('Title', 'title'); ?>
			
				<?php
				$data = array(
						'class'			=> 'form-control',
						'name'          => 'title',
						'id'            => 'title',
						'value'			=> set_value_input($article,'title', $article->title),
						'maxlength'     => '150',
						'size'          => '50',
						'style'         => 'width:50%'
				);
				echo form_input($data);
				?>
			</div>
			
			<div class="form-group">
				<?php echo form_label('Topic', 'topic'); ?>
			
				<?php
				$data = array(
						'class'			=> 'form-control',
						'name'          => 'topic',
						'id'            => 'topic',
						'value'			=> set_value_input($article,'topic', $article->topic),
						'maxlength'     => '150',
						'size'          => '50',
						'style'         => 'width:50%'
				);
				echo form_input($data);
				?>
			</div>
			
			<div class="form-group">
				<?php echo form_label('Detail', 'detail'); ?>
			
				<?php
				$data = array(
					'class'			=> 'form-control',
					'name'          => 'detail',
					'id'            => 'detail',
					'value'			=> set_value_input($article,'topic', $article->detail),
				//        'maxlength'     => '150',
				//        'size'          => '50',
				//        'style'         => 'width:50%'
				);
			
				echo form_textarea($data);
				?>
			</div>
			
			<div class="form-group">
				<?php echo form_label('Abstract', 'abstract'); ?>
			
				<?php
				$data = array(
					'class'			=> 'form-control',
					'name'          => 'abstract',
					'id'            => 'abstract',
					'value'			=> set_value_input($article,'topic', $article->abstract),
				//        'maxlength'     => '150',
				//        'size'          => '50',
				//        'style'         => 'width:50%'
				);
			
				echo form_textarea($data);
				?>
			</div>
			
			<div class="form-group">
				<?php echo form_label('Video', 'video'); ?>
			
				<?php
				$data = array(
					'class'			=> 'form-control',
					'name'          => 'video',
					'id'            => 'video',
					'value'			=> set_value_input($article,'topic', $article->video),
				//        'maxlength'     => '150',
				//        'size'          => '50',
				//        'style'         => 'width:50%'
				);
			
				echo form_textarea($data);
				?>
			</div>
			
			<div class="form-group">
				<?php echo form_label('Type_id', 'type_id'); ?>
			
				<?php
				$data = array(
						'class'			=> 'form-control',
						'name'          => 'type_id',
						'id'            => 'type_id',
						'value'			=> set_value_input($article,'topic', $article->type_id),
						'maxlength'     => '150',
						'size'          => '50',
						'style'         => 'width:50%'
				);
				echo form_input($data);
				?>
			</div>
			
			<div class="form-group">
				<?php echo form_label('Download', 'download'); ?>
			
				<?php
				$data = array(
						'class'			=> 'form-control',
						'name'          => 'download',
						'id'            => 'download',
						'value'			=> set_value_input($article,'topic', $article->download),
						'maxlength'     => '150',
						'size'          => '50',
						'style'         => 'width:50%'
				);
				echo form_input($data);
				?>
			</div>
			<div class="form-group">
				<?php echo form_label('Category_id', 'category_id'); ?>
			
				<?php
				$data = array(
						'class'			=> 'form-control',
						'name'          => 'category_id',
						'id'            => 'category_id',
						'value'			=> set_value_input($article,'topic', $article->category_id),
						'maxlength'     => '150',
						'size'          => '50',
						'style'         => 'width:50%'
				);
				echo form_input($data);
				?>
			</div>
			
			<div class="form-group">
				<?php echo form_label('Tags', 'tags'); ?>
			
				<?php
				$data = array(
						'class'			=> 'form-control',
						'name'          => 'tags',
						'id'            => 'tags',
						'value'			=> set_value_input($article,'topic', $article->tags),
						'maxlength'     => '150',
						'size'          => '50',
						'style'         => 'width:50%'
				);
				echo form_input($data);
				?>
			</div>
			
			<div class="form-group">
				<?php echo form_label('Course_id', 'course_id'); ?>
			
				<?php
				$data = array(
						'class'			=> 'form-control',
						'name'          => 'course_id',
						'id'            => 'course_id',
						'value'			=> set_value_input($article,'topic', $article->course_id),
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
<?php // echo validation_errors(); ?>

<?php
$attributes = array('class' => 'form', 'id' => 'form_article');
echo form_open('article/add', $attributes);
?>

<div class="row">
	<div class="form-input">
		<?php echo form_label('Title', 'article_title'); ?>
	</div>
	<div class="form-input">
		<?php
		$data = array(
		        'name'          => 'article_title',
		        'id'            => 'article_title',
		//        'value'         => 'johndoe',
		        'maxlength'     => '150',
		        'size'          => '50',
		        'style'         => 'width:50%'
		);
		echo form_input($data);
		?>
	</div>
</div>

<div class="row">
	<div class="form-input">
		<?php echo form_label('Detail', 'article_detail'); ?>
	</div>
	<div class="form-input">
		<?php
		$data = array(
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
</div>

<div class="row">
	<div class="controls">
		<?php echo form_submit('guardar', 'Guardar'); ?>
	</div>
</div>
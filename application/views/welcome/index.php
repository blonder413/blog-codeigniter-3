<section class="posts col-md-9">

	<?php foreach ($articles as $key => $value): ?>


	<?php
	setlocale(LC_TIME, 'es_CO.UTF-8');
	$date = strftime("%c", strtotime($value->created_at));
	?>


	<?php
		$category 	= $this->category_model->find($value->category_id);
		$user 		= $this->user_model->find($value->created_by);
	?>
	<article class="post clear-fix">
		<a class="thumb pull-left" href="<?php echo base_url() . 'categoria/' . $category->slug; ?>"><img class="img-thumbnail" src="<?php echo base_url() . 'public/img/categories/' . $category->slug . '.png' ?>" alt="MySQL"></a>
        <h3 class="post-title">
        	<a href="<?php echo base_url('articulo/' . $value->slug); ?>" title="Video Tutorial 16 de MySQL">
        		<?php echo $value->title; ?>
        	</a>
       	</h3>

       	<div class="post-date">
			<span class="glyphicon glyphicon-user">&nbsp;</span><span class="post-author"><?php echo $user->name; ?></span>
			&nbsp;|
			<span class="glyphicon glyphicon-calendar">&nbsp;</span><?php echo $date; ?>
		</div>

		<p class="post-content">
			<?php echo $value->abstract; ?>
		</p>

		<div class="container-buttons">
			<a class="btn btn-primary btn-sm" href="<?php echo base_url('articulo/' . $value->slug); ?>" title="Ver artículo completo">
				Ver Más &raquo;
			</a>
			<a class="btn btn-success btn-sm" href="<?php echo base_url('articulo/' . $value->slug . '#comments'); ?>" title="Ver Comentarios">
				Comentarios <span class='badge'><?php echo $this->comment_model->countComments($value->id); ?></span>
			</a>
		</div>

	</article>
	<?php endforeach; ?>



	<div class="row text-center">
		<ul class="pagination">
			<?php echo $this->pagination->create_links()?>
		</ul>
	</div>

</section>

<!-- <aside class="hidden-xs hidden-sm col-md-3"> -->
	<?php // print_r($categories); ?>
	<?php //$this->load->view('welcome/sidebar', ["categories" => $categories]); ?>
<!-- </aside> -->

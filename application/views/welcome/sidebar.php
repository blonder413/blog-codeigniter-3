<aside class="hidden-xs hidden-sm col-md-3">
	<div class="list-group">
	    <h4>Categorías</h4>
		<?php foreach( $categories as $key => $value ): ?>
		<a href="categoria/<?php echo $value->slug; ?>" title="<?php echo $value->category; ?>" class="list-group-item">
			<img src="<?php echo base_url() . 'public/img/categories/' . $value->slug . '.png' ?>" alt="<?php echo $value->category ?>" width="40"> <?php echo $value->category ?></a>
		<?php endforeach; ?>
	</div>
</aside>

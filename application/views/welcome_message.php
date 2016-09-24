<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>


</head>
<body>

<div id="container">
	<h1>Hola mundo!</h1>

	<div id="body">
		<ul>
		<?php foreach ($articles as $key => $value): ?>
			<li><?= $value->title; ?></li>
		<?php endforeach; ?>
		</ul>
		<?php echo $this->pagination->create_links()?>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>

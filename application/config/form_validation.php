<?php
$config = [
	'add_article' => [
		[
			'field'	=> 'article_title',
			'label'	=> 'Title',
			'rules'	=> [
				'required','is_string','trim', 'max_length[1]'
			],
		],
		[
			'field'	=> 'article_detail',
			'label'	=> 'Detail',
			'rules'	=> [
				'required','is_string','trim',
			],
		],
	]
];
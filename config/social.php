<?php 

return [

	'services'=>[
		'github' => [
			'name'=>'Github',
		],
		'facebook' => [
			'name'=>'Facebook',
		],
	],

	'events' => [
		'github' => [
			'created' => \App\Events\Social\GithubAccountWasLinked::class,
		],

	],

	
];
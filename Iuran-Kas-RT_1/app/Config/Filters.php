<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Filters extends BaseConfig
{
	// Makes reading things below nicer,
	// and simpler to change out script that's used.
	public $aliases = [
		'csrf'     => \CodeIgniter\Filters\CSRF::class,
		'toolbar'  => \CodeIgniter\Filters\DebugToolbar::class,
		'honeypot' => \CodeIgniter\Filters\Honeypot::class,
		'Filter_auth' => \App\Filters\Filter_auth::class,
	];

	// Always applied before every request
	public $globals = [
		'before' => [
			'Filter_auth' => ['except' => [
				'auth', 'auth/*',
				'/'
			]]
			//'honeypot'
			// 'csrf',
		],
		'after'  => [
			'Filter_auth' => ['except' => [
				'home', 'home/*',
				'kategori', 'kategori/*',
				'dep', 'dep/*',
				'user', 'user/*',
				'arsip', 'arsip/*',
			]],
			'toolbar',
			//'honeypot'
		],
	];

	// Works on all of a particular HTTP method
	// (GET, POST, etc) as BEFORE filters only
	//     like: 'post' => ['CSRF', 'throttle'],
	public $methods = [];

	// List filter aliases and any before/after uri patterns
	// that they should run on, like:
	//    'isLoggedIn' => ['before' => ['account/*', 'profiles/*']],
	public $filters = [];
}

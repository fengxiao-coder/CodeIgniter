<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| redis settings
| -------------------------------------------------------------------------
| Your redis servers can be specified below.
|
|	See: https://codeigniter.com/user_guide/libraries/caching.html#redis
|
*/
$config = array(
	'default' => array(
		'hostname' => '127.0.0.1',
		'port'     => '6379',
		'auth'   => '',
	),
);

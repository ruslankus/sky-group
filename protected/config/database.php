<?php

// This is the database connection configuration.
return array(
	'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/sky_db.db',
	// uncomment the following lines to use a MySQL database
    /*
	'connectionString' => 'mysql:host=localhost;dbname=sky_db',
	'emulatePrepare' => true,
	'username' => 'sky_group',
	'password' => 'sky12345',
	'charset' => 'utf8',
    */

);
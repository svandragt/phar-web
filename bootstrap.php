<?php
/**
 * Bootstrap for web servers.
 * For example:
 * 
 * php -S localhost:9000 bootstrap.php
 * 
 * By loading the index.php inside the phar,
 * the shebang is bypassed.
 */
require('phar://build/index.phar/index.php');
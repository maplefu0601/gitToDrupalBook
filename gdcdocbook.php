<?php

define('DRUPAL_ROOT', getcwd());
require_once DRUPAL_ROOT . '/includes/bootstrap.inc';
drupal_bootstrap(DRUPAL_BOOTSTRAP_FULL);
$ret = module_invoke_all('helloworld');
var_dump($ret);

echo '<p>Done</p>';
###menu_execute_active_handler();




<?php

// http://techsupport1.xyz/question/20918746/url-rewriting-breaks-when-index-phpurl-index-parameter-is-index-why
require 'lib/jream/autoload.php';

new \jream\Autoload('lib/jream');

$bootstrap = new \jream\mvc\Bootstrap();
$bootstrap->setPathRoot(getcwd());
$bootstrap->setControllerDefault('index');
$bootstrap->init();
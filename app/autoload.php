<?php

use Doctrine\Common\Annotations\AnnotationRegistry;
use Composer\Autoload\ClassLoader;

<<<<<<< HEAD
error_reporting(error_reporting() & ~E_USER_DEPRECATED);

=======
>>>>>>> 3bd5578b812db39455a5bce5d5f8144f910f17e2
/**
 * @var ClassLoader $loader
 */
$loader = require __DIR__.'/../vendor/autoload.php';

AnnotationRegistry::registerLoader(array($loader, 'loadClass'));

return $loader;

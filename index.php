<?php

$loader = require_once('vendor/autoload.php');
require_once('User.php');

\Doctrine\Common\Annotations\AnnotationRegistry::registerLoader([$loader, "loadClass"]);

use Hateoas\HateoasBuilder;

$hateoas = HateoasBuilder::create()->build();

$user = new User(45);
$json = $hateoas->serialize($user, 'json');

var_dump($json);

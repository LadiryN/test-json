<?php

require_once __DIR__. "/vendor/autoload.php";

use LeoricK\Responseclass\JsonResponse;

$student = array (
    'name' => 'John Doe',
    'course' => 'Software Engineering' ,
    'level' => '200' ,
    'collections' => ['books' => 'Intro to UML','music'=>'rap'] ,
);

new JsonResponse('unauthorize','',$student);
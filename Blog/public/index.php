<?php
/**
 * Created by PhpStorm.
 * User: ABOUBACAR
 * Date: 15/01/2017
 * Time: 19:18
 */
require 'app/App.php';
App::load();

$app = \app\App::getInstance();

$post= $app->getTable('Posts');


var_dump($app->getTable('Posts'));
var_dump($app->getTable('User'));
var_dump($app->getTable('Categories'));
var_dump($post->all());


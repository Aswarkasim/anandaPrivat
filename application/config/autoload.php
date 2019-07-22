<?php
defined('BASEPATH') or exit('No direct script access allowed');

$autoload['packages'] = array();


$autoload['libraries'] = array('ssp', 'database', 'email', 'session', 'form_validation', 'upload');

$autoload['drivers'] = array();

$autoload['helper'] = array('url', 'file', 'form', 'text', 'myhelper', 'string');

$autoload['config'] = array();

/*
| -------------------------------------------------------------------
|  Auto-load Language files
| -------------------------------------------------------------------
| Prototype:
|
|	$autoload['language'] = array('lang1', 'lang2');
|
| NOTE: Do not include the "_lang" part of your file.  For example
| "codeigniter_lang.php" would be referenced as array('codeigniter');
|
*/
$autoload['language'] = array();

/*
| -------------------------------------------------------------------
|  Auto-load Models
| -------------------------------------------------------------------
| Prototype:
|
|	$autoload['model'] = array('first_model', 'second_model');
|
| You can also supply an alternative model name to be assigned
| in the controller:
|
|	$autoload['model'] = array('first_model' => 'first');
*/
$autoload['model'] = array('admin/Crud_model');

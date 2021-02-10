<?php

require_once 'Worker .php';
require_once 'Finder.php';

$worker = new Finder();
echo'<pre>';
$worker->create('Anna', 'anna@mail', 21, 'hr');
$worker->create('Max', 'max@mail' ,22 , 'admin');
$worker->create(null, 'lola@mail', 29, 'manager');
$worker->create('Vlad', null, 44, 'desing');
$worker->create('Sara', 'sara@mail', null, 'QA');
$worker->create('Din', 'din@mail', 41, null);




$worker->all();
$worker->save();

echo'<h4>find by email</h4><br>';
$worker->find('max@mail');
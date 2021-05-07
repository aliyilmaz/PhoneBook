<?php

require_once './Mind.php';

$conf = array(
    'host'      =>  'localhost',
    'dbname'    =>  'mydb',
    'username'  =>  'root',
    'password'  =>  ''
);

$Mind = new Mind($conf);


$Mind->route('/', 'app/views/index', array('app/migration/install', 'app/model/list'));
$Mind->route('page:p', 'app/views/index', 'app/model/list');
$Mind->route('add', 'app/views/add', 'app/request/add');
$Mind->route('edit:id', 'app/views/edit', array('app/request/edit', 'app/model/record'));
$Mind->route('remove:id', 'app/views/remove', array('app/model/record', 'app/request/remove'));

<?php

require_once ('./Mind.php');
$db = new Mind();

$list = array(
    'app/view/layout/header',
    'app/view/list',
    'app/view/layout/footer'
);
$db->route('/', $list , array('app/database/install', 'app/modal/list'));

$db->route('list', $list, 'app/modal/list');

$add = array(
    'app/view/layout/header',
    'app/view/add',
    'app/view/layout/footer'
);
$db->route('add', $add, array('app/controller/add'));

$edit = array(
    'app/view/layout/header',
    'app/view/edit',
    'app/view/layout/footer'
);
$db->route('edit:id', $edit, array('app/controller/edit'));

$remove = array(
    'app/view/layout/header',
    'app/view/remove',
    'app/view/layout/footer'
);
$db->route('remove:id', $remove, array('app/controller/remove'));

?>
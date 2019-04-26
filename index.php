<?php

require_once './Mind.php';
$Mind = new Mind();

$list = array(
    'app/views/layout/header',
    'app/views/list',
    'app/views/layout/footer',
);
$Mind->route('/', $list, array('app/database/install', 'app/modal/ListModal'));

$Mind->route('list', $list, 'app/modal/ListModal');

$add = array(
    'app/views/layout/header',
    'app/views/add',
    'app/views/layout/footer',
);
$Mind->route('add', $add, array('app/controller/RecordController:add'));

$edit = array(
    'app/views/layout/header',
    'app/views/edit',
    'app/views/layout/footer',
);
$Mind->route('edit:id', $edit, array('app/modal/RecordModal', 'app/controller/RecordController:edit'));

$remove = array(
    'app/views/layout/header',
    'app/views/remove',
    'app/views/layout/footer',
);
$Mind->route('remove:id', $remove, array('app/modal/RecordModal', 'app/controller/RecordController:remove'));

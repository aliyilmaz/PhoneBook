<?php

require_once ('./Mind.php');
use Mind\Mind;

$db = new Mind();

$list = array(
    'app/view/layout/header',
    'app/view/list',
    'app/view/layout/footer'
);
$db->route('/', $list , array('app/database/install', 'app/modal/ListModal'));

$db->route('list', $list, 'app/modal/ListModal');

$add = array(
    'app/view/layout/header',
    'app/view/add',
    'app/view/layout/footer'
);
$db->route('add', $add, array('app/controller/RecordController:add'));

$edit = array(
    'app/view/layout/header',
    'app/view/edit',
    'app/view/layout/footer'
);
$db->route('edit:id', $edit, array('app/modal/RecordModal', 'app/controller/RecordController:edit'));

$remove = array(
    'app/view/layout/header',
    'app/view/remove',
    'app/view/layout/footer'
);
$db->route('remove:id', $remove, array('app/modal/RecordModal', 'app/controller/RecordController:remove'));

?>
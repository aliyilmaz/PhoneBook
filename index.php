<?php

require_once './Mind.php';
$Mind = new Mind();


$Mind->route('/', 'app/views/index', array('app/database/install', 'app/model/ListModel'));
$Mind->route('add', 'app/views/add', array('app/controller/RecordController:add'));
$Mind->route('edit:id', 'app/views/edit', array('app/model/RecordModel', 'app/controller/RecordController:edit'));
$Mind->route('remove:id', 'app/views/remove', array('app/model/RecordModel', 'app/controller/RecordController:remove'));

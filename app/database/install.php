<?php

$tblname    = 'phonebook';

$arr = array(
    'id:increments',
    'name',
    'phone',
    'email',
    'created_at',
    'updated_at'
);

if(!$this->is_table($tblname)){
    $this->createtable($tblname, $arr);

    $rows = array(
        'name'          => 'Ali Yılmaz',
        'phone'         => '01010101010',
        'email'         => 'aliyilmaz.work@gmail.com',
        'created_at'    =>  date('d-m-Y H:i:s')
    );
    $this->insert($tblname, $rows);
}

?>
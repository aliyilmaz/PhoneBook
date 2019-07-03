<?php

$tblname    = 'phonebook';

$options = array(
    'id:increments',
    'name',
    'phone',
    'email',
    'created_at',
    'updated_at'
);

if(!$this->is_table($tblname)){
    $this->tableCreate($tblname, $options);

    $rows = array(
        'name'          => 'Ali Yılmaz',
        'phone'         => '01010101010',
        'email'         => 'aliyilmaz.work@gmail.com',
        'created_at'    =>  $this->timestamp
    );
    $this->insert($tblname, $rows);
}

?>

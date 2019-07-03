<?php

$tblname = 'phonebook';
$record = array();
if (
$this->do_have($tblname, $this->post['id'], 'id')
){
    $options = array(
        'search'=>array(
            'column'=>'id',
            'keyword'=>$this->post['id']
        )
    );
    $record = $this->getData($tblname, $options);
}

if(empty($record)){
    $this->redirect();
}

<?php

$tblname = 'phonebook';
$record = array();
if (
$this->do_have($tblname, $this->post['id'], 'id')
){
    $arr = array(
        'search'=>array(
            'column'=>'id',
            'keyword'=>$this->post['id']
        )
    );
    $record = $this->get($tblname, $arr);
} else {
    $this->redirect();
}

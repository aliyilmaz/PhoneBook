<?php


$record = $this->samantha('phonebook', array('id'=>$this->post['id']));

if(empty($record)){
    $this->redirect();
}

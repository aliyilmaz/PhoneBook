<?php


$record = $this->theodore('phonebook', array('id'=>$this->post['id']));

if(empty($record)){
    $this->redirect();
}

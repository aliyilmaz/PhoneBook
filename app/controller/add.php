<?php
if (
    !empty($this->post['name']) AND
    $this->is_phone($this->post['phone']) AND
    $this->is_email($this->post['email'])
){
    $arr = array(
        'name'=>$this->post['name'],
        'phone'=>$this->post['phone'],
        'email'=>$this->post['email'],
        'created_at'=>date('d-m-Y H:i:s')
    );
    $this->insert('phonebook', $arr);
    $this->redirect(true, true);
}

?>
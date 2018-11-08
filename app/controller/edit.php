<?php
$tblname = 'phonebook';
if (
    $this->do_have($tblname, $this->post['id'], 'id') AND
    !empty($this->post['name']) AND
    $this->is_phone($this->post['phone']) AND
    $this->is_email($this->post['email'])
){
    $arr = array(
        'name'=>$this->post['name'],
        'phone'=>$this->post['phone'],
        'email'=>$this->post['email'],
        'updated_at'=>date('d-m-Y H:i:s')
    );
    $this->update($tblname, $arr, $this->post['id']);
    $this->redirect(true, true);

} elseif ($this->do_have($tblname, $this->post['id'], 'id')) {
    $arr = array(
        'search'=>array(
            'column'=>'id',
            'keyword'=>$this->post['id']
        )
    );
    $record = $this->get($tblname, $arr);
} else {
    $this->redirect(true, true);
}

?>
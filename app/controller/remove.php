<?php
$tblname = 'phonebook';
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

    if($this->post['status']==true){
        $this->delete($tblname, $this->post['id']);
        $this->redirect(true, true);
    }

} else {
    $this->redirect(true, true);
}

?>
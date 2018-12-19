<?php

class RecordController extends \Mind\Mind
{
    public $TableName = 'phonebook';

    public function __construct($conf = array())
    {

        parent::__construct($conf);
    }

    public function add()
    {

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
            $this->insert($this->TableName, $arr);
            $this->redirect();
        }
    }

    public function edit(){

        if (
            $this->do_have($this->TableName, $this->post['id'], 'id') AND
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
            $this->update($this->TableName, $arr, $this->post['id']);
            $this->redirect();

        }
    }

    public function remove()
    {

        if (
        $this->do_have($this->TableName, $this->post['id'], 'id')
        ){
            if($this->post['status']==true){
                $this->delete($this->TableName, $this->post['id']);
                $this->redirect();
            }

        }

    }

}
<?php

class RecordController extends Mind
{
    public $TableName = 'phonebook';

    public function __construct($conf = array())
    {
        parent::__construct($conf);
    }

    public function add()
    {
        if (
            !empty($this->post['name']) and
            $this->is_phone($this->post['phone']) and
            $this->is_email($this->post['email'])
        ) {
            $arr = array(
                'name' => $this->post['name'],
                'phone' => $this->post['phone'],
                'email' => $this->post['email'],
                'created_at' => $this->timestamp,
            );
            $this->insert($this->TableName, $arr);
            $this->redirect();
        }
    }

    public function edit()
    {
        if (
            $this->do_have($this->TableName, $this->post['id'], 'id') and
            !empty($this->post['name']) and
            $this->is_phone($this->post['phone']) and
            $this->is_email($this->post['email'])
        ) {
            $arr = array(
                'name' => $this->post['name'],
                'phone' => $this->post['phone'],
                'email' => $this->post['email'],
                'updated_at' => $this->timestamp,
            );
            $this->update($this->TableName, $arr, $this->post['id']);
            $this->redirect();
        }
    }

    public function remove()
    {
        if (
        $this->do_have($this->TableName, $this->post['id'], 'id')
        ) {
            if ($this->post['status'] == true) {
                $this->delete($this->TableName, $this->post['id']);
                $this->redirect();
            }
        }
    }
}

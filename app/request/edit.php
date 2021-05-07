<?php

$item = $this->theodore('phonebook', array('id'=>$this->post['id']));

$rule = [
    'name'=>'required',
    'phone'=>'phone|knownunique:phonebook:'.$item['phone'],
    'email'=>'email|knownunique:phonebook:'.$item['email']
];
$message = [
    'name'=>[
        'required'=>'Specify the name.'
    ],
    'phone'=>[
        'phone'=>'Specify a phone number.',
        'knownunique'=>'Specify another number.'
    ],
    'email'=>[
        'email'=>'Specify a valid E-mail.',
        'knownunique'=>'Specify another email.'
    ]
];

if(count($this->post)>1){

    if($this->validate($rule, $this->post, $message)){
        $values = array(
            'name' => $this->post['name'],
            'phone' => $this->post['phone'],
            'email' => $this->post['email'],
            'updated_at' => $this->timestamp,
        );
        $this->update('phonebook', $values, $this->post['id']);
    }
    
}
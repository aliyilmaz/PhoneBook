<?php

$rule = [
    'name'=>'required',
    'phone'=>'phone|unique:phonebook',
    'email'=>'email|unique:phonebook'
];
$message = [
    'name'=>[
        'required'=>'Specify the name.'
    ],
    'phone'=>[
        'phone'=>'Specify a phone number.',
        'unique'=>'Specify another number.'
    ],
    'email'=>[
        'email'=>'Specify a valid E-mail.',
        'unique'=>'Specify another email.'
    ]
];

if($this->validate($rule, $this->post, $message)){
    $values = array(
        'name' => $this->post['name'],
        'phone' => $this->post['phone'],
        'email' => $this->post['email'],
        'created_at' => $this->timestamp,
    );
    $this->insert('phonebook', $values);
}
<?php

if(!$this->is_table('phonebook')){ 

    $options = array(
        'id:increments',
        'name',
        'phone',
        'email',
        'created_at',
        'updated_at'
    );

    $this->tableCreate('phonebook', $options);

    $rows = array(
        array(
            'name'          => 'John Doe 1',
            'phone'         => '05554443322',
            'email'         => 'johndoe1@gmail.com',
            'created_at'    =>  $this->timestamp
        ),
        array(
            'name'          => 'John Doe 2',
            'phone'         => '05553332211',
            'email'         => 'johndoe2@gmail.com',
            'created_at'    =>  $this->timestamp
        ),
        array(
            'name'          => 'John Doe 3',
            'phone'         => '05556665544',
            'email'         => 'johndoe3@gmail.com',
            'created_at'    =>  $this->timestamp
        )
    );

    $this->insert('phonebook', $rows);
}

?>
<?php
$tblname = 'phonebook';

$list       = array();
$limit      = 5;
$column     = $this->increments('phonebook');

if($this->post){

    $options['search']['scope'] = 'LIKE';
    
    if(!isset($this->post['keyword'])){
        $this->post['keyword'] = '';
    }
    
    if(!isset($this->post['columns'])){
        $this->post['columns'] = $this->columnList($tblname);
    }
    foreach ($this->post['columns'] as $column) {
        $options['search']['or'][] = array($column=>'%'.$this->post['keyword'].'%');
    }
    
}

// Limit control
if(!empty($this->post['limit'])){
    $limit = $this->post['limit'];
}

// Sort control
if(empty($this->post['sort'])){
    $this->post['sort'] =  'desc';
}

$options['limit'] = array(
        'end'   =>  $limit
);

$options['sort'] = $column.':'.$this->post['sort'];

$list = $this->getData($tblname, $options);

?>
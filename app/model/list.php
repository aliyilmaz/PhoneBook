<?php
$tblname = 'phonebook';
$column  = $this->increments($tblname);

// url: pagination.php?page OR pagination.php?page=1
// url: pagination.php?p OR pagination.php?p=1

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
    $options['limit'] = $this->post['limit'];
}

// Sort control
if(empty($this->post['sort'])){
    $this->post['sort'] =  'desc';
}

$options['sort'] = $column.':'.$this->post['sort'];

$data = $this->pagination($tblname, $options);

?>
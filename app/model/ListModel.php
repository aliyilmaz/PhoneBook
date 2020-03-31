<?php
$tblname = 'phonebook';

$list = array();
$limit = 5;
$sort = 'DESC';
$keyword = '';
$column  = $this->increments('phonebook');
$columns = array();
$patterns = array();

if(!empty($this->post['keyword'])){
    $keyword = $this->post['keyword'];
}
$patterns['keyword'] = $keyword;

$model = array();

// Or parameters.
if(!empty($this->post['columns'])){
    foreach ($this->post['columns'] as $column){
        $model[$column] = '%'.$this->post['keyword'].'%';
    }
}
$patterns['or'] = $model;

// Column names
if(!empty($model)){
    $patterns['columns'] = array_keys($model);
}

// Limit control
if(!empty($this->post['limit'])){
    $limit = $this->post['limit'];
}

// Sort control
if(!empty($this->post['sort'])){
    if(in_array(mb_strtoupper($this->post['sort']), array('DESC', 'ASC'))){
        $sort = $this->post['sort'];
    }
}

$options = array(
    'search'=> $patterns,
    'limit'=>array(
        'end'   =>  $limit
    ),
    'sort'  =>  $column.':'.$sort
);

$list = $this->getData($tblname, $options);

?>
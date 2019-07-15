<?php
$tblname = 'phonebook';

$list = array();
$limit = 5;
$sort = 'DESC';
$keyword = '';
$column  = $this->increments('phonebook');
$columns = array();
$patterns = array();

if(empty($this->post['keyword'])){
    $this->post['keyword'] = '';
}
$patterns['keyword'] = $this->post['keyword'];

$model = array();
if(!empty($this->post['columns'])){
    foreach ($this->post['columns'] as $column){
        $model[$column] = '%'.$this->post['keyword'].'%';
    }
}
$patterns['or'] = $model;

if(!empty($model)){
    $patterns['columns'] = array_keys($model);
}

if(empty($this->post['limit'])){
    $this->post['limit'] = $limit;
}

if(empty($this->post['sort'])){
    $this->post['sort'] = $sort;
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
<?php
$tblname = 'phonebook';

$limit = 5;
$sort = 'DESC';
$keyword = '';
$columns = array();

if(!empty($this->post['limit'])){
    $limit = $this->post['limit'];
}

if(!empty($this->post['sort'])){
    $sort = $this->post['sort'];
}

if(!empty($this->post['keyword'])){
    $keyword = $this->post['keyword'];
}

if(!empty($this->post['column'])){
    foreach ($this->post['column'] as $column){
        if($this->is_column($tblname, $column)){
            $columns[] = $column;
        }
    }
}

$arr = array(
    'search'=>array(
        'column'=>$columns,
        'keyword'=>$keyword,
        'where'=>'all'
    ),
    'limit'=>array(
        'end'=>$limit
    ),
    'sort'=>'id:'.$sort
);

$list = $this->get($tblname, $arr);
?>
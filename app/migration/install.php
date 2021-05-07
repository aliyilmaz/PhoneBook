<?php

if(!$this->is_db($this->dbname)){ 
    $this->dbCreate($this->dbname);    
}

$this->mindLoad([
    'app/migration/users'
]);

?>

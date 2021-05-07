<?=$this->mindLoad('app/views/layout/header'); ?>

<form action="add" method="post">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" id="name">
    </div>

    <div class="form-group">
        <label for="phone">Phone</label>
        <input type="tel" name="phone" class="form-control" id="phone">
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control" id="email">
    </div>

    <button type="submit" class="btn btn-default btn-xs btn-success">
        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add
    </button>

    <button type="reset" class="btn btn-default btn-xs btn-danger">
        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Clear
    </button>

    <a href="<?=$this->base_url;?>" class="btn btn-default btn-xs btn-warning">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> Cancel
    </a>
    <hr>
    <?php
    if(!empty($this->post)){
        if(!empty($this->errors)){
            echo '<div class="alert alert-warning" role="alert">';
            foreach ($this->errors as $errors) {
                foreach ($errors as $key => $error) {
                    echo '<strong style="color:red;">*</strong> '.$error.'</strong><br>';    
                }
            }
            echo '</div>';
        } else {
            if(count($this->post)>1){
                echo '<div class="alert alert-success" role="alert">Added registration. <strong id="redirect-time"></strong></div>';    
                $this->redirect($this->page_back, 5, '#redirect-time');
            }
        }
    }
    ?>
    
    <?=$_SESSION['csrf']['input'];?>
</form>

<?php $this->mindLoad('app/views/layout/footer'); ?>
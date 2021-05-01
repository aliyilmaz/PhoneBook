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
    <?=$_SESSION['csrf']['input'];?>
</form>

<?php 
$this->print_pre($this->post);

?>

<?php $this->mindLoad('app/views/layout/footer'); ?>
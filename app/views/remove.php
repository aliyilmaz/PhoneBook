<?php $this->mindLoad('app/views/layout/header'); ?>

<h4>
    <p class="bg-danger">
        <span class="glyphicon glyphicon-question-sign"></span> Are you sure you want to delete this record?
    </p>
</h4>

<form action="remove" method="post">

    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" value="<?=$record['name'];?>" disabled="disabled">
    </div>

    <div class="form-group">
        <label for="phone">Phone</label>
        <input type="tel" class="form-control" id="phone" value="<?=$record['phone'];?>" disabled="disabled">
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" value="<?=$record['email'];?>" disabled="disabled">
    </div>

    <input type="hidden" name="id" value="<?=$record['id'];?>">
    <input type="hidden" name="status" value="true">

    <button type="submit" class="btn btn-default btn-xs btn-danger">
        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Yes, Remove
    </button>

    <a href="edit/<?=$record['id'];?>" class="btn btn-default btn-xs btn-primary">
        <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Edit
    </a>

    <a href="<?=$this->base_url;?>" class="btn btn-default btn-xs btn-warning">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> Cancel
    </a>

</form>

<?php $this->mindLoad('app/views/layout/footer'); ?>
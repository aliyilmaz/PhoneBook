<h4>
    <p class="bg-danger">
        <span class="glyphicon glyphicon-question-sign"></span> Are you sure you want to delete this record?
    </p>
</h4>

<form action="remove" method="post">

    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" value="<?=$record[0]['name'];?>" disabled="disabled">
    </div>

    <div class="form-group">
        <label for="phone">Phone</label>
        <input type="tel" class="form-control" id="phone" value="<?=$record[0]['phone'];?>" disabled="disabled">
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" value="<?=$record[0]['email'];?>" disabled="disabled">
    </div>

    <input type="hidden" name="id" value="<?=$record[0]['id'];?>">
    <input type="hidden" name="status" value="true">

    <button type="submit" class="btn btn-default btn-xs btn-danger">
        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Yes, Remove
    </button>

    <a href="<?=$this->baseurl;?>" class="btn btn-default btn-xs btn-warning">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> Cancel
    </a>

    <a href="edit/<?=$record[0]['id'];?>" class="btn btn-default btn-xs btn-primary">
        <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Edit
    </a>

</form>
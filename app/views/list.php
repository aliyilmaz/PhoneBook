<?php $this->mindLoad('app/views/layout/header'); ?>

<form action="list" method="post">
    <div class="row">
       <div class="col-sm-1">
           <div class="form-group">
               <label for="limit">Limit</label>
               <select name="limit" id="limit" class="form-control">
                   <option>5</option>
                   <option>10</option>
                   <option>50</option>
                   <option>100</option>
                   <option>250</option>
                   <option>500</option>
               </select>
           </div>
       </div>
        <div class="col-sm-3">
            <div class="form-group">
                <label for="sort">Sort by</label>
                <select name="sort" id="sort" class="form-control">
                    <option value="DESC">Recently Added > </option>
                    <option value="ASC">First Added < </option>
                </select>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <label for="keyword">Keyword
                    <input class="form-control" name="keyword" type="text">
                </label>
            </div>
        </div>
        <div class="col-md-5">
            <button type="submit" class="btn btn-default btn-sm refresh-list">
                <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> filter
            </button>
            <a href="list" class="btn btn-default btn-sm refresh-list">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span> default
            </a>
        </div>
    </div>

    <hr>
    <table class="table" role="table">
        <thead role="rowgroup">
        <tr role="row">
            <th role="columnheader"># </th>
            <th role="columnheader">Name <input type="checkbox" name="columns[]" value="name"></th>
            <th role="columnheader">Phone <input type="checkbox" name="columns[]" value="phone"></th>
            <th role="columnheader">Email <input type="checkbox" name="columns[]" value="email"></th>
            <th role="columnheader">Created_At <input type="checkbox" name="columns[]" value="created_at"></th>
            <th role="columnheader">Updated_At <input type="checkbox" name="columns[]" value="updated_at"></th>
            <th role="columnheader">#</th>
        </tr>
        </thead>
        <tbody role="rowgroup">
        <?php foreach ($list as $key => $row) { ?>
            <tr role="row">
                <td role="cell" data-label="#"><?=$key;?></td>
                <td role="cell" data-label="Name"><?=$row['name'];?></td>
                <td role="cell" data-label="Phone"><?=$row['phone'];?></td>
                <td role="cell" data-label="Email"><?=$row['email'];?></td>
                <td role="cell" data-label="Created_At"><?=$row['created_at'];?></td>
                <td role="cell" data-label="Updated_At"><?=$row['updated_at'];?></td>
                <td role="cell" data-label="#">
                    <a href="edit/<?=$row['id'];?>" class="btn btn-default btn-xs btn-primary">
                        <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Edit
                    </a>
                    <a href="remove/<?=$row['id'];?>" class="btn btn-default btn-xs btn-danger">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Remove
                    </a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</form>

<?php $this->mindLoad('app/views/layout/footer'); ?>
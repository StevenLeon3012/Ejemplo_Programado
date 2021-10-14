<div class="container" style="margin-top: 6%">
    <div class="row justify-content-md-center">
        <div class="col-md-6">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col"><i class="fas fa-hashtag"></i></th>
                    <th scope="col">Name of the list</th>
                    <th><a class="btn btn-success btn-sm" href='?D=createLists' role="button">Add</a></th>
                </tr>
            </thead>
            <tbody> 
                <?php foreach ($lists as $list) {?>               
                    <tr>                        
                        <th><?php echo $list->idList ?></th>
                        <th><?php echo $list->name ?></th>
                        <th>
                            <a role="button" class="btn btn-danger btn-sm" href='?D=deleteLists&idList=<?php echo $list->idList ?>'>Delete</a>
                            <a role="button" class="btn btn-primary btn-sm" href='?D=editLists&idList=<?php echo $list->idList ?>'>Edit</a>
                        </th>                    
                    </tr>
                    <?php } ?>
                </tbody>
        </table>
        </div>
    </div>
</div>
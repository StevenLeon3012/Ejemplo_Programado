<div class="container" style="margin-top: 6%">
    <div class="row justify-content-md-center">
        <div class="col-md-6">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col"><i class="fas fa-hashtag"></i></th>
                    <th scope="col">Name of the list</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($lists as $list) ?>
                    <tr>
                        <th><?php echo $list->idList ?></th>
                        <th><?php echo $list->name ?></th>
                    </tr>
            </tbody>
        </table>
        </div>
    </div>
</div>
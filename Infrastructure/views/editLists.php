<form id="FormBlog" method="POST" action="?D=editLists">
    <div style="margin-top: 15%" class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-4">
                <label for="inputName" class="form-label">Element</label>
                <input id="inputName" class="form-control" type='text' name="name" value="<?php echo $selectedList->name?>" required><br>
                <input id="inputId" class="form-control" type="hidden" name="idList" value="<?php echo $selectedList->idList?>" required><br>
                <input class="form-control btn btn-primary" type="submit" value="Edit">
            </div>
        </div>
    </div>
</form>
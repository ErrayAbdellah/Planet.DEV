<div id="editSet">
    <section id="add"  class="col mt-5">
        <h4 class="text-center my-5">Setting Article</h4>
        <form action="" method="post">
            <div class="d-flex justify-content-end w-100 align-items-center">
                <div class="mx-5">
                    <select class="form-select form-select-lg mb-3 shadow  bg-body-tertiary "name="" id="">
                        <option selected>..Chose Categorie..</option>
                        <?php foreach ($cat as $row){ ?>
                        <option value="<?= $row['id'] ?>"><?= $row['name'] ?></option>
                        <?php }?>
                    </select>
                </div>
                
                <div class="w-75">
                <div class="w-25 my-1">
                    <label for="title"></label>
                    <input class="form-control" type="text" name="txtTitle" id="txtTitle" placeholder="Title">
                </div> 
                    <textarea class="w-100" name="txtArticle" id="txtArticle" cols="70" rows="6"></textarea>
                </div>  
            </div>
            <div class="d-flex justify-content-end mt-3">
                <button type="button" class="btn btn-danger mx-3" onclick="cancelSettings()">Cancel</button>
                <button type="button" class="btn btn-info mx-3" onclick="">Add new Article</button>
                <input type="submit" class="btn btn-secondary mx-3" name="bntADD" value="Add">
            </div>
        </form>
    </section>
</div>
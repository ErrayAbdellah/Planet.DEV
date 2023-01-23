<?php

$cat = Categorie::show();

if(isset($_POST['bntADD'])){
    // echo "<script>alert(".$_POST['linghtCoount'].")</script>";
    for ($i = 0; $i < $_POST['linghtCoount']+1; $i++){

        $title = $_POST["txtTitle"][$i];
        $content = $_POST["txtArticle"][$i];
        $category = $_POST["categorySelect"][$i];
        $admin = 1; 
        $date = date('y-m-d');
        //  echo "<script>alert('$title')</script>";
        Article::create($title, $content, $admin, $date, $category);
    }
}
?>
<section id="add"  class="col mt-5">
    <h4 class="text-center my-5">Setting Article</h4>
    <form action="" method="post">
        <div id="addNewArticle">
            <div class="d-flex justify-content-end w-100 align-items-center" >
                <div class="mx-5">
                    <select class="form-select form-select-lg mb-3 shadow  bg-body-tertiary "name="categorySelect[]" id="categorySelect">
                        <option selected>..Chose Categorie..</option>
                        <?php foreach ($cat as $row){ ?>
                        <option value="<?= $row['id'] ?>"><?= $row['name'] ?></option>
                        <?php }?>
                    </select>
                </div>
                <div class="w-75">
                    <div class="my-1">
                            <input class="form-control w-25" type="text" name="txtTitle[]" id="txtTitle" placeholder="Title">
                    </div> 
                    <textarea class="w-100" name="txtArticle[]" id="txtArticle" cols="70" rows="6"></textarea>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-end mt-3">
            <input type="hidden" id="linghtCoount" name="linghtCoount">
            <button type="button" class="btn btn-danger mx-3" onclick="cancelSettings()">Cancel</button>
            <button type="button" class="btn btn-info mx-3" onclick="addArticle()">Add new Article</button>
            <input type="submit" class="btn btn-secondary mx-3" name="bntADD" value="Add">
        </div>
    </form>
</section>
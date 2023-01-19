<?php
    $cat = Categorie::show();
    var_dump($cat);

?>
<section id="add"  class="col mt-5">
    <h3 class="text-center my-5">Setting Article</h3>
    <div class="d-flex justify-content-end w-100 align-items-center">
        <div class="mx-5">
            <select class="form-select form-select-lg mb-3 shadow  bg-body-tertiary "name="" id="">
                <option selected>..Chose Categorie..</option>
                <option value="">Cybersecurity</option>
                <option value="">data science</option>
                <option value="">Web</option>
                <option value="">artificial intelligence</option>
            </select>
        </div>
        <div class="w-75">
            <textarea class="w-100" name="" id="" cols="70" rows="10"></textarea>
        </div>  
    </div>
    <div class="d-flex justify-content-end mt-3">
        <button type="button" class="btn btn-danger mx-3" onclick="cancelSettings()">Cancel</button>
        <button type="button" class="btn btn-info mx-3">Add new Article</button>
        <button type="button" class="btn btn-secondary mx-3">Add</button>
    </div>
</section>
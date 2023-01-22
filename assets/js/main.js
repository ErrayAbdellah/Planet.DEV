
let lenght = 1;
$('#linghtCoount').val(lenght);
$("#home").css({'display':'block'});
$("#dashboard").css({'display':'none'});
$("#editSet").css({'display':'none'});
$("#add").css({'display':'none'});
$("#settings").css({'display':'none'});

function bntHome(){
    $("#home").css      ({'display':'block'});
    $("#dashboard").css ({'display':'none'});
    $("#edit").css      ({'display':'none'});
    $("#add").css       ({'display':'none'});
    $("#settings").css  ({'display':'none'});
    $("#editSet").css({'display':'none'});
}

function bntDashboard(){
    
    $("#home").css      ({'display':'none'});
    $("#dashboard").css ({'display':'block'});
    $("#edit").css      ({'display':'none'});
    $("#add").css       ({'display':'none'});
    $("#settings").css  ({'display':'none'});
    $("#editSet").css({'display':'none'});
}

function bntEdit(){
    $("#home").css      ({'display':'none'});
    $("#dashboard").css ({'display':'none'});
    $("#add").css       ({'display':'none'});
    $("#edit").css      ({'display':'block'});
    $("#settings").css  ({'display':'block'});
    $("#editSet").css({'display':'none'});
    
}
function addSettings(){
    
    $("#add").css       ({'display':'block'});
    $("#editSet").css({'display':'none'});
    $("#settings").css  ({'display':'none'});
}

function cancelSettings(){
    $("#add").css       ({'display':'none'});
    $("#editSet").css       ({'display':'none'});
    $("#settings").css  ({'display':'block'});
}

function addEdit(){
    $("#add").css       ({'display':'none'});
    $("#editSet").css       ({'display':'block'});
    $("#settings").css  ({'display':'none'});
}




function addArticle(){
    lenght++;
    $('#linghtCoount').val(lenght);
// console.log(lenght);
    $("#addNewArticle").append(`<div class="d-flex justify-content-end w-100 align-items-center" >
                                    <div class="mx-5">
                                        <select class="form-select form-select-lg mb-3 shadow  bg-body-tertiary "name="categorySelect" id="">
                                            <option selected>..Chose Categorie..</option>
                                            <?php foreach ($cat as $row){ ?>
                                            <option value="<?= $row['id'] ?>"><?= $row['name'] ?></option>
                                            <?php }?>
                                        </select>
                                    </div>
                                    <div class="w-75">
                                        <div class="my-1 ">
                                                <input class="form-control w-25" type="text" name="txtTitle" id="txtTitle" placeholder="Title">
                                            </div> 
                                            <textarea class="w-100" name="txtArticle" id="txtArticle" cols="70" rows="6"></textarea>
                                            </div>
                                            <button class="btn btn-danger" type="button" id="btnRemove">Remove</button>
                                            </div>`);

}


$('body').on('click','#btnRemove',function(){
    $(this).closest('div').remove();
    lenght--;
    $('#linghtCoount').val(lenght);
});


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

    // let catContent = ;
    // let catValue = ;
    
    

    
    
    
    $('#linghtCoount').val(lenght);
    $("#addNewArticle").append(`<div class="d-flex justify-content-end w-100 align-items-center" >
    <div class="mx-5">
                                    <select class="form-select form-select-lg mb-3 shadow  bg-body-tertiary "name="categorySelect[]" id="categorySelect${lenght}">
                                    <!--<option value="1">1</option>-->
                                    
                                    </select>
                                    </div>
                                    <div class="w-75">
                                        <div class="my-1 ">
                                                <input class="form-control w-25" type="text" name="txtTitle[]" id="txtTitle" placeholder="Title">
                                                </div> 
                                            <textarea class="w-100" name="txtArticle[]" id="txtArticle" cols="70" rows="6"></textarea>
                                            </div>
                                            <button class="btn btn-danger" type="button" id="btnRemove">Remove</button>
                                            </div>`);
                                            
    // console.log(lenght);
    remlireSelect();
    lenght++;
                                            
}

function remlireSelect(){
    let Categorie = document.getElementById('categorySelect'+lenght);
    // console.log(Categorie);
    let cat = document.getElementById('categorySelect').children;
    // console.log(cat);
    
   
    
    for(let i= 0 ; i < cat.length ; i++){
        let option = document.createElement("option");
        
        option.text  = cat[i].text;
        option.value = cat[i].value;
        Categorie.appendChild(option);
        
    }
}

$('body').on('click','#btnRemove',function(){
    $(this).closest('div').remove();
    lenght--;
    $('#linghtCoount').val(lenght);
});



$(document).ready( function () {
    $('#dataTable').DataTable();
} );


function readData(id,title,content,cat){
    document.getElementById('txtId').value       = id ; 
    document.getElementById('categoryD').value   = cat ; 
    document.getElementById('txtTitleD').value   = title ; 
    document.getElementById('txtArticleD').value = content; 
    
}

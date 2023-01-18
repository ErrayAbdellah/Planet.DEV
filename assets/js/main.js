

$("#home").css({'display':'block'});
$("#dashboard").css({'display':'none'});
$("#edit").css({'display':'none'});
$("#add").css({'display':'none'});

function bntHome(){
    $("#home").css({'display':'block'});
    $("#dashboard").css({'display':'none'});
    $("#edit").css({'display':'none'});
    $("#add").css({'display':'none'});
}

function bntDashboard(){
  
    $("#home").css({'display':'none'});
    $("#dashboard").css({'display':'block'});
    $("#edit").css({'display':'none'});
    $("#add").css({'display':'none'});
}

function bntEdit(){
    $("#home").css({'display':'none'});
    $("#dashboard").css({'display':'none'});
    $("#edit").css({'display':'block'});
    $("#add").css({'display':'block'});

}



$('#dt-less-columns').mdbEditor({
    modalEditor: true,
    headerLength: 5,
  });
  $('.dataTables_length').addClass('bs-select');

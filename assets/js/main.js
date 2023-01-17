

$("#home").css({'display':'block'});
$("#dashboard").css({'display':'none'});
$("#edit").css({'display':'none'});

function bntHome(){
    $("#home").css({'display':'block'});
    $("#dashboard").css({'display':'none'});
    $("#edit").css({'display':'none'});
}

function bntDashboard(){
  
    $("#home").css({'display':'none'});
    $("#dashboard").css({'display':'block'});
    $("#edit").css({'display':'none'});
}

function bntEdit(){
    $("#home").css({'display':'none'});
    $("#dashboard").css({'display':'none'});
    $("#edit").css({'display':'block'});

}





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



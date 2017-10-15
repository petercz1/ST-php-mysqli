console.log('loaded');

$(document).ready(setup);

function setup(){
    console.log('Inside setup');
    check_backend();
}

function check_backend(){
    console.log('Inside check_backend');
    $.get('backend/common/db.php').success(success).fail(fail);
}

function success(data){
    console.log(data);
    // results are an array of json objects - woohoo!    
}

function fail(data){
    console.log('oops...');
    console.log(data);
}

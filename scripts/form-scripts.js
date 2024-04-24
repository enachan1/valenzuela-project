function showPass(){
    var show = document.getElementById('passInput');
    if (show.type== 'password'){
        show.type='text';
    }
    else{
        show.type='password';
    }
}
function showPassConfirm(){
    var showConfirm = document.getElementById('confirmPass');
    if (showConfirm.type== 'password'){
        showConfirm.type='text';
    }
    else{
        showConfirm.type='password';
    }
}
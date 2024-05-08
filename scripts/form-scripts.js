const showPassword = document.querySelector("#showPass");
const show_confPassword = document.querySelector("#showConfPass");

showPassword.addEventListener("click", () => {
    console.log("clicked show pass")
    var show = document.getElementById('passInput');
    if (show.type== 'password'){
        show.type='text';
    }
    else{
        show.type='password';
    }
})

show_confPassword.addEventListener("click", () => {
    console.log("clicked show pass in conf")
    var showConfirm = document.getElementById('confirmPass');
    if (showConfirm.type== 'password'){
        showConfirm.type='text';
    }
    else{
        showConfirm.type='password';
    }
})
function loginFormValidate() {
    var username = document.getElementById("username");
    var password = document.getElementById("password");
    var validate = true;

    removeErrMsg();

    if (username.value.trim() == ""){
        validate = false;
        username.classList.add("error-input");
        username.nextElementSibling.innerHTML="Please enter a valid username";
    }

    if (password.value.trim() == ""){
        validate = false;
        password.classList.add("error-input");
        password.nextElementSibling.innerHTML="Title should not be empty";
    }

    return validate;
}

function sliderFormValidate() {
    var title = document.getElementById("title");
    var txt_top = document.getElementById("txt_top");
    var txt_middle = document.getElementById("txt_middle");
    var txt_bottom = document.getElementById("txt_bottom");
    var btn_left_txt = document.getElementById("btn_left_txt");
    var btn_left_url = document.getElementById("btn_left_url");
    var btn_right_txt = document.getElementById("btn_right_txt");
    var btn_right_url = document.getElementById("btn_right_url");
    var validate = true;

    removeErrMsg();

    if (title.value.trim() == ""){
        validate = false;
        title.classList.add("error-input");
        title.nextElementSibling.innerHTML="Title should not be empty";
    }

    if (txt_middle.value.trim() == ""){
        validate = false;
        txt_middle.classList.add("error-input");
        txt_middle.nextElementSibling.innerHTML="Main text should not be empty";
    }

    if (txt_bottom.value.trim() == ""){
        validate = false;
        txt_bottom.classList.add("error-input");
        txt_bottom.nextElementSibling.innerHTML="Descriptoin text should not be empty";
    }

    if (btn_left_txt.value.trim() == ""){
        validate = false;
        btn_left_txt.classList.add("error-input");
        btn_left_txt.nextElementSibling.innerHTML="Left button text should not be empty";
    }

    if (btn_right_txt.value.trim() == ""){
        validate = false;
        btn_right_txt.classList.add("error-input");
        btn_right_txt.nextElementSibling.innerHTML="Right button text should not be empty";
    }

    if (btn_left_url.value.trim() == ""){
        validate = false;
        btn_left_url.classList.add("error-input");
        btn_left_url.nextElementSibling.innerHTML="Left button url should not be empty";
    }

    if (btn_right_url.value.trim() == ""){
        validate = false;
        btn_right_url.classList.add("error-input");
        btn_right_url.nextElementSibling.innerHTML="Right button url should not be empty";
    }

    return validate;
}

function removeErrMsg(){
    var errInput = document.querySelectorAll(".error-input");
    var errMsg = document.querySelectorAll(".error-msg");
    [].forEach.call(errInput, function (el) {
        el.classList.remove("error-input");
    });
    [].forEach.call(errMsg, function (el) {
        el.innerHTML = "";
    });
}

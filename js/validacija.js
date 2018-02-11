function val() {

    if (forma.input31.value == "") {
        $.notify("Please enter Your name");
        forma.input31.focus();
        return false;
    }
    var rega = /^[A-Z]{1}[a-z]{2,19}\s[A-Z]{1}[a-z]{3,29}$/;


    if (forma.input32.value == "") {
        $.notify("Please enter Your email");
        forma.input32.focus();
        return false;
    }
    var reg = /^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

    if (reg.test(forma.input32.value) == false) {
        $.notify("Please write Your email correctly");
        forma.input32.focus();
        return false;
    }
    if (forma.input33.value == "") {
        $.notify("Please enter Your question");
        forma.input33.focus();
        return false;
    }

    return true;
};


function valReg() {
    if ($(tbIme).val() == "") {
        $.notify("Please enter Your name");
        $(tbIme).focus();
        return false;
    }

    if ($(tbPrezime).val() == "") {
        $.notify("Please enter Your name");
        $(tbPrezime).focus();
        return false;
    }

    var email = $(tbEmail).val();

    if (email == "") {
        $.notify("Please write Your email");
        $(tbEmail).focus();
        return false;
    }

    var reg = /^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    if (reg.test(email) == false) {
        $.notify("Please write Your email correctly");
        $(tbEmail).focus();
        return false;
    }

    if ($(tbKorIme).val() == "") {
        $.notify("Please write Your username");
        $(tbKorIme).focus();
        return false;
    }
    
    if ($(tbLozinka).val() == "") {
        $.notify("Please write Your password");
        $(tbLozinka).focus();
        return false;
    }

    return true;
}

function valLog() {
    if ($(user).val() == "") {
        $.notify("Please write Your username");
        $(user).focus();
        return false;
    }
    
    if ($(pass).val() == "") {
        $.notify("Please write Your password");
        $(pass).focus();
        return false;
    }

    return true;
}

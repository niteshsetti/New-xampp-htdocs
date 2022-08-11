const register = () => {
    var fn = document.getElementById('firstname').value;
    var ln = document.getElementById('lastname').value;
    var redgno = document.getElementById('redgno').value;
    var email = document.getElementById('email').value;
    if (fn == "") {
        document.getElementById('error').innerHTML = "This field is required";
        document.getElementById('error').style.color = "crimson";
        document.getElementById('firstname').style.borderColor = "crimson";
        document.getElementById('error').style.fontFamily = "monospace";
    }
    if (ln == "") {
        document.getElementById('error1').innerHTML = "This field is required";
        document.getElementById('error1').style.color = "crimson";
        document.getElementById('lastname').style.borderColor = "crimson";
        document.getElementById('error1').style.fontFamily = "monospace";
    }
    if (redgno == "") {
        document.getElementById('error2').innerHTML = "This field is required";
        document.getElementById('error2').style.color = "crimson";
        document.getElementById('redgno').style.borderColor = "crimson";
        document.getElementById('error2').style.fontFamily = "monospace";
    }
    if (email == "") {
        document.getElementById('error3').innerHTML = "This field is required";
        document.getElementById('error3').style.color = "crimson";
        document.getElementById('email').style.borderColor = "crimson";
        document.getElementById('error3').style.fontFamily = "monospace";
    }
    if (fn == "" || ln == "" || redgno == "" || redgno == "" || email == "") {

    }
    else {
        $.ajax({
            url: "../php/register.php",
            method: "post",
            async: false,
            data: {
                "firstname": fn,
                "lastname": ln,
                "redgno": redgno,
                "email": email
            },
            success: function (data) {
                if (data === "Contest-ID Send to Your Mail Successfully") {
                    setTimeout(function () {
                        redirect();
                    },1000);
                }
            }
        });
    }
}
var a = ""
const fname = () => {
    var fn = document.getElementById('firstname');
    fn.value = fn.value.toUpperCase();
    if (fn.value.length < 2) {
        a = document.getElementById('error').innerHTML = "Atleat 3 chars";
        document.getElementById('error').style.color = "crimson";
        document.getElementById('firstname').style.borderColor = "crimson";
        document.getElementById('error').style.fontFamily = "monospace";
        document.getElementById('register').disabled = true;
    }
    else {
        document.getElementById('error').innerHTML = "";
        document.getElementById('firstname').style.borderColor = "green";
        document.getElementById('error').style.fontFamily = "monospace";
        document.getElementById('register').disabled = false;
    }
}
const lname = () => {
    var ln = document.getElementById('lastname');
    ln.value = ln.value.toUpperCase();
    if (ln.value.length < 2) {
        document.getElementById('error1').innerHTML = "Atleat 3 chars";
        document.getElementById('error1').style.color = "crimson";
        document.getElementById('lastname').style.borderColor = "crimson";
        document.getElementById('error1').style.fontFamily = "monospace";
        document.getElementById('register').disabled = true;
    }
    else {
        document.getElementById('error1').innerHTML = "";
        document.getElementById('lastname').style.borderColor = "green";
        document.getElementById('error1').style.fontFamily = "monospace";
        document.getElementById('register').disabled = false;
    }
}
const rno = () => {
    var red = document.getElementById('redgno').value;
    if (red.length == 10) {
        var t = red.toUpperCase();
        let result = t.substring(0, 8);
        if (result == "18K61A05") {
            document.getElementById('error2').innerHTML = "";
            document.getElementById('redgno').style.borderColor = "green";
            document.getElementById('error2').style.fontFamily = "monospace";
            document.getElementById('register').disabled = false;
        }
        else {
            var b = document.getElementById('error2').innerHTML = "Invalid Redgnumber";
            document.getElementById('error2').style.color = "crimson";
            document.getElementById('redgno').style.borderColor = "crimson";
            document.getElementById('error2').style.fontFamily = "monospace";
            document.getElementById('register').disabled = true;
        }
    }
    else {
        document.getElementById('error2').innerHTML = "Invalid Redgnumber";
        document.getElementById('error2').style.color = "crimson";
        document.getElementById('redgno').style.borderColor = "crimson";
        document.getElementById('error2').style.fontFamily = "monospace";
        document.getElementById('register').disabled = true;
    }
}
const ema = () => {
    var el = document.getElementById('email').value;
    var eval = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(el);
    if (eval) {
        document.getElementById('error3').innerHTML = "";
        document.getElementById('email').style.borderColor = "green";
        document.getElementById('error3').style.fontFamily = "monospace";
        document.getElementById('register').disabled = false;
    }
    else {
        var c = document.getElementById('error3').innerHTML = "Invalid Email Address";
        document.getElementById('error3').style.color = "crimson";
        document.getElementById('email').style.borderColor = "crimson";
        document.getElementById('error3').style.fontFamily = "monospace";
        document.getElementById('register').disabled = true;
    }
}
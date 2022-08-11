const enroll = () => {
    var contest_id = document.getElementById('contest').value;
    if (contest_id == "") {
        document.getElementById('error').innerHTML = "This Field is required";
        document.getElementById('error').style.color = "crimson";
        document.getElementById('contest').style.borderColor = "crimson";
        document.getElementById('error').style.fontFamily = "monospace";
    }
    if (contest_id == "") {
    }
    else {
        $.ajax({
            url: "../php/login.php",
            method: "post",
            async: false,
            data: {
                "contest": contest_id
            },
            success: function (data) {
              if(data === "Login"){
                  alert(data);
                  dashboards();
              }
              else{
                  alert(data);
              }
            }
        });
    }
}
const check = () => {
    var contest_id = document.getElementById('contest').value;
    var match = /^\d{4}$/.test(contest_id);

    if (match) {
        document.getElementById('error').innerHTML = "";
        document.getElementById('contest').style.borderColor = "green";
        document.getElementById('error').style.fontFamily = "monospace";
    }
    else {
        document.getElementById('error').innerHTML = "Contest ID Must Contain 4 Digits Only";
        document.getElementById('error').style.color = "crimson";
        document.getElementById('contest').style.borderColor = "crimson";
        document.getElementById('error').style.fontFamily = "monospace";
    }
}
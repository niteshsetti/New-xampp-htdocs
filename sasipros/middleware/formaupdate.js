function uprank(urank, urcoll, urdate, urdes, rp) {
    document.getElementById("rpa").value = rp;
    document.getElementById("urank").value = urank;
    document.getElementById("ucoll").value = urcoll;
    document.getElementById("udate").value = urdate;
    document.getElementById("urd").value = urdes;
}
function upaddtrain(a, b, c, d, e, f,g) {
    document.getElementById("g1").value = g;
    document.getElementById("a1").value = a;
    document.getElementById("b1").value = b;
    document.getElementById("c1").value = c;
    document.getElementById("d1").value = d;
    document.getElementById("e1").value = e;
    document.getElementById("f1").value = f;
}
function uptoex(a, b, c, d, e, f,g) {
    document.getElementById("g2").value = g;
    document.getElementById("a2").value = a;
    document.getElementById("b2").value = b;
    document.getElementById("c2").value = c;
    document.getElementById("d2").value = d;
    document.getElementById("e2").value = e;
    document.getElementById("f2").value = f;
}

$(document).ready(function () {
    $("#uforma3").click(function () {
        var a = document.getElementById("urank").value;
        var b = document.getElementById("ucoll").value;
        var c = document.getElementById("udate").value;
        var d = document.getElementById("urd").value;
        var e = document.getElementById("rpa").value;
        $.ajax({
            url: "../backend/updateforma.php",
            method: "post",
            async: false,
            data: {
                "a": a,
                "b": b,
                "c": c,
                "d": d,
                "e": e

            },
            success: function (data) {
                console.log(data);
                if (data === "Success") {
                    setTimeout(function () {
                        window.location.replace("dashboard");
                    });
                }
            }
        })
    });

    $("#uforma4").click(function () {
        var a1 = document.getElementById("a1").value;
        var b1 = document.getElementById("b1").value;
        var c1 = document.getElementById("c1").value;
        var d1 = document.getElementById("d1").value;
        var e1 = document.getElementById("e1").value;
        var f1 = document.getElementById("f1").value;
        var g1 = document.getElementById("g1").value;
        $.ajax({
            url: "../backend/updateforma.php",
            method: "post",
            async: false,
            data: {
                "a1": a1,
                "b1": b1,
                "c1": c1,
                "d1": d1,
                "e1": e1,
                "f1":f1,
                "g1":g1

            },
            success: function (data) {
                console.log(data);
                if (data === "Success") {
                    setTimeout(function () {
                        window.location.replace("dashboard");
                    });
                }
            }
        })
    });

    
    $("#uforma5").click(function () {
        var a2 = document.getElementById("a2").value;
        var b2 = document.getElementById("b2").value;
        var c2 = document.getElementById("c2").value;
        var d2 = document.getElementById("d2").value;
        var e2 = document.getElementById("e2").value;
        var f2 = document.getElementById("f2").value;
        var g2 = document.getElementById("g2").value;
        $.ajax({
            url: "../backend/updateforma.php",
            method: "post",
            async: false,
            data: {
                "a2": a2,
                "b2": b2,
                "c2": c2,
                "d2": d2,
                "e2": e2,
                "f2":f2,
                "g2":g2

            },
            success: function (data) {
                console.log(data);
                if (data === "Success") {
                    setTimeout(function () {
                        window.location.replace("dashboard");
                    });
                }
            }
        })
    });
});

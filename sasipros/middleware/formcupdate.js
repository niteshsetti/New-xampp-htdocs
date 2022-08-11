function raa(a222,b22,c22,d22,e22) {
    console.log(a222);
    document.getElementById("a222").value = a222;
    document.getElementById("b22").value = b22;
    document.getElementById("c22").value = c22;
    document.getElementById("d22").value = d22;
    document.getElementById("e22").value = e22;
   
}

function oex(a10,b10,c10,d10,e10) {
    document.getElementById("a10").value = a10;
    document.getElementById("b10").value = b10;
    document.getElementById("c10").value = c10;
    document.getElementById("d10").value = d10;
    document.getElementById("e10").value = e10;
   
}


function ifit(a23,b23,c23,d23) {
    document.getElementById("a23").value = a23;
    document.getElementById("b23").value = b23;
    document.getElementById("c23").value = c23;
    document.getElementById("d23").value = d23;
    
   
}

function bop(a24,b24,c24,d24,e24) {
    document.getElementById("a24").value = a24;
    document.getElementById("b24").value = b24;
    document.getElementById("c24").value = c24;
    document.getElementById("d24").value = d24;
    document.getElementById("e24").value = e24;
    
   
}

function repo(a25,b25,c25,d25,e25) {
    document.getElementById("a25").value = a25;
    document.getElementById("b25").value = b25;
    document.getElementById("c25").value = c25;
    document.getElementById("d25").value = d25;
    document.getElementById("e25").value = e25;
    
   
}


function spo(a26,b26,c26,d26,e26) {
    document.getElementById("a26").value = a26;
    document.getElementById("b26").value = b26;
    document.getElementById("c26").value = c26;
    document.getElementById("d26").value = d26;
    document.getElementById("e26").value = e26;
    
   
}

function pat(a27,b27,c27,d27,e27) {
    document.getElementById("a27").value = a27;
    document.getElementById("b27").value = b27;
    document.getElementById("c27").value = c27;
    document.getElementById("d27").value = d27;
    document.getElementById("e27").value = e27;
    
   
}



function gud(a28,b28,c28,d28,e28,f28) {
    document.getElementById("a28").value = a28;
    document.getElementById("b28").value = b28;
    document.getElementById("c28").value = c28;
    document.getElementById("d28").value = d28;
    document.getElementById("e28").value = e28;
    document.getElementById("f28").value = f28;
    
   
}

$(document).ready(function () {
    $("#uformc1").click(function () {
        var a222 = document.getElementById("a222").value;
        var b22 = document.getElementById("b22").value;
        var c22 = document.getElementById("c22").value;
        var d22 = document.getElementById("d22").value;
        var e22 = document.getElementById("e22").value;
        $.ajax({
            url: "../backend/updateformc.php",
            method: "post",
            async: false,
            data: {
                "a222": a222,
                "b22": b22,
                "c22": c22,
                "d22": d22,
                "e22": e22
                
            },
            success: function (data) {
                console.log(data);
                if (data === "Success") {
                   setTimeout(function () {
                        window.location.replace("blank");
                    });
                }
            }
        })
    });


    $(document).ready(function () {
        $("#uformc2").click(function () {
            var a10 = document.getElementById("a10").value;
            var b10 = document.getElementById("b10").value;
            var c10 = document.getElementById("c10").value;
            var d10 = document.getElementById("d10").value;
            var e10 = document.getElementById("e10").value;
            $.ajax({
                url: "../backend/updateformc.php",
                method: "post",
                async: false,
                data: {
                    "a10": a10,
                    "b10": b10,
                    "c10": c10,
                    "d10": d10,
                    "e10": e10
                    
                },
                success: function (data) {
                    console.log(data);
                    if (data === "Success") {
                       setTimeout(function () {
                            window.location.replace("blank");
                        });
                    }
                }
            })
        });
    });


    $(document).ready(function () {
        $("#uformc3").click(function () {
            var a23 = document.getElementById("a23").value;
            var b23 = document.getElementById("b23").value;
            var c23 = document.getElementById("c23").value;
            var d23 = document.getElementById("d23").value;
           
            $.ajax({
                url: "../backend/updateformc.php",
                method: "post",
                async: false,
                data: {
                    "a23": a23,
                    "b23": b23,
                    "c23": c23,
                    "d23": d23
                   
                    
                },
                success: function (data) {
                    console.log(data);
                    if (data === "Success") {
                       setTimeout(function () {
                            window.location.replace("blank");
                        });
                    }
                }
            })
        });
    });


    $(document).ready(function () {
        $("#uformc4").click(function () {
            var a24 = document.getElementById("a24").value;
            var b24 = document.getElementById("b24").value;
            var c24 = document.getElementById("c24").value;
            var d24 = document.getElementById("d24").value;
            var e24 = document.getElementById("e24").value;
           
            $.ajax({
                url: "../backend/updateformc.php",
                method: "post",
                async: false,
                data: {
                    "a24": a24,
                    "b24": b24,
                    "c24": c24,
                    "d24": d24,
                    "e24": e24
                   
                    
                },
                success: function (data) {
                    console.log(data);
                    if (data === "Success") {
                       setTimeout(function () {
                            window.location.replace("blank");
                        });
                    }
                }
            })
        });
    });

    $(document).ready(function () {
        $("#uformc5").click(function () {
            var a25 = document.getElementById("a25").value;
            var b25 = document.getElementById("b25").value;
            var c25 = document.getElementById("c25").value;
            var d25 = document.getElementById("d25").value;
            var e25 = document.getElementById("e25").value;
           
            $.ajax({
                url: "../backend/updateformc.php",
                method: "post",
                async: false,
                data: {
                    "a25": a25,
                    "b25": b25,
                    "c25": c25,
                    "d25": d25,
                    "e25": e25
                   
                    
                },
                success: function (data) {
                    console.log(data);
                    if (data === "Success") {
                       setTimeout(function () {
                            window.location.replace("blank");
                        });
                    }
                }
            })
        });
    });

    $(document).ready(function () {
        $("#uformc6").click(function () {
            var a26 = document.getElementById("a26").value;
            var b26 = document.getElementById("b26").value;
            var c26 = document.getElementById("c26").value;
            var d26 = document.getElementById("d26").value;
            var e26 = document.getElementById("e26").value;
           
            $.ajax({
                url: "../backend/updateformc.php",
                method: "post",
                async: false,
                data: {
                    "a26": a26,
                    "b26": b26,
                    "c26": c26,
                    "d26": d26,
                    "e26": e26
                   
                    
                },
                success: function (data) {
                    console.log(data);
                    if (data === "Success") {
                       setTimeout(function () {
                            window.location.replace("blank");
                        });
                    }
                }
            })
        });
    });



    $(document).ready(function () {
        $("#uformc7").click(function () {
            var a27 = document.getElementById("a27").value;
            var b27 = document.getElementById("b27").value;
            var c27 = document.getElementById("c27").value;
            var d27 = document.getElementById("d27").value;
            var e27 = document.getElementById("e27").value;
        
            $.ajax({
                url: "../backend/updateformc.php",
                method: "post",
                async: false,
                data: {
                    "a27": a27,
                    "b27": b27,
                    "c27": c27,
                    "d27": d27,
                    "e27": e27
                   
                    
                },
                success: function (data) {
                    console.log(data);
                    if (data === "Success") {
                       setTimeout(function () {
                            window.location.replace("blank");
                        });
                    }
                }
            })
        });
    });

    $(document).ready(function () {
        $("#uformc8").click(function () {
            var a28 = document.getElementById("a28").value;
            var b28 = document.getElementById("b28").value;
            var c28 = document.getElementById("c28").value;
            var d28 = document.getElementById("d28").value;
            var e28 = document.getElementById("e28").value;
            var f28 = document.getElementById("f28").value;
           
            $.ajax({
                url: "../backend/updateformc.php",
                method: "post",
                async: false,
                data: {
                    "a28": a28,
                    "b28": b28,
                    "c28": c28,
                    "d28": d28,
                    "e28": e28,
                    "f28": f28
                   
                    
                },
                success: function (data) {
                    console.log(data);
                    if (data === "Success") {
                       setTimeout(function () {
                            window.location.replace("blank");
                        });
                    }
                }
            })
        });
    });
});

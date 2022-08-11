function tla(a4,b4,c4,d4,e4,f4,g4,h4,i4,j4,k4) {
    document.getElementById("a4").value = a4;
    document.getElementById("b4").value = b4;
    document.getElementById("c4").value = c4;
    document.getElementById("d4").value = d4;
    document.getElementById("e4").value = e4;
    document.getElementById("f4").value = f4;
    document.getElementById("g4").value = g4;
    document.getElementById("h4").value = h4;
    document.getElementById("i4").value = i4;
    document.getElementById("j4").value = j4;
    document.getElementById("k4").value = k4;
}

function oa(a5,b5,c5,d5,e5,f5,g5) {
    document.getElementById("a5").value = a5;
    document.getElementById("b5").value = b5;
    document.getElementById("c5").value = c5;
    document.getElementById("d5").value = d5;
    document.getElementById("e5").value = e5;
    document.getElementById("f5").value = f5;
    document.getElementById("g5").value = g5;
   
}

function ae(a6,b6,c6,d6) {
    document.getElementById("a6").value = a6;
    document.getElementById("b6").value = b6;
    document.getElementById("c6").value = c6;
    document.getElementById("d6").value = d6;
   
}

function ew(a7,b7,c7) {
    document.getElementById("a7").value = a7;
    document.getElementById("b7").value = b7;
    document.getElementById("c7").value = c7;
   
}

function uit(a8,b8,c8) {
    document.getElementById("a8").value = a8;
    document.getElementById("b8").value = b8;
    document.getElementById("c8").value = c8;
   
}

function ac(a9,b9,c9,d9) {
    document.getElementById("a9").value = a9;
    document.getElementById("b9").value = b9;
    document.getElementById("c9").value = c9;
    document.getElementById("d9").value = d9;
   
}

function spm(a10,b10,c10,d10) {
    document.getElementById("a10").value = a10;
    document.getElementById("b10").value = b10;
    document.getElementById("c10").value = c10;
    document.getElementById("d10").value = d10;
   
}

function sf(a11,b11,c11,d11) {
    document.getElementById("a11").value = a11;
    document.getElementById("b11").value = b11;
    document.getElementById("c11").value = c11;
    document.getElementById("d11").value = d11;
   
}

function spp(a12,b12,c12,d12) {
    document.getElementById("a12").value = a12;
    document.getElementById("b12").value = b12;
    document.getElementById("c12").value = c12;
    document.getElementById("d12").value = d12;
   
}

function ct(a13,b13,c13,d13) {
    document.getElementById("a13").value = a13;
    document.getElementById("b13").value = b13;
    document.getElementById("c13").value = c13;
    document.getElementById("d13").value = d13;
   
}


function ict(a14,b14,c14,d14) {
    document.getElementById("a14").value = a14;
    document.getElementById("b14").value = b14;
    document.getElementById("c14").value = c14;
    document.getElementById("d14").value = d14;
   
}


function pi(a15,b15,c15,d15) {
    document.getElementById("a15").value = a15;
    document.getElementById("b15").value = b15;
    document.getElementById("c15").value = c15;
    document.getElementById("d15").value = d15;
   
}


function aa(a16,b16,c16,d16) {
    document.getElementById("a16").value = a16;
    document.getElementById("b16").value = b16;
    document.getElementById("c16").value = c16;
    document.getElementById("d16").value = d16;
   
}



$(document).ready(function () {
    $("#uformb1").click(function () {
        var a4 = document.getElementById("a4").value;
        var b4 = document.getElementById("b4").value;
        var c4 = document.getElementById("c4").value;
        var d4 = document.getElementById("d4").value;
        var e4 = document.getElementById("e4").value;
        var f4 = document.getElementById("f4").value;
        var g4 = document.getElementById("g4").value;
        var h4=  document.getElementById("h4").value;
        var i4 = document.getElementById("i4").value;
        var j4 = document.getElementById("j4").value;
        var k4 = document.getElementById("k4").value;
        $.ajax({
            url: "../backend/updateformb.php",
            method: "post",
            async: false,
            data: {
                "a4": a4,
                "b4": b4,
                "c4": c4,
                "d4": d4,
                "e4": e4,
                "f4": f4,
                "g4": g4,
                "h4": h4,
                "i4": i4,
                "j4": j4,
                "k4": k4


            },
            success: function (data) {
                console.log(data);
                if (data === "Success") {
                   setTimeout(function () {
                        window.location.replace("404");
                    });
                }
            }
        })
    });

    

    $("#uformb2").click(function () {
        var a5 = document.getElementById("a5").value;
        var b5 = document.getElementById("b5").value;
        var c5 = document.getElementById("c5").value;
        var d5 = document.getElementById("d5").value;
        var e5 = document.getElementById("e5").value;
        var f5 = document.getElementById("f5").value;
        var g5 = document.getElementById("g5").value;
        
        $.ajax({
            url: "../backend/updateformb.php",
            method: "post",
            async: false,
            data: {
                "a5": a5,
                "b5": b5,
                "c5": c5,
                "d5": d5,
                "e5": e5,
                "f5": f5,
                "g5": g5
        
            },
            success: function (data) {
                console.log(data);
                if (data === "Success") {
                   setTimeout(function () {
                        window.location.replace("404");
                    });
                }
            }
        })
    });

    $("#uformb3").click(function () {
        var a6 = document.getElementById("a6").value;
        var b6 = document.getElementById("b6").value;
        var c6 = document.getElementById("c6").value;
        var d6 = document.getElementById("d6").value;
        
        $.ajax({
            url: "../backend/updateformb.php",
            method: "post",
            async: false,
            data: {
                "a6": a6,
                "b6": b6,
                "c6": c6,
                "d6": d6
        
            },
            success: function (data) {
                console.log(data);
                if (data === "Success") {
                   setTimeout(function () {
                        window.location.replace("404");
                    });
                }
            }
        })
    });


    $("#uformb4").click(function () {
        var a7 = document.getElementById("a7").value;
        var b7 = document.getElementById("b7").value;
        var c7 = document.getElementById("c7").value;
       
        $.ajax({
            url: "../backend/updateformb.php",
            method: "post",
            async: false,
            data: {
                "a7": a7,
                "b7": b7,
                "c7": c7
               
        
            },
            success: function (data) {
                console.log(data);
                if (data === "Success") {
                   setTimeout(function () {
                        window.location.replace("404");
                    });
                }
            }
        })
    });


    $("#uformb5").click(function () {
        var a8 = document.getElementById("a8").value;
        var b8 = document.getElementById("b8").value;
        var c8 = document.getElementById("c8").value;
       
        $.ajax({
            url: "../backend/updateformb.php",
            method: "post",
            async: false,
            data: {
                "a8": a8,
                "b8": b8,
                "c8": c8
               
        
            },
            success: function (data) {
                console.log(data);
                if (data === "Success") {
                   setTimeout(function () {
                        window.location.replace("404");
                    });
                }
            }
        })
    });


    $("#uformb6").click(function () {
        var a9 = document.getElementById("a9").value;
        var b9 = document.getElementById("b9").value;
        var c9 = document.getElementById("c9").value;
        var d9 = document.getElementById("d9").value;
       
        $.ajax({
            url: "../backend/updateformb.php",
            method: "post",
            async: false,
            data: {
                "a9": a9,
                "b9": b9,
                "c9": c9,
                "d9": d9
               
        
            },
            success: function (data) {
                console.log(data);
                if (data === "Success") {
                   setTimeout(function () {
                        window.location.replace("404");
                    });
                }
            }
        })
    });

    $("#uformb6").click(function () {
        var a9 = document.getElementById("a9").value;
        var b9 = document.getElementById("b9").value;
        var c9 = document.getElementById("c9").value;
        var d9 = document.getElementById("d9").value;
       
        $.ajax({
            url: "../backend/updateformb.php",
            method: "post",
            async: false,
            data: {
                "a9": a9,
                "b9": b9,
                "c9": c9,
                "d9": d9
               
        
            },
            success: function (data) {
                console.log(data);
                if (data === "Success") {
                   setTimeout(function () {
                        window.location.replace("404");
                    });
                }
            }
        })
    });


    $("#uformb7").click(function () {
        var a10 = document.getElementById("a10").value;
        var b10 = document.getElementById("b10").value;
        var c10 = document.getElementById("c10").value;
        var d10 = document.getElementById("d10").value;
       
        $.ajax({
            url: "../backend/updateformb.php",
            method: "post",
            async: false,
            data: {
                "a10": a10,
                "b10": b10,
                "c10": c10,
                "d10": d10
               
        
            },
            success: function (data) {
                console.log(data);
                if (data === "Success") {
                   setTimeout(function () {
                        window.location.replace("404");
                    });
                }
            }
        })
    });


    $("#uformb8").click(function () {
        var a11 = document.getElementById("a11").value;
        var b11 = document.getElementById("b11").value;
        var c11 = document.getElementById("c11").value;
        var d11 = document.getElementById("d11").value;
       
        $.ajax({
            url: "../backend/updateformb.php",
            method: "post",
            async: false,
            data: {
                "a11": a11,
                "b11": b11,
                "c11": c11,
                "d11": d11
               
        
            },
            success: function (data) {
                console.log(data);
                if (data === "Success") {
                   setTimeout(function () {
                        window.location.replace("404");
                    });
                }
            }
        })
    });


    $("#uformb9").click(function () {
        var a12 = document.getElementById("a12").value;
        var b12 = document.getElementById("b12").value;
        var c12 = document.getElementById("c12").value;
        var d12 = document.getElementById("d12").value;
       
        $.ajax({
            url: "../backend/updateformb.php",
            method: "post",
            async: false,
            data: {
                "a12": a12,
                "b12": b12,
                "c12": c12,
                "d12": d12
               
        
            },
            success: function (data) {
                console.log(data);
                if (data === "Success") {
                   setTimeout(function () {
                        window.location.replace("404");
                    });
                }
            }
        })
    });

    $("#uformb10").click(function () {
        var a13 = document.getElementById("a13").value;
        var b13 = document.getElementById("b13").value;
        var c13 = document.getElementById("c13").value;
        var d13= document.getElementById("d13").value;
       
        $.ajax({
            url: "../backend/updateformb.php",
            method: "post",
            async: false,
            data: {
                "a13": a13,
                "b13": b13,
                "c13": c13,
                "d13": d13
               
        
            },
            success: function (data) {
                console.log(data);
                if (data === "Success") {
                   setTimeout(function () {
                        window.location.replace("404");
                    });
                }
            }
        })
    });

    $("#uformb11").click(function () {
        var a14 = document.getElementById("a14").value;
        var b14 = document.getElementById("b14").value;
        var c14 = document.getElementById("c14").value;
        var d14 = document.getElementById("d14").value;
       
        $.ajax({
            url: "../backend/updateformb.php",
            method: "post",
            async: false,
            data: {
                "a14": a14,
                "b14": b14,
                "c14": c14,
                "d14": d14
               
        
            },
            success: function (data) {
                console.log(data);
                if (data === "Success") {
                   setTimeout(function () {
                        window.location.replace("404");
                    });
                }
            }
        })
    });



    $("#uformb12").click(function () {
        var a15 = document.getElementById("a15").value;
        var b15 = document.getElementById("b15").value;
        var c15 = document.getElementById("c15").value;
        var d15 = document.getElementById("d15").value;
       
        $.ajax({
            url: "../backend/updateformb.php",
            method: "post",
            async: false,
            data: {
                "a15": a15,
                "b15": b15,
                "c15": c15,
                "d15": d15
               
        
            },
            success: function (data) {
                console.log(data);
                if (data === "Success") {
                   setTimeout(function () {
                        window.location.replace("404");
                    });
                }
            }
        })
    });


    $("#uformb13").click(function () {
        var a16 = document.getElementById("a16").value;
        var b16 = document.getElementById("b16").value;
        var c16 = document.getElementById("c16").value;
        var d16 = document.getElementById("d16").value;
       
        $.ajax({
            url: "../backend/updateformb.php",
            method: "post",
            async: false,
            data: {
                "a16": a16,
                "b16": b16,
                "c16": c16,
                "d16": d16
               
        
            },
            success: function (data) {
                console.log(data);
                if (data === "Success") {
                   setTimeout(function () {
                        window.location.replace("404");
                    });
                }
            }
        })
    });
});

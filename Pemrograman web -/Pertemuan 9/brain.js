function home(){
    $(document).ready(function(){
       $("#utama").load("konten.html")
    });
}

function oop(){
    $(document).ready(function(){
       $("#utama").load("oop.html")
    });
}

function web(){
    $(document).ready(function(){
       $("#utama").load("pemrograman_web.html")
    });
}
function metnum(){
    $(document).ready(function(){
       $("#utama").load("SoftwareNumerik.html")
    });
}

$(document).ready(function() {

    $("#anime").click(function(){
        $("#foto").toggle(1000);
    });

    $("#footer").mouseenter(function(){
        
        $("#bawah").animate({fontSize: '2em'},'fast');
        $("#foto").animate({opacity: '0.5'},'fast');
    });

    $("#footer").mouseleave(function(){
        
        $("#bawah").animate({fontSize: '32px'},'fast');
        $("#foto").animate({opacity: '1'},'fast');
    });
   


}) ;

function hitung(){
    var a = parseInt(document.getElementById("pangkatdua").value);
    var b = parseInt(document.getElementById("pangkatsatu").value);
    var c = parseInt(document.getElementById("konstanta").value);
    var f;  var x; var x2; var ftur; var D;

    D=(b*b)-(4*a*b)

    if(D>=0){
    x=c;
    f-(a*x*x)+(b*x)+c;
    ftur-(2*a*x)+(b*x);
    
    while((f<-0.0001)||(f>0.0001)){
        x=x-(f/ftur)
        f=(a*x*x)+(b*x);
        ftur=(2*a*x)+b;
    }
        document.getElementById("hasil").innerHTML = ""+x+"";

        x2=0-c;
        f=(a*x2*x2)+(b*x2)+c;
        ftur=(2*a*x2)+(b*x2);
        
        while((f<-0.0001)||(f>0.0001)){
            x2=x2-(f/ftur)
            f=(a*x2*x2)+(b*x2)+c;
            ftur=(2*a*x2)+b;
        }
        document.getElementById("hasil").innerHTML = ""+x.toPrecision(4)+"";
        document.getElementById("hasil2").innerHTML = ""+x2.toPrecision(4)+"";
        alert("Akar penyelesaian adalah: "+x.toFixed(4)+ "dan"+X2.toFixed(4)+"");
    }    
    else{
        document.getElementById("hasil").innerHTML = "tidak punya penyelesaian";
        document.getElementById("hasil2").innerHTML = "tidak punya penyelesaian";
        alert("tidak punya akar penyelesaian");
    }
}
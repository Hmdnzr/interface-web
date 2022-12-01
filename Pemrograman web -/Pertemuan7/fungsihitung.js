function hitung(){
    var a = parseInt(document.getElementById("jumlahtiket").value);
    var jumlah; var total;

    jumlah = (a*35000);

    document.getElementById("total").innerHTML = ""+jumlah+"";

    alert("Uang yang harus anda bayarkan : "+ total +"");
}
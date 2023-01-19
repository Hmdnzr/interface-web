<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.1.3-dist//css/bootstrap.css">

    <title>Form Pendaftaran</title>
</head>

<body style="display: center;">
    <form method="post" action="daftarcoding.php">
        <table class="bg-danger">
            <tr>
                <td>Nama:</td>
                <td><input type="text" id="nama" name="nama" required placeholder=" Masukkan Nama anda"
                        class="form-control form=control-lg" style="width: 200px;"></td>
            </tr>
            <tr>
                <td>No Telp:</td>
                <td><input type="text" id="phone" name="phone" pattern="[0-9]{12}" required
                        placeholder="Masukkan nomor anda" class="form-control form-control-sm">
                </td>
            </tr>

            <tr>
                <td>Email:</td>
                <td><input type="email" id="email" name="email" required placeholder="Masukkan nama anda"
                        class="form-control"></td>
            </tr>
            <tr>
                <td>Tanggal Lahir: </td>
                <td><input type="date" id="ttl" name="ttl"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin:</td>
                <td>
                    <input type="radio" id="cowok" name="kelamin" value="1">
                    <label for="cowok">Laki-laki</label>
                    <input type="radio" id="cewek" name="kelamin" value="2">
                    <label for="cewek">Perempuan</label>
                </td>
            </tr>
            <tr>
                <td>Course yang ingin diikuti</td>
                <td>
                    <input type="checkbox" id="html" name="html" value="html" class="form-check-input">
                    <label for="html"> HTML</label>
                    <input type="checkbox" id="css" name="css" value="css" class="form-check-input">
                    <label for="css"> CSS</label>
                    <input type="checkbox" id="js" name="js" value="js" class="form-check-input">
                    <label for="javascript"> Javascript</label>
                    <input type="checkbox" id="php" name="php" value="php" class="form-check-input">
                    <label for="php" class="form-check-label"> PHP</label>
                </td>
            </tr>
            <tr>
                <td>Level</td>
                <td>
                    <select name="pendidikan" id="pendidikan" style="width: 300px;" class="form-select">

                        <option value="Beginner">Beginner</option>
                        <option value="Intermediate">Intermediate</option>
                        <option value="Advanced">Advanced</option>

                    </select>
                </td>
            </tr>
            <tr>
                <td>Upload CV </td>
                <td>
                    <input type="file">
                </td>
            </tr>
            <tr>
                <td valign="top">Komentar & Saran</td>
                <td>
                    <textarea id="komentar" name="komentar" rows="4" cols="50" 
                        placeholder="Masukkan saran & kritik" style=""></textarea>
                </td>
            </tr>
        </table>

        <input type="submit" name="kirim" class="btn btn-primary btn-lg"
            style="width: 200px; margin-left:380px;">
    </form>

    <div id="hasil">
    <?php 
    
    {
    echo "Profil Pendaftar";
    $nama=$_POST['nama'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $ttl=$_POST['ttl'];
    $kelamin=$_POST['kelamin'];
    $pendidikan=$_POST['pendidikan'];

    //pembuatan array algoritma checkbox
    $a=-1;
    $les=array();
    if (isset($_POST['html'])){
        array_push($les,"html");
        $a=$a+1;
    } 

    if (isset($_POST['css'])){
        array_push($les,"css");
        $a=$a+1;
    }

    if (isset($_POST['js'])){
        array_push($les,"javascript");
        $a=$a+1;
    }

    if (isset($_POST['php'])){
        array_push($les,"php");
        $a=$a+1;
    }

    //perhitungan biaya
    if($pendidikan=="Beginner"){
        $biayakursus=($a+1)*500000;
    }
     else if($pendidikan=="Intermediate"){
        $biayakursus=($a+1)*1000000;
    } 
    else $biayakursus=($a+1)*1000000;


    echo "
    <table class='table'>
        <tr><td>Nama pendaftar</td><td>: $nama</td></tr>
        <tr><td>Nomor telephone</td><td>: $phone</td></tr>
        <tr><td>Email</td><td>: $email</td></tr>
        <tr><td>Tanggal Lahir</td><td>: $ttl</td></tr>
        <tr><td>Jenis kelamin</td><td>: $kelamin</td></tr> 
        <tr><td>kursus yang diikuti</td><td>;";
        if($a != -1){
            for ($i = 0; $i <= $a; $i++) {
                echo "$les[$i],";
            }
        }
        
        echo"   </td></tr>
            <tr><td>Level yang diambil</td><td>: $pendidikan</td></tr>
            <tr><td>Biaya kursus</td><td>: $biayakursus</td></tr>
        

    </table>";

    }
    ?>
    
</body>

</html>
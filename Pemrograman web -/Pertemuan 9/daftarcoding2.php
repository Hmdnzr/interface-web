<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.1.3-dist//css/bootstrap.css">
    <script type="text/javascript" src="jquery-3.6.1.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#submit").click(function(){
                var nama = $('#nama').val();
                var phone = $('#phone').val();
                var email = $('email').val();
                var ttl = $('#ttl').val();
                var kelamin = document.querySelector('input[name='kelamin']:checked').value
                var pendidikan = $("#pendidikan").val();
            if (document.getElementById("html").checked == true){
                var html=1;
            } else var html=0;

            if (document.getElementById("css").checked == true){
                var css=1;
            } else var css=0;
            
            if (document.getElementById("js").checked == true){
                var js=1;
            } else var js=0;

            if (document.getElementById("php").checked == true){
                var php=1;
            } else var php=0;

            $.ajax({
                type: 'POST',
                url: "backendcoding.php",
                data: {
                    nama:nama,
                    phone:phone,
                    email:email,
                    ttl:ttl,
                    kelamin:kelamin,
                    html:html,
                    css:css,
                    js:js,
                    php:php,
                    pendidikan:pendidikan
                },
                success: function(hasil) {
                    $('#hasil').html(hasil);

                }

            });
            });
        });
    </script>

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

        <button type="button" id="submit" name="kirim" class="btn btn-primary btn-lg"
            style="width: 200px; margin-left:380px;">kirim query </button>
    </form>

    <div id="hasil">
    

    </div>
</body>

</html>
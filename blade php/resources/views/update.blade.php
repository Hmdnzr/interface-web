<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap-5.1.3-dist/css/bootstrap.css') }}">
    <script src="{{ asset('/css/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/jquery-3.6.1.min.js') }}"></script>


    <title>Document</title>
</head>

<body class="bg-success p-2 text-dark bg-opacity-10">
    <form action="/edit" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="container  mx-auto d-block">

            <div class="row justify-content-center">
                <div class="col-6">
                    <h1 class="text-center bg-primary rounded-pill" style="width: auto;">Ubah Buku</h1>
                    <table class="tab-content">

                        <tr class="">
                            @foreach($books as $a)
                            <td>Id Buku : </td>
                            <td><input type="text" name="idbuku" value="{{ $a->idbuku }}" class="form-control"></td>

                        </tr>
                        <tr>
                            <td>Judul :</td> <br>
                            <td><input type="text" id="NamaBuku" name="NamaBuku" class="form-control"
                                    value="{{ $a->NamaBuku }}"></td>
                        </tr>
                        <tr>
                            <td>Nama Pengarang :</td>
                            <td><input type="text" id="NamaPengarang" name="NamaPengarang" class="form-control"
                                    value="{{ $a->NamaPengarang }}"></td>
                        </tr>
                        <tr>
                            <td>Qty :</td>
                            <td><input type="number" id="qty" name="qty" min="1" max="100" class="form-control"
                                    value="{{ $a->qty }}"></td>
                        </tr>


                        <tr>
                            <td>Jenis Buku :</td>
                            <td>
                                <select name="Kategori" id="Kategori" style="width: 200px;"
                                    class="form-select form-select-lg" value="{{ $a->Katego }}">
                                    <option value="Keislaman">Keislaman</option>
                                    <option value="Fiksi">Fiksi</option>
                                    <option value="Saintek">Saintek</option>

                                </select>
                            </td>
                        </tr>


                    </table>
                    <br>
                    <image src="{{ Storage::url($a->image) }} " width="350" height="300">

                        </br>
                        <br>

                        <input type="submit" class="btn btn-danger " value="Edit" style="width: 15vh">
    </form>
    @endforeach
    </div>
    </div>
    </div>
</body>

</html>

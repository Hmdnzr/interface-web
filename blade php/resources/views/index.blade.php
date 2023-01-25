<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    
    <title>Document</title>
</head>
<body>
    <table border="1" class="table table-hover">
        <tr>
            <th>idbuku</th>
            <th>NamaBuku</th>
            <th>NamaPengarang</th>
            <th>Kategori</th>
            <th>qty</th>
            <th>Cover</th>
            <th>Action</th>
            
        </tr>
@foreach($books as $b)

        <tr>           
            <td>{{ $b->idbuku }}</td>
            <td>{{ $b->NamaBuku }}</td>
            <td>{{ $b->NamaPengarang }}</td>
            <td>{{ $b->Katego }}</td>
            <td>{{ $b->qty }}</td>
            <td><image src="{{ Storage::url($b->image) }} " alt="" width="150" height="200"></td>
                
                <td>
                <td> <a href="/show/{{ $b->idbuku}}"> <button type="button" class="btn btn-success">Edit</button></a>
                    <a href="/hapus/{{ $b->idbuku}}"> <button type="button" class="btn btn-danger "> hapus</button></a>
                </td>
            </td>
            
        </tr>
        @endforeach 
        
    </table>
</body>
</html>
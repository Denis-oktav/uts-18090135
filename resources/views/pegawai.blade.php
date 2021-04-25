<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>18090135</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header bg-danger text-center">
                <strong>Crud</strong> 
                </div>
                <div class="card-body">
                    <a href="/brg/tambah" class="btn btn-primary">Tambah Data Baru</a> <td><a href="/" class="btn btn-danger">Kembali</a></td>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>kategori</th>
                                <th>nama</th>
                                <th>stok</th>
                                <th>OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pegawai as $p)
                            <tr>
                                <td>{{ $p->nama }}</td>
                                <td>{{ $p->alamat }}</td>
                                <td>{{ $p->nip }}</td>
                                <td>
                                    <a href="/brg/edit/{{ $p->id }}" class="btn btn-warning">Edit</a>
                                    <a href="/brg/hapus/{{ $p->id }}" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
         <!-- footer section start -->
    <footer>
        <span>Created By <a href="#">Denis Oktaviano</a> | <span class="far fa-copyright"></span> 2021 All rights reserved.</span>
    </footer>

    <script src="script.js"></script>
    </body>
</html>
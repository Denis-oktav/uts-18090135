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
                    CRUD Data Kendaraan - <a href="#" target="_blank"> Denis Oktaviano</a>
                </div>
            </div>

                <div class="card-body">
                    <a href="/pegawai/tambah" class="btn btn-dark">Input Data Kendaraan</a>                    <a href="/" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Nomor Polisi</th>
                                <th>Merk</th>
                                <th>Tipe</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pegawai as $p)
                            <tr>
                                <td>{{ $p->nama }}</td>
                                <td>{{ $p->alamat }}</td>
                                <td>
                                    <a href="/pegawai/edit/{{ $p->id }}" class="btn btn-info">Edit</a>
                                    <a href="/pegawai/hapus/{{ $p->id }}" class="btn btn-warning">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
         <!-- footer section start -->
    <footer>
        <span>Created By <a href="#">Denis Oktaviano/a> | <span class="far fa-copyright"></span> 2021 All rights reserved.</span>
    </footer>

    <script src="script.js"></script>
    </body>
</html>
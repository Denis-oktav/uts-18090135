<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>UTS 6C D4 Teknik Informatika</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header bg-danger text-center">
                    CRUD - <strong>TAMBAH DATA</strong> - <a href="#" target="_blank">Denis Oktaviano</a>
                </div>
                <div class="card-body">
                    <a href="/brg" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
                    <form method="post" action="/brg/store">
 
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label>stok</label>
                            <input type="integer" name="nip" class="form-control" placeholder="Masukan stok barang">
 
                            @if($errors->has('nip'))
                                <div class="text-danger">
                                    {{ $errors->first('nip')}}
                                </div>
                            @endif
 
                        </div>
 
                        <div class="form-group">
                            <label>kategori</label>
                            <input type="text" name="nama" class="form-control" placeholder="Masukan kategori barang">
 
                            @if($errors->has('nama'))
                                <div class="text-danger">
                                    {{ $errors->first('nama')}}
                                </div>
                            @endif
 
                        </div>
 
                        <div class="form-group">
                            <label>nama</label>
                            <textarea name="alamat" class="form-control" placeholder="Masukan nama barang"></textarea>
 
                             @if($errors->has('alamat'))
                                <div class="text-danger">
                                    {{ $errors->first('alamat')}}
                                </div>
                            @endif
 
                        </div>
 
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>
 
                    </form>
 
                </div>
            </div>
        </div>
    </body> 
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Edit Data Donatur</title>
</head>
<body>
    
    <div class="container">
            <h1> Edit Profil Donatur </h1>
            <form action= "/donatur/store" methods="POST">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$donatur->nama}}">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
                    <select class="form-select form-select-sm" nama="Jenis Kelamin">
                    <option selected>Pilih Jenis Kelamin</option>
                    <option value="L" @if($donatur->JK_donatur == "L") selected @endif> Laki-laki</option>
                    <option value="P" @if($donatur->JK_donatur == "P") selected @endif> Perempuan</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$donatur->email}}">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nomor HP/Telp</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$donatur->noTelp}}">
                </div>

                <input type="submit" name="submit" class="btn btn-info" value="Save">

        </div>

</body>
</html>

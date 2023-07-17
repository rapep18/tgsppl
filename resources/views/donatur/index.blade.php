<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Profil Donatur</title>
</head>
<body>
    <h1> Profil Donatur </h1>
    <div>
    <table border="1">
        <tr>
            <th>Data Diri</th>
            <th>Keterangan</th>
        </tr>
        <tr>
            <th>Nama Lengkap</th>
            <td>{{$donatur->nama}}</td>
        </tr>
        <tr>
            <th>Jenis kelamin</th>
            <td>{{$donatur->JK_donatur}}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{$donatur->email}}</td>
        </tr>
        <tr>
            <th>Nomor HP/Telp</th>
            <td>{{$donatur->noTelp}}</td>
        </tr>
        </table>
    </div>

    <div>
        <a href="/donatur/edit"> Edit Profil</a>    
    </div>
</body>
</html>
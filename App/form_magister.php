<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa Magister</title>
    <h1>Form Sarjana</h1>
</head>
<body>
<form action="proses.php" method="post">
    <label>NIM</label>
    <input type="number" name="nim" />
    <br /> <br/>
    <label>Nama</label>
    <input type="text" name="nama" />
    <br /> <br />
    <label>Prodi</label>
    <input type="text" name="prodi" />
    <br /> <br />
    <label>Gelar Sarjana</label>
    <input type="text" name="gelar" />
    <br /> <br />
    <button name="tombol" value="tm" type="submit">Submit</button>
</form>
</body>
</html>
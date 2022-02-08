<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Kirim</title>
</head>

<body>
    <h1>Form Kirim</h1>
    <form action="index.php" method="post">
        <div>
            <label for="nama">nama :</label><input type="text" name="nama" id="nama">
        </div>
        <div>
            <label for="alamat">Alamat :</label><input type="text" name="alamat" id="alamat">
        </div>
        <div>
            <label for="organisasi">Organisasi/Kesenian :</label><input type="text" name="organisasi" id="organisasi">
        </div>
        <div>
            <label for="indpen">Induk Pengesahan :</label><input type="text" name="indpen" id="indpen">
        </div>
        <div>
            <label for="ktps">KTPS :</label><input type="text" name="ktps" id="ktps">
        </div>
        <div>
            <button type="submit" name="submit">Kirim!</button>
        </div>
    </form>
</body>

</html>
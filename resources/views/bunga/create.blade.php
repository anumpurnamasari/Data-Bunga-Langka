<!DOCTYPE html>
<html>
<head>
    <title>Tambah Bunga</title>
</head>
<body>

<h2>Tambah Data Bunga</h2>

<form action="/bunga/store" method="POST">
    @csrf

    Nama:<br>
    <input type="text" name="nama"><br><br>

    Asal:<br>
    <input type="text" name="asal"><br><br>

    Kelangkaan:<br>
    <select name="kelangkaan">
        <option value="Langka">Langka</option>
        <option value="Sangat Langka">Sangat Langka</option>
        <option value="Hampir Punah">Hampir Punah</option>
    </select><br><br>

    Warna:<br>
    <input type="text" name="warna"><br><br>

    Deskripsi:<br>
    <textarea name="deskripsi"></textarea><br><br>

    <button type="submit">Simpan</button>
</form>

<br>
<a href="/bunga">Kembali</a>

</body>
</html>
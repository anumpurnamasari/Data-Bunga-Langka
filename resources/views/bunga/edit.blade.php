<!DOCTYPE html>
<html>
<head>
    <title>Edit Bunga</title>
</head>
<body>

<h2>Edit Data Bunga</h2>

<form action="/bunga/update/{{ $bunga->id }}" method="POST">
    @csrf

    Nama:<br>
    <input type="text" name="nama" value="{{ $bunga->nama }}"><br><br>

    Asal:<br>
    <input type="text" name="asal" value="{{ $bunga->asal }}"><br><br>

    Kelangkaan:<br>
    <select name="kelangkaan">
        <option value="Langka" {{ $bunga->kelangkaan == 'Langka' ? 'selected' : '' }}>Langka</option>
        <option value="Sangat Langka" {{ $bunga->kelangkaan == 'Sangat Langka' ? 'selected' : '' }}>Sangat Langka</option>
        <option value="Hampir Punah" {{ $bunga->kelangkaan == 'Hampir Punah' ? 'selected' : '' }}>Hampir Punah</option>
    </select><br><br>

    Warna:<br>
    <input type="text" name="warna" value="{{ $bunga->warna }}"><br><br>

    Deskripsi:<br>
    <textarea name="deskripsi">{{ $bunga->deskripsi }}</textarea><br><br>

    <button type="submit">Update</button>
</form>

<br>
<a href="/bunga">Kembali</a>

</body>
</html>
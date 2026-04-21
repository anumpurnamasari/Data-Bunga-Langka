<!DOCTYPE html>
<html>
<head>
    <title>Data Bunga Langka</title>
</head>
<body>

<h2>Data Bunga Langka</h2>

<a href="/bunga/create">Tambah Data</a>

<br><br>

@if(session('success'))
    <p style="color:green">{{ session('success') }}</p>
@endif

<table border="1" cellpadding="10">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Asal</th>
        <th>Kelangkaan</th>
        <th>Warna</th>
        <th>Deskripsi</th>
        <th>Aksi</th>
    </tr>

    @foreach($bunga as $i => $item)
    <tr>
        <td>{{ $i + 1 }}</td>
        <td>{{ $item->nama }}</td>
        <td>{{ $item->asal }}</td>
        <td>{{ $item->kelangkaan }}</td>
        <td>{{ $item->warna }}</td>
        <td>{{ $item->deskripsi }}</td>
        <td>
            <a href="/bunga/edit/{{ $item->id }}">Edit</a>

            <form action="/bunga/{{ $item->id }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Yakin mau hapus?')">
                    Hapus
                </button>
            </form>
        </td>
    </tr>
    @endforeach

</table>

</body>
</html>
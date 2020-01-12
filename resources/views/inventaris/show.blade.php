<!DOCTYPE html>
<html>
<head>
    <title>Raport</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/pdf.css') }}">
</head>
<body>

                <center><h2> Data Inventaris </h2></center>


    <table class="table table table-striped">
        <thead class="thead-dark">
        <tr>
            <th>No</th>
            <th>ID Inventaris</th>
            <th>Nama</th>
            <th>Kondisi</th>
            <th>Keterangan</th>
            <th>Jumlah</th>
            <th>Id Jenis</th>
            <th>Tanggal Register</th>
            <th>Id Ruang</th>
            <th>Id Petugas</th>
        </tr>
        </thead>
        <?php $i = 0?>
        @foreach ($inventaris as $inventari)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $inventari->id_inventaris }}</td>
            <td>{{ $inventari->nama }}</td>
            <td>{{ $inventari->kondisi }}</td>
            <td>{{ $inventari->keterangan }}</td>
            <td>{{ $inventari->jumlah }}</td>
            <td>{{ $inventari->id_jenis }}</td>
            <td>{{ $inventari->tanggal_register }}</td>
            <td>{{ $inventari->id_ruang }}</td>
            <td>{{ $inventari->petugas }}</td>
        </form>
    </td>
</tr>
@endforeach
</table>
</body>
</html>

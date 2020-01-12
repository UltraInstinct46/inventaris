<!DOCTYPE html>
<html>
<head>
    <title>Raport</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/pdf.css') }}">
</head>
<body>

                <center><h2> Data Peminjaman </h2></center>


    <table class="table table table-striped">
        <thead class="thead-dark">
        <tr>
            <th>No</th>
            <th>ID Peminjaman</th>
            <th>Tanggal Peminjaman</th>
            <th>Tanggal Kembali</th>
            <th>Status Peminjaman</th>
            <th>Id Pegawai</th>
        </tr>
        </thead>
        <?php $i = 0?>
        @foreach ($peminjamans as $peminjaman)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $peminjaman->id_peminjaman }}</td>
            <td>{{ $peminjaman->tanggal_pinjam }}</td>
            <td>{{ $peminjaman->tanggal_kembali }}</td>
            <td>{{ $peminjaman->status_peminjaman }}</td>
            <td>{{ $peminjaman->id_pegawai }}</td>
        </form>
    </td>
</tr>
@endforeach
</table>
</body>
</html>

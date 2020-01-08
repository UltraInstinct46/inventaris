@extends('peminjamans.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left" align="center">
                <h2>peminjaman</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('peminjamans.create') }}"> Tambah peminjaman</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th>No</th>
            <th>ID Peminjaman</th>
            <th>Tanggal Peminjaman</th>
            <th>Tanggal Kembali</th>
            <th>Status Peminjaman</th>
            <th>Id Pegawai</th>
            <th width="280px">Action</th>
        </tr>
        </thead>
        @foreach ($peminjamans as $peminjaman)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $peminjaman->id_peminjaman }}</td>
            <td>{{ $peminjaman->tanggal_pinjam }}</td>
            <td>{{ $peminjaman->tanggal_kembali }}</td>
            <td>{{ $peminjaman->status_peminjaman }}</td>
            <td>{{ $peminjaman->id_pegawai }}</td>
            <td>
                <form action="{{ route('peminjamans.destroy',$peminjaman->id) }}" method="POST">

                    <a class="btn btn-primary" href="{{ route('peminjamans.edit',$peminjaman->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $peminjamans->links() !!}

@endsection

@extends('inventaris.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left" align="center">
                <h2>Inventaris</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('inventaris.create') }}"> Tambah Inventaris</a>
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
            <th>ID Inventaris</th>
            <th>Nama</th>
            <th>Kondisi</th>
            <th>Keterangan</th>
            <th>Jumlah</th>
            <th>Id Jenis</th>
            <th>Tanggal Register</th>
            <th>id Ruang</th>
            <th>Id Petugas</th>
            <th width="280px">Action</th>
        </tr>
        </thead>
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
            <td>{{ $inventari->id_petugas }}</td>
            <td>
                <form action="{{ route('inventaris.destroy',$inventari->id) }}" method="POST">

                    <a class="btn btn-primary" href="{{ route('inventaris.edit',$inventari->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $inventaris->links() !!}

@endsection

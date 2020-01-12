@extends('jenis.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left" align="center">
                <h2>Jenis</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('jenis.create') }}"> Tambah Jenis</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table table-striped">
        <thead class="thead-dark">
        <tr>
            <th>No</th>
            <th>ID Jenis</th>
            <th>Nama Jenis</th>
            <th>Kode Jenis</th>
            <th>Keterangan</th>
            <th width="280px">Action</th>
        </tr>
        </thead>
        @foreach ($jenis as $jeni)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $jeni->id_jenis }}</td>
            <td>{{ $jeni->nama_jenis }}</td>
            <td>{{ $jeni->kode_jenis }}</td>
            <td>{{ $jeni->keterangan }}</td>
            <td>
                <form action="{{ route('jenis.destroy',$jeni->id) }}" method="POST">

                    <a class="btn btn-primary" href="{{ route('jenis.edit',$jeni->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $jenis->links() !!}

@endsection

@extends('detailpinjams.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left" align="center">
                <h2>Detail Pinjam</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('detailpinjams.create') }}"> Tambah Detail Pinjam</a>
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
            <th>ID Detail Pinjam</th>
            <th>Id Inventaris</th>
            <th>Jumlah</th>
            <th width="280px">Action</th>
        </tr>
        </thead>
        @foreach ($detailpinjams as $detailpinjam)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $detailpinjam->id_detail_pinjam }}</td>
            <td>{{ $detailpinjam->id_inventaris }}</td>
            <td>{{ $detailpinjam->jumlah }}</td>
            <td>
                <form action="{{ route('detailpinjams.destroy',$detailpinjam->id) }}" method="POST">

                    <a class="btn btn-primary" href="{{ route('detailpinjams.edit',$detailpinjam->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $detailpinjams->links() !!}

@endsection

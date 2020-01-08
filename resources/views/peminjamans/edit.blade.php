@extends('peminjamans.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit peminjaman</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('peminjamans.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('peminjamans.update',$peminjaman->id) }}" method="POST" class="text-center border border-black p-5">
        @csrf
        @method('PUT')

         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Status Peminjaman:</strong>
                    <input type="text" name="status_peminjaman" class="form-control" value="{{ $peminjaman->status_peminjaman }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Id Pegawai:</strong>
                    <select name="id_pegawai" class="form-control">
                        @foreach ($pegawai as $data)
                        <option value="{{ $data->id_pegawai }}"
                         @if($peminjaman->id_pegawai == $data->id_pegawai)
                         selected
                         @endif>
                         {{$data->id_pegawai}}
                       </option>
                        @endforeach
                        </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection

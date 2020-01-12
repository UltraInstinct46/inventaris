@extends('peminjamans.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
                <h2>Tambah Rayon Baru</h2>
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

<form action="{{ route('peminjamans.store') }}" method="POST" class="text-center border border-black p-5">
    @csrf

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Id Pegawai:</strong>
                <select name="id_pegawai" class="form-control">
                    @foreach ($pegawai as $data)
                    <option value="{{ $data->id_pegawai }}">
                     {{$data->nama_pegawai}}
                   </option>
                   @endforeach
                    </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Status Peminjaman:</strong>
                <select name="status_peminjaman" class="form-control">
                    <option value="belum dikembalikan"  >belum dikembalikan</option>
                    <option value="sudah dikembalikan"  >sudah dikembalikan</option>
                    </select>
            </div>
        </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>
@endsection

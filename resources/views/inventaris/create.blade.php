@extends('inventaris.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
                <h2>Tambah Rayon Baru</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('inventaris.index') }}"> Back</a>
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

<form action="{{ route('inventaris.store') }}" method="POST" class="text-center border border-black p-5">
    @csrf

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <input type="text" name="nama" class="form-control" placeholder="nama">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <input type="text" name="kondisi" class="form-control" placeholder="Kondisi">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <textarea type="text" name="keterangan" class="form-control " placeholder="Keterangan"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <input type="number" name="jumlah" class="form-control" placeholder="Jumlah">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <select name="id_jenis" class="form-control">
                    @foreach ($jeni as $data)
                    <option value="{{ $data->id_jenis }}"  >{{$data->id_jenis}}</option>
                    @endforeach
                    </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <select name="id_ruang" class="form-control">
                    @foreach ($ruang as $data)
                    <option value="{{ $data->id_ruang }}"  >{{$data->id_ruang}}</option>
                    @endforeach
                    </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <select name="id_petugas" class="form-control">
                    @foreach ($user as $data)
                    <option value="{{ $data->id }}"  >{{$data->id}}</option>
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

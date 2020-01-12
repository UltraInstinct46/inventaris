@extends('jenis.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
                <h2>Tambah Rayon Baru</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('jenis.index') }}"> Back</a>
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

<form action="{{ route('jenis.store') }}" method="POST" class="text-center border border-black p-5">
    @csrf

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Jenis:</strong>
                <input type="text" name="nama_jenis" class="form-control" placeholder="nama_jenis">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kode Jenis:</strong>
                <input type="text" name="kode_jenis" class="form-control" placeholder="Kode Jenis">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Keterangan:</strong>
                <textarea type="text" name="keterangan" class="form-control" placeholder="Keterangan"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>
@endsection

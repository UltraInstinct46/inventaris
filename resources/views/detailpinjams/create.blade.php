@extends('detailpinjams.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
                <h2>Tambah Detail Pinjam Baru</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('detailpinjams.index') }}"> Back</a>
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

<form action="{{ route('detailpinjams.store') }}" method="POST" class="text-center border border-black p-5">
    @csrf

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <select name="id_inventaris" class="form-control">
                    @foreach ($inventari as $data)
                    <option value="{{ $data->id_inventaris }}"  >{{$data->id_inventaris}}</option>
                    @endforeach
                    </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <input type="number" name="jumlah" class="form-control" placeholder="Jumlah">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>
@endsection

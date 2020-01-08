@extends('detailpinjams.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Detail Pinjam</h2>
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

    <form action="{{ route('detailpinjams.update',$detailpinjam->id) }}" method="POST" class="text-center border border-black p-5">
        @csrf
        @method('PUT')

         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Id Inventaris:</strong>
                    <select name="id_inventaris" class="form-control">
                        @foreach ($inventari as $data)
                        <option value="{{ $data->id_inventaris }}"
                         @if($detailpinjam->id_inventaris == $data->id_inventaris)
                         selected
                         @endif>
                         {{$data->id_inventaris}}
                       </option>
                        @endforeach
                        </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Jumlah:</strong>
                    <input type="text" name="jumlah" class="form-control" placeholder="Rombel" value="{{ $detailpinjam->jumlah }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection

@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                <div class="panel-title"></div>
                </div>
                <div class="panel-body">
                 @if(Session::has('alert-success'))
                        <div class="alert alert-success">
                            {{ Session::get('alert-success') }}
                        </div>
                    @endif
                        <a href="{{route('jurusan.create')}}" class="btn btn-info pull-left">Tambah Data</a>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>jurusan</th>
                                <th colspan="2">action</th>
                             </tr>
                        </thead>
                        @foreach ($jurusans as $data)
                        <tr>
                            <td>{{$data->id}}</td>
                            <td>{{$data->jurusan}}</td>
                        <td>
                                <form method="POST" action="{{ route('jurusan.destroy', $data->id) }}" accept-charset="UTF-8">
                                    <input name="_method" type="hidden" value="DELETE">
                                    <input name="_token" type="hidden" value="{{ csrf_token() }}">
                                    <a href="{{route('jurusan.edit', $data->id)}}" class="btn btn-warning">Edit</a>
                                    <input type="submit" class="btn btn-danger" onclick="return confirm('Anda yakin akan menghapus data ?');" value="Delete">
                                </form>
                            </td>
                      </tr>@endforeach
                    </table>
                </div>
            </div>
        </div>  
    </div>
</div>
@endsection
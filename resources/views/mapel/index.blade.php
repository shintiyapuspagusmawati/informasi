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
                        <a href="{{route('mapel.create')}}" class="btn btn-info pull-left">Tambah Data</a>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>pelajaran</th>
                                <th colspan="2">action</th>
                             </tr>
                        </thead>
                        @foreach ($mapels as $data)
                        <tr>
                            <td>{{$data->id}}</td>
                            <td>{{$data->mapel}}</td>
                        <td>
                                <form method="POST" action="{{ route('mapel.destroy', $data->id) }}" accept-charset="UTF-8">
                                    <input name="_method" type="hidden" value="DELETE">
                                    <input name="_token" type="hidden" value="{{ csrf_token() }}">
                                    <a href="{{route('mapel.edit', $data->id)}}" class="btn btn-warning">Edit</a>
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

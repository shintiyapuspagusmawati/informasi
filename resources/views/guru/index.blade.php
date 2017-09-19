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
                    <a href="{{route('guru.create')}}" class="btn btn-info pull-left">Tambah Data</a>
                    <table class="table table-hover">
                            <tr>
                                <th>Id</th>
                                <th>NIPG</th>
                                <th>Foto</th>
                                <th>Nama Guru</th>
                                <th>Jenis kelamin</th>
                                <th>Tanggal Lahir</th>
                                <th>Mata Pelajaran</th>
                                <th>Alamat</th>
                                <th>No Telpon</th>
                                <th colspan="2">action</th>
                             </tr>
                        @foreach ($gurus as $data)
                        <tr>
                            <td>{{$data->id}}</td>
                            <td>{{$data->nipg}}</td>
                            <td>
                                <img src="{{ asset('/img/'.$data->foto.'') }}" width="100px" height="100px">
                            </td>

                            <td>{{$data->nama_guru}}</td>
                            <td>{{$data->jenis_kelamin}}</td>
                            <td>{{$data->tanggal_lahir}}</td>
                            <td>{{$data->id_mapel}}</td>
                            <td>{{$data->alamat}}</td>
                            <td>{{$data->no_telepon}}</td>
                        <td>
                                <form method="POST" action="{{ route('guru.destroy', $data->id) }}" accept-charset="UTF-8">
                                    <input name="_method" type="hidden" value="DELETE">
                                    <input name="_token" type="hidden" value="{{ csrf_token() }}">
                                    <a href="{{route('guru.edit', $data->id)}}" class="btn btn-warning">Edit</a>
                                    <input type="submit" class="btn btn-danger" onclick="return confirm('Anda yakin akan menghapus data ?');" value="Delete">
                                </form>
                            </td>
                      </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>  
    </div>
</div>
@endsection
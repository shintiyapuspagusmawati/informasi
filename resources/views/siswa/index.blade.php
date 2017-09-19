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
                    <a href="{{route('siswa.create')}}" class="btn btn-info pull-left">Tambah Data</a>
                    <table class="table table-hover">
                            <tr>
                                <th>Id</th>
                                <th>NIS</th>
                                <th>Foto</th>
                                <th>Nama Siswa</th>
                                <th>Jenis kelamin</th>
                                <th>Tanggal Lahir</th>
                                <th>Kelas</th>
                                <th>Jurusan</th>
                                <th>Alamat</th>
                                <th>No Telpon</th>
                                <th colspan="2">action</th>
                             </tr>
                        @foreach ($siswas as $data)
                        <tr>
                            <td>{{$data->id}}</td>
                            <td>{{$data->nis}}</td>
                            <td>
                                <img src="{{ asset('/img/'.$data->foto.'') }}" width="100px" height="100px">
                            </td>
                            <td>{{$data->nama_siswa}}</td>
                            <td>{{$data->jenis_kelamin}}</td>
                            <td>{{$data->tanggal_lahir}}</td>
                            <td>{{$data->id_kelas}}</td>
                            <td>{{$data->jurusan_id}}</td>
                            <td>{{$data->alamat}}</td>
                            <td>{{$data->no_telepon}}</td>
                        <td>
                                <form method="POST" action="{{ route('siswa.destroy', $data->id) }}" accept-charset="UTF-8">
                                    <input name="_method" type="hidden" value="DELETE">
                                    <input name="_token" type="hidden" value="{{ csrf_token() }}">
                                    <a href="{{route('siswa.edit', $data->id)}}" class="btn btn-warning">Edit</a>
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
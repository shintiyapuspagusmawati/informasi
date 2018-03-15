@extends('layouts.template')
@section('content')
<aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
                  <li class="mt">
                      <a class="active" href="{{ route('guru.index') }}">
                          <i class="fa fa-book"></i>
                          <span>Data Guru</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="{{ route('siswa.index') }}" >
                          <i class="fa fa-tasks"></i>
                          <span>Data Siswa</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="{{ route('mapel.index') }}" >
                          <i class="fa fa-th"></i>
                          <span>Mata Pelajaran</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="{{ route('kelas.index') }}" >
                          <i class=" fa fa-bar-chart-o"></i>
                          <span>Kelas</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="{{ route('jurusan.index') }}" >
                          <i class=" fa fa-cogs"></i>
                          <span>Jurusan</span>
                      </a>
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>

<div class="container">
    <div class="row">
      <br><br><br><br><br>
        <div class="col-md-10 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">
                  <div class="panel-title">Data Guru</div>
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
                                <th>NIPG</th>
                                <th>Foto</th>
                                <th>Nama Guru</th>
                                <th>Jenis kelamin</th>
                                <th>Tanggal Lahir</th>
                                <th>Kelas</th>
                                <th>Mata Pelajaran</th>
                                <th>Alamat</th>
                                <th>No Telpon</th>
                                <th>Email</th>
                                <th colspan="3">action</th>
                             </tr>
                        @foreach ($gurus as $data)
                        <tr>
                            <td>{{$data->nipg}}</td>
                            <td>
                                <img src="{{ asset('/img/'.$data->foto.'') }}" width="100px" height="100px">
                            </td>

                            <td>{{$data->nama_guru}}</td>
                            <td>{{$data->jenis_kelamin}}</td>
                            <td>{{$data->tanggal_lahir}}</td>
                            <td>{{$data->kelas}}</td>
                            <td>{{$data->name}}</td>
                            <td>{{$data->alamat}}</td>
                            <td>{{$data->no_telepon}}</td>
                            <td>{{$data->email}}</td>
                        <td>
                                <form method="POST" action="{{ route('guru.destroy', $data->id) }}" accept-charset="UTF-8">
                                    <input name="_method" type="hidden" value="DELETE">
                                    <input name="_token" type="hidden" value="{{ csrf_token() }}">
                                    <a href="{{route('guru.edit', $data->id)}}" class="btn btn-warning">Edit</a>
                                    <input type="submit" class="btn btn-danger" onclick="return confirm('Anda yakin akan menghapus data ?');" value="Delete">
                                    <a href="{{route('guru.show', $data->id)}}" class="btn btn-success">Show</a>
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
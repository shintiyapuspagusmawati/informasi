@extends('layouts.template')
@section('content')
<aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
            
                  <li class="sub-menu">
                      <a href="{{ route('guru.index') }}">
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
                  <li class="mt">
                      <a class="active" href="{{ route('mapel.index') }}" >
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
                <div class="panel-title">Mata Pelajaran</div>
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
                            <td>{{$data->name}}</td>
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

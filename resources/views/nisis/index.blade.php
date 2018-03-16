@extends('layouts.template')
@section('content')
<aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
                  <li class="mt">
                      <a class="active" href="{{ url('/nisis', Auth::user()->id) }}" >
                          <i class=" fa fa-file"></i>
                          <span>Nilai</span>
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
                <div class="panel-title">Nilai Siswa</div>
                </div>
                <div class="panel-body">
                @if(Session::has('alert-success'))
                        <div class="alert alert-success">
                            {{ Session::get('alert-success') }}
                        </div>
                    @endif
                    @role('guru')
                    <a href="{{route('nilai.create')}}" class="btn btn-info pull-left">Tambah Data</a>
                    @endrole
                    <table class="table table-hover">
                            <tr>
                                <th>Id</th>
                                <th>Mata Pelajaran</th>
                                <th>KKM</th>
                                <th>UH1</th>
                                <th>UH2</th>
                                <th>UH3</th>
                                <th>UH4</th>
                                <th>UTS</th>
                                <th>UAS</th>
                                @role('guru')
                                <th colspan="2">action</th>
                                @endrole
                             </tr>
                        @foreach ($nilai as $data)
                        <tr>
                            <td>{{$data->id}}</td>
                            <td>{{$data->mapel->name}}</td>
                            <td>{{$data->kkm}}</td>
                            <td>{{$data->uh1}}</td>
                            <td>{{$data->uh2}}</td>
                            <td>{{$data->uh3}}</td>
                            <td>{{$data->uh4}}</td>
                            <td>{{$data->uts}}</td>
                            <td>{{$data->uas}}</td>
                        <td>
                                <form method="POST" action="{{ route('nilai.destroy', $data->id) }}" accept-charset="UTF-8">
                                    <input name="_method" type="hidden" value="DELETE">
                                    <input name="_token" type="hidden" value="{{ csrf_token() }}">
                                    @role('guru')
                                    <a href="{{route('nilai.edit', $data->id)}}" class="btn btn-warning">Edit</a>
                                    <input type="submit" class="btn btn-danger" onclick="return confirm('Anda yakin akan menghapus data ?');" value="Delete">
                                    @endrole
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
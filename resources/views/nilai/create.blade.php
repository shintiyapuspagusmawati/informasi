@extends('layouts.template')
@section('content')
<aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              @role('admin')
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
                  @endrole
                  <li class="mt">
                      <a class="active" href="{{ route('nilai.index') }}" >
                          <i class=" fa fa-file"></i>
                          <span>Nilai Siswa</span>
                      </a>
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      
<div class="container">
    <div class="row">
      <br><br><br><br><br>
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">
                <div class="panel-title">Tambah Nilai Siswa</div>
                </div>
                <div class="panel-body">
                  @if($errors->any())
                        <div class="alert alert-danger">
                            @foreach( $errors->all() as $err)
                              <li><span>{{$err}}</span></li>
                            @endforeach
                        </div>
                    @endif
                   <form action="{{route('nilai.store')}}" method="post"  enctype="multipart/form-data" files="true">
                    {{csrf_field()}}
                    <table class="table table-hover">
                      <tr>
                            <td><label>Nama Siswa</label></td>
                            <td><select class="form-control" name="id_siswa">
                                @foreach($siswa as $data)
                                <option value="{{$data->id}}">{{$data->nama_siswa}}</option>
                                @endforeach
                                </select></td>
                        </tr>
                        <tr>
                            <tr>
                              <td><label>Mata Pelajaran</label></td>
                                <td><select class="form-control" name="id_mapel" required="">
                                <option value="{{$mapel->id}}">{{$mapel->name}}</option>
                                </select></td>
                            </tr>
                        </tr>
                        <tr>
                            <td><label>KKM</label></td>
                            <td><input type="text" name="kkm" class="form-control"></td>
                        </tr>
                        <tr>
                            <td><label>UH1</label></td>
                            <td><input type="text" name="uh1" class="form-control"></td>
                        </tr>
                        <tr>
                            <td><label>UH2</label></td>
                            <td>
                                <input type="text" name="uh2" class="form-control"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td><label>UH3</label></td>
                            <td><input type="text" name="uh3" class="form-control"></td>
                        </tr>
                        <tr>
                            <td><label>UH4</label></td>
                            <td>
                                <input type="text" name="uh4" class="form-control"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td><label>UTS</label></td>
                            <td><input type="text" name="uts" class="form-control"></td>
                        </tr>
                        <tr>
                            <td><label>UAS</label></td>
                            <td>
                                <input type="text" name="uas" class="form-control"></textarea>
                            </td>
                        </tr>
                    </table>
                        <th>
                            <input type="submit" class="btn btn-primary" value="Simpan">
                        </th>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
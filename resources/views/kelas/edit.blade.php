@extends('layouts.template')
@section('content')
<aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
                  <li class="sub-menu">
                      <a href="{{ url('/home') }}">
                          <i class="fa fa-dashboard"></i>
                          <span>Home</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>Regis Guru</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>Regis Siswa</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="{{ route('guru.index') }}">
                          <i class="fa fa-book"></i>
                          <span>Tambah Data Guru</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="{{ route('siswa.index') }}" >
                          <i class="fa fa-tasks"></i>
                          <span>Tambah Data Siswa</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="{{ route('mapel.index') }}" >
                          <i class="fa fa-th"></i>
                          <span>Tambah Mapel</span>
                      </a>
                  </li>
                  <li class="mt">
                      <a class="active" href="{{ route('kelas.index') }}" >
                          <i class=" fa fa-bar-chart-o"></i>
                          <span>Tambah Kelas</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="{{ route('jurusan.index') }}" >
                          <i class=" fa fa-tasks"></i>
                          <span>Tambah Jurusan</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="{{ route('nilai.index') }}" >
                          <i class=" fa fa-file"></i>
                          <span>Lihat Nilai Siswa</span>
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
                <div class="panel-title">Edit Kelas</div>
                </div>
                <div class="panel-body">
                   <form action="{{route('kelas.update', $kelas->id)}}" method="post">
                    <input name="_method" type="hidden" value="PATCH">
                    {{csrf_field()}}
                    <table class="table table-hover">
                        <tr>
                            <td><label>Kelas</label></td>
                            <td><input type="text" name="kelas" class="form-control" value="<?php echo $kelas['kelas'];?>"></td>
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

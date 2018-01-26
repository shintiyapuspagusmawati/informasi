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
                  <li class="mt">
                      <a class="active" href="{{ route('siswa.index') }}" >
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
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">
                <div class="panel-title">Edit Data Siswa</div>
                </div>
                <div class="panel-body">
                   <form action="{{route('siswa.update',$siswas->id)}}" method="post" enctype="multipart/form-data" files="true">
                    <input name="_method" type="hidden" value="PATCH">
                    {{csrf_field()}}
                    <table class="table table-hover">
                        <tr>
                            <td><label>Foto</label></td>
                            <td><img src="{{asset('img/'.$siswas->foto)}}" width="100px" height="100px"><input type="file" name="foto"></td>
                        </tr>
                        <tr>
                            <td><label>Nama siswa</label></td>
                            <td><input type="text" name="nama_siswa" class="form-control" value="<?php echo $siswas['nama_siswa'];?>"></td>
                        </tr>
                        <tr>
                            <td><label>Jenis Kelamin</label></td>
                            <td>
                            <input type="radio" name="jenis_kelamin" value="Laki Laki<?php echo $siswas['jenis_kelamin'];?>" class="" >Laki Laki
                            <input type="radio" name="jenis_kelamin" value="Perempuan<?php echo $siswas['jenis_kelamin'];?>" class="">Perempuan
                            </td>
                        </tr>
                        <tr>
                            <td><label>Tanggal Lahir</label></td>
                            <td>
                                <input type="date" name="tanggal_lahir" class="form-control" value="<?php echo $siswas['tanggal_lahir'];?>">
                            </td>
                        </tr>
                        <tr>
                            <td><label>Kelas</label></td>
                            <td><select class="form-control" name="id_kelas">
                                @foreach($kelas as $data)
                                <option value="{{$data->id}}">{{$data->kelas}}</option>
                                @endforeach
                                </select></td>
                        </tr>
                        <tr>
                            <td><label>Jurusan</label></td>
                            <td><select class="form-control" name="jurusan_id">
                                @foreach($jurusan as $data)
                                <option value="{{$data->id}}">{{$data->jurusan}}</option>
                                @endforeach
                                </select></td>
                        </tr>
                        <tr>
                            <td><label>Alamat</label></td>
                            <td>
                                <textarea name="alamat" class="form-control"><?php echo $siswas['alamat'];?></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td><label>No Telepon</label></td>
                            <td>
                                <input type="text" name="no_telepon" class="form-control" value="<?php echo $siswas['no_telepon'];?>"></textarea>
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

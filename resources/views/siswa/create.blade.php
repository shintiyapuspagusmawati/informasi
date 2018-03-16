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
      <br><br><br><br><br>
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">
                <div class="panel-title">Tambah Data Siswa</div>
                </div>
                <div class="panel-body">
                  @if($errors->any())
                        <div class="alert alert-danger">
                            @foreach( $errors->all() as $err)
                              <li><span>{{$err}}</span></li>
                            @endforeach
                        </div>
                    @endif
                   <form action="{{route('siswa.store')}}" method="post"  enctype="multipart/form-data" files="true">
                    {{csrf_field()}}
                    <table class="table table-hover">
                        <tr>
                            <td><label>NIS</label></td>
                            <td><input type="text" name="nis" class="form-control" required=""></td>
                        </tr>
                        <tr>
                            <td><label>Foto</label></td>
                            <td><input type="file" name="foto" required=""></td>
                        </tr>
                        <tr>
                            <td><label>Nama siswa</label></td>
                            <td><input type="text" name="nama_siswa" class="form-control" required=""></td>
                        </tr>
                        <tr>
                            <td><label>Jenis Kelamin</label></td>
                            <td>
                            <input type="radio" name="jenis_kelamin" value="Laki Laki" class="" required="">Laki Laki
                            <input type="radio" name="jenis_kelamin" value="Perempuan" class="" required="">Perempuan
                            </td>
                        </tr>
                        <tr>
                            <td><label>Tanggal Lahir</label></td>
                            <td>
                                <input type="date" name="tanggal_lahir" class="form-control" required="">
                            </td>
                        </tr>
                        <tr>
                            <td><label>Kelas</label></td>
                            <td><select class="form-control" name="id_kelas" required="">
                                @foreach($kelas as $data)
                                <option value="{{$data->id}}">{{$data->kelas}}</option>
                                @endforeach
                                </select></td>
                        </tr>
                        <tr>
                            <td><label>Jurusan</label></td>
                              <td><select class="form-control" name="jurusan_id" required="">
                                @foreach($jurusan as $data)
                                <option value="{{$data->id}}">{{$data->jurusan}}</option>
                                @endforeach
                                </select></td>
                        </tr>
                        <tr>
                            <td><label>Alamat</label></td>
                            <td>
                                <textarea name="alamat" class="form-control" required=""></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td><label>No Telepon</label></td>
                            <td>
                                <input type="text" name="no_telepon" class="form-control" required=""></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td><label>Email</label></td>
                            <td>
                                <input type="Email" name="email" class="form-control" required="">
                            </td>
                        </tr>
                        <tr>
                            <td><label>Password</label></td>
                            <td>
                                <input type="Password" name="password" class="form-control" required=""></textarea>
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

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
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">
                <div class="panel-title">Edit Data Guru</div>
                </div>
                <div class="panel-body">
                   <form action="{{route('guru.update',$gurus->id)}}" method="post" enctype="multipart/form-data" files="true">
                    <input name="_method" type="hidden" value="PATCH">
                    {{csrf_field()}}
                    <table class="table table-hover">
                        <tr>
                            <td><label>Foto</label></td>
                            <td><img src="{{asset('img/'.$gurus->foto)}}" width="100px" height="100px"><input type="file" name="foto" required=""></td>
                        </tr>
                        <tr>
                            <td><label>Nama Guru</label></td>
                            <td><input type="text" name="nama_guru" class="form-control" value="<?php echo $gurus['nama_guru'];?>" required=""></td>
                        </tr>
                        <tr>
                            <td><label>Jenis Kelamin</label></td>
                            <td>
                            <input type="radio" name="jenis_kelamin" required="" value="Laki-Laki" <?php if($gurus['jenis_kelamin']=='Laki-Laki') echo "checked"; ?>>Laki-Laki&nbsp;&nbsp;
                            <input type="radio" name="jenis_kelamin" required="" value="Perempuan"<?php if($gurus['jenis_kelamin']=='Perempuan') echo "checked"; ?>>Perempuan
                            </td>
                        </tr>
                        <tr>
                            <td><label>Tanggal Lahir</label></td>
                            <td>
                                <input type="date" name="tanggal_lahir" class="form-control" value="<?php echo $gurus['tanggal_lahir'];?>" required="">
                            </td>
                        </tr>
                        <tr>
                            <td><label>Kelas</label></td>
                            <td><select multiple="multiple" class="form-control" name="id_kelas[]" required="" value="<?php echo $gurus['id_kelas[]'];?>">
                                @foreach($kelas as $data)
                                <option value="{{$data->kelas}}" <?php if($gurus->id_kelas == $data->id) echo "multiple='multiple'"; ?>>{{$data->kelas}}</option>
                                @endforeach
                                </select></td>
                        </tr>
                        <tr>
                            <td><label>Mata Pelajaran</label></td>
                            <td><select class="form-control" name="id_mapel" required="">
                                @foreach($a as $data)
                                <option value="{{$data->id}}" <?php if($gurus->id_mapel == $data->id) echo "selected='selected'"; ?>>{{$data->name}}</option>
                                @endforeach
                                </select></td>
                        </tr>
                        <tr>
                            <td><label>Alamat</label></td>
                            <td>
                                <textarea name="alamat" required="" class="form-control"> <?php echo $gurus['alamat'];?></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td><label>No Telepon</label></td>
                            <td>
                                <input type="text" name="no_telepon" class="form-control" required="" value="<?php echo $gurus['no_telepon'];?>">
                            </td>
                        </tr>
                        <tr>
                            <td><label>Email</label></td>
                            <td>
                                <input type="Email" name="email" class="form-control" required="" value="<?php echo $gurus['email'];?>">
                            </td>
                        </tr>
                        <tr>
                            <td><label>Password</label></td>
                            <td>
                                <input type="Password" name="password" class="form-control" required="" value="<?php echo $gurus['password'];?>"></textarea>
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

@extends('layouts.template')
@section('content')
<aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
  
                  <li class="mt">
                      <a class="active" href="{{ route('nilai.index') }}" >
                          <i class=" fa fa-file"></i>
                          <span>Tambah Nilai Siswa</span>
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
                <div class="panel-heading">Tambah Nilai Siswa
                <div class="panel-title"></div>
                </div>
                <div class="panel-body">
                   <form action="{{route('guru.store')}}" method="post" enctype="multipart/form-data" files="true">
                    {{csrf_field()}}
                    <table class="table table-hover">
                        <tr>
                            <td><label>Nama</label></td>
                            <td><input type="text" name="nipg" class="form-control"></td>
                        </tr>
                        <tr>
                            <td><label>Jenis Kelamin</label></td>
                            <td>
                            <input type="radio" name="jenis_kelamin" value="Laki Laki" class="">Laki Laki
                            <input type="radio" name="jenis_kelamin" value="Perempuan" class="">Perempuan
                            </td>
                        </tr>
                        <tr>
                            <td><label>Kkm</label></td>
                            <td><input type="text" name="foto" class="form-control"></td>
                        </tr>
                        <tr>
                            <td><label>UH 1</label></td>
                            <td><input type="text" name="nama_guru" class="form-control"></td>
                        </tr>
                        <tr>
                            <td><label>UH 2</label></td>
                            <td>
                                <input type="text" name="tanggal_lahir" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td><label>UH 3</label></td>
                            <td><input type="text" name="foto" class="form-control"></td>
                        </tr>
                        <tr>
                            <td><label>Rata-Rata</label></td>
                            <td><input type="text" name="foto" class="form-control"></td>
                        </tr>
                        <tr>
                            <td><label>UTS</label></td>
                            <td>
                                <input type="text" name="no_telepon" class="form-control"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td><label>UAS</label></td>
                            <td><input type="text" name="foto" class="form-control"></td>
                        </tr>
                        <tr>
                            <td><label>Raport</label></td>
                            <td><input type="text" name="foto" class="form-control"></td>
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

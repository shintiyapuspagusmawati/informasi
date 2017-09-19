@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                <div class="panel-title"></div>
                </div>
                <div class="panel-body">
                   <form action="{{route('siswa.store')}}" method="post"  enctype="multipart/form-data" files="true">
                    {{csrf_field()}}
                    <table class="table table-hover">
                        <tr>
                            <td><label>NIS</label></td>
                            <td><input type="text" name="nis" class="form-control"></td>
                        </tr>
                        <tr>
                            <td><label>Foto</label></td>
                            <td><input type="file" name="foto"></td>
                        </tr>
                        <tr>
                            <td><label>Nama siswa</label></td>
                            <td><input type="text" name="nama_siswa" class="form-control"></td>
                        </tr>
                        <tr>
                            <td><label>Jenis Kelamin</label></td>
                            <td>
                            <input type="radio" name="jenis_kelamin" value="Laki Laki" class="">Laki Laki
                            <input type="radio" name="jenis_kelamin" value="Perempuan" class="">Perempuan
                            </td>
                        </tr>
                        <tr>
                            <td><label>Tanggal Lahir</label></td>
                            <td>
                                <input type="date" name="tanggal_lahir" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td><label>Kelas</label></td>
                            <td><input type="text" name="id_kelas" class="form-control"></td>
                        </tr>
                        <tr>
                            <td><label>Jurusan</label></td>
                            <td><input type="text" name="jurusan_id" class="form-control"></td>
                        </tr>
                        <tr>
                            <td><label>Alamat</label></td>
                            <td>
                                <textarea name="alamat" class="form-control"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td><label>No Telepon</label></td>
                            <td>
                                <input type="text" name="no_telepon" class="form-control"></textarea>
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

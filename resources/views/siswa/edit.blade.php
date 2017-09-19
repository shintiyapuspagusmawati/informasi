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
                   <form action="{{route('siswa.update',$siswas->id)}}" method="post">
                    {{csrf_field()}}
                    <table class="table table-hover">
                        <tr>
                            <td><label>NIS</label></td>
                            <td><input type="text" name="nis" class="form-control" value="<?php echo $siswas['nis'];?>"></td>
                        </tr>
                        <tr>
                            <td><label>Foto</label></td>
                            <td><input type="file" name="foto" value="<?php echo $siswas['foto'];?>"></td>
                        </tr>
                        <tr>
                            <td><label>Nama siswa</label></td>
                            <td><input type="text" name="nama_siswa" class="form-control" value="<?php echo $siswas['nama_siswa'];?>"></td>
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
                                <input type="date" name="tanggal_lahir" class="form-control" value="<?php echo $siswas['tanggal_lahir'];?>">
                            </td>
                        </tr>
                        <tr>
                            <td><label>Kelas</label></td>
                            <td><input type="text" name="id_kelas" class="form-control" value="<?php echo $siswas['id_kelas'];?>"></td>
                        </tr>
                        <tr>
                            <td><label>Jurusan</label></td>
                            <td><input type="text" name="jurusan_id" class="form-control" value="<?php echo $siswas['jurusan_id'];?>"></td>
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

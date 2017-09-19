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
                   <form action="{{route('guru.update',$gurus->id)}}" method="post">
                    {{csrf_field()}}
                    <table class="table table-hover">
                        <tr>
                            <td><label>NIPG</label></td>
                            <td><input type="text" name="nipg" class="form-control" value="<?php echo $gurus['nipg'];?>"></td>
                        </tr>
                        <tr>
                            <td><label>Foto</label></td>
                            <td><input type="file" name="foto" value="<?php echo $gurus['foto'];?>"></td>
                        </tr>
                        <tr>
                            <td><label>Nama Guru</label></td>
                            <td><input type="text" name="nama_guru" class="form-control" value="<?php echo $gurus['nama_guru'];?>"></td>
                        </tr>
                        <tr>
                            <td><label>Jenis Kelamin</label></td>
                            <td>
                            <input type="radio" name="jenis_kelamin" value="Laki-Laki" 
                            <?php echo ($gurus['jenis_kelamin']=='Laki-Laki')?'cheked':''?>>Laki-Laki
                            <input type="radio" name="jenis_kelamin" value="Perempuan" 
                            <?php echo ($gurus['jenis_kelamin']=='Perempuan')?'cheked':''?>>Perempuan
                            </td>
                        </tr>
                        <tr>
                            <td><label>Tanggal Lahir</label></td>
                            <td>
                                <input type="date" name="tanggal_lahir" class="form-control" value="<?php echo $gurus['tanggal_lahir'];?>">
                            </td>
                        </tr>
                        <tr>
                            <td><label>Mata Pelajaran</label></td>
                            <td><input type="text" name="id_mapel" class="form-control" value="<?php echo $gurus['id_mapel'];?>"></td>
                        </tr>
                        <tr>
                            <td><label>Alamat</label></td>
                            <td>
                                <textarea name="alamat" class="form-control"><?php echo $gurus['alamat'];?></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td><label>No Telepon</label></td>
                            <td>
                                <input type="text" name="no_telepon" class="form-control" value="<?php echo $gurus['no_telepon'];?>">
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

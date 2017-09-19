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
                   <form action="{{route('kelas.update', $kelas->id)}}" method="post">
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

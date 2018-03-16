@extends('layouts.template')
@section('content')
<aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
                  <li class="sub-menu">
                      <a href="{{ url('/home') }}" >
                          <i class=" fa fa-cogs"></i>
                          <span>Nilai</span>
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
                <div class="panel-title">Nilai</div>
                </div>
                <div class="panel-body">
                  @if($errors->any())
                        <div class="alert alert-danger">
                            @foreach( $errors->all() as $err)
                              <li><span>{{$err}}</span></li>
                            @endforeach
                        </div>
                    @endif

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
                            <td><input type="text" name="kkm" class="form-control" value="<?php echo $nilai['kkm'];?>"></td>
                        </tr>
                        <tr>
                            <td><label>UH1</label></td>
                            <td><input type="text" name="uh1" class="form-control" value="<?php echo $nilai['uh1'];?>"></td>
                        </tr>
                        <tr>
                            <td><label>UH2</label></td>
                            <td><input type="text" name="uh2" class="form-control" value="<?php echo $nilai['uh2'];?>"></td>
                        </tr>
                        <tr>
                            <td><label>UH3</label></td>
                            <td><input type="text" name="uh3" class="form-control" value="<?php echo $nilai['uh3'];?>"></td>
                        </tr>
                        <tr>
                            <td><label>UH4</label></td>
                            <td><input type="text" name="uh4" class="form-control" value="<?php echo $nilai['uh4'];?>"></td>
                        </tr>
                        <tr>
                            <td><label>UTS</label></td>
                            <td><input type="text" name="uts" class="form-control" value="<?php echo $nilai['uts'];?>"></td>
                        </tr>
                        <tr>
                            <td><label>UAS</label></td>
                            <td><input type="text" name="uas" class="form-control" value="<?php echo $nilai['uas'];?>"></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
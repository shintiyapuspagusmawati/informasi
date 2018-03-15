@extends('layouts.template')
@section('content')
@role('admin')
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
@endrole

@role('guru')
<aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
                  <li class="sub-menu">
                      <a href="{{ route('nilai.index') }}" >
                          <i class=" fa fa-file"></i>
                          <span>Nilai Siswa</span>
                      </a>
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
@endrole

@role('siswa')
<aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
                  <li class="mt">
                      <a class="active" href="{{ url('/home') }}">
                          <i class="fa fa-dashboard"></i>
                          <span>Nilai</span>
                      </a>
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
@endrole

@role('admin')
    <div class="container">
    <div class="row">
      <br><br><br><br><br>
        <div class="col-md-10 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <center><label class="panel-title"><h3><b>Selamat Datang</b></h3></label></center><br><br>
                </div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="col-sm-12">
                                <center><a href="{{ route('guru.index') }}" class="btn btn-info"><i class="pe-7s-wallet"></i> DATA GURU</a></center>
                                  <div><br><br><br></div>
                            </div>
                            <div class="col-sm-12 col-md-offset-6">
                                <center><a href="{{ route('kelas.index') }}" class="btn btn-info"><i class="pe-7s-tools"></i>  KELAS</a></center>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="col-sm-12">
                                <center><a href="{{ route('siswa.index') }}" class="btn btn-info"><i class="pe-7s-users"></i> DATA SISWA</a></center>
                                <div><br><br><br></div>
                            </div>
                            <div class="col-sm-12 col-md-offset-6">
                                <center><a href="{{ route('jurusan.index') }}" class="btn btn-info"><i class="pe-7s-culture"></i> JURUSAN</a></center>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="col-sm-12">
                                <center><a href="{{ route('mapel.index') }}" class="btn btn-info"><i class="pe-7s-news-paper"></i> MATA PELAJARAN</a></center>
                                <div><br><br><br></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endrole

@role('guru')
<div class="container">
    <div class="row">
      <br><br><br><br><br>
        <div class="col-md-10 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <center><label class="panel-title"><h3><b>Selamat Datang</b></h3></label></center><br><br>
                </div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-4 col-md-offset-4">
                            <div class="col-sm-12">
                                <center><a href="{{ route('nilai.index') }}" class="btn btn-info">NILAI SISWA</a></center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endrole


@role('siswa')
<div class="container">
    <div class="row">
      <br><br><br><br><br>
        <div class="col-md-10 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <center><label class="panel-title"><h3><b>Selamat Datang</b></h3></label></center><br><br>
                </div>

                <div class="panel-body">
                    <h4><center>Silakan Pilih Mata Pelajaran Untuk Melihat Nilai</center></h4><br><br>
                    @php
                    $mapel = App\mapel::all();
                    @endphp
                    <div class="row">
                      @foreach($mapel as $data)
                        <div class="col-md-3">
                            <div class="col-sm-12">
                                <center><a href="{{ url('/admin/nisis',$data->id) }}" class="btn btn-primary">{{$data->name}}</a></center>
                                <div><br><br><br></div>
                            </div>
                        </div>
                        @endforeach
            </div>
        </div>
    </div>
</div>
@endrole
@endsection


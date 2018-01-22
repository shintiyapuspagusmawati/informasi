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
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <center><label class="panel-title"><h3><b>Selamat Datang</b></h3></label></center><br><br>
                </div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-sm-12">
                                <center><a href="/nilai" class="btn btn-primary"><i class="pe-7s-wallet"></i> Tambah Data Nilai Siswa</a></center>
                                  <div><br><br><br></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.template')
@section('content')
<aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
                  <li class="mt">
                      <a class="active" href="{{ url('/home') }}">
                          <i class="fa fa-dashboard"></i>
                          <span>Home</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>Regis Guru</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>Regis Siswa</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="{{ route('guru.index') }}">
                          <i class="fa fa-book"></i>
                          <span>Tambah Data Guru</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="{{ route('siswa.index') }}" >
                          <i class="fa fa-tasks"></i>
                          <span>Tambah Data Siswa</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="{{ route('mapel.index') }}" >
                          <i class="fa fa-th"></i>
                          <span>Tambah Mapel</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="{{ route('kelas.index') }}" >
                          <i class=" fa fa-bar-chart-o"></i>
                          <span>Tambah Kelas</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="{{ route('jurusan.index') }}" >
                          <i class=" fa fa-tasks"></i>
                          <span>Tambah Jurusan</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="{{ route('nilai.index') }}" >
                          <i class=" fa fa-file"></i>
                          <span>Lihat Nilai Siswa</span>
                      </a>
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>

    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">Data Nilai Siswa
                </div>
                <div class="panel-body">
                @if(Session::has('alert-success'))
                        <div class="alert alert-success">
                            {{ Session::get('alert-success') }}
                        </div>
                    @endif
                    <table class="table table-hover">
                            <tr>
                                <th>Id</th>
                                <th>Nama Siswa</th>
                                <th>Jenis Kelamin</th>
                                <th>KKM</th>
                                <th>UH 1</th>
                                <th>UH 2</th>
                                <th>UH 3</th>
                                <th>Rata-Rata</th>
                                <th>UTS</th>
                                <th>UAS</th>
                                <th>Raport</th>
                                <th colspan="2">Detail</th>
                             </tr>
                        <tbody>
                            <td>7</td>
                            <td>Tasya Lutfrida</td>
                            <td>Perempuan</td>
                            <td>75</td>
                            <td>79</td>
                            <td>80</td>
                            <td>89</td>
                            <td>90</td>
                            <td>88</td>
                            <td>82</td>
                            <td>83</td>
                            <td><a href="/bio" class="btn basic">Biodata</a></td>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>  
    </div>
</div>
@endsection
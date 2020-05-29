@extends('layouts.master')
@section('tittle', 'karyawan')
@section('content')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Table Karyawan</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Karyawan</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-footer clearfix">
                <a href="/karyawan/create" class="btn btn-primary my-3"><i class="fas fa-plus"></i>Tambah Data</a>

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
            </div>
            <div class="card-body">
                <table id="example" class="display nowrap table-responsive" style="width:100%">
                    <thead>
                        <tr>
                            <th></th>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Umur</th>
                            <th>Jenis Kelamin</th>
                            <th>No Hp</th>
                            <th>Tnggal Lahir</th>
                            <th>Jabatan</th>
                            <th>Status</th>
                            <th>Pendidikan</th>
                            <th>Tnggal Masuk</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($karyawan as $tampil)
                            <tr>
                                <td></td>
                                <th>{{$loop->iteration}}</th>
                                <td><a href="/karyawan/{{ $tampil->id}}">{{ $tampil->nama}}</a></td>
                                <td>{{$tampil->alamat}}</td>
                                <td>{{$tampil->umur}}</td>
                                <td>{{$tampil->jenis}}</td>
                                <td>{{$tampil->no_hp}}</td>
                                <td>{{$tampil->tgl_lahir}}</td>
                                <td>{{$tampil->jabatan->jabatan}}</td>
                                <td>{{$tampil->status->status}}</td>
                                <td>{{$tampil->pendidikan->pendidikan}}</td>
                                <td>{{$tampil->tgl_masuk}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

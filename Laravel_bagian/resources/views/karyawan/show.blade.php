@extends('layouts.master')
@section('tittle', 'detail karyawan')
@section('content')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Detail Karyawan <b>{{$karyawan->nama}}</b></h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/karyawan">Home</a></li>
            <li class="breadcrumb-item active">Karyawan</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <table class="table table-striped projects">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Umur</th>
            <th>Jenis Kelamin</th>
            <th>No Hp</th>
            <th>Tnggal Lahir</th>
            <th>Jabatan</th>
            <th>Status</th>
            <th>Pendidikan-</th>
            <th>Tnggal Masuk</th>
            <th style="width: 18%">Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                {{$karyawan->id}}
            </td>
            <td>
                <a>
                    {{$karyawan->nama}}
                </a>
            </td>
            <td>
                <ul class="list-inline">
                    <li class="list-inline-item">
                        {{$karyawan->alamat}}
                    </li>
                </ul>
            </td>
            <td>{{$karyawan->umur}}</td>
            <td>{{$karyawan->jenis}}</td>
            <td>{{$karyawan->no_hp}}</td>
            <td>{{$karyawan->tgl_lahir}}</td>
            <td>{{$karyawan->jabatan->jabatan}}</td>
            <td>{{$karyawan->status->status}}</td>
            <td>{{$karyawan->pendidikan->pendidikan}}</td>
            <td>{{$karyawan->tgl_masuk}}</td>
            <td class="project-actions text-right">
                {{-- <a class="btn btn-primary btn-sm" href="#">
                    <i class="fas fa-folder">
                    </i>
                    View
                </a> --}}
                <a class="btn btn-info btn-sm" href="{{ $karyawan->id }}/edit">
                    <i class="fas fa-pencil-alt">
                    </i>
                    Edit
                </a>
                <form action="{{ $karyawan->id }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash">Delete</i></button>
                </form>
            </td>
        </tr>
    </tbody>
</table>
@endsection

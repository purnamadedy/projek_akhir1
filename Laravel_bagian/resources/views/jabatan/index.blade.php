@extends('layouts.master')
@section('tittle', 'jabatan')
@section('content')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Table Jabatan</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Status</li>
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
                <a href="/jabatan/create" class="btn btn-success my-3"><i class="fas fa-plus"></i>Tambah Data</a>

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
            </div>
            <div class="card">
                <div class="card-body p-0">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th style="width: 30%">No</th>
                        <th>Jabatan</th>
                        <th style="width: 18%">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($jabatan as $tampil)
                        <tr>
                            <th>{{$loop->iteration}}</th>
                            <td>{{$tampil->jabatan}}</td>
                            <td class="project-actions text-right">
                                <form action="{{ route ('jabatan.edit', $tampil->id) }}" method="post" class="d-inline">
                                    @method('GET')
                                    @csrf
                                    <button type="submit" class="btn btn-primary btn-sm"> <i class="fas fa-pencil-alt">Edit</i></button>
                                </form>
                                <form action="{{ route ('jabatan.destroy', $tampil->id) }}" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash">Delete</i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

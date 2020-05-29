@extends('layouts.master')
@section('tittle', 'form daftar')
@section('content')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Form Edit Status</h1>
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
  <section class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h3> Form Edit Status</h3>
            </div>
            <form method="post" action="/status/{{ $status->id }}">
                @method('patch')
                @csrf

                {{-- <div class="form-group">
                    <label for="status">Status</label>
                    <select class="form-control"  @error('status') is-invalid @enderror" id="status" placeholder="Masukan Status" name="status" value="{{ $status->status }}">
                      <option>KARYAWAN</option>
                      <option>KONTRAK</option>
                      <option>MAGANG</option>
                    </select>
                    @error('status')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div> --}}
                <div class="form-group">
                    <label for="status_id">Status</label>
                    <select name="status" id="status" class="form-control">
                        <option value="KARYAWAN TETAP" {{ $status->status == 'KARYAWAN TETAP' ? 'selected' : '' }}>
                            Karyawan
                        </option>
                        <option value="KONTRAK" {{ $status->status == 'KONTRAK' ? 'selected' : '' }}>
                            Kontrak
                        </option>
                        <option value="MAGANG" {{ $status->status == 'MAGANG' ? 'selected' : '' }}>
                            Magang
                        </option>
                    </select>
                    @error('status')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <button style="color: blue" type="submit" class="btn btn-app"><i class="fas fa-save"></i> Save</button>
            </form>
        </div>
      </div>
    </div>
  </section>
@endsection

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
          <h1>Form Edit Karyawan</h1>
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
              <h3> Form Edit Karyawan</h3>
            </div>
            <form method="post" action="/karyawan/{{ $karyawan->id }}">
                @method('patch')
                @csrf

                <div class="form-group">
                  <label for="nama">Nama</label>
                  <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukan Nama" name="nama" value="{{ $karyawan->nama }}">
                    @error('nama')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" placeholder="Masukan Alamat" name="alamat" value="{{ $karyawan->alamat }}">
                    @error('alamat')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="umur">Umur</label>
                    <input type="text" class="form-control @error('umur') is-invalid @enderror" id="umur" placeholder="Masukan Umur" name="umur" value="{{ $karyawan->umur }}">
                    @error('umur')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="jenis">Jenis kelamin</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" name="jenis" id="jenis" value="Laki-laki" {{$karyawan->jenis == 'Laki-laki' ?'checked' : ''}}>
                    <label for="Laki-laki" class="form form-check-input">Laki-laki</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" name="jenis" id="jenis" value="Perempuan" {{$karyawan->jenis == 'Perempuan' ?'checked' : ''}}>
                    <label for="perempuan" class="form form-check-input">Perempuan</label>
                </div>
                @error('jenis')
                    <div class="alert alert-danger">{{($message)}}</div>
                @enderror
                <div class="form-group">
                    <label for="no_hp">No Hp</label>
                    <input type="text" class="form-control @error('no_hp') is-invalid @enderror" id="no_hp" placeholder="Masukan No HP" name="no_hp" value="{{ $karyawan->no_hp }}">
                    @error('no_hp')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="tgl_lahir">Tanggal Lahir</label>
                    <input type="date" class="form-control @error('tgl_lahir') is-invalid @enderror" id="tgl_lahir" name="tgl_lahir" value="{{ $karyawan->tgl_lahir }}">
                    @error('tgl_lahir')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="jabatan_id">Jabatan</label>
                    <select name="jabatan_id" id="jabatan_id" class="form-control">
                        @foreach($jabatan as $jabatans)
                            <option value="{{$jabatans->id}}" {{old('jabatan_id') ?? $karyawan->jabatan_id == $jabatans->id ? 'selected' : ''}}>{{ $jabatans->jabatan }}
                            </option>
                        @endforeach
                    </select>
                    @error('jabatan_id')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="status_id">Status</label>
                    <select name="status_id" id="status_id" class="form-control">
                        @foreach($status as $tampil)
                        <option value="{{$tampil->id}}" {{old('status_id') ?? $karyawan->status_id == $tampil->id ? 'selected' : ''}}>{{ $tampil->status }}
                            </option>
                        @endforeach
                    </select>
                    @error('status_id')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="pendidikan_id">Pendidikan</label>
                    <select name="pendidikan_id" id="pendidikan_id" class="form-control">
                        @foreach($pendidikan as $pendidikans)
                        <option value="{{$pendidikans->id}}" {{old('pendidikan_id') ?? $karyawan->pendidikan_id == $pendidikans->id ? 'selected' : ''}}>{{ $pendidikans->pendidikan }}
                            </option>
                        @endforeach
                    </select>
                    @error('pendidikan_id')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="tgl_masuk">Tanggal Lahir</label>
                    <input type="date" class="form-control @error('tgl_masuk') is-invalid @enderror" id="tgl_masuk" name="tgl_masuk" value="{{ $karyawan->tgl_masuk }}">
                    @error('tgl_masuk')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button style="color: blue" type="submit" class="btn btn-app"><i class="fas fa-save"></i> Save</button>
            </form>
        </div>
      </div>
    </div>
  </section>
@endsection

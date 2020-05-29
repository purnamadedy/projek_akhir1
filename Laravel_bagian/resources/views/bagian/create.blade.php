@extends('layout.master')
@section('content')
   <div class="container">
        <div class="row">
            <div class="col-8">
                <h1 class="mt-3">Form Tambah Barang</h1>


                <form method="post" action="/bagian">
                    @csrf

                    <div class="form-group">
                      <label for="nama_bagian">Nama Bagian</label>
                      <input type="text" class="form-control @error('nama_bagian') is-invalid @enderror" id="nama_bagian" placeholder="Masukan Nama Bagian" name="nama_bagian">
                        @error('nama_bagian')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukan Nama Anda" name="nama">
                        @error('nama')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="jumlah_bagian">Jumlah Bagian</label>
                        <input type="text" class="form-control @error('jumlah_bagian') is-invalid @enderror" id="jumlah_bagian" placeholder="Masukan Jumlah Bagian" name="jumlah_bagian">
                        @error('jumlah_bagian')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-success">Tambah Bagian Baru</button>
                </form>
            </div>
        </div>
    </div>
@endsection


@extends('admin.layout.master')
@section('content')
   <div class="container">
        <div class="row">
            <div class="col-6">

                <h3 class="mt-3"><b>Detail Barang {{$gudang->nama_brang}}</b></h3>
            </div>
        </div>
        {{-- <div class="card"> --}}
            {{-- <div class="card-body"> --}}

              <h5 class="card-title">{{$gudang->no_invoice}}</h5>
              <h5 class="card-title">{{$gudang->nama_brang}}</h5>
              <p class="card-text">{{$gudang->jenis_barang}}</p>
              <p class="card-text">{{$gudang->alamat_barang}}</p>
              <p class="card-text">{{$gudang->deskripsi_barang}}</p>

              <a href="{{ $gudang->id }}/edit" class="badge badge-info">Edit</a>

              {{-- <form action="{{ $gudang->id }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button type="submit" class="badge badge-danger">Delete</button>
              </form> --}}

              <a href="/gudang" class="badge badge-warning">Kembali</a>
            </div>
        </div>
    </div>
@endsection


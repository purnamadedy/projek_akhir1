@extends('layout.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1 class="mt-3">Data Bagian</h1>

                <a href="{{ url('/bagian/create') }}" class="btn btn-primary my-3">Tambah Data Bagian</a>

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
            </div>
            <br><br>
            <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Bagian</th>
                    <th scope="col">Nama Supervisor</th>
                    <th scope="col">Jumlah Bagian</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    <tbody>
                        @foreach($bagian as $tampil)
                            <tr>
                                <td>{{$tampil->id}}</td>
                                <td>{{$tampil->nama_bagian}}</td>
                                <td>{{$tampil->nama}}</td>
                                <td>{{$tampil->jumlah_bagian}}</td>
                                <td>
                                    {{-- <a href="{{ url('bagian/{bagian}/edit ') }}" class="btn btn-info">Edit</a> --}}
                                    <form action="{{ route ('bagian.edit', $tampil->id) }}" method="post" class="d-inline">
                                        @method('GET')
                                        @csrf
                                        <button type="submit" class="btn btn-warning">Edit</button>
                                    </form>
                                    <form action="{{ route ('bagian.destroy', $tampil->id) }}" method="post" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </tbody>
            </table>
        </div>
    </div>
@endsection

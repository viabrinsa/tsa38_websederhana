@extends('layoutadmin.master')
@section('content')
@include('layoutadmin.navbar')
@include('layoutadmin.sidebar')
<div class="card">
  <div class="card-header">
    <h3 class="card-title">FILM</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <a href="/tambahfilm" class="btn btn-primary"><i class="fa fa-plus-square-o"></i>Tambah</a>
    <hr>
    <table id="example1" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>No</th>
          <th>Judul</th>
          <th>Deskripsi</th>
          <th>Genre</th>
          <th>Poster</th>
          <th>Aksi</th>
        </tr>
      </thead>

      <tbody>
        @foreach($data as $daftar)
        <tr>
          <td>{{$daftar->id_film}}</td>
          <td>{{$daftar->judulfilm}}</td>
          <td>{{$daftar->deskripsi}}</td>
          <td>{{$daftar->genre}}</td>
          <td><img class="img-preview img-fluid" src="{{ asset('storage/'.$daftar->poster) }}" style="max-width: 100px;"></td>
          <td>
            <a href="{{ url('/editfilm', ['id' => $daftar->id_film]) }}" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i>Edit</a>

            <form action="{{ url('/destroy', ['id' => $daftar->id_film]) }}" method="post">
              @csrf

              <button data-target="#staticModal" class="btn btn-danger btn-sm">
                Hapus
              </button>
            </form>
          </td>
        </tr>

        @endforeach
      </tbody>
    </table>
  </div>
  <!-- /.card-body -->
</div>
@include('layoutadmin.footer')
@endsection
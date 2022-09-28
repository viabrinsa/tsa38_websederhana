@extends('layoutadmin.master')
@section('content')
@include('layoutadmin.navbar')
@include('layoutadmin.sidebar')
<div class="card">
  <div class="card-header">
    <h3 class="card-title">ARTIKEL</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <a href="{{url('createart')}}" class="btn btn-primary"><i class="fa fa-plus-square-o"></i>Tambah</a>
    <hr>
    <table id="example1" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>No</th>
          <th>Judul</th>
          <th>Isi</th>
          <th>Gambar</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach($artikel as $i => $art)
        <tr>
          <td>{{++$i}}</td>
          <td>{{$art->judul}}</td>
          <td>{{$art->isi}}</td>
          <td><img class="img-preview img-fluid" src="{{ url('/storage/'.$art->gambar) }}" style="max-width: 180px;"></td>
          <td>
            <a href="{{ url('/editart', ['id' => $art->id_artikel]) }}" class="btn btn-warning btn-sm">Edit</a>
            <form action="{{ url('/destroy',['id'=>$art->id_artikel]) }}" method="POST">
              @csrf
              <button type="submit" class="btn btn-danger">Hapus</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  <!-- /.card-body -->
</div>
@endsection
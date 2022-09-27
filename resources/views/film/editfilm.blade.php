@extends('layoutadmin.master')
@section('content')
@include('layoutadmin.navbar')
@include('layoutadmin.sidebar')
<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- jquery validation -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Edit Film</small></h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form id="quickForm" action="{{ url('editfilm', ['id' => $data->id_film]) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Judul</label>
                <input type="text" name="judulfilm" class="form-control" value="{{ $data->judulfilm }}" id="exampleInputEmail1" placeholder="Judul">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Deskripsi</label>
                <input type="text" name="deskripsi" class="form-control" value="{{ $data->deskripsi }}" id="exampleInputPassword1" placeholder="Deskripsi">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Genre</label>
                <input type="text" name="genre" class="form-control" value="{{ $data->genre }}" id="exampleInputPassword1" placeholder="Genre">
              </div>
              <div class="mb-3">
                <label for="formFile" class="form-label">Poster</label>
                <input class="form-control" name="poster" type="file" id="poster" accept="image/*">
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
          </form>
        </div>
        <!-- /.card -->
      </div>
      <!--/.col (left) -->
      <!-- right column -->
      <div class="col-md-6">

      </div>
      <!--/.col (right) -->
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@include('layoutadmin.footer')
@endsection
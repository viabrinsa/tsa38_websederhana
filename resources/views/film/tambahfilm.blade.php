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
            <h3 class="card-title">Tambah Film Baru</small></h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form id="quickForm" action="{{ route('tambahfilm') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Judul</label>
                <input type="text" name="judulfilm" class="form-control" id="exampleInputEmail1" placeholder="Judul">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Deskripsi</label>
                <input type="text" name="deskripsi" class="form-control" id="exampleInputPassword1" placeholder="Deskripsi">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Genre</label>
                <input type="text" name="genre" class="form-control" id="exampleInputPassword1" placeholder="Genre">
              </div>
            </div>
            <div class="mb-3">
              <label for="formFile" class="form-label">Poster</label>
              <input class="form-control" name="poster" type="file" id="poster" accept="image/*">
            </div>
            <!-- <div class="form-group">
              <label for="exampleInputFile">Poster</label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="exampleInputFile">
                  <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                </div>
                <div class="input-group-append">
                  <span class="input-group-text">Upload</span>
                </div>
              </div>
            </div> -->
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
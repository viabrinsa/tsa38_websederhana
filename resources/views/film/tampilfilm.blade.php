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
                  <tr>
                    <td>Trident</td>
                    <td>Internet
                      Explorer 4.0
                    </td>
                    <td>Win 95+</td>
                    <td> 4</td>
                    <td> 4</td>
                    <td>
                        <a href="/editfilm" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i>Edit</a>
                        <a href="" data-target="#staticModal" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini?')"><i class="fa fa-eraser" ></i>Hapus</a>
                    </td>
                  </tr>
                  <tr>
                    <td>Trident</td>
                    <td>Internet
                      Explorer 5.0
                    </td>
                    <td>Win 95+</td>
                    <td>5</td>
                    <td>C</td>
                  </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
</div>
@include('layoutadmin.footer')
@endsection
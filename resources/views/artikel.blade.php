@extends('layouts.app')
@section('content')
@include('layouts.navbar')

<!-- ======= Recent Blog Posts Section ======= -->
<section id="recent-posts" class="recent-posts sections-bg">
  <div class="container" data-aos="fade-up">

    <div class="section-header">
      <h2>ARTIKEL</h2>
    </div>

    <div class="row gy-4">

      <div class="col-xl-4 col-md-6">
        <article>

          <div class="post-img">
            <img src="assets/img/blog/1.jpeg" alt="" class="img-fluid">
          </div>

          <p class="post-category">MOVIEKU</p>

          <h2 class="title">
            <a href="blog-details.html">Shawn Mendes Jadi Buaya Bersuara Merdu di Film Lyle,Lyle, Crocodile</a>
          </h2>

          <div class="d-flex align-items-center">
            <p>Shawn Mendes Jadi Buaya Bersuara Merdu di Film Lyle,Lyle, Crocodile</p>
          </div>

        </article>
      </div><!-- End post list item -->

      <div class="col-xl-4 col-md-6">
        <article>

          <div class="post-img">
            <img src="assets/img/blog/2.png" alt="" class="img-fluid">
          </div>

          <p class="post-category">MOVIEKU</p>

          <h2 class="title">
            <a href="blog-details.html">Miracle in Cell No. 7 Tayang Mulai Hari Ini!</a>
          </h2>

          <div class="d-flex align-items-center">
            <p>Apa kalian lagi cari tontonan seru di minggu ini bersama keluarga? Film Miracle in Cell No. 7 sudah tayang mulai hari ini! Tidak lagi asing,...</p>
          </div>

        </article>
      </div><!-- End post list item -->

      <div class="col-xl-4 col-md-6">
        <article>

          <div class="post-img">
            <img src="assets/img/blog/3.jpeg" alt="" class="img-fluid">
          </div>

          <p class="post-category">MOVIEKU</p>

          <h2 class="title">
            <a href="blog-details.html">Masih Tayang di Bioskop, Sayap-Sayap Patah Tembus 2 Juta Penonton!</a>
          </h2>

          <div class="d-flex align-items-center">
            <p>Masih Tayang di Bioskop, Sayap-Sayap Patah Tembus 2 Juta Penonton!</p>
          </div>

        </article>
      </div><!-- End post list item -->

    </div><!-- End recent posts list -->

  </div>
</section><!-- End Recent Blog Posts Section -->
@include('layouts.footer')
@endsection
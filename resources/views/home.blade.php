@extends('layouts.app')
@section('content')
@include('layouts.navbar')
<!-- ======= Hero Section ======= -->
<section id="hero" class="hero">
  <div class="container position-relative">
    <div class="row gy-5" data-aos="fade-in">
      <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
        <h2>SELAMAT DATANG DI<span>MOVIEKU</span></h2>
        <p>SELAMAT MENIKMATI:)</p>
      </div>
      <div class="col-lg-6 order-1 order-lg-2">
        <img src="assets/img/icon-film.png" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100">
      </div>
    </div>
  </div>
  <!-- End Hero Section -->

  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio sections-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>FILM SEDANG TAYANG</h2>
      </div>

      <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4 portfolio-container">

          <div class="col-xl-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <a href="assets/img/kategori/4.jpeg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/kategori/4.jpeg" class="img-fluid" alt=""></a>
              <div class="portfolio-info">
                <h4><a href="portfolio-details.html" title="More Details">KKN DESA PENARI</a></h4>
                <p>HOROR</p>
              </div>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-xl-4 col-md-6 portfolio-item filter-product">
            <div class="portfolio-wrap">
              <a href="assets/img/kategori/6.jpeg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/kategori/6.jpeg" class="img-fluid" alt=""></a>
              <div class="portfolio-info">
                <h4><a href="portfolio-details.html" title="More Details">MENCURI RADEN SALEH</a></h4>
                <p>ACTION</p>
              </div>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-xl-4 col-md-6 portfolio-item filter-branding">
            <div class="portfolio-wrap">
              <a href="assets/img/kategori/1.jpeg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/kategori/1.jpeg" class="img-fluid" alt=""></a>
              <div class="portfolio-info">
                <h4><a href="portfolio-details.html" title="More Details">MENDARAT DARURAT</a></h4>
                <p>ROMANCE</p>
              </div>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-xl-4 col-md-6 portfolio-item filter-books">
            <div class="portfolio-wrap">
              <a href="assets/img/kategori/2.jpeg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/kategori/2.jpeg" class="img-fluid" alt=""></a>
              <div class="portfolio-info">
                <h4><a href="portfolio-details.html" title="More Details">12 CERITA GLEN ANGGARA</a></h4>
                <p>ROMANCE</p>
              </div>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-xl-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <a href="assets/img/kategori/3.jpeg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/kategori/3.jpeg" class="img-fluid" alt=""></a>
              <div class="portfolio-info">
                <h4><a href="portfolio-details.html" title="More Details">SAYAP SAYAP PATAH</a></h4>
                <p>ROMANCE</p>
              </div>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-xl-4 col-md-6 portfolio-item filter-product">
            <div class="portfolio-wrap">
              <a href="assets/img/kategori/5.jpeg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/kategori/5.jpeg" class="img-fluid" alt=""></a>
              <div class="portfolio-info">
                <h4><a href="portfolio-details.html" title="More Details">YOWIS BEN</a></h4>
                <p>COMEDY</p>
              </div>
            </div>
          </div><!-- End Portfolio Item -->

        </div><!-- End Portfolio Container -->

      </div>

    </div>
  </section><!-- End Portfolio Section -->
  @include('layouts.footer')
  @endsection
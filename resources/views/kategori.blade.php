@extends('layouts.app')
@section('content')
@include('layouts.navbar')

<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio sections-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2>ROMANCE</h2>
        </div>

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">
            <div class="row gy-4 portfolio-container">

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

            </div><!-- End Portfolio Container -->

        </div>
</section><!-- End Portfolio Section -->

@include('layouts.footer')
@endsection
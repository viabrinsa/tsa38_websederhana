@extends('layouts.app')
@section('content')
@include('layouts.navbar')

<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio sections-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2>COMEDY</h2>
        </div>

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
            data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">
            <div class="row gy-4 portfolio-container">

                <div class="col-xl-4 col-md-6 portfolio-item filter-product">
                    <div class="portfolio-wrap">
                        <a href="assets/img/kategori/5.jpeg" data-gallery="portfolio-gallery-app" class="glightbox"><img
                                src="assets/img/kategori/5.jpeg" class="img-fluid" alt=""></a>
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
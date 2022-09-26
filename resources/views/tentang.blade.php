@extends('layouts.app')
@section('content')
@include('layouts.navbar')

<main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>TENTANG KAMI</h2>
                <p>Website Film Terbaik</p>
            </div>

            <div class="row gy-4">
                <div class="col-lg-6">
                    <h3>MOVIEKU</h3>
                    <img src="assets/img/icon-film.png" class="img-fluid rounded-4 mb-4" alt="">
                    <p>Website yang menyediakan berbagai macam kategori film terbaru.</p>
                </div>
                <div class="col-lg-6">
                    <div class="content ps-0 ps-lg-5">
                        <p>
                            Bergabunglah dalam kegembiraan dalam menghadirkan aplikasi hiburan terbaik yang berdampak bagi masyarakat! Di MOVIEKU, Anda akan bekerja dengan tim yang penuh dengan pemikiran berbakat yang saling mendukung dan menghargai kerja tim.
                        </p>

                        <div class="position-relative mt-4">
                            <img src="assets/img/about-2.jpg" class="img-fluid rounded-4" alt="">
                            <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End About Us Section -->

    @include('layouts.footer')
    @endsection
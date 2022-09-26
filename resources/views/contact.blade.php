@extends('layouts.app')
@section('content')
@include('layouts.navbar')

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2>KONTAK KAMI</h2>

        </div>

        <div class="row gx-lg-0 gy-4">

            <div class="col-lg-4">

                <div class="info-container d-flex flex-column align-items-center justify-content-center">
                    <div class="info-item d-flex">
                        <i class="bi bi-geo-alt flex-shrink-0"></i>
                        <div>
                            <h4>Lokasi :</h4>
                            <p>Jl. Soekarno Hatta, Malang</p>
                        </div>
                    </div>
                    <!-- End Info Item -->

                    <div class="info-item d-flex">
                        <i class="bi bi-envelope flex-shrink-0"></i>
                        <div>
                            <h4>Email:</h4>
                            <p>movieku@gmail.com</p>
                        </div>
                    </div>
                    <!-- End Info Item -->

                    <div class="info-item d-flex">
                        <i class="bi bi-phone flex-shrink-0"></i>
                        <div>
                            <h4>Nomor Telepon:</h4>
                            <p>0818-8899-9000</p>
                        </div>
                    </div>
                    <!-- End Info Item -->

                    <div class="info-item d-flex">
                        <i class="bi bi-clock flex-shrink-0"></i>
                        <div>
                            <h4>Jam Buka:</h4>
                            <p>Setiap Hari (24 Jam)</p>
                        </div>
                    </div>
                    <!-- End Info Item -->
                </div>

            </div>

            <div class="col-lg-8">
                <form role="form" class="php-email-form">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Masukkan Nama">
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Alamat Email">
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subjek">
                    </div>
                    <div class="form-group mt-3">
                        <textarea class="form-control" name="message" id="message" rows="7" placeholder="Ketik Pesan"></textarea>
                    </div>
                    <div class="text-center"><button type="submit" name="submit" id="submit" onclick="showAlert()">Kirim Pesan</button>
                    </div>
                </form>
            </div>
            <!-- End Contact Form -->

        </div>

    </div>
</section>
<!-- End Contact Section -->

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/Javascript">
    function showAlert() {
        console.log("tes");

        var name = document.getElementById('name').value;
        var email = document.getElementById('email').value;
        var subject = document.getElementById('subject').value;
        var message = document.getElementById('message').value;

        if (name == '' || email == '' || subject == '' || message == '') {
            swal({
                title: "Fields Empty!!",
                text: "Please check the missing field!!",
                icon: "warning",
                button: "Ok",
            });
        } else {
            swal({
                title: "Successfully submitted",
                icon: "success",
                button: "Yes!!!",
            }).then(()=>{
                location.reload();
            });
        }
    }
</script>

@include('layouts.footer')
@endsection
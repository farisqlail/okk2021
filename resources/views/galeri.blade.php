@extends('include.app')

@section('content')
    <main id="main">
        <section id="#hero-banner" class="hero-banner">
            <div class="container">
                <div class="row">
                    <div class="col-md-6" data-aos="fade-up">
                        <h1>Galeri</h1>
                    </div>
                    <div class="col-md-6" data-aos="fade-up">
                        <img src="./assets/img/Saly-12.png" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </section>

        <!-- ======= galeri Section ======= -->
        <section id="galeri" class="galeri">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <p>Galeri</p>
                    <small style="color: #C1D6EA;">Lihat dokumentasi acara disini!</small>
                </header>

                <div class="row gy-4 galeri-container" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-4 col-md-6 galeri-item filter-app">
                        <div class="galeri-wrap">
                            <img src="assets/img/galeri/portfolio-1.jpg" class="img-fluid" alt="">
                            <div class="galeri-info">
                                <h4>App 1</h4>
                                <p>App</p>
                                <div class="galeri-links">
                                    <a href="assets/img/galeri/portfolio-1.jpg" data-gallery="galeriGallery"
                                        class="portfokio-lightbox" title="App 1"><i class="fas fa-eye"></i></a>
                                    <a href="#" title="More Details"><i class="fas fa-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 galeri-item filter-web">
                        <div class="galeri-wrap">
                            <img src="assets/img/galeri/portfolio-2.jpg" class="img-fluid" alt="">
                            <div class="galeri-info">
                                <h4>Web 3</h4>
                                <p>Web</p>
                                <div class="galeri-links">
                                    <a href="assets/img/galeri/portfolio-2.jpg" data-gallery="galeriGallery"
                                        class="portfokio-lightbox" title="Web 3"><i class="fas fa-eye"></i></a>
                                    <a href="#" title="More Details"><i class="fas fa-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 galeri-item filter-app">
                        <div class="galeri-wrap">
                            <img src="assets/img/galeri/portfolio-3.jpg" class="img-fluid" alt="">
                            <div class="galeri-info">
                                <h4>App 2</h4>
                                <p>App</p>
                                <div class="galeri-links">
                                    <a href="assets/img/galeri/portfolio-3.jpg" data-gallery="galeriGallery"
                                        class="portfokio-lightbox" title="App 2"><i class="fas fa-eye"></i></a>
                                    <a href="#" title="More Details"><i class="fas fa-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 galeri-item filter-card">
                        <div class="galeri-wrap">
                            <img src="assets/img/galeri/portfolio-4.jpg" class="img-fluid" alt="">
                            <div class="galeri-info">
                                <h4>Card 2</h4>
                                <p>Card</p>
                                <div class="galeri-links">
                                    <a href="assets/img/galeri/portfolio-4.jpg" data-gallery="galeriGallery"
                                        class="portfokio-lightbox" title="Card 2"><i class="fas fa-eye"></i></a>
                                    <a href="#" title="More Details"><i class="fas fa-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 galeri-item filter-web">
                        <div class="galeri-wrap">
                            <img src="assets/img/galeri/portfolio-5.jpg" class="img-fluid" alt="">
                            <div class="galeri-info">
                                <h4>Web 2</h4>
                                <p>Web</p>
                                <div class="galeri-links">
                                    <a href="assets/img/galeri/portfolio-5.jpg" data-gallery="galeriGallery"
                                        class="portfokio-lightbox" title="Web 2"><i class="fas fa-eye"></i></a>
                                    <a href="#" title="More Details"><i class="fas fa-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 galeri-item filter-app">
                        <div class="galeri-wrap">
                            <img src="assets/img/galeri/portfolio-6.jpg" class="img-fluid" alt="">
                            <div class="galeri-info">
                                <h4>App 3</h4>
                                <p>App</p>
                                <div class="galeri-links">
                                    <a href="assets/img/galeri/portfolio-6.jpg" data-gallery="galeriGallery"
                                        class="portfokio-lightbox" title="App 3"><i class="fas fa-eye"></i></a>
                                    <a href="#" title="More Details"><i class="fas fa-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 galeri-item filter-card">
                        <div class="galeri-wrap">
                            <img src="assets/img/galeri/portfolio-7.jpg" class="img-fluid" alt="">
                            <div class="galeri-info">
                                <h4>Card 1</h4>
                                <p>Card</p>
                                <div class="galeri-links">
                                    <a href="assets/img/galeri/portfolio-7.jpg" data-gallery="galeriGallery"
                                        class="portfokio-lightbox" title="Card 1"><i class="fas fa-eye"></i></a>
                                    <a href="#" title="More Details"><i class="fas fa-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 galeri-item filter-card">
                        <div class="galeri-wrap">
                            <img src="assets/img/galeri/portfolio-8.jpg" class="img-fluid" alt="">
                            <div class="galeri-info">
                                <h4>Card 3</h4>
                                <p>Card</p>
                                <div class="galeri-links">
                                    <a href="assets/img/galeri/portfolio-8.jpg" data-gallery="galeriGallery"
                                        class="portfokio-lightbox" title="Card 3"><i class="fas fa-eye"></i></a>
                                    <a href="#" title="More Details"><i class="fas fa-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 galeri-item filter-web">
                        <div class="galeri-wrap">
                            <img src="assets/img/galeri/portfolio-9.jpg" class="img-fluid" alt="">
                            <div class="galeri-info">
                                <h4>Web 3</h4>
                                <p>Web</p>
                                <div class="galeri-links">
                                    <a href="assets/img/galeri/portfolio-9.jpg" data-gallery="galeriGallery"
                                        class="portfokio-lightbox" title="Web 3"><i class="fas fa-eye"></i></a>
                                    <a href="#" title="More Details"><i class="fas fa-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </section><!-- End galeri Section -->
    </main>
@endsection

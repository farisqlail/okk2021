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

                    @foreach ($galeri as $glr)
                        <div class="col-lg-4 col-md-6 galeri-item filter-app">
                            <div class="galeri-wrap">
                                <img src="{{ asset('storage/' . $glr->image) }}" class="img-fluid" alt="">
                                <div class="galeri-info">
                                    <h4>{{ $glr->title }}</h4>
                                    <div class="galeri-links">
                                        <a href="{{ asset('storage/' . $glr->image) }}" data-gallery="galeriGallery"
                                            class="portfokio-lightbox" title="App 1"><i class="fas fa-eye"></i></a>
                                        <a href="{{ $glr->link }}" title="More Details"><i class="fas fa-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach



                </div>

            </div>

        </section><!-- End galeri Section -->
    </main>
@endsection

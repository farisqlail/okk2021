@extends('include.app')

@section('content')
    <main id="main">

        <section id="#hero-banner" class="hero-banner">
            <div class="container">
                <div class="row">
                    <div class="col-md-6" data-aos="fade-up">
                        <h1>Pengumuman</h1>
                    </div>
                    <div class="col-md-6" data-aos="fade-up">
                        <img src="./assets/img/Saly-16.png" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section class="blog">

            <div class="container">
                <div class="row">
                    @foreach ($pengumuman as $data)
                        <div class="col-md-4">
                            <div class="card" style="background-color: #C1D6EA;">
                                <div class="card-body">
                                    <h3 style="color: #050607;"><b>{{ $data->title }}</b></h3>
                                    <small style="color: #9EAAA8"><i>{{ $data->category }}</i></small><br><br>
                                    <p style="color: #4F5551;">{!! Str::limit($data->content, 50) !!}</p>

                                    <a href="#" style="color: #083197;">lihat selengkapnya </a>
                                </div>
                            </div><br>
                        </div>
                    @endforeach


                </div><br>
            </div>

        </section>

    </main>

@endsection

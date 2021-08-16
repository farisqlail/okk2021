@extends('include.app')

@section('content')
    <main id="main">
        <section id="#hero-banner2" class="hero-banner2">
            <div class="container">
                <div class="row">
                    <div class="col-md-6" data-aos="fade-up">
                        <h1>{{ $pengumuman->title }}</h1>
                    </div>
                    <div class="col-md-6">
                        <img src="{{ asset('./assets/img/Saly-11.png') }}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </section>

        <div class="container" style="margin-top: 40px;">
            <h1 style=" font-family: 'Roboto Slab', serif;">{{ $pengumuman->title }}</h1>
            <small style="color: #9EAAA8"><i>{{ $pengumuman->category }}</i></small>
            <br><br>
            <p>
                @php
                    echo $pengumuman->deskripsi
                @endphp
            </p>
            <br><br>
        </div>

    </main>

@endsection

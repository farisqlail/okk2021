
@extends('include.app')

@section('content')
    
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <h1 align="center" data-aos="fade-up" data-duration="1000">OKK 2021</h1><br>
      <h1 align="center" class="text-white" data-aos="fade-up" data-duration="2000">Universitas Dinamika</h1>
      <p class="mt-3" data-aos="fade-up" data-duration="2500" align="center" style="color: #A6CAED;">Selamat datang mahasiswa baru 2021, we are team luar biasa,
        semangat, berprestasi</p>

      <div class="d-flex justify-content-center" data-aos="fade-up" data-duration="3000">
        <a href="#about" align="center"><i class="fas fa-chevron-down" style="color: #fff;"></i></a> 
        {{-- <a href="#" class="btn button-download">Download File &nbsp; <i class="fas fa-arrow-down"></i></a> --}}
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">

      <div class="container" data-aos="fade-up">
        <h1 align="center">Selamat Datang di OKK 2021!</h1>
        <p class="mt-3" align="center" style="color: #A6CAED;">Apa itu Orientasi Kehidupan dan Kampus (OKK) 2021
          Universitas Dinamika ? <br><br>
          Sebuah kegiatan yang dilaksanakan oleh Universitas Dinamika guna untuk membimbing para
          calon mahasiswa baru untuk menjadi mahasiswa yang siap untuk mengarungi kehidupan di Kampus Universitas
          Dinamika.
        </p>

        <div class="row pt-lg-5">
          <div class="col-md-4" align="center">
            <img src="{{ asset('./assets/img/seminar.png') }}" class="img-fluid" width="182px" alt="">
            <h3>Seminar Online</h3>
            <p align="center" style="color: #A6CAED;">
              Cara untuk memperluas wawasan
              tentang kampus Universitas
              Dinamika adalah melalui Seminar
              yang akan disampaikan per bagian.
            </p>
          </div>
          <div class="col-md-4" align="center">
            <img src="{{ asset('./assets/img/workshop.png') }}" class="img-fluid" width="182px" alt="">
            <h3>Workshop</h3>
            <p align="center" style="color: #A6CAED;">
              Pada rangkaian OKK 2020 terdapat
              acara workshop GAFE dan Ms. Word
              untuk meningkatkan produktivitas
              mahasiswa saat menjalani perkuliahan
              secara online.
            </p>
          </div>
          <div class="col-md-4" align="center">
            <img src="{{ asset('/assets/img/kreatif.png') }}" class="img-fluid" width="182px" alt="">
            <h3>Ajang Kreativitas</h3>
            <p align="center" style="color: #A6CAED;">
              Ajang Kreativitas merupakan salah
              satu cara untuk memperkuat
              interaksi antara satu peserta
              OKK dengan peserta OKK yang lain.
              Hal ini dilakukan untuk memperkuat
              sinergisitas antar mahasiswa.
            </p>
          </div>
        </div>

      </div>

    </section><!-- End About Section -->

    <!-- ======= tour Section ======= -->
    <section id="tour" class="tour">

      <div class="container">
        <div class="row">
          <div class="col-md-6" data-aos="fade-right">
            <h2>Tour de Dinamika</h2>
            <p class="mt-3" style="color: #4F5551;">
              Yuk kunjungi kampus Universitas Dinamika secara online!
              Kamu bisa melihat sekeliling kampus juga karena kita tour
              dengan menggunakan 360 camera.
            </p>

            <a href="{{ url('/tour') }}" class="btn button-tour">Mulai Tour &nbsp; <i
                class="fas fa-arrow-right"></i></a>
          </div>
          <div class="col-md-6" data-aos="zoom-in">
            <img src="{{ asset('./assets/img/Saly-1.png') }}" class="img-fluid saly" alt="">
          </div>
        </div>
      </div>

    </section><!-- End tour Section -->

    <!-- Class Time Section Begin -->
    <section class="classtime-section class-time-table spad">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <div class="section-title" data-aos="fade-up">
              <h2 style="font-family: 'Roboto Slab', serif; font-weight: 500; font-size: 48px;">Jadwal Kegiatan</h2>
              <p style="font-family: 'Roboto Slab', serif; font-size: 18px; color: #A6CAED;">Cek jadwal kegiatannya disini!</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="timetable-controls">
            </div>
          </div>
        </div>
        <div class="classtime-table" data-aos="fade-up">
          <table>
            <thead>
              <tr>
                <th>16 Agt 2021</th>
                <th>17 Agt 2021</th>
                <th>18 Agt 2021</th>
                <th>19 Agt 2021</th>
                <th>20 Agt 2021</th>
                <th>21 Agt 2021</th>
                <th>23 Agt 2021</th>
                <th>24 Agt 2021</th>
                <th>25 Agt 2021</th>
                <th>26 Agt 2021</th>
                <th>27 Agt 2021</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <span>08.45 - 11.00</span>
                  <h6>Technical Meeting</h6>
                </td>
                <td class="hover-bg ts-item" data-tsmeta="praokk">
              
                </td>
                <td class="hover-bg ts-item" data-tsmeta="okk1">
                
                </td>
                <td>
                  
                </td>
                <td>

                </td>
                <td>

                </td>
                <td>

                </td>
                <td>

                </td>
                <td>

                </td>
                <td>

                </td>
                <td>

                </td>
              </tr>
              <tr>
                <td>

                </td>
                <td class="hover-bg ts-item" data-tsmeta="praokk">
                  <span>07.15 - 09.30</span>
                  <h6>Upacara 17 Agustus</h6>
                </td>
                <td>

                </td>
                
                <td class="hover-bg ts-item" data-tsmeta="okk2">
                  <span>07.15 - 10.45</span>
                  <h6>Day-2 PraOKK</h6>
                </td>
                <td class="hover-bg ts-item" data-tsmeta="okk3">
                  
                </td>
                <td class="hover-bg ts-item" data-tsmeta="okk4">
             
                </td>
                <td class="hover-bg ts-item" data-tsmeta="okk5">
                 
                </td>
                <td class="hover-bg ts-item" data-tsmeta="okk1">
                  <span>07.15 - 11.00</span>
                  <h6>Day-2 OKK</h6>
                </td>
                <td></td>
                <td></td>
                <td></td>
              </tr>

              <tr>
                <td class="hover-bg ts-item" data-tsmeta="tmokk">
                  
                </td>
                <td class="hover-bg ts-item" data-tsmeta="praokk">
                  
                </td>
                <td class="hover-bg ts-item" data-tsmeta="okk1">
                  <span>07.15 - 10.45</span>
                  <h6>Day-1 PraOKK</h6>
                </td>
                <td class="hover-bg ts-item" data-tsmeta="okk2">
              
                </td>
                <td class="hover-bg ts-item" data-tsmeta="okk3">
                 
                </td>
                <td class="hover-bg ts-item" data-tsmeta="okk4">
                  
                </td>
                <td class="hover-bg ts-item" data-tsmeta="okk5">
                  <span>07.15 - 11.15</span>
                  <h6>Day-1 OKK</h6>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>

              <tr>
                <td class="hover-bg ts-item" data-tsmeta="tmokk">
                 
                </td>
                <td class="hover-bg ts-item" data-tsmeta="praokk">
                  
                </td>
                <td class="hover-bg ts-item" data-tsmeta="okk1">
                  
                </td>
                <td class="hover-bg ts-item" data-tsmeta="okk2">
                  
                </td>
                <td class="hover-bg ts-item" data-tsmeta="okk3">
                  <span>07.15 - 10.45</span>
                  <h6>Day-3 PraOKK</h6>
                </td>
                <td class="hover-bg ts-item" data-tsmeta="okk4">
                  
                </td>
                <td class="hover-bg ts-item" data-tsmeta="okk5">
                 
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td class="hover-bg ts-item" data-tsmeta="okk1">
                  <span>07.15 - 09.50</span>
                  <h6>Day-5 OKK</h6>
                </td>
              </tr>

              <tr>
                <td class="hover-bg ts-item" data-tsmeta="tmokk">
                  
                </td>
                <td class="hover-bg ts-item" data-tsmeta="praokk">
              
                </td>
                <td class="hover-bg ts-item" data-tsmeta="okk1">
                 
                </td>
                <td class="hover-bg ts-item" data-tsmeta="okk2">
                
                </td>
                <td>

                </td>
                <td class="hover-bg ts-item" data-tsmeta="okk4">
                  <span>07.00 - 12.00</span>
                  <h6>Day-4 Pra</h6>
                </td>
                <td class="hover-bg ts-item" data-tsmeta="okk5">
                  
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>

              <tr>
                <td class="hover-bg ts-item" data-tsmeta="tmokk">
               
                </td>
                <td class="hover-bg ts-item" data-tsmeta="praokk">
                  
                </td>
                <td class="hover-bg ts-item" data-tsmeta="okk1">
               
                </td>
                <td class="hover-bg ts-item" data-tsmeta="okk2">
                  
                </td>
                <td>

                </td>
                <td class="hover-bg ts-item" data-tsmeta="okk4">
               
                </td>
                <td class="hover-bg ts-item" data-tsmeta="okk5">
                  
                </td>
                <td></td>
                <td class="hover-bg ts-item" data-tsmeta="okk1">
                  <span>07.15 - 11.15</span>
                  <h6>Day-3 OKK</h6>
                </td>
                <td></td>
                <td></td>
              </tr>

              <tr>
                <td class="hover-bg ts-item" data-tsmeta="tmokk">
                  
                </td>
                <td class="hover-bg ts-item" data-tsmeta="praokk">
         
                </td>
                <td class="hover-bg ts-item" data-tsmeta="okk1">
                  
                </td>
                <td class="hover-bg ts-item" data-tsmeta="okk2">
                  
                </td>
                <td class="hover-bg ts-item" data-tsmeta="okk3">
                  
                </td>
                <td class="hover-bg ts-item" data-tsmeta="okk4">
                  
                </td>
                <td class="hover-bg ts-item" data-tsmeta="okk5">
               
                </td>
                <td></td>
                <td></td>
                <td class="hover-bg ts-item" data-tsmeta="okk1">
                  <span>07.15 - 11.00</span>
                  <h6>Day-4 OKK</h6>
                </td>
                <td></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>
    <!-- Class Time Section End -->

  </main><!-- End #main -->


  @endsection
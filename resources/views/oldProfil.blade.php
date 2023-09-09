@extends('layouts.app')

@section('content')
    <!-- start banner Area -->
    <section class="banner-area relative" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white text-uppercase">
                        Profil Teknik Informatika
                    </h1>
                    <p class="text-white link-nav"><a href="{{ route('static.index') }}">Home </a> <span
                            class="lnr lnr-arrow-right"></span><a href="{{ route('static.profil') }}">Profil</a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->

    <!-- Start post-content Area -->
    <section class="post-content-area single-post-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">
                    <div class="single-post row">
                        {{-- <div class="col-lg-12">
                            <div class="feature-img">
                                <img class="img-fluid" src="{{ env('APP_URL') . '/image/blog/feature-img1.jpg' }}" alt="">
                            </div>
                        </div> --}}
                        {{-- <div class="col-lg-3  col-md-3 meta-details">
                            <ul class="tags">
                                <li><a href="#">Food,</a></li>
                                <li><a href="#">Technology,</a></li>
                                <li><a href="#">Politics,</a></li>
                                <li><a href="#">Lifestyle</a></li>
                            </ul>
                            <div class="user-details row">
                                <p class="user-name col-lg-12 col-md-12 col-6"><a href="#">Mark wiens</a> <span
                                        class="lnr lnr-user"></span></p>
                                <p class="date col-lg-12 col-md-12 col-6"><a href="#">12 Dec, 2017</a> <span
                                        class="lnr lnr-calendar-full"></span></p>
                                <p class="view col-lg-12 col-md-12 col-6"><a href="#">1.2M Views</a> <span
                                        class="lnr lnr-eye"></span></p>
                                <p class="comments col-lg-12 col-md-12 col-6"><a href="#">06 Comments</a> <span
                                        class="lnr lnr-bubble"></span></p>
                                <ul class="social-links col-lg-12 col-md-12 col-6">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-github"></i></a></li>
                                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                </ul>
                            </div>
                        </div> --}}
                        <div class="col-lg-12 col-md-12 my-2">
                            <h3 class="mt-20 mb-20">PROFIL PROGRAM STUDI</h3>
                            <p class="excert"> Nama Program Studi &nbsp &nbsp: Teknik Informatika <br>
                                Tanggal Berdiri &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp : 02 Agustus 2017
                                <br> Status Program Studi &nbsp &nbsp: Aktif <br> Nomor SK Dikti
                                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp: 2015/D/T/2007
                            </p>
                        </div>
                        <div class="col-lg-12 col-md-12 my-2">
                            <p> Deskripsi Program Studi : </p>
                            <div class="quotes">
                                Program Studi Teknik Informatika terakreditasi peringkat B berdasarkan keputusan Badan
                                Akreditasi Nasional Perguruan Tinggi Departemen Pendidikan Nasional Republik Indonesia Nomor
                                : 3565/SK/BAN-PT/AKRED/DIPL-IV/XII/2018 Tanggal 28 Desember 2018.
                            </div>
                        </div>
                        <div class="my-2 col-lg-12">
                            <div class="feature-img">
                                <img class="img-fluid" src="{{ env('APP_URL') . '/image/prodi/ti_akreditasi.jpg' }}"
                                    alt="Gambar Akreditasi"
                                    style="aspect-ratio: 16 / 9; object-fit: cover; object-position: center center">
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="single-post row">
                        {{-- <div class="col-lg-12">
                            <div class="feature-img">
                                <img class="img-fluid" src="{{ env('APP_URL') . '/image/blog/feature-img1.jpg' }}" alt="">
                            </div>
                        </div> --}}
                        {{-- <div class="col-lg-3  col-md-3 meta-details">
                            <ul class="tags">
                                <li><a href="#">Food,</a></li>
                                <li><a href="#">Technology,</a></li>
                                <li><a href="#">Politics,</a></li>
                                <li><a href="#">Lifestyle</a></li>
                            </ul>
                            <div class="user-details row">
                                <p class="user-name col-lg-12 col-md-12 col-6"><a href="#">Mark wiens</a> <span
                                        class="lnr lnr-user"></span></p>
                                <p class="date col-lg-12 col-md-12 col-6"><a href="#">12 Dec, 2017</a> <span
                                        class="lnr lnr-calendar-full"></span></p>
                                <p class="view col-lg-12 col-md-12 col-6"><a href="#">1.2M Views</a> <span
                                        class="lnr lnr-eye"></span></p>
                                <p class="comments col-lg-12 col-md-12 col-6"><a href="#">06 Comments</a> <span
                                        class="lnr lnr-bubble"></span></p>
                                <ul class="social-links col-lg-12 col-md-12 col-6">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-github"></i></a></li>
                                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                </ul>
                            </div>
                        </div> --}}
                        <div class="col-lg-12 col-md-12">
                            <h3 class="mt-20 mb-20">VISI & MISI</h3>
                        </div>
                        <div class="col-lg-12 col-md-12 my-2">
                            <h5>Visi Program Studi</h5><br>
                            <p> Visi Program Studi D-IV Teknik Informatika Politeknik Negeri Lhokseumawe yaitu : </p>
                            <div class="quotes">
                                “Menjadi pendidikan tinggi vokasi pada bidang teknologi informasi yang profesional, unggul
                                dan berdaya saing di tingkat nasional pada tahun 2024".
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 my-2">
                            <h5>Misi Program Studi</h5><br>
                            <p> Dalam upaya untuk pencapaian Visi tersebut di atas, Misi Program Studi DIV Teknik
                                Informatika adalah : </p>
                            <div class="quotes">
                                <ul class="unordered-list">
                                    <li>Menyelenggarakan pendidikan vokasional jenjang DIV yang berkualitas pada bidang
                                        teknologi informasi dengan penguatan soft skill yang memadai serta memperhatikan
                                        kearifan budaya lokal.</li>
                                    <li>Melakukan dan mengembangkan diseminasi penelitian produk terapan yang berkualitas
                                        dibidang teknologi informasi sesuai dengan perkembangan teknologi dan kebutuhan
                                        pangsa pasar.</li>
                                    <li>Melaksanakan pengabdian kepada masyarakat dan turut serta untuk memajukan masyarakat
                                        pada bidang teknologi informasi.</li>
                                    <li>Memberikan layanan akademis dan teknis sesuai keahlian pada bidang profesi teknologi
                                        informasi.</li>
                                    <li>Menyelenggarakan kegiatan uji kompetensi bidang teknologi informasi kepada mahasiswa
                                        dan lulusan.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="single-post row">
                        {{-- <div class="col-lg-12">
                            <div class="feature-img">
                                <img class="img-fluid" src="{{ env('APP_URL') . '/image/blog/feature-img1.jpg' }}" alt="">
                            </div>
                        </div> --}}
                        {{-- <div class="col-lg-3  col-md-3 meta-details">
                            <ul class="tags">
                                <li><a href="#">Food,</a></li>
                                <li><a href="#">Technology,</a></li>
                                <li><a href="#">Politics,</a></li>
                                <li><a href="#">Lifestyle</a></li>
                            </ul>
                            <div class="user-details row">
                                <p class="user-name col-lg-12 col-md-12 col-6"><a href="#">Mark wiens</a> <span
                                        class="lnr lnr-user"></span></p>
                                <p class="date col-lg-12 col-md-12 col-6"><a href="#">12 Dec, 2017</a> <span
                                        class="lnr lnr-calendar-full"></span></p>
                                <p class="view col-lg-12 col-md-12 col-6"><a href="#">1.2M Views</a> <span
                                        class="lnr lnr-eye"></span></p>
                                <p class="comments col-lg-12 col-md-12 col-6"><a href="#">06 Comments</a> <span
                                        class="lnr lnr-bubble"></span></p>
                                <ul class="social-links col-lg-12 col-md-12 col-6">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-github"></i></a></li>
                                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                </ul>
                            </div>
                        </div> --}}
                        <div class="col-lg-12 col-md-12">
                            <h3 class="mt-20 mb-20">Tujuan Prodi</h3>
                        </div>
                        <div class="col-lg-12 col-md-12 my-2">
                            <h5>Tujuan Program Studi</h5><br>
                            <p> Berdasarkan Visi dan Misi Program Studi DIV Teknik Informatika tersebut di atas, maka tujuan
                                Program Studi DIV Teknik Informatika adalah :
                            </p>
                            <div class="quotes">
                                <ul class="unordered-list">
                                    <li>Menghasilkan lulusan sarjana terapan profesional dan terampil yang memiliki
                                        kemampuan untuk merancang, menganalisis, membuat dan mengimplementasikan serta
                                        mengembangkan aplikasi (sistem informasi) baik yang berbasis web, mobile dan
                                        desktop.</li>
                                    <li>Menghasilkan lulusan sarjana terapan yang memiliki kemampuan untuk melakukan
                                        perancangan sistem jaringan komputer (sebagai administrator jaringan), membangun
                                        insfrastruktur jaringan komputer yang handal : instalasi, melakukan konfigurasi,
                                        maintenance dan menganalisis sistem jaringan komputer baik skala internet, intranet
                                        dan jaringan komputer lokal/LAN.</li>
                                    <li>Menghasilkan produk perangkat lunak berbasis teknologi informasi yang bermanfaat
                                        bagi masyarakat dan industri.</li>
                                    <li>Menghasilkan kegiatan pengabdian kepada masyarakat berbasis teknologi informasi.
                                    </li>
                                    <li>Menghasilkan lulusan yang berkompeten pada bidang teknologi informasi.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 sidebar-widgets">
                    <div class="widget-wrap">
                        <div class="single-sidebar-widget search-widget">
                            <form class="search-form" action="#">
                                <input placeholder="Search Posts" name="search" type="text"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Posts'">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        <div class="single-sidebar-widget user-info-widget">
                            <img src="img/blog/user-info.png" alt="">
                            <a href="#">
                                <h4>Charlie Barber</h4>
                            </a>
                            <p>
                                Senior blog writer
                            </p>
                            <ul class="social-links">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-github"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            </ul>
                            <p>
                                Boot camps have its supporters andit sdetractors. Some people do not
                                understand
                                why you
                                should have to spend money on boot camp when you can get. Boot camps have
                                itssuppor
                                ters andits detractors.
                            </p>
                        </div>
                        <div class="single-sidebar-widget popular-post-widget">
                            <h4 class="popular-title">Popular Posts</h4>
                            <div class="popular-post-list">
                                <div class="single-post-list d-flex flex-row align-items-center">
                                    <div class="thumb">
                                        <img class="img-fluid" src="img/blog/pp1.jpg" alt="">
                                    </div>
                                    <div class="details">
                                        <a href="blog-single.html">
                                            <h6>Space The Final Frontier</h6>
                                        </a>
                                        <p>02 Hours ago</p>
                                    </div>
                                </div>
                                <div class="single-post-list d-flex flex-row align-items-center">
                                    <div class="thumb">
                                        <img class="img-fluid" src="img/blog/pp2.jpg" alt="">
                                    </div>
                                    <div class="details">
                                        <a href="blog-single.html">
                                            <h6>The Amazing Hubble</h6>
                                        </a>
                                        <p>02 Hours ago</p>
                                    </div>
                                </div>
                                <div class="single-post-list d-flex flex-row align-items-center">
                                    <div class="thumb">
                                        <img class="img-fluid" src="img/blog/pp3.jpg" alt="">
                                    </div>
                                    <div class="details">
                                        <a href="blog-single.html">
                                            <h6>Astronomy Or Astrology</h6>
                                        </a>
                                        <p>02 Hours ago</p>
                                    </div>
                                </div>
                                <div class="single-post-list d-flex flex-row align-items-center">
                                    <div class="thumb">
                                        <img class="img-fluid" src="img/blog/pp4.jpg" alt="">
                                    </div>
                                    <div class="details">
                                        <a href="blog-single.html">
                                            <h6>Asteroids telescope</h6>
                                        </a>
                                        <p>02 Hours ago</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-sidebar-widget ads-widget">
                            <a href="#"><img class="img-fluid" src="img/blog/ads-banner.jpg" alt=""></a>
                        </div>
                        <div class="single-sidebar-widget post-category-widget">
                            <h4 class="category-title">Post Catgories</h4>
                            <ul class="cat-list">
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Technology</p>
                                        <p>37</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Lifestyle</p>
                                        <p>24</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Fashion</p>
                                        <p>59</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Art</p>
                                        <p>29</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Food</p>
                                        <p>15</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Architecture</p>
                                        <p>09</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Adventure</p>
                                        <p>44</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="single-sidebar-widget newsletter-widget">
                            <h4 class="newsletter-title">Newsletter</h4>
                            <p>
                                Here, I focus on a range of items and features that we use in life without
                                giving them a second thought.
                            </p>
                            <div class="form-group d-flex flex-row">
                                <div class="col-autos">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-envelope"
                                                    aria-hidden="true"></i>
                                            </div>
                                        </div>
                                        <input type="text" class="form-control" id="inlineFormInputGroup"
                                            placeholder="Enter email" onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'Enter email'">
                                    </div>
                                </div>
                                <a href="#" class="bbtns">Subcribe</a>
                            </div>
                            <p class="text-bottom">
                                You can unsubscribe at any time
                            </p>
                        </div>
                        <div class="single-sidebar-widget tag-cloud-widget">
                            <h4 class="tagcloud-title">Tag Clouds</h4>
                            <ul>
                                <li><a href="#">Technology</a></li>
                                <li><a href="#">Fashion</a></li>
                                <li><a href="#">Architecture</a></li>
                                <li><a href="#">Fashion</a></li>
                                <li><a href="#">Food</a></li>
                                <li><a href="#">Technology</a></li>
                                <li><a href="#">Lifestyle</a></li>
                                <li><a href="#">Art</a></li>
                                <li><a href="#">Adventure</a></li>
                                <li><a href="#">Food</a></li>
                                <li><a href="#">Lifestyle</a></li>
                                <li><a href="#">Adventure</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End post-content Area -->
@endsection

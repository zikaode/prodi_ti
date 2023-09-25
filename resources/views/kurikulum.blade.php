@extends('layouts.app')

@section('content')
    <!-- start banner Area -->
    <section class="banner-area relative" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white text-uppercase">
                        Kurikulum
                    </h1>
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
                    <div class="single-post row ">
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
                            <h3 class="mt-20 mb-20">Kurikulum Teknik Informatika</h3>
                        </div>
                        <div class="col-lg-12 col-md-12 my-2">
                            <p> Jadwal Pembelajaran Program Studi D4 Teknik Informatika - Politeknik Negeri Lhokseumawe
                            </p>
                        </div>
                        <div class="row col-12">
                            <div class="col-12">
                                <div id="accordion">
                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse"
                                                    data-target="#collapseOne" aria-expanded="true"
                                                    aria-controls="collapseOne" style="padding-left:0">
                                                    Jadwal Pembelajaran 2018-2019
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                <p class="card-text">Diberitakuhan Kepada Mahasiswa Teknik Informatika
                                                    Politeknik
                                                    Negeri Lhokseumawe, Berikut Jadwal Pembelajaran Tahun 2018-2019. </p>
                                                <a href="#" class="btn btn-primary">Download</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingTwo">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse"
                                                    data-target="#collapseTwo" aria-expanded="true"
                                                    aria-controls="collapseTwo" style="padding-left:0">
                                                    Jadwal Pembelajaran 2018-2019
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                <p class="card-text">Diberitakuhan Kepada Mahasiswa Teknik Informatika
                                                    Politeknik
                                                    Negeri Lhokseumawe, Berikut Jadwal Pembelajaran Tahun 2018-2019. </p>
                                                <a href="#" class="btn btn-primary">Download</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingThree">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse"
                                                    data-target="#collapseThree" aria-expanded="true"
                                                    aria-controls="collapseThree" style="padding-left:0">
                                                    Jadwal Pembelajaran 2018-2019
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                <p class="card-text">Diberitakuhan Kepada Mahasiswa Teknik Informatika
                                                    Politeknik
                                                    Negeri Lhokseumawe, Berikut Jadwal Pembelajaran Tahun 2018-2019. </p>
                                                <a href="#" class="btn btn-primary">Download</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 mt-4 mb-2">
                                <p> Kurikulum Pembelajaran Program Studi D4 Teknik Informatika - Politeknik Negeri
                                    Lhokseumawe
                                </p>
                            </div>
                        </div>
                        <div class="section-top-border col-lg-12">
                            <h5 class="mb-2 pl-4">SEMESTER I</h5>
                            <div class="progress-table-wrap">
                                <div class="progress-table">
                                    <div class="table-head">
                                        <div class="urutan">NO</div>
                                        <div class="kode">Kode MK</div>
                                        <div class="mata-kuliah">Mata Kuliah</div>
                                        <div class="jam">Jam</div>
                                        <div class="sks">SKS</div>
                                        <div class="rps">RPS</div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan">01</div>
                                        <div class="kode">TI0003</div>
                                        <div class="mata-kuliah">English for Academic Listening
                                        </div>
                                        <div class="jam">3</div>
                                        <div class="sks">2</div>
                                        <div class="rps">2</div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan">02</div>
                                        <div class="kode">DU0001</div>
                                        <div class="mata-kuliah"> Agama
                                        </div>
                                        <div class="jam">2</div>
                                        <div class="sks">2</div>
                                        <div class="rps">2</div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan">03</div>
                                        <div class="kode">TI0004</div>
                                        <div class="mata-kuliah"> Matematika Teknik
                                        </div>
                                        <div class="jam">3</div>
                                        <div class="sks">2</div>
                                        <div class="rps">2</div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan">04</div>
                                        <div class="kode">TI1008</div>
                                        <div class="mata-kuliah"> Konsep Teknologi Informasi
                                        </div>
                                        <div class="jam">3</div>
                                        <div class="sks">2</div>
                                        <div class="rps">2</div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan">05</div>
                                        <div class="kode">TI2006</div>
                                        <div class="mata-kuliah"> Konsep Pemrograman
                                        </div>
                                        <div class="jam">3</div>
                                        <div class="sks">2</div>
                                        <div class="rps">2</div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan">06</div>
                                        <div class="kode">TI2029</div>
                                        <div class="mata-kuliah"> Konsep Basis Data
                                        </div>
                                        <div class="jam">3</div>
                                        <div class="sks">2</div>
                                        <div class="rps">2</div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan">07</div>
                                        <div class="kode">TI2016</div>
                                        <div class="mata-kuliah"> Organisasi dan Arsitektur Komputer
                                        </div>
                                        <div class="jam">3</div>
                                        <div class="sks">2</div>
                                        <div class="rps">2</div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan">08</div>
                                        <div class="kode">TI2084</div>
                                        <div class="mata-kuliah"> Logika dan Algoritma
                                        </div>
                                        <div class="jam">3</div>
                                        <div class="sks">2</div>
                                        <div class="rps">2</div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan">09</div>
                                        <div class="kode">TI2009</div>
                                        <div class="mata-kuliah"> Praktikum Keterampilan Komputer
                                        </div>
                                        <div class="jam">4</div>
                                        <div class="sks">2</div>
                                        <div class="rps">2</div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan">10</div>
                                        <div class="kode">TI2007</div>
                                        <div class="mata-kuliah"> Praktikum Konsep Pemrograman
                                        </div>
                                        <div class="jam">5</div>
                                        <div class="sks">2</div>
                                        <div class="rps">2</div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan">11</div>
                                        <div class="kode">TI2030</div>
                                        <div class="mata-kuliah"> Praktikum Konsep Basis Data
                                        </div>
                                        <div class="jam">5</div>
                                        <div class="sks">2</div>
                                        <div class="rps">2</div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan text-dark">#</div>
                                        <div class="kode text-dark">TOTAL</div>
                                        <div class="mata-kuliah"></div>
                                        <div class="jam text-dark">22</div>
                                        <div class="sks text-dark">37</div>
                                        <div class="rps text-dark">-</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <hr> --}}
                    {{-- <div class="single-post row">
                        <div class="col-lg-12">
                            <div class="feature-img">
                                <img class="img-fluid" src="{{ env('APP_URL') . '/image/blog/feature-img1.jpg' }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-3  col-md-3 meta-details">
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
                        </div>
                        
                    </div> --}}
                    {{-- <hr> --}}
                    {{-- <div class="single-post row"> --}}
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
                    {{-- </div> --}}
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
                        {{-- <div class="single-sidebar-widget ads-widget">
                            <a href="#"><img class="img-fluid" src="img/blog/ads-banner.jpg" alt=""></a>
                        </div> --}}
                        {{-- <div class="single-sidebar-widget post-category-widget">
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
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End post-content Area -->
@endsection

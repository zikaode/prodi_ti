@extends('layouts.app')

@section('content')
    <!-- start banner Area -->
    <section class="banner-area relative" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white text-uppercase">
                        Data Mahasiswa
                    </h1>
                    <p class="text-white link-nav"> Program Studi <span class="lnr lnr-arrow-right"></span><a
                            href="{{ route('static.dataMahasiswa') }}">Data Mahasiswa</a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->

    <!-- Start post-content Area -->
    <section class="post-content-area single-post-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 posts-list">
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
                            <h3 class="mt-20 mb-20">DATA MAHASISWA</h3>
                        </div>
                        <div class="col-lg-12 col-md-12 my-2">
                            <p> Data Mahasiswa Program Studi Teknik Informatika</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 mb-3 col-md-6 d-flex justify-content-center align-items-center">
                                <div class="card" style="width: 100%;">
                                    <a href="https://www.example.com">
                                        <img src="{{ asset('image/b4.jpg') }}" class="card-img-top" alt="...">
                                        <div class="card-body text-center">
                                            <h5 class="card-title">Data Mahasiswa</h5>
                                            <p class="card-text">Angkatan 2022-2023</p>
                                            {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                                        </div>
                                </div>
                            </div>
                            <div class="col-lg-4 mb-3 col-md-6 d-flex justify-content-center align-items-center">
                                <div class="card" style="width: 100%;">
                                    <a href="https://www.example.com">
                                        <img src="{{ asset('image/b4.jpg') }}" class="card-img-top" alt="...">
                                        <div class="card-body text-center">
                                            <h5 class="card-title">Data Mahasiswa</h5>
                                            <p class="card-text">Angkatan 2021-2022</p>
                                            {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                                        </div>
                                </div>
                            </div>
                            <div class="col-lg-4 mb-3 col-md-6 d-flex justify-content-center align-items-center">
                                <div class="card" style="width: 100%;">
                                    <a href="https://www.example.com">
                                        <img src="{{ asset('image/b4.jpg') }}" class="card-img-top" alt="...">
                                        <div class="card-body text-center">
                                            <h5 class="card-title">Data Mahasiswa</h5>
                                            <p class="card-text">Angkatan 2020-2021</p>
                                            {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                                        </div>
                                </div>
                            </div>
                            <div class="col-lg-4 mb-3 col-md-6 d-flex justify-content-center align-items-center">
                                <div class="card" style="width: 100%;">
                                    <a href="https://www.example.com">
                                        <img src="{{ asset('image/b4.jpg') }}" class="card-img-top" alt="...">
                                        <div class="card-body text-center">
                                            <h5 class="card-title">Data Mahasiswa</h5>
                                            <p class="card-text">Angkatan 2019-2020</p>
                                            {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                                        </div>
                                </div>
                            </div>
                            <div class="col-lg-4 mb-3 col-md-6 d-flex justify-content-center align-items-center">
                                <div class="card" style="width: 100%;">
                                    <a href="https://www.example.com">
                                        <img src="{{ asset('image/b4.jpg') }}" class="card-img-top" alt="...">
                                        <div class="card-body text-center">
                                            <h5 class="card-title">Data Mahasiswa</h5>
                                            <p class="card-text">Angkatan 2018-2019</p>
                                            {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                                        </div>
                                </div>
                            </div>
                            <div class="col-lg-4 mb-3 col-md-6 d-flex justify-content-center align-items-center">
                                <div class="card" style="width: 100%;">
                                    <a href="https://drive.google.com/open?id=1Ud9DpufImnWFVVKvP7F_CWbDDX7DYsxr">
                                        <img src="{{ asset('image/b4.jpg') }}" class="card-img-top" alt="...">
                                        <div class="card-body text-center">
                                            <h5 class="card-title">Data Mahasiswa</h5>
                                            <p class="card-text">Angkatan 2017-2018</p>
                                            {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                                        </div>
                                </div>
                            </div>
                            <div class="col-lg-4 mb-3 col-md-6 d-flex justify-content-center align-items-center">
                                <div class="card" style="width: 100%;">
                                    <a
                                        href="https://docs.google.com/spreadsheets/d/12-ZUVWEZz51y4pMs-YdZ6HHmXtl-4Wmt-iQkWsDV2SA/edit?usp=sharing">
                                        <img src="{{ asset('image/b4.jpg') }}" class="card-img-top" alt="...">
                                        <div class="card-body text-center">
                                            <h5 class="card-title">Data Mahasiswa</h5>
                                            <p class="card-text">Angkatan 2016-2017</p>
                                            {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                                        </div>
                                </div>
                            </div>
                            <div class="col-lg-4 mb-3 col-md-6 d-flex justify-content-center align-items-center">
                                <div class="card" style="width: 100%;">
                                    <a
                                        href="https://docs.google.com/spreadsheets/d/1lUBRn0KLb7bARMfrnuQaJ9K-cj_39gEZNixE09Yxio8/edit?usp=sharing">
                                        <img src="{{ asset('image/b4.jpg') }}" class="card-img-top" alt="...">
                                        <div class="card-body text-center">
                                            <h5 class="card-title">Data Mahasiswa</h5>
                                            <p class="card-text">Angkatan 2015-2016</p>
                                            {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                                        </div>
                                </div>
                            </div>
                            <div class="col-lg-4 mb-3 col-md-6 d-flex justify-content-center align-items-center">
                                <div class="card" style="width: 100%;">
                                    <a
                                        href="https://docs.google.com/spreadsheets/d/1AZD8x0A5k_Zk3l3SGCyd6OzLv-BPQVN20thEoZUSFPw/edit?usp=sharing">
                                        <img src="{{ asset('image/b4.jpg') }}" class="card-img-top" alt="...">
                                        <div class="card-body text-center">
                                            <h5 class="card-title">Data Mahasiswa</h5>
                                            <p class="card-text">Angkatan 2014-2015</p>
                                            {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
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
                {{-- <div class="col-lg-4 sidebar-widgets">
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
                </div> --}}
            </div>
        </div>
    </section>
    <!-- End post-content Area -->
@endsection

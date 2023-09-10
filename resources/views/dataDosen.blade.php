@extends('layouts.app')

@section('content')
    <!-- start banner Area -->
    <section class="banner-area relative" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white text-uppercase">
                        Data Dosen
                    </h1>
                    <p class="text-white link-nav"> Program Studi <span class="lnr lnr-arrow-right"></span><a
                            href="{{ route('static.dataDosen') }}">Data Dosen</a></p>
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
                        <div class="col-lg-12 col-md-12">
                            <h3 class="mt-20 mb-20">DATA DOSEN</h3>
                        </div>
                        <div class="col-lg-12 col-md-12 my-2">
                            <p> Data Dosen Program Studi Teknik Informatika</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-6 d-flex justify-content-center align-items-center mb-4">
                                <div class="card" style="width: 15rem;">
                                    <img src="{{ asset('image/prodi/salahuddin.jpg') }}" class="card-img-top"
                                        alt="...">
                                    <div class="card-body text-center">
                                        <h5 class="card-text text-black font-bold mb-2 font-italic"
                                            style="text-decoration: underline;">Ketua Jurusan</h5>
                                        <a href="http://ti.pnl.ac.id/file/cv/a17442dab206da4b9aabf34158f65df3.pdf"
                                            class="card-text font-weight-bold text-secondary">Detail CV</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 d-flex justify-content-center align-items-center mb-4">
                                <div class="card" style="width: 15rem;">
                                    <img src="{{ asset('image/prodi/salahuddin.jpg') }}" class="card-img-top"
                                        alt="...">
                                    <div class="card-body text-center">
                                        <h5 class="card-text text-black font-bold mb-2 font-italic"
                                            style="text-decoration: underline;">Ketua Program Studi</h5>
                                        <a href="http://ti.pnl.ac.id/file/cv/ec1c1391a4214b00824e225e35fb337c.pdf"
                                            class="card-text font-weight-bold text-secondary">Detail CV</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 d-flex justify-content-center align-items-center mb-4">
                                <div class="card" style="width: 15rem;">
                                    <img src="{{ asset('image/prodi/zulfan.jpg') }}" class="card-img-top" alt="...">
                                    <div class="card-body text-center">
                                        <h5 class="card-text text-black font-bold mb-2 font-italic"
                                            style="text-decoration: underline;">Staff Pengajar</h5>
                                        <a href="http://ti.pnl.ac.id/file/cv/918233791be00ce59c28a7498cad3362.pdf"
                                            class="card-text font-weight-bold text-secondary">Detail CV</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 d-flex justify-content-center align-items-center mb-4">
                                <div class="card" style="width: 15rem;">
                                    <img src="{{ asset('image/prodi/sila.jpg') }}" class="card-img-top" alt="...">
                                    <div class="card-body text-center">
                                        <h5 class="card-text text-black font-bold mb-2 font-italic"
                                            style="text-decoration: underline;">Staff Pengajar</h5>
                                        <a href="http://ti.pnl.ac.id/file/cv/e4b90d25f5047f6b03110d2252662485.pdf"
                                            class="card-text font-weight-bold text-secondary">Detail CV</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 d-flex justify-content-center align-items-center mb-4">
                                <div class="card" style="width: 15rem;">
                                    <img src="{{ asset('image/prodi/rizka.jpg') }}" class="card-img-top" alt="...">
                                    <div class="card-body text-center">
                                        <h5 class="card-text text-black font-bold mb-2 font-italic"
                                            style="text-decoration: underline;">Staff Pengajar</h5>
                                        <a href="http://ti.pnl.ac.id/file/cv/eee2fe7ab6ec58fae6944940a4ba38af.docx"
                                            class="card-text font-weight-bold text-secondary">Detail CV</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 d-flex justify-content-center align-items-center mb-4">
                                <div class="card" style="width: 15rem;">
                                    <img src="{{ asset('image/prodi/husaini.jpg') }}" class="card-img-top" alt="...">
                                    <div class="card-body text-center">
                                        <h5 class="card-text text-black font-bold mb-2 font-italic"
                                            style="text-decoration: underline;">Staff Pengajar</h5>
                                        <a href="http://ti.pnl.ac.id/file/cv/9bf9a85c00b6e6529b378916ac8e4444.docx"
                                            class="card-text font-weight-bold text-secondary">Detail CV</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 d-flex justify-content-center align-items-center mb-4">
                                <div class="card" style="width: 15rem;">
                                    <img src="{{ asset('image/prodi/mulyadi.jpg') }}" class="card-img-top" alt="...">
                                    <div class="card-body text-center">
                                        <h5 class="card-text text-black font-bold mb-2 font-italic"
                                            style="text-decoration: underline;">Staff Pengajar</h5>
                                        <a href="http://ti.pnl.ac.id/file/cv/9476592064ff587cee5715ad63d321ec.docx"
                                            class="card-text font-weight-bold text-secondary">Detail CV</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 d-flex justify-content-center align-items-center mb-4">
                                <div class="card" style="width: 15rem;">
                                    <img src="{{ asset('image/prodi/hendrawaty.jpg') }}" class="card-img-top"
                                        alt="...">
                                    <div class="card-body text-center">
                                        <h5 class="card-text text-black font-bold mb-2 font-italic"
                                            style="text-decoration: underline;">Staff Pengajar</h5>
                                        <a href="http://ti.pnl.ac.id/file/cv/54665e00183e34aaa967cb27bd5ab36b.docx"
                                            class="card-text font-weight-bold text-secondary">Detail CV</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 d-flex justify-content-center align-items-center mb-4">
                                <div class="card" style="width: 15rem;">
                                    <img src="{{ asset('image/prodi/azhar.jpg') }}" class="card-img-top" alt="...">
                                    <div class="card-body text-center">
                                        <h5 class="card-text text-black font-bold mb-2 font-italic"
                                            style="text-decoration: underline;">Staff Pengajar</h5>
                                        <a href="http://ti.pnl.ac.id/file/cv/96bbb805f4d55b4553c2c472081e45a9.pdf"
                                            class="card-text font-weight-bold text-secondary">Detail CV</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 d-flex justify-content-center align-items-center mb-4">
                                <div class="card" style="width: 15rem;">
                                    <img src="{{ asset('image/prodi/akmalul.jpg') }}" class="card-img-top"
                                        alt="...">
                                    <div class="card-body text-center">
                                        <h5 class="card-text text-black font-bold mb-2 font-italic"
                                            style="text-decoration: underline;">Staff Pengajar</h5>
                                        <a href="http://ti.pnl.ac.id/file/cv/10925574c7e15b9b305437ac68fc44dc.pdf"
                                            class="card-text font-weight-bold text-secondary">Detail CV</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 d-flex justify-content-center align-items-center mb-4">
                                <div class="card" style="width: 15rem;">
                                    <img src="{{ asset('image/prodi/mahdi.jpg') }}" class="card-img-top" alt="...">
                                    <div class="card-body text-center">
                                        <h5 class="card-text text-black font-bold mb-2 font-italic"
                                            style="text-decoration: underline;">Staff Pengajar</h5>
                                        <a href="http://ti.pnl.ac.id/file/cv/a03046fb7009208f13d78ee68651a974.pdf"
                                            class="card-text font-weight-bold text-secondary">Detail CV</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 d-flex justify-content-center align-items-center mb-4">
                                <div class="card" style="width: 15rem;">
                                    <img src="{{ asset('image/prodi/amri.jpg') }}" class="card-img-top" alt="...">
                                    <div class="card-body text-center">
                                        <h5 class="card-text text-black font-bold mb-2 font-italic"
                                            style="text-decoration: underline;">Staff Pengajar</h5>
                                        <a href="http://ti.pnl.ac.id/file/cv/ceeea7990761ed30efdd42a4b43a8471.docx"
                                            class="card-text font-weight-bold text-secondary">Detail CV</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 d-flex justify-content-center align-items-center mb-4">
                                <div class="card" style="width: 15rem;">
                                    <img src="{{ asset('image/prodi/husaini2.jpg') }}" class="card-img-top"
                                        alt="...">
                                    <div class="card-body text-center">
                                        <h5 class="card-text text-black font-bold mb-2 font-italic"
                                            style="text-decoration: underline;">Staff Pengajar</h5>
                                        <a href="http://ti.pnl.ac.id/file/cv/00489f4bdecb0d07950ab40b9fd35fff.docx"
                                            class="card-text font-weight-bold text-secondary">Detail CV</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 d-flex justify-content-center align-items-center mb-4">
                                <div class="card" style="width: 15rem;">
                                    <img src="{{ asset('image/prodi/anwar.jpg') }}" class="card-img-top" alt="...">
                                    <div class="card-body text-center">
                                        <h5 class="card-text text-black font-bold mb-2 font-italic"
                                            style="text-decoration: underline;">Staff Pengajar</h5>
                                        <a href="http://ti.pnl.ac.id/file/cv/7be998c54c0dd53c95921f04ca6d9e16.docx"
                                            class="card-text font-weight-bold text-secondary">Detail CV</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 d-flex justify-content-center align-items-center mb-4">
                                <div class="card" style="width: 15rem;">
                                    <img src="{{ asset('image/prodi/nasir.jpg') }}" class="card-img-top" alt="...">
                                    <div class="card-body text-center">
                                        <h5 class="card-text text-black font-bold mb-2 font-italic"
                                            style="text-decoration: underline;">Staff Pengajar</h5>
                                        <a href="http://ti.pnl.ac.id/file/cv/520694c7856730f500b3a05186011220.docx"
                                            class="card-text font-weight-bold text-secondary">Detail CV</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 d-flex justify-content-center align-items-center mb-4">
                                <div class="card" style="width: 15rem;">
                                    <img src="{{ asset('image/prodi/nanang.jpg') }}" class="card-img-top"
                                        alt="...">
                                    <div class="card-body text-center">
                                        <h5 class="card-text text-black font-bold mb-2 font-italic"
                                            style="text-decoration: underline;">Staff Pengajar</h5>
                                        <a href="http://ti.pnl.ac.id/file/cv/520694c7856730f500b3a05186011220.docx"
                                            class="card-text font-weight-bold text-secondary">Detail CV</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 d-flex justify-content-center align-items-center mb-4">
                                <div class="card" style="width: 15rem;">
                                    <img src="{{ asset('image/prodi/nelly.jpg') }}" class="card-img-top" alt="...">
                                    <div class="card-body text-center">
                                        <h5 class="card-text text-black font-bold mb-2 font-italic"
                                            style="text-decoration: underline;">Staff Pengajar</h5>
                                        <a href="http://ti.pnl.ac.id/file/cv/520694c7856730f500b3a05186011220.docx"
                                            class="card-text font-weight-bold text-secondary">Detail CV</a>
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

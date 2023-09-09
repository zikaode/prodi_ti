@extends('layouts.app')

@section('content')
    <!-- start banner Area -->
    <section class="banner-area relative" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row fullscreen d-flex align-items-center justify-content-between" style="height: 606px;">
                <div class="banner-content col-lg-9 col-md-12">
                    <h4 class="text-uppercase text-white">
                        Program Studi
                    </h4>
                    <h1 class="text-uppercase">
                        Teknik Informatika
                    </h1>
                    <h3 class="pt-5 text-uppercase text-white">
                        Kami Memastikan pendidikan yang lebih baik
                        untuk dunia yang lebih baik
                    </h3>
                    <p class="pt-10 pb-10 text-white">
                        Program Studi Teknik Informatika terakreditasi peringkat B berdasarkan keputusan Badan Akreditasi
                        Nasional Perguruan Tinggi Departemen Pendidikan Nasional Republik Indonesia Nomor :
                        3565/SK/BAN-PT/AKRED/DIPL-IV/XII/2018 Tanggal 28 Desember 2018.
                    </p>
                    <a href="/about.html" class="primary-btn text-uppercase">Tentang Kami</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->

    <!-- Start feature Area -->
    <section class="feature-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-feature">
                        <div class="title">
                            <h4>Fasilitas</h4>
                        </div>
                        <div class="desc-wrap">
                            <p>
                                Fasilitas yang modern untuk bagi mahasiswa,
                                tenaga pengajar, dan tenaga pendidikan.
                            </p>
                            <a href="/fasilitas">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-feature">
                        <div class="title">
                            <h4>Kemahasiswaan</h4>
                        </div>
                        <div class="desc-wrap">
                            <p>
                                Pelayanan dan informasi tentang administrasi, serta informasi lainya berkaitan dengan
                                kemahasiswaan.
                            </p>
                            <a href="/kemahasiswaan">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-feature">
                        <div class="title">
                            <h4>Profil Program Studi</h4>
                        </div>
                        <div class="desc-wrap">
                            <p>
                                Temukan informasi lengkap tentang prodi Teknik Informatika, profile prodi, serta visi dan
                                misinya.
                            </p>
                            <a href="/tentang">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End feature Area -->

    <!-- Start pengumuman Area -->
    <section class="blog-area section-gap" id="blog">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Pengumuman Terbaru</h1>
                        <p>Orang yang selalu mengetahui setiap pengumuman baru adalah seperti seorang wisatawan bijak yang
                            menjelajahi kehidupan dengan kompas pengetahuan.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 single-blog">
                    <div class="thumb">
                        <img class="img-fluid" src="img/b1.jpg" alt="">
                    </div>
                    <p class="meta">25 April, 2018 | By <a href="#">Mark Wiens</a></p>
                    <a href="../blog-single.html">
                        <h5>Addiction When Gambling Becomes A Problem</h5>
                    </a>
                    <p>
                        Computers have become ubiquitous in almost every facet of our lives. At work, desk jockeys spend
                        hours in front of their.
                    </p>
                    <a href="#" class="details-btn d-flex justify-content-center align-items-center"><span
                            class="details">Details</span><span class="lnr lnr-arrow-right"></span></a>
                </div>
                <div class="col-lg-3 col-md-6 single-blog">
                    <div class="thumb">
                        <img class="img-fluid" src="img/b2.jpg" alt="">
                    </div>
                    <p class="meta">25 April, 2018 | By <a href="#">Mark Wiens</a></p>
                    <a href="../blog-single.html">
                        <h5>Computer Hardware Desktops And Notebooks</h5>
                    </a>
                    <p>
                        Ah, the technical interview. Nothing like it. Not only does it cause anxiety, but it causes anxiety
                        for several different reasons.
                    </p>
                    <a href="#" class="details-btn d-flex justify-content-center align-items-center"><span
                            class="details">Details</span><span class="lnr lnr-arrow-right"></span></a>
                </div>
                <div class="col-lg-3 col-md-6 single-blog">
                    <div class="thumb">
                        <img class="img-fluid" src="img/b3.jpg" alt="">
                    </div>
                    <p class="meta">25 April, 2018 | By <a href="#">Mark Wiens</a></p>
                    <a href="../blog-single.html">
                        <h5>Make Myspace Your Best Designed Space</h5>
                    </a>
                    <p>
                        Plantronics with its GN Netcom wireless headset creates the next generation of wireless headset and
                        other products such as wireless.
                    </p>
                    <a href="#" class="details-btn d-flex justify-content-center align-items-center"><span
                            class="details">Details</span><span class="lnr lnr-arrow-right"></span></a>
                </div>
                <div class="col-lg-3 col-md-6 single-blog">
                    <div class="thumb">
                        <img class="img-fluid" src="img/b4.jpg" alt="">
                    </div>
                    <p class="meta">25 April, 2018 | By <a href="#">Mark Wiens</a></p>
                    <a href="../blog-single.html">
                        <h5>Video Games Playing With Imagination</h5>
                    </a>
                    <p>
                        About 64% of all on-line teens say that do things online that they wouldn’t want their parents to
                        know about. 11% of all adult internet
                    </p>
                    <a href="#" class="details-btn d-flex justify-content-center align-items-center"><span
                            class="details">Details</span><span class="lnr lnr-arrow-right"></span></a>
                </div>
            </div>
        </div>
    </section>
    <!-- End blog Area -->

    <!-- Start search-course Area -->
    <section class="search-course-area relative">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6 col-md-6 search-course-left">
                    <h1 class="text-white">
                        Get reduced fee <br>
                        during this Summer!
                    </h1>
                    <p>
                        inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct
                        standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on the
                        job is beyond reproach.
                    </p>
                    <div class="row details-content">
                        <div class="col single-detials">
                            <span class="lnr lnr-graduation-hat"></span>
                            <a href="#">
                                <h4>Expert Instructors</h4>
                            </a>
                            <p>
                                Usage of the Internet is becoming more common due to rapid advancement of technology and
                                power.
                            </p>
                        </div>
                        <div class="col single-detials">
                            <span class="lnr lnr-license"></span>
                            <a href="#">
                                <h4>Certification</h4>
                            </a>
                            <p>
                                Usage of the Internet is becoming more common due to rapid advancement of technology and
                                power.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 search-course-right section-gap">
                    <form class="form-wrap" action="#">
                        <h4 class="text-white pb-20 text-center mb-30">Search for Available Course</h4>
                        <input type="text" class="form-control" name="name" placeholder="Your Name"
                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Name'">
                        <input type="phone" class="form-control" name="phone" placeholder="Your Phone Number"
                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Phone Number'">
                        <input type="email" class="form-control" name="email" placeholder="Your Email Address"
                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address'">
                        <div class="form-select" id="service-select">
                            <select style="display: none;">
                                <option datd-display="">Choose Course</option>
                                <option value="1">Course One</option>
                                <option value="2">Course Two</option>
                                <option value="3">Course Three</option>
                                <option value="4">Course Four</option>
                            </select>
                            <div class="nice-select" tabindex="0"><span class="current">Choose Course</span>
                                <ul class="list">
                                    <li data-value="Choose Course" class="option selected">Choose Course</li>
                                    <li data-value="1" class="option">Course One</li>
                                    <li data-value="2" class="option">Course Two</li>
                                    <li data-value="3" class="option">Course Three</li>
                                    <li data-value="4" class="option">Course Four</li>
                                </ul>
                            </div>
                        </div>
                        <button class="primary-btn text-uppercase">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End search-course Area -->

    <!-- Start upcoming-event Area -->
			<section class="upcoming-event-area section-gap">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Upcoming Events of our Institute</h1>
								<p>If you are a serious astronomy fanatic like a lot of us</p>
							</div>
						</div>
					</div>								
					<div class="row">
						<div class="active-upcoming-event-carusel">
							<div class="single-carusel row align-items-center">
								<div class="col-12 col-md-6 thumb">
									<img class="img-fluid" src="img/e1.jpg" alt="">
								</div>
								<div class="detials col-12 col-md-6">
									<p>25th February, 2018</p>
									<a href="#"><h4>The Universe Through
									A Child S Eyes</h4></a>
									<p>
										For most of us, the idea of astronomy is something we directly connect to “stargazing”, telescopes and seeing magnificent displays in the heavens.
									</p>
								</div>
							</div>
							<div class="single-carusel row align-items-center">
								<div class="col-12 col-md-6 thumb">
									<img class="img-fluid" src="img/e2.jpg" alt="">
								</div>
								<div class="detials col-12 col-md-6">
									<p>25th February, 2018</p>
									<a href="#"><h4>The Universe Through
									A Child S Eyes</h4></a>
									<p>
										For most of us, the idea of astronomy is something we directly connect to “stargazing”, telescopes and seeing magnificent displays in the heavens.
									</p>
								</div>
							</div>	
							<div class="single-carusel row align-items-center">
								<div class="col-12 col-md-6 thumb">
									<img class="img-fluid" src="img/e1.jpg" alt="">
								</div>
								<div class="detials col-12 col-md-6">
									<p>25th February, 2018</p>
									<a href="#"><h4>The Universe Through
									A Child S Eyes</h4></a>
									<p>
										For most of us, the idea of astronomy is something we directly connect to “stargazing”, telescopes and seeing magnificent displays in the heavens.
									</p>
								</div>
							</div>	
							<div class="single-carusel row align-items-center">
								<div class="col-12 col-md-6 thumb">
									<img class="img-fluid" src="img/e1.jpg" alt="">
								</div>
								<div class="detials col-12 col-md-6">
									<p>25th February, 2018</p>
									<a href="#"><h4>The Universe Through
									A Child S Eyes</h4></a>
									<p>
										For most of us, the idea of astronomy is something we directly connect to “stargazing”, telescopes and seeing magnificent displays in the heavens.
									</p>
								</div>
							</div>
							<div class="single-carusel row align-items-center">
								<div class="col-12 col-md-6 thumb">
									<img class="img-fluid" src="img/e2.jpg" alt="">
								</div>
								<div class="detials col-12 col-md-6">
									<p>25th February, 2018</p>
									<a href="#"><h4>The Universe Through
									A Child S Eyes</h4></a>
									<p>
										For most of us, the idea of astronomy is something we directly connect to “stargazing”, telescopes and seeing magnificent displays in the heavens.
									</p>
								</div>
							</div>	
							<div class="single-carusel row align-items-center">
								<div class="col-12 col-md-6 thumb">
									<img class="img-fluid" src="img/e1.jpg" alt="">
								</div>
								<div class="detials col-12 col-md-6">
									<p>25th February, 2018</p>
									<a href="#"><h4>The Universe Through
									A Child S Eyes</h4></a>
									<p>
										For most of us, the idea of astronomy is something we directly connect to “stargazing”, telescopes and seeing magnificent displays in the heavens.
									</p>
								</div>
							</div>																						
						</div>
					</div>
				</div>	
			</section>
			<!-- End upcoming-event Area -->

    <!-- Start cta-two Area -->
    <section class="cta-two-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 cta-left">
                    <h1>Butuh Artikel Yang Lain?</h1>
                </div>
                <div class="col-lg-4 cta-right">
                    <a class="primary-btn wh" href="/blog">Kunjungi Blog Kami</a>
                </div>
            </div>
        </div>
    </section>
@endsection

<!-- <!DOCTYPE html>

        }

        .announcement a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="announcement">
        <h1>Pengumuman Terbaru</h1>
        <p>Kami dengan senang hati mengumumkan berita terbaru dari [Nama Situs/Web]. Berikut adalah beberapa informasi penting:</p>

        <ul>
            <li><strong>Program Studi Baru:</strong> Kami telah meluncurkan Program Studi baru di bidang [Bidang Studi]. Program ini akan menerima pendaftaran mahasiswa baru mulai [Tanggal Penerimaan].</li>
            <li><strong>Beasiswa:</strong> Kami menyediakan berbagai jenis beasiswa untuk mendukung mahasiswa dalam mengejar pendidikan mereka. Informasi lebih lanjut tentang beasiswa dapat ditemukan <a href="[Link Beasiswa]">di sini</a>.</li>
            <li><strong>Acara Khusus:</strong> Tandai kalender Anda untuk menghadiri acara khusus kami, "[Nama Acara]", yang akan diadakan pada [Tanggal Acara]. Acara ini merupakan kesempatan untuk berinteraksi dengan fakultas dan mahasiswa kami.</li>
        </ul>

        <p>Jika Anda memiliki pertanyaan atau membutuhkan informasi lebih lanjut, jangan ragu untuk menghubungi kami melalui email di <a href="mailto:[Alamat Email]">[Alamat Email]</a>.</p>
    </div>
</body>
</html> -->
@extends('layouts.app')

@section('content')
    <!-- start banner Area -->
    <section class="banner-area relative" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white text-uppercase">
                        Berita
                    </h1>
                    <p class="text-white link-nav text-center"> Program Studi <span class="lnr lnr-arrow-right"></span><a
                            href="{{ route('static.pengumuman') }}"></p>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->

    <!-- Start post-content Area -->
    <section class="post-content-area single-post-area">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-lg-8 posts-list">
                    <div class="single-post row ">
                        <div class="col ">
                            <div class="card">
                                <div class="card-body text-center">
                                    <h1>Berita Terbaru</h1>
                                    <p></p>
                                    <p></a>.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- End post-content Area -->
@endsection

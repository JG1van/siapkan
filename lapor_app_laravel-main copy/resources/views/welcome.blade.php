<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Lapor APP</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/logo.svg" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    @include('includes.landing.stylesheet')

    <!-- =======================================================
    * Template Name: Vesperr - v4.7.0
    * Template URL: https://bootstrapmade.com/vesperr-free-bootstrap-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

    @include('includes.landing.navbar')

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up"> SIAPKAN <br>
                    </h1>
                    <h3 data-aos="fade-up"> (Sistem Informasi Aspirasi dan Perencanaan Kegiatan) Kab. Sleman</h3>
                    <h2 data-aos="fade-up" data-aos-delay="400">Selamat Datang di SIAPKAN <br>Aspirasi Anda, Perencanaan
                        Kita, Masa Depan Sleman</h2>
                    <div data-aos="fade-up" data-aos-delay="800">
                        <a href="{{ url('login') }}" class="btn-get-started scrollto">laporkan aspirasi </a>

                        <a href="#services" class="btn-get-started-2 scrollto">lihat perencanaan</a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
                    <img src="assets/img/Teamwork.svg" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Tentang Kami</h2>
                </div>

                <div class="row content">
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="150">
                        <p>
                        <h3>SIAPKAN</h3> Adalah sebuah platform pengaduan dan perencanaan kegiatan yang dirancang untuk
                        mempermudah masyarakat Kabupaten Sleman dalam menyampaikan aspirasi atau laporan kepada pihak
                        berwenang.
                        </p>
                        <ul>
                            <h3>Tujuan SIAPKAN</h3>
                            <li><i class="ri-check-double-line"></i>Memberikan informasi dan laporan yang jelas kepada
                                pihak berwenang sehingga dapat ditindaklanjuti dengan cepat dan tepat.
                            </li>
                            <li><i class="ri-check-double-line"></i>Mempermudah masyarakat dalam berkomunikasi dengan
                                pihak berwenang
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="300">
                        <p>
                        <h4>SIAPKAN</h4> untuk mendukung perencanaan kegiatan yang lebih baik.
                        mencerminkan komitmen kami dalam melayani masyarakat Kabupaten Sleman. Melalui sistem aspirasi
                        dan perencanaan ini, setiap suara masyarakat diharapkan dapat didengar dan diwujudkan oleh pihak
                        terkait.

                        </p>
                        <a href="#services" class="btn-learn-more"> Aspirasi dan Perencanaan Kegiatan</a>
                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->

        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts">
            <div class="container">

                <div class="row <div class=" image col-xl-5 d-flex align-items-stretch justify-content-center
                    justify-content-xl-start" data-aos="fade-right" data-aos-delay="150">
                    <img src="assets/img/PMO.svg" alt="" class="img-fluid ukuran">
                </div>

                <div class="col-xl-12 d-flex align-items-center pt-4 pt-xl-0" data-aos="fade-left" data-aos-delay="300">
                    <div class="content d-flex flex-column justify-content-center">
                        <div class="row">
                            <div class="col-md-4 d-md-flex align-items-md-stretch">
                                <div class="count-box">
                                    <i class="bi bi-emoji-smile"></i>
                                    <span data-purecounter-start="0" data-purecounter-end="65"
                                        data-purecounter-duration="1" class="purecounter"></span>
                                    <p><strong>Pengguna</strong><br>DAFTAR pengguna SIAPKAN</p>
                                </div>
                            </div>

                            <div class="col-md-4 d-md-flex align-items-md-stretch">
                                <div class="count-box">
                                    <i class="bi bi-journal-richtext"></i>
                                    <span data-purecounter-start="0" data-purecounter-end="85"
                                        data-purecounter-duration="1" class="purecounter"></span>
                                    <p><strong>Pengajuan</strong> <br> Jumlah pengajuan yang sudah dikirim</p>
                                </div>
                            </div>

                            <div class="col-md-4 d-md-flex align-items-md-stretch">
                                <div class="count-box">
                                    <i class="bi bi-clock"></i>
                                    <span data-purecounter-start="0" data-purecounter-end="18"
                                        data-purecounter-duration="1" class="purecounter"></span>
                                    <p><strong>Dilaksanakan</strong> <br> Jumlah kegiatan yang sudah berjalan</p>
                                </div>
                            </div>

                        </div>
                    </div><!-- End .content-->
                </div>
            </div>

            </div>
        </section><!-- End Counts Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>TATA CARA</h2>
                    <p>Nah ini dia alur pelaporan yang ada di website SIAPKAN</p>
                </div>

                <div class="row">
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon"><i class='bx bxs-edit-alt'></i></div>
                            <h4 class="title"><a href="">Bagikan Ide Kerenmu</a></h4>
                            <p class="description">Tulis ide atau usulan kegiatanmu di formulir yang ada di sistem.
                                Jangan lupa tambahkan detail dan dokumen pendukung yang bisa bikin ide kamu makin
                                meyakinkan!
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                            <div class="icon"><i class="bx bx-shuffle"></i></div>
                            <h4 class="title"><a href="">Tunggu Verifikasi</a></h4>
                            <p class="description"> Bersabarlah sedikit, tim kami bakal memeriksa ide kamu. Kalau sudah
                                oke, usulanmu akan lanjut ke tahap berikutnya.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                            <div class="icon"><i class="bx bx-tachometer"></i></div>
                            <h4 class="title"><a href="">Proses Penyusunan Kegiatan</a></h4>
                            <p class="description"> Ide kamu akan diproses dan dimasukkan ke dalam perencanaan
                                kegiatan. Tim akan menilai dan menyusun apa yang jadi prioritas berdasarkan kebutuhan di
                                lapangan.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
                            <div class="icon"><i class='bx bx-check-shield'></i></div>
                            <h4 class="title"><a href="">Keputusan Akhir</a></h4>
                            <p class="description"> Kalau ide kamu disetujui, kami bakal kabarin lewat notifikasi.
                                Siap-siap deh lihat usulanmu diwujudkan dalam rencana kegiatan!
                            </p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Services Section -->

        <section id="services" class="services">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>testimoni </h2>
                    <p>Apa Kata Mereka Tentang SIAPKAN?
                    </p>
                </div>

                <div class="row">
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon"><i class='bx bxs-user'></i></div>
                            <h4 class="title"><a href="">Prosesnya Cepat dan Gampang Banget!</a></h4>
                            <p class="description">Kemarin saya coba pakai SIAPKAN buat izin pakai ruang terbuka di
                                lingkungan desa untuk acara olahraga bareng. Awalnya mikir bakal ribet karena biasanya
                                harus bolak-balik ngurus dokumen. Tapi, lewat SIAPKAN, semua jadi simpel banget! - Fajar
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon"><i class='bx bxs-user'></i></div>
                            <h4 class="title"><a href="">Sistemnya User-Friendly Banget!</a></h4>
                            <p class="description">Nyoba SIAPKAN buat izin pakai aula desa buat seminar komunitas. Yang
                                paling aku suka, tampilannya gampang dipahami. Bahkan buat orang yang gak terlalu
                                tech-savvy kayak aku, prosesnya gak bikin bingung. Ini sih solusi pas banget buat
                                masyarakat yang pengen suara mereka didengar. Mantap, SIAPKAN! - Andira
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon"><i class='bx bxs-user'></i></div>
                            <h4 class="title"><a href="">Gak Perlu Ribet Lagi Buat Urusan Izin!
                                </a></h4>
                            <p class="description">Aku baru aja pakai SIAPKAN buat ajukan izin pakai ruang terbuka
                                untuk acara lomba 17 Agustus di kampung. Biasanya tuh harus keliling sana-sini, ngurusin
                                surat ini itu, tapi di SIAPKAN semua jadi praktis. - Nando

                            </p>
                        </div>
                    </div>



                </div>

            </div>
        </section><!-- End Services Section -->

        @include('includes.landing.footer')

        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>

        @include('includes.landing.javascript')

</body>

</html>

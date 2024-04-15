@extends('layouts.user.app')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                    data-aos="fade-up" data-aos-delay="200">
                    <h1>Dewan Perwakilan Mahasiswa (DPM)</h1>
                    <h1>Pemerintahan Mahasiswa</h1>
                    <h1>Universitas Udayana 2022</h1>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="#about" class="btn-get-started scrollto">Scroll Down</a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <div class="image-container d-flex justify-content-center align-items-center">
                        <img src="{{ asset('img/spinner.svg') }}" data-src="{{ asset('img/hero.png') }}"
                            class="img-fluid animated lazyload" alt="">
                    </div>
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">


        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Fungsi</h2>
                    <h3>DPM PM UDAYANA</h3>
                </div>

                <div class="row content">
                    <div class="accordion accordion-flush" id="accordionFlushExample">

                        <div class="accordion-item" data-aos="fade-up" data-aos-duration="3000">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    <img class="lazyload" src="{{ asset('img/spinner.svg') }}"
                                        data-src="{{ asset('img/purpose-icon/icon_01.png') }}" alt=""
                                        height="50">
                                    <span class="title-text-DPM">LEGISLASI</span>
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <ul class="card-text text-secondary">
                                    <li>
                                        Melakukan pemeriksaan keuangan terhadap BEM PM Unud, UKM, dan LPM Unud.
                                    </li>
                                    <li>
                                        Menetapkan anggaran dan belanja organisasi bersama Presiden BEM PM-Unud dengan
                                        memperhatikan pertimbangan Fakultas bersama BKM.
                                    </li>
                                    <li>
                                        Memilih anggota badan kelengkapan internal DPM PM-Unud untuk pemeriksaan keuangan.
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="accordion-item" data-aos="fade-up" data-aos-duration="3000">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    <img class="lazyload" src="{{ asset('img/spinner.svg') }}"
                                        data-src="{{ asset('img/purpose-icon/icon_04.png') }}" alt=""
                                        height="50">
                                    <span class="title-text-DPM">PENGAWASAN</span>
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <ul class="card-text text-secondary">
                                    <li>Melakukan pengawasan terhadap kinerja PM (BEM PM-Unud, dan UKM) termasuk pengawasan
                                        di bidang keuangan</li>
                                    <li>
                                        Melakukan pengawasan terhadap kinerja LPM Unud termasuk pengawasan di bidang
                                        keuangan, kecuali dalam ranah penerbitan
                                    </li>
                                    <li>
                                        Mengajukan, memberikan persetujuan, pertimbangan dan/atau konsultasi dan pendapat
                                        kepada PM
                                    </li>
                                    <li>
                                        Menyerap, menghimpun, menampung, dan menindak lanjuti aspirasi mahasiswa sebagai
                                        kontrol kepada PM
                                    </li>
                                    <li>
                                        Mengevaluasi kinerja Badan Eksekutif di tingkat Universitas
                                    </li>
                                    <li>
                                        Dalam melaksanakan fungsi pengawasan, DPM PM-Unud juga turun ke lapangan dalam
                                        pelaksanaan kegiatan BEM PM-Unud serta bertanggung jawab bersama dengan Presiden
                                        Mahasiswa
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="accordion-item" data-aos="fade-up" data-aos-duration="3000">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    <img class="lazyload" src="{{ asset('img/spinner.svg') }}"
                                        data-src="{{ asset('img/purpose-icon/icon_03.png') }}" alt=""
                                        height="50">
                                    <span class="title-text-DPM">ANGGARAN</span>
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <ul class="card-text text-secondary">
                                    <li>
                                        Melakukan pemeriksaan keuangan terhadap BEM PM Unud, UKM, dan LPM Unud.
                                    </li>
                                    <li>
                                        Menetapkan anggaran dan belanja organisasi bersama Presiden BEM PM-Unud dengan
                                        memperhatikan pertimbangan Fakultas bersama BKM.
                                    </li>
                                    <li>
                                        Memilih anggota badan kelengkapan internal DPM PM-Unud untuk pemeriksaan keuangan.
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="accordion-item" data-aos="fade-up" data-aos-duration="3000">
                            <h2 class="accordion-header" id="flush-headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseFour" aria-expanded="false"
                                    aria-controls="flush-collapseFour">
                                    <img class="lazyload" src="{{ asset('img/spinner.svg') }}"
                                        data-src="{{ asset('img/purpose-icon/icon_02.png') }}" alt=""
                                        height="50">
                                    <span class="title-text-DPM">ASPIRASI & ADVOKASI</span>
                                </button>
                            </h2>
                            <div id="flush-collapseFour" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                <ul class="card-text text-secondary">
                                    <li>
                                        Menyerap, menghimpun, dan menampung segala bentuk aspirasi mahasiswa terkait
                                        permasalahan di internal kampus.
                                    </li>
                                    <li>
                                        Menyalurkan dan mengkoordinasikan segala bentuk aspirasi mahasiswa kepada BEM
                                        PM.
                                    </li>
                                    <li>
                                        Melakukan advokasi bersama BEM PM sebagai bentuk tindak lanjut dari aspirasi
                                        mahasiswa yang sudah diserap, dihimpun, dan ditampung terkait permasalahan internal
                                        kampus.
                                    </li>
                                    <li>
                                        Menjaring aspirasi mahasiswa dalam perumusan dan penyusunan rancangan Peraturan
                                        Pemerintahan Mahasiswa dan peraturan dibawahnya.
                                    </li>
                                    <li>
                                        Menyerap dan menghimpun aspirasi fakultas masing - masing melalui kunjungan kerja
                                        secara berkala.
                                    </li>
                                    <li>
                                        Ketentuan lebih lanjut mengenai fungsi aspirasi-advokasi DPM PM-Unud diatur pada
                                        Ketetapan DPM PM-Unud.
                                    </li>
                                </ul>
                            </div>
                        </div>


                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->

        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us section-bg">
            <div class="container-fluid" data-aos="fade-up">

                <div class="row">

                    <div
                        class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

                        <div class="content">
                            <h2>VISI & MISI</h2>
                            <h3>Parlemen Langkah Bersama</h3>
                        </div>

                        <div class="accordion-list">
                            <ul>
                                <li>
                                    <a data-bs-toggle="collapse" class="collapse"
                                        data-bs-target="#accordion-list-1"><span>Visi</span><i
                                            class="bx bx-chevron-down icon-show"></i><i
                                            class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                                        <p>
                                            Langkah Bersama wujudkan DPM
                                            Universitas Udayana sebagai
                                            lembaga legislatif yang bersinergi,
                                            responsif dan nyata dengan asas
                                            kebersamaan dan kekeluargaan.
                                        </p>
                                    </div>
                                </li>

                                <li>
                                    <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2"
                                        class="collapsed"><span>Misi</span><i class="bx bx-chevron-down icon-show"></i><i
                                            class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                                        <ul class="visi-misi-list visi">
                                            <li class="">Menjalankan tugas dan fungsi DPM sesuai dengan GBHO,
                                                dan AD/ART sebagai badan legislatif.</li>
                                            <li class="">Memaksimalkan kinerja, independen dan profesionalitas
                                                DPM dalam melaksanakan peran serta fungsinya.</li>
                                            <li class="">Menjalankan peran dan fungsi berlandaskan asas
                                                demokrasi dan kekeluargaan.</li>
                                            <li class="">Menjadikan DPM sebagai lembaga yang responsif dan
                                                terlibat bersama dalam menjalankan peran dan fungsinya.</li>
                                            <li class="">Membangun harmonisasi lembaga mahasiswa dan
                                                mahasiswa guna mewujudkan Universitas Udayana lebih
                                                baik.
                                            </li>
                                        </ul>
                                    </div>
                                </li>

                            </ul>
                        </div>

                    </div>

                    <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img"
                        style='background-image: url("img/vision-mission.png");' data-aos="zoom-in" data-aos-delay="150">
                        &nbsp;</div>
                </div>

            </div>
        </section><!-- End Why Us Section -->

        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>JUMLAH FUNGSIONARIS</h2>
                    <h3>PARLEMENT LANGKAH BERSAMA</h3>
                </div>
                <div class="row gy-4  justify-content-center">

                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="bi bi-emoji-smile"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="109" data-purecounter-duration="5"
                                    class="purecounter"></span>
                                <p>Staff</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="bi bi-journal-richtext" style="color: #ee6c20;"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="64" data-purecounter-duration="5"
                                    class="purecounter"></span>
                                <p>Dewan</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="bi bi-people" style="color: #bb0852;"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="45" data-purecounter-duration="5"
                                    class="purecounter"></span>
                                <p>Divisi</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <!--fungsio content-->
            <section id="portfolio" class="portfolio fungsio-area" data-aos="fade-up" data-aos-delay="200">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 fungsio-tabs mx-auto text-center">

                            <ul class="nav nav-tabs justify-content-center " id="mytab">
                                <li class="nav-item">
                                    <a href="#pimpinan" class="nav-link " data-bs-toggle="tab">PIMPINAN</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#inti" class="nav-link" data-bs-toggle="tab">INTI</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#komisi-I" class="nav-link" data-bs-toggle="tab">KOMISI I</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#komisi-II" class="nav-link" data-bs-toggle="tab">KOMISI II</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#komisi-III" class="nav-link" data-bs-toggle="tab">KOMISI III</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#komisi-IV" class="nav-link" data-bs-toggle="tab">KOMISI IV</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#komisi-V" class="nav-link" data-bs-toggle="tab">KOMISI V</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#divisi-kestari" class="nav-link" data-bs-toggle="tab">DIVISI KESTARI</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#divisi-medinfo" class="nav-link" data-bs-toggle="tab">DIVISI MEDINFO</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#divisi-psdm" class="nav-link" data-bs-toggle="tab">DIVISI PSDM</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#divisi-litbang" class="nav-link" data-bs-toggle="tab">DIVISI LITBANG</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-content">
                        @foreach (['pimpinan', 'inti', 'komisi-I', 'komisi-II', 'komisi-III', 'komisi-IV', 'komisi-V', 'divisi-kestari', 'divisi-medinfo', 'divisi-psdm', 'divisi-litbang'] as $section)
                            <div class="tab-pane fade show {{ !$loop->index ? 'active' : null }}"
                                id="{{ $section }}">
                                <div class="row justify-content-md-center d-flex align-items-center" data-aos="fade-up"
                                    data-aos-delay="200">
                                    @if ($orderedUsers[$loop->index])
                                        @foreach ($orderedUsers[$loop->index] as $user)
                                            <div class="col-lg-3 col-md-6 col-sm-12 fungsio-col" data-aos="fade-up"
                                                data-aos-delay="200">
                                                <div class="card-funsionaris p-0" data-aos="fade-left">
                                                    <div class="card-image"> <img class="lazyload"
                                                            src="{{ asset('img/spinner.svg') }}"
                                                            data-src="{{ $user->image }}" height="700px"
                                                            alt=""> </div>
                                                    <div class="card-content d-flex flex-column align-items-center">
                                                        <h4 class="pt-2"><a
                                                                href="{{ route('user.show', $user->id) }}">{{ $user->name }}</a>
                                                        </h4>
                                                        <h5>{{ $user->detail->role->role }}</h5>
                                                        <ul class="social-icons d-flex justify-content-center">
                                                            <li> <a href="https://wa.me/{{ $user->contact->phone }}"><span
                                                                        class="fa fa-whatsapp"></span></a></li>
                                                            <li> <a
                                                                    href="https://instagram.com/{{ $user->contact->instagram }}"><span
                                                                        class="fa fa-instagram"></span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>

            </section>
            </div>
            </div>
        </section><!-- End Counts Section -->

        <!-- ======= Cta Section ======= -->
        <section id="cta" class="cta">
            <div id="demo" class="carousel slide" data-bs-ride="carousel">

                <!-- Indicators/dots -->
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                </div>

                <!-- The slideshow/carousel -->
                <div class="carousel-inner">
                    @foreach ($documents as $document)
                        <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                            <img src="{{ asset('img/spinner.svg') }}" data-src="{{ asset('img/hero-bg.jpg') }}"
                                alt="New York" height="600px" class=" img-trasnparant lazyload" style="width:100%">
                            <div class="carousel-caption">
                                <div class="row">
                                    <div class="col img-col"><img src="{{ asset('img/spinner.svg') }}"
                                            data-src="{{ $document->image }}" height="300" alt=""
                                            class="img-caption lazyload"></div>
                                    <div class="col text-col">
                                        <h3>{{ $document->title }}</h3>
                                        <p>{{ $document->description }}</p>
                                        <a class="btn btn-primary" href="{{ $document->file }}"
                                            role="button">Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Left and right controls/icons -->
                <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>

            </div>
        </section><!-- End Cta Section -->


        <!--========================START INFORMASI AREA=====================-->
        <section id="recent-postingan" class="recent-postingan p-2 m-2">

            <div class="container aos-init aos-animate" data-aos="fade-up">

                <div class="section-title">
                    <h2>Postingan</h2>
                    <h3>Terbaru</h3>

                </div>


                <div class="row" data-aos="fade-up" data-aos-delay="200">
                    @foreach ($posts as $post)
                        <div class="col-lg-4  mb-4">
                            <blockquote class="instagram-media"
                                data-instgrm-permalink="https://{{ str($post->link)->after('https://')->explode('/')->take(3)->implode('/') }}/?utm_source=ig_embed&amp;utm_campaign=loading"
                                data-instgrm-version="14"
                                style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">
                            </blockquote>
                        </div>
                    @endforeach
                </div>
                <div class="btn-readmore text-center m-3">
                    <a href="https://www.instagram.com/dpm_udayana/"
                        class="btn-get-started btn btn-primary">Selengkapnya</a>
                </div>

            </div>

        </section>
        <!--========================END INFORMASI AREA=====================-->



        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>KOTAK ASPIRASI DPM UNUD</h2>
                    <p>AYO SUARAKAN ASPIRASIMU !</p>
                </div>

                <div class="row">

                    <div class="col-lg-5 d-flex align-items-stretch">
                        <div class="info">
                            <img src="{{ asset('img/spinner.svg') }}" data-src="{{ asset('img/aspiration.jpg') }}"
                                class="lazyload" frameborder="0" style="border:0; width: 100%; height: 600px;"
                                allowfullscreen>

                        </div>

                    </div>

                    <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                        <form class="php-email-form" id="formData">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="nama" class="form-label">Nama</label>
                                    <input type="text" class="form-control" id="nama" name="name" required />
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="fakultas" class="form-label">Fakultas</label>
                                    <input type="text" class="form-control" id="fakultas" name="faculity"
                                        required />
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="angkatan" class="form-label">Angkatan</label>
                                    <input type="text" class="form-control" id="angkatan" name="generation"
                                        required />
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="program_studi" class="form-label">Program studi</label>
                                    <input type="text" class="form-control" id="program_studi" name="study_program"
                                        required />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="masukan" class="form-label">Masukan</label>
                                <textarea class="form-control" rows="10" id="masukan" name="submission" required></textarea>
                            </div>
                            <div class="g-recaptcha my-3" data-sitekey="{{ env('GOOGLE_RECAPTCHA_KEY') }}"></div>
                            <div class="text-center"><button type="submit" id="BtnSubmit">Send Message</button></div>
                        </form>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-newsletter">

        </div>

        <div class="footer-top">
            <div class="container ">
                <div class="row justify-content-center align-items-center">

                    <div class="col-lg-6 col-md-6 footer-contact">
                        <h3><a class="navbar-brand" href="#"><img src="{{ asset('img/spinner.svg') }}"
                                    data-src="{{ asset('img/logo.png') }}" alt="logo DPM UNUD" width="40"
                                    height="40" class="lazyload" /><span class="title-text-DPM"> DPM PM
                                    UNUD</span></a></h3>
                        <p>
                            DPM dapat senantiasa melangkah bersama untuk memajukan DPM dan Universitas Udayana
                        </p>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 footer-links">
                        <h4> SEKRETARIAT KAMI</h4>
                        <p>
                            Jalan Dr. Goris No. 10, Student Center Lt. 2, Denpasar, Bali, Indonesia
                        </p>
                        <strong>Phone:</strong> 084723982848734XX<br>
                        <strong>Email:</strong> dpm@unud.ac.id<br>

                    </div>

                </div>
            </div>
        </div>

        <div class="container footer-bottom clearfix">
            <div class="copyright">
                &copy; Copyright <strong><span>DPM PM UNUD</span></strong>. All Rights Reserved
            </div>
        </div>
    </footer><!-- End Footer -->
@endsection

@section('scripts')
    <script async src="https://www.instagram.com/embed.js"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });


        $("#BtnSubmit").click(function(e) {
            e.preventDefault();

            var form = $("#formData");
            var data = new FormData(form[0]);
            console.log(data);
            var url = "{{ route('submission.store') }}";
            data.set('_method', 'POST');

            $.ajax({
                type: 'POST',
                url: url,
                data: data,
                cache: false,
                contentType: false,
                processData: false,
                success: function(data) {
                    ;
                    swal({
                        title: "Success!",
                        text: data.message,
                        icon: "success",
                        value: true
                    });
                },
                error: function(data) {
                    var errors = data.responseJSON.errors;
                    var element = '<div class="error-message alert alert-danger m-2" role="alert">';
                    for (const error in errors) {
                        element += '<li>' + errors[error] + '</li>';
                    }
                    element += '</div>';
                    $("#formData").prepend(element);
                }
            });
        });
    </script>
@endsection

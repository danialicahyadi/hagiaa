<!doctype html>
<html lang="en" data-layout="horizontal" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable">

<head>

    <meta charset="utf-8" />
    <title>My Portfolio | Dani Ali Cahyadi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="icon" type="image/png" href="{{ asset('assets-portfolio/img/dani.png') }}">
    {{-- <link rel="shortcut icon" href="assets/images/favicon.ico"> --}}

    <!--Swiper slider css-->
    <link href="assets/libs/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css" />

    <!-- Layout config Js -->
    <script src="assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="assets/css/custom.min.css" rel="stylesheet" type="text/css" />

</head>

<body data-bs-spy="scroll" data-bs-target="#navbar-example">

    <!-- Begin page -->
    <div class="layout-wrapper landing">
        <nav class="navbar navbar-expand-lg navbar-landing fixed-top" id="navbar">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    {{-- <img src="assets/images/logo-dark.png" class="card-logo card-logo-dark" alt="logo dark"
                        height="17">
                    <img src="assets/images/logo-light.png" class="card-logo card-logo-light" alt="logo light"
                        height="17"> --}}
                    <h4>Hagia</h4>
                </a>
                <button class="navbar-toggler py-0 fs-20 text-body" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <i class="mdi mdi-menu"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mt-2 mt-lg-0" id="navbar-example">
                        <li class="nav-item">
                            <a class="nav-link active" href="#hero">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#team">Projects</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#footer">Contact</a>
                        </li>
                    </ul>

                </div>

            </div>
        </nav>
        <!-- end navbar -->

        <!-- start hero section -->
        <section class="section pb-0 hero-section" id="hero">
            <div class="bg-overlay bg-overlay-pattern"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-sm-10 text-center mb-5">
                        <img src="{{ asset('assets-portfolio/img/dani.png') }}" alt="Dani Ali Cahyadi" width="200"
                            class="rounded-circle img-thumbnail" />
                        <h1 class="display-4">Dani Ali Cahyadi</h1>
                        <p class="lead"><strong>Freshgraduate | Freelancer</strong></p>
                        <p class="lead">Junior Web Developer (Laravel Framework)</p>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
            {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#fff" fill-opacity="1"
                    d="M0,32L40,58.7C80,85,160,139,240,138.7C320,139,400,85,480,58.7C560,32,640,32,720,42.7C800,53,880,75,960,96C1040,117,1120,139,1200,122.7C1280,107,1360,53,1400,26.7L1440,0L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z">
                </path>
            </svg> --}}
            <!-- end shape -->
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#fff" fill-opacity="1"
                    d="M0,288L48,272C96,256,192,224,288,197.3C384,171,480,149,576,165.3C672,181,768,235,864,250.7C960,267,1056,245,1152,250.7C1248,256,1344,288,1392,304L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
                </path>
            </svg>
        </section>
        <!-- end hero section -->

        <!-- start client section -->
        <div class="pt-5 mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="text-center mt-5">
                            <h5 class="fs-20">Familiar <span class="text-primary text-decoration-underline">with</span>
                            </h5>

                            <!-- Swiper -->
                            <div class="swiper trusted-client-slider mt-sm-5 mt-4 mb-sm-5 mb-4" dir="ltr">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="client-images">
                                            <img src="assets/images/clients/vscode.png" alt="client-img"
                                                class="mx-auto img-fluid d-block">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="client-images">
                                            <img src="assets/images/clients/bootstrap.svg" alt="client-img"
                                                class="mx-auto img-fluid d-block">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="client-images">
                                            <img src="assets/images/clients/laragon.png" alt="client-img"
                                                class="mx-auto img-fluid d-block">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="client-images">
                                            <img src="assets/images/clients/laravel.png" alt="client-img"
                                                class="mx-auto img-fluid d-block">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="client-images">
                                            <img src="assets/images/clients/php.png" alt="client-img"
                                                class="mx-auto img-fluid d-block">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="client-images">
                                            <img src="assets/images/clients/chatgpt.png" alt="client-img"
                                                class="mx-auto img-fluid d-block">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end client section -->

        <!-- start about -->
        <section class="section" id="about">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="text-center mb-5">
                            <h1 class="mb-3 ff-secondary fw-semibold lh-base">About</h1>
                            <p class="text-muted">Saya adalah seorang Junior Programmer yang terpincut dengan tag line
                                salah satu startup ternama yaitu "<b>Mulai Aja Dulu<b>"</p>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
                <div class="row g-3">
                    <div class="col-lg-6">
                        <div class="d-flex p-3">
                            <div class="flex-shrink-0 me-3">
                                <div class="avatar-sm icon-effect">
                                    <div class="avatar-title bg-transparent text-success rounded-circle">
                                        <i class="bx bxs-graduation bx-tada fs-36"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="fs-18">Latar Belakang</h5>
                                <p class="text-muted my-3 ff-secondary">Saya merupakan Freshgraduate lulusan S1 Sistem
                                    Informasi dari Fakultas Ilmu Komputer
                                    Universitas
                                    Pembangunan Nasional Veteran Jakarta (UPN Veteran Jakarta). Untuk kegiatan saya saat
                                    ini
                                    masih
                                    dalam tahap menambah kompetensi
                                    diri dan disambi mencari pekerjaan untuk bisa langsung mendapatkan pengalaman dari
                                    bidang
                                    yang
                                    telah saya tempuh yaitu IT.</p>

                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-6">
                        <div class="d-flex p-3">
                            <div class="flex-shrink-0 me-3">
                                <div class="avatar-sm icon-effect">
                                    <div class="avatar-title bg-transparent text-success rounded-circle">
                                        <i class="bx bx-history bx-tada fs-36"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="fs-18">Pengalaman</h5>
                                <p class="text-muted my-3 ff-secondary">Pengalaman saya di bidang Programmer masih di
                                    bilang singkat, saya mulai
                                    mengenal
                                    pemrograman baru 6 bulan. Dan cara belajar saya langsung terjun di suatu perusahaan
                                    yang bisa di
                                    bilang cukup baik dalam hal digitalisasi.</p>

                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#F3F6F9" fill-opacity="1"
                d="M0,288L48,272C96,256,192,224,288,197.3C384,171,480,149,576,165.3C672,181,768,235,864,250.7C960,267,1056,245,1152,250.7C1248,256,1344,288,1392,304L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg>

        <!-- start team -->
        <section class="section bg-light" id="team">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="text-center mb-5">
                            <h3 class="mb-3 fw-semibold">My <span class="text-danger">Projects</span></h3>
                            <p class="text-muted mb-4 ff-secondary">Sedikit demi sedikit project bisa saya selesaikan,
                                walaupun menurut pengunjung portofolio saya ini projek saya gaseberapa dibanding projek
                                kalian ehee.</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-evenly">
                    <div class="col-md-4 mb-3">
                        <div class="card text-center" style="hover;">
                            <img src="{{ asset('assets-portfolio/img/projects/Project1.png') }}" class="card-img-top"
                                alt="Project 1" />
                            <div class="card-body">
                                <p class="card-text text-center">Project pertama saya di dunia pemrograman yaitu,
                                    company profile SGS LawFirm</p>
                                <a href="https://www.sgslawfirm.com/" class="btn btn-primary" target="_blank">Show
                                    Project</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card text-center" style="hover;">
                            <img src="{{ asset('assets-portfolio/img/projects/Project2.png') }}" class="card-img-top"
                                alt="Project 2" />
                            <div class="card-body">
                                <p class="card-text text-center">Project kedua saya, aplikasi CRUD untuk membuat resi
                                    atau bukti tanda terima di usaha ibu saya sendiri ehe</p>
                                <a href="https://www.hankam-agen.hagiaa.com/" class="btn btn-primary"
                                    target="_blank">Show
                                    Project</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="{{ asset('assets-portfolio/img/projects/3.jpg') }}" class="card-img-top"
                                alt="Project 3" />
                            <div class="card-body">
                                <p class="card-text text-center">Cooming Soon</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="{{ asset('assets-portfolio/img/projects/3.jpg') }}" class="card-img-top"
                                alt="Project 4" />
                            <div class="card-body">
                                <p class="card-text text-center">Cooming Soon</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="{{ asset('assets-portfolio/img/projects/3.jpg') }}" class="card-img-top"
                                alt="Project 5" />
                            <div class="card-body">
                                <p class="card-text text-center">Cooming Soon</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
                {{-- <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="card-body text-center p-4">
                                <div class="avatar-xl mx-auto mb-4 position-relative">
                                    <img src="assets/images/users/avatar-2.jpg" alt=""
                                        class="img-fluid rounded-circle">
                                    <a href="apps-mailbox.html"
                                        class="btn btn-success btn-sm position-absolute bottom-0 end-0 rounded-circle avatar-xs">
                                        <div class="avatar-title bg-transparent">
                                            <i class="ri-mail-fill align-bottom"></i>
                                        </div>
                                    </a>
                                </div>
                                <!-- end card body -->
                                <h5 class="mb-1"><a href="pages-profile.html" class="text-body">Nancy Martino</a>
                                </h5>
                                <p class="text-muted mb-0 ff-secondary">Team Leader</p>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="card-body text-center p-4">
                                <div class="avatar-xl mx-auto mb-4 position-relative">
                                    <img src="assets/images/users/avatar-10.jpg" alt=""
                                        class="img-fluid rounded-circle">
                                    <a href="apps-mailbox.html"
                                        class="btn btn-success btn-sm position-absolute bottom-0 end-0 rounded-circle avatar-xs">
                                        <div class="avatar-title bg-transparent">
                                            <i class="ri-mail-fill align-bottom"></i>
                                        </div>
                                    </a>
                                </div>
                                <!-- end card body -->
                                <h5 class="mb-1"><a href="pages-profile.html" class="text-body">Henry Baird</a>
                                </h5>
                                <p class="text-muted mb-0 ff-secondary">Full Stack Developer</p>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="card-body text-center p-4">
                                <div class="avatar-xl mx-auto mb-4 position-relative">
                                    <img src="assets/images/users/avatar-3.jpg" alt=""
                                        class="img-fluid rounded-circle">
                                    <a href="apps-mailbox.html"
                                        class="btn btn-success btn-sm position-absolute bottom-0 end-0 rounded-circle avatar-xs">
                                        <div class="avatar-title bg-transparent">
                                            <i class="ri-mail-fill align-bottom"></i>
                                        </div>
                                    </a>
                                </div>
                                <!-- end card body -->
                                <h5 class="mb-1"><a href="pages-profile.html" class="text-body">Frank Hook</a></h5>
                                <p class="text-muted mb-0 ff-secondary">Project Manager</p>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="card-body text-center p-4">
                                <div class="avatar-xl mx-auto mb-4 position-relative">
                                    <img src="assets/images/users/avatar-8.jpg" alt=""
                                        class="img-fluid rounded-circle">
                                    <a href="apps-mailbox.html"
                                        class="btn btn-success btn-sm position-absolute bottom-0 end-0 rounded-circle avatar-xs">
                                        <div class="avatar-title bg-transparent">
                                            <i class="ri-mail-fill align-bottom"></i>
                                        </div>
                                    </a>
                                </div>
                                <!-- end card body -->
                                <h5 class="mb-1"><a href="pages-profile.html" class="text-body">Donald Palmer</a>
                                </h5>
                                <p class="text-muted mb-0 ff-secondary">UI/UX Designer</p>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                </div> --}}
                <!-- end row -->
                {{-- <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="card-body text-center p-4">
                                <div class="avatar-xl mx-auto mb-4 position-relative">
                                    <img src="assets/images/users/avatar-5.jpg" alt=""
                                        class="img-fluid rounded-circle">
                                    <a href="apps-mailbox.html"
                                        class="btn btn-success btn-sm position-absolute bottom-0 end-0 rounded-circle avatar-xs">
                                        <div class="avatar-title bg-transparent">
                                            <i class="ri-mail-fill align-bottom"></i>
                                        </div>
                                    </a>
                                </div>
                                <!-- end card body -->
                                <h5 class="mb-1"><a href="pages-profile.html" class="text-body">Erica Kernan</a>
                                </h5>
                                <p class="text-muted mb-0 ff-secondary">Web Designer</p>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="card-body text-center p-4">
                                <div class="avatar-xl mx-auto mb-4 position-relative">
                                    <img src="assets/images/users/avatar-4.jpg" alt=""
                                        class="img-fluid rounded-circle">
                                    <a href="apps-mailbox.html"
                                        class="btn btn-success btn-sm position-absolute bottom-0 end-0 rounded-circle avatar-xs">
                                        <div class="avatar-title bg-transparent">
                                            <i class="ri-mail-fill align-bottom"></i>
                                        </div>
                                    </a>
                                </div>
                                <!-- end card body -->
                                <h5 class="mb-1"><a href="pages-profile.html" class="text-body">Alexis Clarke</a>
                                </h5>
                                <p class="text-muted mb-0 ff-secondary">Backend Developer</p>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="card-body text-center p-4">
                                <div class="avatar-xl mx-auto mb-4 position-relative">
                                    <img src="assets/images/users/avatar-6.jpg" alt=""
                                        class="img-fluid rounded-circle">
                                    <a href="apps-mailbox.html"
                                        class="btn btn-success btn-sm position-absolute bottom-0 end-0 rounded-circle avatar-xs">
                                        <div class="avatar-title bg-transparent">
                                            <i class="ri-mail-fill align-bottom"></i>
                                        </div>
                                    </a>
                                </div>
                                <!-- end card body -->
                                <h5 class="mb-1"><a href="pages-profile.html" class="text-body">Marie Ward</a></h5>
                                <p class="text-muted mb-0 ff-secondary">Full Stack Developer</p>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->

                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="card-body text-center p-4">
                                <div class="avatar-xl mx-auto mb-4 position-relative">
                                    <img src="assets/images/users/avatar-7.jpg" alt=""
                                        class="img-fluid rounded-circle">
                                    <a href="apps-mailbox.html"
                                        class="btn btn-success btn-sm position-absolute bottom-0 end-0 rounded-circle avatar-xs">
                                        <div class="avatar-title bg-transparent">
                                            <i class="ri-mail-fill align-bottom"></i>
                                        </div>
                                    </a>
                                </div>
                                <!-- end card body -->
                                <h5 class="mb-1"><a href="pages-profile.html" class="text-body">Jack Gough</a></h5>
                                <p class="text-muted mb-0 ff-secondary">React Js Developer</p>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                </div> --}}
                <!-- end row -->
                {{-- <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center mt-2">
                            <a href="pages-team.html" class="btn btn-primary">View All Members <i
                                    class="ri-arrow-right-line ms-1 align-bottom"></i></a>
                        </div>
                    </div>
                </div> --}}
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#f3f6f9" fill-opacity="1"
                d="M0,192L48,186.7C96,181,192,171,288,181.3C384,192,480,224,576,240C672,256,768,256,864,245.3C960,235,1056,213,1152,208C1248,203,1344,213,1392,218.7L1440,224L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z">
            </path>
        </svg>
        <!-- end team -->

        <!-- Start footer -->
        <footer id="footer" class="text-indigo fw-bold text-center py-5 bg-white">
            <p>Created with <i class="ri-heart-fill text-danger"></i> by <a
                    href="https://www.instagram.com/danialicahyadi/" class="text-indigo font-weight"
                    target="_blank">Dani
                    Ali Cahyadi</a></p>
            <div class="col-12">
                <div class="text-center mt-3 mt-sm-0">
                    <ul class="list-inline mb-0 footer-social-link">
                        <li class="list-inline-item">
                            <a href="https://instagram.com/danialicahyadi" class="avatar-xs d-block">
                                <div class="avatar-title rounded-circle">
                                    <i class="ri-instagram-fill"></i>
                                </div>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://github.com/danialicahyadi" class="avatar-xs d-block">
                                <div class="avatar-title rounded-circle">
                                    <i class="ri-github-fill"></i>
                                </div>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://www.linkedin.com/in/danialicahyadi/" class="avatar-xs d-block">
                                <div class="avatar-title rounded-circle">
                                    <i class="ri-linkedin-fill"></i>
                                </div>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://wa.me/6281289124536" class="avatar-xs d-block">
                                <div class="avatar-title rounded-circle">
                                    <i class="ri-whatsapp-fill"></i>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </footer>
        {{-- <footer class="custom-footer bg-dark py-5 position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 mt-4">
                        <div>
                            <div>
                                <img src="assets/images/logo-light.png" alt="logo light" height="17">
                            </div>
                            <div class="mt-4 fs-13">
                                <p>Premium Multipurpose Admin & Dashboard Template</p>
                                <p class="ff-secondary">You can build any type of web application like eCommerce, CRM,
                                    CMS, Project management apps, Admin Panels, etc using Velzon.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7 ms-lg-auto">
                        <div class="row">
                            <div class="col-sm-4 mt-4">
                                <h5 class="text-white mb-0">Company</h5>
                                <div class="text-muted mt-3">
                                    <ul class="list-unstyled ff-secondary footer-list">
                                        <li><a href="pages-profile.html">About Us</a></li>
                                        <li><a href="pages-gallery.html">Gallery</a></li>
                                        <li><a href="apps-projects-overview.html">Projects</a></li>
                                        <li><a href="pages-timeline.html">Timeline</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-4 mt-4">
                                <h5 class="text-white mb-0">Apps Pages</h5>
                                <div class="text-muted mt-3">
                                    <ul class="list-unstyled ff-secondary footer-list">
                                        <li><a href="pages-pricing.html">Calendar</a></li>
                                        <li><a href="apps-mailbox.html">Mailbox</a></li>
                                        <li><a href="apps-chat.html">Chat</a></li>
                                        <li><a href="apps-crm-deals.html">Deals</a></li>
                                        <li><a href="apps-tasks-kanban.html">Kanban Board</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-4 mt-4">
                                <h5 class="text-white mb-0">Support</h5>
                                <div class="text-muted mt-3">
                                    <ul class="list-unstyled ff-secondary footer-list">
                                        <li><a href="pages-faqs.html">FAQ</a></li>
                                        <li><a href="pages-faqs.html">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row text-center text-sm-start align-items-center mt-5">
                    <div class="col-sm-6">

                        <div>
                            <p class="copy-rights mb-0">
                                <script>
                                    document.write(new Date().getFullYear())
                                </script> © Velzon - Themesbrand
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end mt-3 mt-sm-0">
                            <ul class="list-inline mb-0 footer-social-link">
                                <li class="list-inline-item">
                                    <a href="https://instagram.com/danialicahyadi" class="avatar-xs d-block">
                                        <div class="avatar-title rounded-circle">
                                            <i class="ri-instagram-fill"></i>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="https://github.com/danialicahyadi" class="avatar-xs d-block">
                                        <div class="avatar-title rounded-circle">
                                            <i class="ri-github-fill"></i>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript: void(0);" class="avatar-xs d-block">
                                        <div class="avatar-title rounded-circle">
                                            <i class="ri-linkedin-fill"></i>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript: void(0);" class="avatar-xs d-block">
                                        <div class="avatar-title rounded-circle">
                                            <i class="ri-google-fill"></i>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript: void(0);" class="avatar-xs d-block">
                                        <div class="avatar-title rounded-circle">
                                            <i class="ri-dribbble-line"></i>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer> --}}
        <!-- end footer -->


        <!--start back-to-top-->
        <button onclick="topFunction()" class="btn btn-danger btn-icon landing-back-top" id="back-to-top">
            <i class="ri-arrow-up-line"></i>
        </button>
        <!--end back-to-top-->

    </div>
    <!-- end layout wrapper -->


    <!-- JAVASCRIPT -->
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>
    <script src="assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="assets/js/plugins.js"></script>

    <!--Swiper slider js-->
    <script src="assets/libs/swiper/swiper-bundle.min.js"></script>

    <!-- landing init -->
    <script src="assets/js/pages/landing.init.js"></script>
</body>

</html>

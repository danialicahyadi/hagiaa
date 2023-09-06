<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
    <!-- My CSS -->
    <!-- <link rel="stylesheet" href="style.css" /> -->
    <link rel="stylesheet" href="{{ asset('assets-portfolio/style.css') }}" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet">

    <title>My Portfolio | Dani Ali Cahyadi</title>
</head>

<body id="home">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm fixed-top" style="background-color: yellow">
        <div class="container">
            <a class="navbar-brand" href="#">Dani Ali Cahyadi</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#projects">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Jumbotron -->
    <section class="jumbotron text-center">
        <img src="{{ asset('assets-portfolio/img/dani.png') }}" alt="Dani Ali Cahyadi" width="200"
            class="rounded-circle img-thumbnail" />
        <h1 class="display-4">Dani Ali Cahyadi</h1>
        <p class="lead"><strong>Freshgraduate | Freelancer</strong></p>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#fff" fill-opacity="1"
                d="M0,32L40,58.7C80,85,160,139,240,138.7C320,139,400,85,480,58.7C560,32,640,32,720,42.7C800,53,880,75,960,96C1040,117,1120,139,1200,122.7C1280,107,1360,53,1400,26.7L1440,0L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z">
            </path>
        </svg>
    </section>
    <!-- Akhir Jumbotron -->

    <!-- About -->
    <section id="about">
        <div class="container">
            <div class="row text-center mb-3">
                <div class="col">
                    <h2>About</h2>
                </div>
            </div>
            <div class="row justify-content-center fs-5 text-center">
                <div class="col-md-4">
                    <p>
                        Saya merupakan Freshgraduate lulusan S1 Sistem Informasi dari Fakultas Ilmu Komputer Universitas
                        Pembangunan Nasional Veteran Jakarta (UPN Veteran Jakarta). Untuk kegiatan saya saat ini masih
                        dalam tahap menambah kompetensi
                        diri dan disambi mencari pekerjaan untuk bisa langsung mendapatkan pengalaman dari bidang yang
                        telah saya tempuh yaitu IT.
                    </p>
                </div>
                <div class="col-md-4">Pengalaman saya di bidang Programmer masih di bilang singkat, saya mulai mengenal
                    pemrograman baru 6 bulan. Dan cara belajar saya langsung terjun di suatu perusahaan yang bisa di
                    bilang cukup baik dalam hal digitalisasi.</div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#f3f9a2" fill-opacity="1"
                d="M0,128L40,112C80,96,160,64,240,74.7C320,85,400,139,480,154.7C560,171,640,149,720,133.3C800,117,880,107,960,96C1040,85,1120,75,1200,90.7C1280,107,1360,149,1400,170.7L1440,192L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z">
            </path>
        </svg>
    </section>
    <!-- Akhir About -->

    <!-- Projects -->
    <section id="projects">
        <div class="container">
            <div class="row text-center mb-3">
                <div class="col">
                    <h2>My Projects</h2>
                </div>
            </div>
            <div class="row justify-content-evenly">
                <div class="col-md-4 mb-3">
                    <div class="card text-center" style="hover;">
                        <img src="{{ asset('assets-portfolio/img/projects/Project1.png') }}" class="card-img-top"
                            alt="Project 1" />
                        <div class="card-body">
                            <p class="card-text text-center">Project pertama saya di dunia pemrograman yaitu ini,
                                company profile SGS LawFirm</p>
                            <a href="https://www.sgslawfirm.com/" class="btn btn-primary" target="_blank">Show
                                Project</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="{{ asset('assets-portfolio/img/projects/3.jpg') }}" class="card-img-top"
                            alt="Project 2" />
                        <div class="card-body">
                            <p class="card-text text-center">Project kedua saya, aplikasi CRUD untuk membuat resi atau
                                bukti tanda terima di usaha ibu saya sendiri ehe</p>
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
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#fff" fill-opacity="1"
                d="M0,32L40,37.3C80,43,160,53,240,74.7C320,96,400,128,480,128C560,128,640,96,720,112C800,128,880,192,960,186.7C1040,181,1120,107,1200,80C1280,53,1360,75,1400,85.3L1440,96L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z">
            </path>
        </svg>
    </section>
    <!-- Akhir Projects -->

    <!-- Contact -->
    <section id="contact">
        <div class="container">
            <div class="row text-center mb-3">
                <div class="col">
                    <h2>Contact Me</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="name"
                                aria-describedby="emailHelp" />
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" aria-describedby="email" />
                        </div>
                        <div class="mb-3">
                            <label for="pesan" class="form-label">Pesan</label>
                            <textarea class="form-control" id="pesan" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#f3f9a2" fill-opacity="1"
                d="M0,96L40,106.7C80,117,160,139,240,128C320,117,400,75,480,69.3C560,64,640,96,720,106.7C800,117,880,107,960,106.7C1040,107,1120,117,1200,128C1280,139,1360,149,1400,154.7L1440,160L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z">
            </path>
        </svg>
    </section>
    <!-- Akhir Contact -->

    <!-- Footer -->
    <footer id="footer" class="text-indigo fw-bold text-center pb-5">
        <p>Created with <i class="bi bi-heart-fill text-danger"></i> by <a
                href="https://www.instagram.com/danialicahyadi/" class="text-indigo font-weigh" target="_blank">Dani
                Ali Cahyadi</a></p>
    </footer>
    <!-- Akhir Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>

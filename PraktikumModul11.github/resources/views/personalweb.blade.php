<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/utilities/bsb-overlay/bsb-overlay.css">
    <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/utilities/margin/margin.css">
    <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/utilities/padding/padding.css">


    <!-- Font Awesome for Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <title>Alvyn Wira</title>
    @vite('resources/sass/app.scss')

</head>

<body>
    <!-- Navbarku -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">Alvyn Wira</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#journey">Journey</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#basketball">Basketball</a>
                    </li>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#photography">Photography</a>
                    </li>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Profile -->
    <section class="profileku text-center">
        <img src="{{ Vite::asset('resources/img/profile.jpg') }}" class="rounded-circle img-thumbnail"
            style="width: 180px; height: 180px;" />
        <h1 class="display-4">Alvyn Wira</h1>
        <p class="lead">Mahasiswa | Athlete</p>
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#ffe3e3" fill-opacity="1"
            d="M0,224L8,213.3C16,203,32,181,48,154.7C64,128,80,96,96,117.3C112,139,128,213,144,234.7C160,256,176,224,192,229.3C208,235,224,277,240,288C256,299,272,277,288,234.7C304,192,320,128,336,122.7C352,117,368,171,384,202.7C400,235,416,245,432,213.3C448,181,464,107,480,64C496,21,512,11,528,26.7C544,43,560,85,576,112C592,139,608,149,624,165.3C640,181,656,203,672,181.3C688,160,704,96,720,96C736,96,752,160,768,186.7C784,213,800,203,816,186.7C832,171,848,149,864,128C880,107,896,85,912,106.7C928,128,944,192,960,192C976,192,992,128,1008,112C1024,96,1040,128,1056,149.3C1072,171,1088,181,1104,165.3C1120,149,1136,107,1152,117.3C1168,128,1184,192,1200,213.3C1216,235,1232,213,1248,218.7C1264,224,1280,256,1296,266.7C1312,277,1328,267,1344,250.7C1360,235,1376,213,1392,218.7C1408,224,1424,256,1432,272L1440,288L1440,0L1432,0C1424,0,1408,0,1392,0C1376,0,1360,0,1344,0C1328,0,1312,0,1296,0C1280,0,1264,0,1248,0C1232,0,1216,0,1200,0C1184,0,1168,0,1152,0C1136,0,1120,0,1104,0C1088,0,1072,0,1056,0C1040,0,1024,0,1008,0C992,0,976,0,960,0C944,0,928,0,912,0C896,0,880,0,864,0C848,0,832,0,816,0C800,0,784,0,768,0C752,0,736,0,720,0C704,0,688,0,672,0C656,0,640,0,624,0C608,0,592,0,576,0C560,0,544,0,528,0C512,0,496,0,480,0C464,0,448,0,432,0C416,0,400,0,384,0C368,0,352,0,336,0C320,0,304,0,288,0C272,0,256,0,240,0C224,0,208,0,192,0C176,0,160,0,144,0C128,0,112,0,96,0C80,0,64,0,48,0C32,0,16,0,8,0L0,0Z">
        </path>
    </svg>
    <!-- Akhir Profile -->

    <!-- About me -->
    <section id="about">
        <div class="container pt-10 pb-5">
            <div class="row text-center mt-4 mb-4">
                <div class="col">
                    <h2>About Me</h2>
                </div>
            </div>
            <div class="row justify-content-center text-center">
                <div class="col-md-4 about-me">
                    <p>Saya adalah mahasiswa semester 3 di Telkom University Surabaya. Saya selalu bersemangat untuk
                        terus
                        belajar dan berkembang. Selain fokus pada pendidikan, saya juga aktif mengikuti berbagai
                        kegiatan kampus, Contohnya saya menjadi Wakil UKM Bola Basket dan mengikuti Pengabdian
                        Masyarakat serta Penelitian Dosen.</p>
                </div>
                <div class="col-md-4 about-me">
                    <p>Sebagai seorang atlet basket, saya berkomitmen untuk memberikan yang terbaik di setiap
                        pertandingan, sekaligus menjaga nilai sportivitas dan kerjasama tim. Bergabung dengan tim basket
                        Telkom University Surabaya adalah kebanggaan tersendiri, di mana saya terus mengasah kemampuan
                        dan berkontribusi untuk meraih prestasi bersama tim.</p>
                </div>
                <div class="col-md-4 about-me mb-9">
                    <p>Fotografi adalah salah satu passion saya yang memungkinkan saya untuk mengekspresikan kreativitas
                        dan
                        menangkap momen bermakna. Saya senang berbagi cerita melalui karya fotografi saya, Seperti
                        dokumentasi dan karya seni. Selain itu, saya juga menjadi talent Telkom University Surabaya
                        sebagai model foto. </p>
                </div>
            </div>
        </div>
    </section> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#ffe3e3" fill-opacity="1"
            d="M0,128L7.7,154.7C15.5,181,31,235,46,240C61.9,245,77,203,93,202.7C108.4,203,124,245,139,234.7C154.8,224,170,160,186,128C201.3,96,217,96,232,106.7C247.7,117,263,139,279,133.3C294.2,128,310,96,325,74.7C340.6,53,356,43,372,53.3C387.1,64,403,96,418,144C433.5,192,449,256,465,245.3C480,235,495,149,511,138.7C526.5,128,542,192,557,218.7C572.9,245,588,235,604,202.7C619.4,171,635,117,650,96C665.8,75,681,85,697,117.3C712.3,149,728,203,743,229.3C758.7,256,774,256,790,218.7C805.2,181,821,107,836,64C851.6,21,867,11,883,16C898.1,21,914,43,929,53.3C944.5,64,960,64,975,80C991,96,1006,128,1022,138.7C1037.4,149,1053,139,1068,138.7C1083.9,139,1099,149,1115,138.7C1130.3,128,1146,96,1161,101.3C1176.8,107,1192,149,1208,154.7C1223.2,160,1239,128,1254,128C1269.7,128,1285,160,1301,197.3C1316.1,235,1332,277,1347,277.3C1362.6,277,1378,235,1394,192C1409,149,1425,107,1432,85.3L1440,64L1440,320L1432.3,320C1424.5,320,1409,320,1394,320C1378.1,320,1363,320,1347,320C1331.6,320,1316,320,1301,320C1285.2,320,1270,320,1254,320C1238.7,320,1223,320,1208,320C1192.3,320,1177,320,1161,320C1145.8,320,1130,320,1115,320C1099.4,320,1084,320,1068,320C1052.9,320,1037,320,1022,320C1006.5,320,991,320,975,320C960,320,945,320,929,320C913.5,320,898,320,883,320C867.1,320,852,320,836,320C820.6,320,805,320,790,320C774.2,320,759,320,743,320C727.7,320,712,320,697,320C681.3,320,666,320,650,320C634.8,320,619,320,604,320C588.4,320,573,320,557,320C541.9,320,526,320,511,320C495.5,320,480,320,465,320C449,320,434,320,418,320C402.6,320,387,320,372,320C356.1,320,341,320,325,320C309.7,320,294,320,279,320C263.2,320,248,320,232,320C216.8,320,201,320,186,320C170.3,320,155,320,139,320C123.9,320,108,320,93,320C77.4,320,62,320,46,320C31,320,15,320,8,320L0,320Z">
        </path>
    </svg>

    <!-- Akhir About Me -->


    <!-- My Journey -->
    <section id="journey" class="py-5">
        <div class="container pt-5">
            <div class="row text-center mb-4">
                <div class="col">
                    <h2>My Journey</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="position-relative">
                        <ul class="list-unstyled">
                            <!-- Timeline item 1 -->
                            <li class="d-flex mb-4">
                                <div class="timeline-badge bg-danger text-white rounded-circle d-flex align-items-center justify-content-center me-3"
                                    style="width: 50px; height: 50px;">
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="timeline-panel p-3  rounded-3"
                                    style="width: 80%; background-color: #ffffff;">
                                    <h5 class="timeline-title mb-2">2023</h5>
                                    <p>Graduated from SMA Negeri 1 Sooko Mojokerto
                                    </p>
                                </div>
                            </li>
                            <!-- Timeline item 2 -->
                            <li class="d-flex mb-4 flex-row-reverse">
                                <div class="timeline-badge bg-danger text-white rounded-circle d-flex align-items-center justify-content-center ms-3"
                                    style="width: 50px; height: 50px;">
                                    <i class="fas fa-medal"></i>
                                </div>
                                <div class="timeline-panel p-3  rounded-3 text-end"
                                    style="width: 80%; background-color: #ffffff;">
                                    <h5 class="timeline-title mb-2 text-end">2023</h5>
                                    <p>Representing the Faculty and Winning 1st Place in TUS CUP Basketball</p>
                                </div>
                            </li>
                            <!-- Timeline item 3 -->
                            <li class="d-flex mb-4">
                                <div class="timeline-badge bg-danger text-white rounded-circle d-flex align-items-center justify-content-center me-3"
                                    style="width: 50px; height: 50px;">
                                    <i class="fas fa-briefcase"></i>
                                </div>
                                <div class="timeline-panel p-3 rounded-3"
                                    style="width: 80%; background-color: #ffffff;">
                                    <h5 class="timeline-title mb-2">2023</h5>
                                    <p>Working and Managing Human Resources at PT. Wira Wiri</p>
                                </div>
                            </li>
                            <!-- Timeline item 4 -->
                            <li class="d-flex mb-4 flex-row-reverse">
                                <div class="timeline-badge bg-danger text-white rounded-circle d-flex align-items-center justify-content-center ms-3"
                                    style="width: 50px; height: 50px;">
                                    <i class="fas fa-graduation-cap"></i>
                                </div>
                                <div class="timeline-panel p-3  rounded-3 text-end"
                                    style="width: 80%; background-color: #ffffff;">
                                    <h5 class="timeline-title mb-2">2024</h5>
                                    <p>As a Student of Information Systems at Telkom University Surabaya</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#ffe3e3" fill-opacity="1"
            d="M0,32L0,160L160,160L160,224L320,224L320,192L480,192L480,96L640,96L640,224L800,224L800,32L960,32L960,160L1120,160L1120,64L1280,64L1280,192L1440,192L1440,0L1280,0L1280,0L1120,0L1120,0L960,0L960,0L800,0L800,0L640,0L640,0L480,0L480,0L320,0L320,0L160,0L160,0L0,0L0,0Z">
        </path>
    </svg>
    <!-- Akhir My Journey -->

    <!-- Basket -->
    <section id="basketball">
        <div class="container pt-8">
            <div class="row text-center mb-4">
                <div class="col">
                    <h2>Basketball</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ Vite::asset('resources/img/Red.jpg') }}"class="card-img-top" alt="Project 1">
                        <div class="card-body">
                            <p class="card-text">TUS vs Ubaya</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ Vite::asset('resources/img/SI CUP.jpg') }}" class="card-img-top"
                            alt="Project 2">
                        <div class="card-body">
                            <p class="card-text">Team IS-06-02</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ Vite::asset('resources/img/White.jpg') }}" class="card-img-top" alt="Project 3">
                        <div class="card-body">
                            <p class="card-text">TUS vs UINSA</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ Vite::asset('resources/img/TUS CUP.jpg') }}"class="card-img-top" alt="Project 3">
                        <div class="card-body">
                            <p class="card-text">Champion TUS CUP</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ Vite::asset('resources/img/Champion.jpg') }}"class="card-img-top"
                            alt="Project 3">
                        <div class="card-body">
                            <p class="card-text">Champion SI CUP</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ Vite::asset('resources/img/DBL.jpg') }}"class="card-img-top" alt="Project 3">
                        <div class="card-body">
                            <p class="card-text">Anthem in DBL ARENA</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#ffe3e3" fill-opacity="1"
            d="M0,96L0,96L144,96L144,288L288,288L288,192L432,192L432,288L576,288L576,192L720,192L720,256L864,256L864,96L1008,96L1008,224L1152,224L1152,288L1296,288L1296,224L1440,224L1440,320L1296,320L1296,320L1152,320L1152,320L1008,320L1008,320L864,320L864,320L720,320L720,320L576,320L576,320L432,320L432,320L288,320L288,320L144,320L144,320L0,320L0,320Z">
        </path>
    </svg>
    <!-- Akhir Basket -->

    <!-- Foto -->
    <section id="photography" class="py-5">
        <div class="container">
            <div class="row text-center mt-4 mb-4">
                <div class="col">
                    <h2>My Photo</h2>
                </div>
                <div class="d-flex justify-content-center mb-4 mt-4">
                    <div id="carouselExampleDark" class="carousel carousel-light slide col-10">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                                <img src="{{ Vite::asset('resources/img/asset1.jpeg') }}" class="d-block w-100" alt="fototalent">
                                <div class="carousel-caption d-none d-md-block text-white">
                                    <p>Harmony Excellent Integrity</p>
                                </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                                <img src="{{ Vite::asset('resources/img/asset2.jpeg') }}" class="d-block w-100" alt="fototalent">
                                <div class="carousel-caption d-none d-md-block text-white">
                                    <p>Hard Work Makes the Dream Work</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="{{ Vite::asset('resources/img/asset3.jpeg') }}" class="d-block w-100" alt="fototalent">
                                <div class="carousel-caption d-none d-md-block text-white">
                                    <p>Though Personality Innovative Growth Shapping the World</p>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#ffe3e3" fill-opacity="1" d="M0,32L720,320L1440,64L1440,0L720,0L0,0Z"></path>
    </svg>
    <!-- Akhir Foto -->

    <!-- Contact -->
    <section id="contact">
        <div class="container">
            <div class="row text-center mt-4 mb-4">
                <div class="col">
                    <h2>My Contact</h2>
                </div>
            </div>
            <div class="container mb-10 mt-4">
                <div class="row">
                    <div class="col-12">
                        <div class="border-dark-red rounded shadow-sm overflow-hidden">
                            <div class="card-body p-0">
                                <div class="row gy-3 gy-md-4 gy-lg-0">
                                    <div class="col-12 col-lg-6  overlay-dark-red p-5 background-position-center background-size-cover"
                                        style="--bsb-overlay-opacity: 0.7; background-image: url('./assets/img/contact-img-1.webp');">
                                        <div class="row align-items-lg-center justify-content-center h-100">
                                            <div class="col-11 col-xl-10">
                                                <div class="contact-info-wrapper py-4 py-xl-5">
                                                    <h2 class="h1 mb-3">Contact Me</h2>
                                                    <p class="lead fs-4 opacity-75 mb-4 mb-xxl-5"> If you need help or
                                                        business needs with me, you can contact me through the contact
                                                        below
                                                    </p>
                                                    <div class="d-flex mb-4 mb-xxl-5">
                                                        <div class="me-4 text-danger">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="32"
                                                                height="32" fill="currentColor" class="bi bi-geo"
                                                                viewBox="0 0 16 16">
                                                                <path fill-rule="evenodd"
                                                                    d="M8 1a3 3 0 1 0 0 6 3 3 0 0 0 0-6zM4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999zm2.493 8.574a.5.5 0 0 1-.411.575c-.712.118-1.28.295-1.655.493a1.319 1.319 0 0 0-.37.265.301.301 0 0 0-.057.09V14l.002.008a.147.147 0 0 0 .016.033.617.617 0 0 0 .145.15c.165.13.435.27.813.395.751.25 1.82.414 3.024.414s2.273-.163 3.024-.414c.378-.126.648-.265.813-.395a.619.619 0 0 0 .146-.15.148.148 0 0 0 .015-.033L12 14v-.004a.301.301 0 0 0-.057-.09 1.318 1.318 0 0 0-.37-.264c-.376-.198-.943-.375-1.655-.493a.5.5 0 1 1 .164-.986c.77.127 1.452.328 1.957.594C12.5 13 13 13.4 13 14c0 .426-.26.752-.544.977-.29.228-.68.413-1.116.558-.878.293-2.059.465-3.34.465-1.281 0-2.462-.172-3.34-.465-.436-.145-.826-.33-1.116-.558C3.26 14.752 3 14.426 3 14c0-.599.5-1 .961-1.243.505-.266 1.187-.467 1.957-.594a.5.5 0 0 1 .575.411z" />
                                                            </svg>
                                                        </div>
                                                        <div>
                                                            <h4 class="mb-3">Address</h4>
                                                            <address class="mb-0 opacity-75">61363 Ds. Jetak Balongmojo
                                                                RT3/RW1 Kecamatan Puri Mojokerto</address>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-4 mb-xxl-5">
                                                        <div class="col-12 col-xxl-6">
                                                            <div class="d-flex mb-4 mb-xxl-0">
                                                                <div class="me-4 text-danger">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="32" height="32"
                                                                        fill="currentColor"
                                                                        class="bi bi-telephone-outbound"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511zM11 .5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V1.707l-4.146 4.147a.5.5 0 0 1-.708-.708L14.293 1H11.5a.5.5 0 0 1-.5-.5z" />
                                                                    </svg>
                                                                </div>
                                                                <div>
                                                                    <h4 class="mb-3">Phone</h4>
                                                                    <p class="mb-0">
                                                                        <a class="link-dark link-opacity-75 link-opacity-100-hover text-decoration-none"
                                                                            href="tel:+15057922430">(62)
                                                                            859-6710-4371</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-xxl-6">
                                                            <div class="d-flex mb-0">
                                                                <div class="me-4 text-danger">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="32" height="32"
                                                                        fill="currentColor" class="bi bi-envelope-at"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2H2Zm3.708 6.208L1 11.105V5.383l4.708 2.825ZM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2-7-4.2Z" />
                                                                        <path
                                                                            d="M14.247 14.269c1.01 0 1.587-.857 1.587-2.025v-.21C15.834 10.43 14.64 9 12.52 9h-.035C10.42 9 9 10.36 9 12.432v.214C9 14.82 10.438 16 12.358 16h.044c.594 0 1.018-.074 1.237-.175v-.73c-.245.11-.673.18-1.18.18h-.044c-1.334 0-2.571-.788-2.571-2.655v-.157c0-1.657 1.058-2.724 2.64-2.724h.04c1.535 0 2.484 1.05 2.484 2.326v.118c0 .975-.324 1.39-.639 1.39-.232 0-.41-.148-.41-.42v-2.19h-.906v.569h-.03c-.084-.298-.368-.63-.954-.63-.778 0-1.259.555-1.259 1.4v.528c0 .892.49 1.434 1.26 1.434.471 0 .896-.227 1.014-.643h.043c.118.42.617.648 1.12.648Zm-2.453-1.588v-.227c0-.546.227-.791.573-.791.297 0 .572.192.572.708v.367c0 .573-.253.744-.564.744-.354 0-.581-.215-.581-.8Z" />
                                                                    </svg>
                                                                </div>
                                                                <div>
                                                                    <h4 class="mb-3">E-Mail</h4>
                                                                    <p class="mb-0">
                                                                        <a class="link-dark link-opacity-75 link-opacity-100-hover text-decoration-none"
                                                                            href="mailto:demo@yourdomain.com">alvynpratama60@gmail.com</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <div class="row align-items-lg-center h-100">
                                            <div class="col-12">
                                                <form action="#!">
                                                    <div class="row gy-4 gy-xl-5 p-4 p-xl-5">
                                                        <div class="col-12">
                                                            <label for="fullname" class="form-label">Full Name <span
                                                                    class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" id="fullname"
                                                                name="fullname" value="" required>
                                                        </div>
                                                        <div class="col-12 col-md-6">
                                                            <label for="email" class="form-label">Email <span
                                                                    class="text-danger">*</span></label>
                                                            <div class="input-group">
                                                                <span class="input-group-text">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="16" height="16"
                                                                        fill="currentColor" class="bi bi-envelope"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                                                                    </svg>
                                                                </span>
                                                                <input type="email" class="form-control"
                                                                    id="email" name="email" value=""
                                                                    required>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-md-6">
                                                            <label for="phone" class="form-label">Phone
                                                                Number</label>
                                                            <div class="input-group">
                                                                <span class="input-group-text">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="16" height="16"
                                                                        fill="currentColor" class="bi bi-telephone"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                                                    </svg>
                                                                </span>
                                                                <input type="tel" class="form-control"
                                                                    id="phone" name="phone" value="">
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <label for="subject" class="form-label">Subject <span
                                                                    class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" id="subject"
                                                                name="subject" value="" required>
                                                        </div>
                                                        <div class="col-12">
                                                            <label for="message" class="form-label">Message <span
                                                                    class="text-danger">*</span></label>
                                                            <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="d-grid">
                                                                <button class="btn btn-danger btn-lg "
                                                                    type="submit">Send
                                                                    Message</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- Akhir -->

    <!-- Footer -->
    <footer>
        <div class="social-icons">
            <a href="https://instagram.com/alvynwrr" target="_blank"><i class="fab fa-instagram"></i> @alvynwrr</a>
            <a href="https://tiktok.com/@shoyojousei" target="_blank"><i class="fab fa-tiktok"></i> shoyojousei</a>
            <a href="https://youtube.com/@alvynwrr" target="_blank"><i class="fab fa-youtube"></i> alvynwrr</a>
        </div>
    </footer>
    <!-- Akhir Footer -->
    @vite('resources/js/app.js')
</body>

</html>

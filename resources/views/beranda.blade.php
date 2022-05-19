@extends('layout.main')


@section('content')
    <header class="w-full py-2 bg-dark">
        <div class="d-flex justify-content-center mx-5 px-5 py-2">

            <div style="width: 550px; margin-right: 100px">
                <marquee behavior="scroll" direction="left" class="text-white">
                    WIFI EDUKASI SMKN11 BANDUNG • <a href="#" class="text-decoration-none text-white fw-light">Internet of
                        Things SMKN11 Bandung</a> • <a href="#" class="text-decoration-none text-white fw-light">Smart School
                        SMKN 11 Bandung</a> • <a href="#" class="text-decoration-none text-white fw-light">Protokol Covid-19
                        di SMKN 11 Bandung</a>
                </marquee>
            </div>
            <h1 class="text-white fw-bold px-2 fs-6">SMKN 11 BDG</h1>
            <h1 class="text-white fw-light fs-6">Telepon : (022) 6652442 Indonesia | English</h1>
        </div>
    </header>

    <div class="d-flex justify-content-center" style="margin-top: 3em; margin-bottom: 3em">
        <nav class="nav nav-masthead justify-content-center float-md-end">
            <a class="linkz text-decoration-none fw-normal mx-4 py-1 hover-underline-animation" href="#">BERITA SEKOLAH</a>
            <a class="linkz text-decoration-none fw-normal mx-4 py-1 hover-underline-animation" href="#">SEKOLAH SEHAT</a>
            <a class="linkz text-decoration-none fw-normal mx-4 py-1 hover-underline-animation" href="#">PUSAT BELAJAR</a>
            <a class="linkz text-decoration-none fw-normal mx-4 py-1 hover-underline-animation" href="#">BACAAN TAMBAHAN</a>
            <a class="linkz text-decoration-none fw-normal mx-4 py-1 hover-underline-animation" href="#">TENTANG WIFI
                EDUKASI</a>
            <a class="linkz text-decoration-none fw-normal mx-4 py-1 hover-underline-animation" href="#">GALERI SISWA</a>
            <a class="linkz text-decoration-none fw-normal mx-4 py-1 hover-underline-animation" href="#">GALERI GURU</a>
        </nav>
    </div>

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">




        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner" style="height: 800px;">
            <div class="carousel-item active">
                <img src="https://images.unsplash.com/photo-1496181133206-80ce9b88a853?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1471"
                    class="w-100 relative" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470"
                    class="w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1499951360447-b19be8fe80f5?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470"
                    class="w-100" alt="...">
            </div>
            <div class="carousel-caption d-md-block">
                <center style="margin-bottom: 5em">
                    <h1>Wifi Edukasi SMKN 11 Bandung</h1>
                    <p class="w-50">Wifi edukasi SMKN 11 Bandung dikembangkan agar seluruh
                        warga SMKN 11 Bandung dan masyarakat sekitar Kelurahan
                        Sukaraja dan Kecamatan Cicendo mendapatkan informasi</p>
                </center>
            </div>
        </div>



        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="d-flex justify-content-center" style="margin-top: 15em; margin-bottom: 2em">
        <center>
            <div class="text-dark fw-light fs-2">11 NEWS</div>
            <a href="#" class="linkz text-decoration-none fw-normal fs-5">Tampilkan Semua</a>
            <hr width="200px">
        </center>
    </div>

    <div class="container px-4">
        <div class="row gx-3 gy-3 row-cols-4">
            <div class="col">
                <div class="card">
                    <img src="https://images.unsplash.com/photo-1503676382389-4809596d5290?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1476"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">SMKN11 Kembali Sekolah Normal</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita
                            molestias id tempora porro sit ducimus eius obcaecati hic magnam totam!</p>
                        <div class="d-flex">
                            <i data-feather="eye" class="mx-2" style="color: rgb(138, 138, 138)"></i>
                            <p style="font-size: 15px">12</p>

                            <i data-feather="calendar" class="mx-2" style="color: rgb(138, 138, 138)"></i>
                            <p style="font-size: 15px">12 November 2021</p>
                        </div>
                        <a href="#" class="mt-3 d-flex justify-content-center btn btn-dark hoverbtn">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="https://images.unsplash.com/photo-1427504494785-3a9ca7044f45?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Proses Pembelajaran Tatap Muka di SMKN11</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita
                            molestias id tempora porro sit ducimus eius obcaecati hic magnam totam!</p>
                        <div class="d-flex">
                            <i data-feather="eye" class="mx-2" style="color: rgb(138, 138, 138)"></i>
                            <p style="font-size: 15px">4</p>

                            <i data-feather="calendar" class="mx-2" style="color: rgb(138, 138, 138)"></i>
                            <p style="font-size: 15px">20 November 2021</p>
                        </div>
                        <a href="#" class="mt-3 d-flex justify-content-center btn btn-dark hoverbtn">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">IOT SMKN 11 Bandung</h5>
                        <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Qui magni nam
                            non vel libero dolor molestias tempore accusantium dolores sunt! Qui magni nam non accusantium
                            dolores sunt</p>
                        <div class="d-flex">
                            <i data-feather="eye" class="mx-2" style="color: rgb(138, 138, 138)"></i>
                            <p style="font-size: 15px">8</p>

                            <i data-feather="calendar" class="mx-2" style="color: rgb(138, 138, 138)"></i>
                            <p style="font-size: 15px">22 November 2021</p>
                        </div>
                        <a href="#" class="mt-3 d-flex justify-content-center btn btn-dark hoverbtn">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="https://images.unsplash.com/photo-1434030216411-0b793f4b4173?ixlib=rb-1.2.1&raw_url=true&q=80&fm=jpg&crop=entropy&cs=tinysrgb&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Mengenal SIP EDUN SMKN 11 Bandung</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque minus
                            beatae voluptatem tenetur aperiam ab repellat quasi eveniet. Nisi, harum.</p>
                        <div class="d-flex">
                            <i data-feather="eye" class="mx-2" style="color: rgb(138, 138, 138)"></i>
                            <p style="font-size: 15px">5</p>

                            <i data-feather="calendar" class="mx-2" style="color: rgb(138, 138, 138)"></i>
                            <p style="font-size: 15px">24 November 2021</p>
                        </div>
                        <a href="#" class="mt-3 d-flex justify-content-center btn btn-dark hoverbtn">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="https://images.unsplash.com/photo-1599687351724-dfa3c4ff81b1?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Pencegahan Covid-19 di SMKN 11 Bandung</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit
                            eius dolores consequuntur tempora illo cum ad repellat, ipsa hic ipsam.</p>
                        <div class="d-flex">
                            <i data-feather="eye" class="mx-2" style="color: rgb(138, 138, 138)"></i>
                            <p style="font-size: 15px">3</p>

                            <i data-feather="calendar" class="mx-2" style="color: rgb(138, 138, 138)"></i>
                            <p style="font-size: 15px">26 November 2021</p>
                        </div>

                        <a href="#" class="mt-3 d-flex justify-content-center btn btn-dark hoverbtn">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="https://images.unsplash.com/photo-1507537509458-b8312d35a233?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Daya Tampung Penerimaan Peserta Didik Baru SMKN 11 Bandung</h5>
                        <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quibusdam
                            commodi pariatur consequuntur</p>
                        <div class="d-flex">
                            <i data-feather="eye" class="mx-2" style="color: rgb(138, 138, 138)"></i>
                            <p style="font-size: 15px">7</p>

                            <i data-feather="calendar" class="mx-2" style="color: rgb(138, 138, 138)"></i>
                            <p style="font-size: 15px">30 November 2021</p>
                        </div>
                        <a href="#" class="mt-3 d-flex justify-content-center btn btn-dark hoverbtn">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="https://images.unsplash.com/photo-1514369118554-e20d93546b30?ixlib=rb-1.2.1&raw_url=true&q=80&fm=jpg&crop=entropy&cs=tinysrgb&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Ujian Kelas XII 2022 SMKN 11 Bandung</h5>
                        <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit, doloribus
                            laboriosam! Neque cumque dolores praesentium eos perspiciatis corrupti suscipit deleniti?</p>
                        <div class="d-flex">
                            <i data-feather="eye" class="mx-2" style="color: rgb(138, 138, 138)"></i>
                            <p style="font-size: 15px">5</p>

                            <i data-feather="calendar" class="mx-2" style="color: rgb(138, 138, 138)"></i>
                            <p style="font-size: 15px">02 Desember 2021</p>
                        </div>
                        <a href="#" class="mt-3 d-flex justify-content-center btn btn-dark hoverbtn">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="https://images.unsplash.com/photo-1516321497487-e288fb19713f?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Wifi Edukasi SMKN 11 Bandung</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, amet
                            minima commodi dolorum debitis voluptas eos quia numquam? Iusto, possimus!</p>
                        <div class="d-flex">

                            <i data-feather="eye" class="mx-2" style="color: rgb(138, 138, 138)"></i>
                            <p style="font-size: 15px">18</p>

                            <i data-feather="calendar" class="mx-2" style="color: rgb(138, 138, 138)"></i>
                            <p style="font-size: 15px">05 Desember 2021</p>

                        </div>
                        <a href="#" class="mt-3 d-flex justify-content-center btn btn-dark hoverbtn">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-center" style="margin-top: 3em; margin-bottom: 2em">
        <center>
            <hr width="200px">
        </center>
    </div>

    <footer class="d-flex justify-content-center align-items-center py-4 border-top bg-dark">

        <p class="fw-bold fs-3 text-white">SUBSCRIBE <br> TO OUR NEWSLETTER</p>

        <div class="input-group w-25 mx-5">
            <input type="text" class="form-control" placeholder="Email Address">
        </div>

        <div class="btn btn-dark p-3">
            SUBSCRIBE
        </div>
    </footer>
    <footer class="d-flex justify-content-center align-items-center py-4" style="background-color: rgb(29, 29, 29);">
        <p class="mb-0" style="color: rgb(121, 121, 121)">&copy; 2022 RaihanFR</p>
    </footer>
    <script>
        feather.replace()
    </script>
@endsection

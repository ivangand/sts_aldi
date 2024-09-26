@extends('layout.layout')

@section('title', 'Projects')

@section('content')
<!-- Portfolio Section -->
<section class="content-section" id="portfolio">
    <div class="container px-4 px-lg-5">
        <div class="content-section-heading text-center">
            <h2 class="mb-5">Recent Projects</h2>
        </div>
        <div class="row gx-0">
            <!-- Example Project -->
            <div class="col-lg-6">
                <a class="portfolio-item" href="{{ url('https://emblemml.blogspot.com/2023/08/meta-ngeselin.html') }}">
                    <div class="caption">
                        <div class="caption-content">
                            <div class="h2">Meta Ciduk dan Kill!!!</div>
                            <p class="mb-0"></p>
                        </div>
                    </div>
                    <img class="img-fluid" src="assets/img/ciki banh.png" alt="Stationary" />
                </a>
            </div>
            <div class="col-lg-6">
                <a class="portfolio-item" href="{{ url('https://emblemml.blogspot.com/2023/08/hero-op-cuyyy-wajib-di-pick-or-ban.html') }}">
                    <div class="caption">
                        <div class="caption-content">
                            <div class="h2">Hero OP S28</div>
                            <p class="mb-0 text-warning"></p>
                        </div>
                    </div>
                    <img class="img-fluid" src="assets/img/arlot.jpg" alt="Ice Cream" />
                </a>
            </div>
            <div class="col-lg-6">
                <a class="portfolio-item" href="{{ url('https://emblemml.blogspot.com/2023/08/penjelasan-lengkap-lane-yang-ada-di.html') }}">
                    <div class="caption">
                        <div class="caption-content">
                            <div class="h2">3 Lane Di MLBB!!!</div>
                            <p class="mb-0 text-danger"></p>
                        </div>
                    </div>
                    <img class="img-fluid" src="assets/img/mappp.jpg" alt="Strawberries" />
                </a>
            </div>
            <div class="col-lg-6">
                <a class="portfolio-item" href="{{ url('https://emblemml.blogspot.com/2023/07/revamp-emblem-jadi-lebih-fleksibel.html') }}">
                    <div class="caption">
                        <div class="caption-content">
                            <div class="h2">Revamp Emblem</div>
                            <p class="mb-0"></p>
                        </div>
                    </div>
                    <img class="img-fluid" src="assets/img/emblemp.jpeg" alt="Workspace" />
                </a>
            </div>
            <!-- Add more projects as needed -->
        </div>
    </div>
</section>

<!-- Detail Project Section (Example Layout for Each Project) -->
<!-- This can be placed on a separate view, e.g., project-details.blade.php -->
<section class="content-section bg-light py-5" id="project-details">
    <div class="container px-4 px-lg-5">
        <h2 class="text-center mb-4">Detail Proyek</h2>
        <div class="row gx-4 gx-lg-5">
            <div class="col-md-6">
                <img src="assets/img/awal.png" class="img-fluid mb-4" alt="Stationary">
            </div>
            <div class="col-md-6">
                <h3>Stationary</h3>
                <p>
                    Proyek ini bertujuan untuk mengembangkan informasi yang menarik. Proses pembuatan melibatkan pemilihan platform Blogging, menentukan Topik, dan evaluasi pemeliharaan Blog. Hasil akhir adalah Konten berkualitas yang diterbitkan dan meningkatkan keterampilan.
                </p>
                <h5>Peran Saya:</h5>
                <p>Penyedia Informasi, Penghibur, Penyampaian Pengalaman Pribadi</p>
                <h5>Teknologi dan Alat:</h5>
                <p>Komputer dan Blogger</p>
                <a href="https://emblemml.blogspot.com/" class="btn btn-primary">Kunjungi Blog</a>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="py-4 bg-dark text-white text-center">
    <div class="container">
        <ul class="list-inline mt-2">
            <li class="list-inline-item"><a href="/" class="text-white">Home</a></li>
            <li class="list-inline-item"><a href="/about" class="text-white">About Me</a></li>
            <li class="list-inline-item"><a href="/contact" class="text-white">Contact</a></li>
        </ul>
    </div>
</footer>
@endsection

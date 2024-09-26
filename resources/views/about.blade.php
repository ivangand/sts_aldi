@extends('layout.layout')

@section('title', 'About Me')

@section('content')
<!-- About Section -->
<section class="content-section bg-light py-5" id="about">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 class="mb-4">Tentang Saya</h2>
                <img src="assets/img/pp.jpeg" alt="Foto Diri" class="rounded mb-4" width="200" height="200">
                <p class="lead mb-4">
                    Saya adalah siswa SMK Bakti Nusantara 666 dengan latar belakang pendidikan yang berfokus pada teknologi informasi dan jaringan. Saya memiliki ketertarikan dalam pemrograman.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Keterampilan dan Keahlian -->
<section class="content-section bg-white py-5">
    <div class="container px-4 px-lg-5">
        <h2 class="text-center mb-4">Keterampilan dan Keahlian</h2>
        <ul class="list-group list-group-flush">
            <li class="list-group-item text-center">Pemrograman: HTML & CSS</li>
            <li class="list-group-item text-center">Proyek Tambahan: Mengembangkan aplikasi sederhana</li>
        </ul>
    </div>
</section>

<!-- Tujuan dan Aspirasi -->
<section class="content-section bg-light py-5">
    <div class="container px-4 px-lg-5">
        <h2 class="text-center mb-4">Tujuan dan Aspirasi</h2>
        <p class="lead text-center">
            Saya bercita-cita menjadi seorang profesional di bidang teknologi informasi, khususnya dalam pengembangan perangkat lunak. Saya tertarik untuk terus belajar dan berinovasi dalam dunia teknologi.
        </p>
    </div>
</section>

<!-- Footer -->
<footer class="py-4 bg-dark text-white text-center">
    <div class="container">
        <ul class="list-inline mt-2">
            <li class="list-inline-item"><a href="/" class="text-white">Home</a></li>
            <li class="list-inline-item"><a href="/projects" class="text-white">Projects</a></li>
            <li class="list-inline-item"><a href="/contact" class="text-white">Contact</a></li>
        </ul>
    </div>
</footer>
@endsection

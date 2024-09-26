@extends('layout.layout')

@section('title', 'Home')

@section('content')
<!-- Header -->
<header class="d-flex align-items-center">
    <div class="container px-4 px-lg-5 text-center">
        <h1 class="mb-1">Bang Al</h1>
        <img src="assets/img/pp.jpeg" alt="Foto Profil" class="rounded-circle mb-3" width="150" height="150">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
    </div>
</header>

<!-- Hero Section -->
<section id="hero" class="bg-primary text-white text-center d-flex align-items-center" style="background-image: url('path_to_background_image.jpg'); height: 70vh; background-size: cover;">
    <div class="container px-4 px-lg-5">
        <h2 class="mb-3">Siswa SMK Been Yang Tertarik Pada Dunia Percodingan</h2>
        <p class="lead mb-5">Lope Peupeuleg</p>
        <a class="btn btn-light btn-xl" href="/about">Pelajari Lebih Lanjut</a>
        <a class="btn btn-outline-light btn-xl" href="/contact">Hubungi Saya</a>
    </div>
</section>

<!-- Tentang Saya (Sekilas) -->
<section id="about" class="py-5">
    <div class="container px-4 px-lg-5 text-center">
        <h2>Tentang Saya</h2>
        <p class="lead mb-4">Saya hanya seorang pelajar yang sedang belajar ilmu RPL terutama di bidang Pengembangan Perangkat Lunak dan Gim, saya dari kelas 12 PPLG 1 </p>
        <a href="{{ url('/about') }}" class="btn btn-primary">Baca Lebih Lanjut</a>
    </div>
</section>

<!-- Proyek Unggulan -->
<section id="projects" class="py-5 bg-light">
    <div class="container px-4 px-lg-5">
        <h2 class="text-center">Proyek Unggulan</h2>
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <!-- Example of a featured project -->
            <div class="col-md-4 mb-5">
                <div class="card h-100">
                    <img src="assets/img/awal.png" class="card-img-top" alt="Proyek 1">
                    <div class="card-body text-center">
                        <h5 class="card-title">Nama Proyek</h5>
                        <p class="card-text">Deskripsi singkat tentang proyek ini.</p>
                        <a href="{{ url('/project') }}" class="btn btn-primary">Lihat Proyek</a>
                    </div>
                </div>
            </div>
            <!-- Add more project cards as needed -->
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="py-4 bg-dark text-white text-center">
    <div class="container">
        <ul class="list-inline mt-2">
            <li class="list-inline-item"><a href="#home" class="text-white">Home</a></li>
            <li class="list-inline-item"><a href="#about" class="text-white">About Me</a></li>
            <li class="list-inline-item"><a href="#projects" class="text-white">Projects</a></li>
            <li class="list-inline-item"><a href="#contact" class="text-white">Contact</a></li>
        </ul>
    </div>
</footer>
@endsection

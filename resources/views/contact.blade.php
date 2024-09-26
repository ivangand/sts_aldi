@extends('layout.layout')

@section('title', 'Contact')

@section('content')
<!-- Contact Section -->
<section class="content-section bg-light py-5" id="contact">
    <div class="container px-4 px-lg-5">
        <h2 class="text-center mb-4">Kontak Saya</h2>
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <!-- Contact Form -->
            <div class="col-lg-6">
                <form>
                    @csrf
                    <div class="form-group mb-3">
                        <label for="name">Nama</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan nama Anda" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email Anda" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="message">Pesan</label>
                        <textarea class="form-control" id="message" name="message" rows="5" placeholder="Tulis pesan Anda di sini" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </form>
            </div>

            <!-- Additional Contact Information -->
            <div class="col-lg-4 text-center">
                <h5 class="mt-4">Informasi Kontak</h5>
                <p>Email: <a href="mailto:leaadyy11@gmail.com">leaadyy11@gmail.com</a></p>
                <ul class="list-inline">
                    <li class="list-inline-item"><a href="https://www.linkedin.com" class="text-secondary">LinkedIn</a></li>
                    <li class="list-inline-item"><a href="https://www.instagram.com" class="text-secondary">Instagram</a></li>
                </ul>
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
            <li class="list-inline-item"><a href="/projects" class="text-white">Projects</a></li>
        </ul>
    </div>
</footer>
@endsection

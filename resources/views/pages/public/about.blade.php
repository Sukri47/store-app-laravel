@extends('layouts.public')
@section('title', 'About')
@section('content')
     <!-- About Hero Section -->
    <section class="py-5">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 mb-4 mb-lg-0">
            <h1 class="display-4 fw-bold mb-3">Tentang VitaStore</h1>
            <p class="lead text-secondary mb-4">
              Kami adalah toko online yang berkomitmen untuk memberikan produk
              berkualitas tinggi dengan layanan terbaik bagi pelanggan kami.
            </p>    
            <p class="text-secondary">
              Didirikan dengan visi untuk menjadi destination belanja online
              terpercaya, VitaStore hadir untuk memenuhi kebutuhan belanja Anda
              dengan berbagai produk pilihan yang telah melalui proses seleksi
              ketat.
            </p>
          </div>
          <div class="col-lg-6">
            <div class="position-relative">
              <img
                src="https://images.unsplash.com/photo-1556740738-b6a63e27c4df?w=600&h=400&fit=crop"
                alt="Tentang Kami"
                class="img-fluid rounded-4 shadow"
              />
              <div class="position-absolute bottom-0 start-0 m-4">
                <span class="badge bg-dark px-4 py-2 fs-6"
                  ><i class="bi bi-award me-2"></i>Terpercaya</span
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Stats Section -->
    <section class="py-5 bg-light">
      <div class="container">
        <div class="row text-center">
          <div class="col-6 col-md-3 mb-4 mb-md-0">
            <h2 class="display-4 fw-bold text-dark">5+</h2>
            <p class="text-secondary mb-0">Tahun Pengalaman</p>
          </div>
          <div class="col-6 col-md-3 mb-4 mb-md-0">
            <h2 class="display-4 fw-bold text-dark">10K+</h2>
            <p class="text-secondary mb-0">Pelanggan Puas</p>
          </div>
          <div class="col-6 col-md-3">
            <h2 class="display-4 fw-bold text-dark">500+</h2>
            <p class="text-secondary mb-0">Produk Pilihan</p>
          </div>
          <div class="col-6 col-md-3">
            <h2 class="display-4 fw-bold text-dark">50+</h2>
            <p class="text-secondary mb-0">Mitra Brand</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Visi Misi Section -->
    <section class="py-5">
      <div class="container">
        <div class="row g-4">
          <div class="col-md-6">
            <div class="card border-0 shadow-sm h-100 p-4">
              <div class="mb-3">
                <i class="bi bi-bullseye fs-1 text-dark"></i>
              </div>
              <h3 class="fw-bold mb-3">Visi</h3>
              <p class="text-secondary mb-0">
                Menjadi toko online pilihan utama yang memberikan pengalaman
                belanja terbaik dengan produk berkualitas dan layanan
                profesional untuk setiap pelanggan.
              </p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card border-0 shadow-sm h-100 p-4">
              <div class="mb-3">
                <i class="bi bi-list-task fs-1 text-dark"></i>
              </div>
              <h3 class="fw-bold mb-3">Misi</h3>
              <ul class="text-secondary mb-0 ps-3">
                <li>Menyediakan produk berkualitas dengan harga terjangkau</li>
                <li>Memberikan layanan pelanggan yang cepat dan profesional</li>
                <li>
                  Membangun kepercayaan melalui transparansi dan kejujuran
                </li>
                <li>Terus inovasi untuk meningkatkan pengalaman belanja</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Tim Section -->
    <section class="py-5 bg-light">
      <div class="container">
        <div class="text-center mb-5">
          <h2 class="fw-bold mb-2">Tim Kami</h2>
          <p class="text-secondary">
            Kenali tim profesional yang siap membantu Anda
          </p>
        </div>
        <div class="row g-4 justify-content-center">
          <div class="col-6 col-md-4 col-lg-3">
            <div class="card border-0 shadow-sm">
              <img
                src="https://images.unsplash.com/photo-1560250097-0b93528c311a?w=300&h=300&fit=crop"
                alt="Team Member"
                class="card-img-top"
                style="height: 250px; object-fit: cover"
              />
              <div class="card-body text-center">
                <h5 class="fw-bold mb-1">Ahmad Wijaya</h5>
                <p class="text-secondary mb-0">CEO & Founder</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-4 col-lg-3">
            <div class="card border-0 shadow-sm">
              <img
                src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=300&h=300&fit=crop"
                alt="Team Member"
                class="card-img-top"
                style="height: 250px; object-fit: cover"
              />
              <div class="card-body text-center">
                <h5 class="fw-bold mb-1">Siti Rahayu</h5>
                <p class="text-secondary mb-0">Head of Marketing</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-4 col-lg-3">
            <div class="card border-0 shadow-sm">
              <img
                src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=300&h=300&fit=crop"
                alt="Team Member"
                class="card-img-top"
                style="height: 250px; object-fit: cover"
              />
              <div class="card-body text-center">
                <h5 class="fw-bold mb-1">Budi Santoso</h5>
                <p class="text-secondary mb-0">Product Manager</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Why Choose Us -->
    <section class="py-5">
      <div class="container">
        <div class="text-center mb-5">
          <h2 class="fw-bold mb-2">Mengapa Memilih Kami</h2>
          <p class="text-secondary">
            Komitmen kami untuk memberikan yang terbaik
          </p>
        </div>
        <div class="row g-4">
          <div class="col-md-4">
            <div class="text-center">
              <div
                class="bg-dark text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3"
                style="width: 80px; height: 80px"
              >
                <i class="bi bi-shield-check fs-3"></i>
              </div>
              <h5 class="fw-bold mb-2">Produk Terjamin</h5>
              <p class="text-secondary mb-0">
                Setiap produk melalui proses quality control yang ketat
              </p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="text-center">
              <div
                class="bg-dark text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3"
                style="width: 80px; height: 80px"
              >
                <i class="bi bi-truck fs-3"></i>
              </div>
              <h5 class="fw-bold mb-2">Pengiriman Cepat</h5>
              <p class="text-secondary mb-0">
                Pengiriman ke seluruh Indonesia dengan layanan terbaik
              </p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="text-center">
              <div
                class="bg-dark text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3"
                style="width: 80px; height: 80px"
              >
                <i class="bi bi-headset fs-3"></i>
              </div>
              <h5 class="fw-bold mb-2">Layanan 24/7</h5>
              <p class="text-secondary mb-0">
                Tim customer service siap membantu kapan saja
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection
@push('style')
<style>
     .active-about {
        font-weight: bold;
        color: black;
      }
</style>
    
@endpush
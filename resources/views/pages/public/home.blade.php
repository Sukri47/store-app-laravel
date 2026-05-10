@extends('layouts.public')

@section('title', 'Home')

@section('content')
    <dialog id="loginDialog" class="p-0 rounded-4 shadow-lg" style="max-width: 420px; width: 95%">
        <form method="dialog" class="bg-white p-4 rounded-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h5 class="mb-0">Login to VitaStore</h5>
                <button type="button" class="btn-close" aria-label="Close"
                    onclick="document.getElementById('loginDialog').close()"></button>
            </div>
            <div class="mb-3">
                <label for="loginEmail" class="form-label">Email</label>
                <input type="email" id="loginEmail" class="form-control" placeholder="you@example.com" required />
            </div>
            <div class="mb-3">
                <label for="loginPassword" class="form-label">Password</label>
                <input type="password" id="loginPassword" class="form-control" placeholder="Password" required />
            </div>
            <a href="shop.html" class="btn btn-dark rounded-5 w-100 text-center text-white d-inline-block">
                Sign In
            </a>
        </form>
    </dialog>
    <!-- hero section -->
    <section class="hero-section text-dark pt-3 pt-md-1 px-4 px-md-1">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-6">
                    <h1 class="fw-bold">FIND CLOTHES THAT MATCHES YOUR STYLE</h1>
                    <p>
                        Browse through our diverse range of meticulously crafted garments,
                        designed to bring out your individuality and cater to your sense
                        of style.
                    </p>
                    <div class="btn btn-dark rounded-5 w-100 px-3 mb-3">
                        <i class="bi bi-cart me-1"></i>
                        <a href="#" class="text-white text-decoration-none">Shop Now</a>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-6">
                            <h3 class="fw-semibold">200+</h3>
                            <p>International Brands</p>
                        </div>
                        <div class="col-md-4 col-6">
                            <h3 class="fw-semibold">200+</h3>
                            <p>International Brands</p>
                        </div>
                        <div class="col-md-4 col-6">
                            <h3 class="fw-semibold">200+</h3>
                            <p>International Brands</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('assets/img/hero-section.png') }}" alt=""
                        class="w-100 ms-md-auto d-md-block" />
                </div>
            </div>
        </div>
    </section>
    <!-- section best seller -->
    <section class="py-5">
        <div class="container">
            <h2 class="fw-bold text-dark text-center">NEW ARRIVALS</h2>
            <!-- card -->
            <div class="row mt-4 justify-content-center">
                @forelse ($products as $item)
                    <div class="col-6 col-md-3 mb-3">
                        <div class="card border-1 shadow-lg">
                            @if (!$item->image)
                                <img src="{{ asset('assets/img/placeholder.jpg') }}" alt="{{ $item->name }}"
                                    class="card-img-top" />
                            @else
                                <img src="{{ Storage::url('products/' . $item->image) }}" alt="{{ $item->name }}"
                                    class="card-img-top" />
                            @endif
                            <div class="card-body bg-white text-dark d-flex flex-column justify-content-between">
                                <div>
                                    <h5 class="card-title fw-bold mb-1">{{ $item->name }}</h5>
                                    @if (!$item->description)
                                        <p>No description available.</p>
                                    @else
                                        <p class="text-muted mb-1">{{ $item->description }}</p>
                                    @endif
                                    <p class="card-text fs-5 fw-semibold">Rp.{{ number_format($item->price, 0, ',', '.') }}
                                    </p>
                                </div>
                                <a href="https://api.whatsapp.com/send?phone=6283139744994&text=Hi! I'm interested in purchasing the {{ $item->name }}."
                                    class="btn btn-dark rounded-5" type="submit" target="_blank">Buy</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <p class="text-center">No products available.</p>
                    </div>
                @endforelse

            </div>
        </div>
    </section>
@endsection

@push('style')
    <style>
        .active-home {
            font-weight: bold;
            color: black;
        }
    </style>
@endpush

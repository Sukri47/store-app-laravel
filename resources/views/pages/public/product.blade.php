@extends('layouts.public')

@section('title', 'Product')
@section('content')
    <!-- Product Details Section -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <!-- Product Images -->
                <div class="col-md-6 mb-4">
                    <img src="assets/img/produk1.jpg" alt="Product Image" class="product-image w-100 shadow-sm"
                        id="mainImage" />
                    <div class="d-flex gap-3 mt-3">
                        <img src="assets/img/produk1.jpg" alt="Thumbnail 1" class="thumbnail active"
                            onclick="changeImage(this, 'assets/img/produk1.jpg')" />
                        <img src="assets/img/produk2.jpg" alt="Thumbnail 2" class="thumbnail"
                            onclick="changeImage(this, 'assets/img/produk2.jpg')" />
                        <img src="assets/img/produk3.jpg" alt="Thumbnail 3" class="thumbnail"
                            onclick="changeImage(this, 'assets/img/produk3.jpg')" />
                        <img src="assets/img/produk4.jpg" alt="Thumbnail 4" class="thumbnail"
                            onclick="changeImage(this, 'assets/img/produk4.jpg')" />
                    </div>
                </div>

                <!-- Product Info -->
                <div class="col-md-6">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="shop.html" class="text-decoration-none text-muted">Shop</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Product Details
                            </li>
                        </ol>
                    </nav>

                    <h1 class="fw-bold mb-2">EcoWear Premium Collection</h1>
                    <p class="text-muted">Eco Friendly • Sustainable Fashion</p>

                    <div class="mb-3">
                        <span class="fs-2 fw-bold text-dark">Rp.199.000</span>
                        <span class="text-decoration-line-through text-muted ms-2">Rp.299.000</span>
                        <span class="badge bg-danger ms-2">-33%</span>
                    </div>

                    <p class="text-secondary mb-4">
                        Experience the perfect blend of comfort and sustainability with
                        our EcoWear Premium Collection. Made from 100% organic cotton,
                        this garment is designed to not only look good but also feel good
                        for the environment.
                    </p>

                    <hr />

                    <!-- Size Selection -->
                    <div class="mb-4">
                        <h6 class="fw-semibold mb-3">Select Size</h6>
                        <div class="d-flex gap-2">
                            <button class="size-btn" onclick="selectSize(this)">S</button>
                            <button class="size-btn active" onclick="selectSize(this)">
                                M
                            </button>
                            <button class="size-btn" onclick="selectSize(this)">L</button>
                            <button class="size-btn" onclick="selectSize(this)">XL</button>
                            <button class="size-btn" onclick="selectSize(this)">XXL</button>
                        </div>
                    </div>

                    <!-- Color Selection -->
                    <div class="mb-4">
                        <h6 class="fw-semibold mb-3">Select Color</h6>
                        <div class="d-flex gap-3">
                            <div class="color-circle bg-dark active" onclick="selectColor(this)"></div>
                            <div class="color-circle bg-secondary" onclick="selectColor(this)"></div>
                            <div class="color-circle bg-white border" onclick="selectColor(this)"></div>
                            <div class="color-circle" style="background: #8b4513" onclick="selectColor(this)"></div>
                        </div>
                    </div>

                    <!-- Quantity -->
                    <div class="mb-4">
                        <h6 class="fw-semibold mb-3">Quantity</h6>
                        <div class="d-flex align-items-center">
                            <button class="quantity-btn rounded-start-5" onclick="updateQuantity(-1)">
                                <i class="bi bi-dash"></i>
                            </button>
                            <input type="text" class="form-control text-center border-start-0 border-end-0"
                                value="1" id="quantity" readonly style="max-width: 60px" />
                            <button class="quantity-btn rounded-end-5" onclick="updateQuantity(1)">
                                <i class="bi bi-plus"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="d-flex gap-3">
                        <button class="btn btn-dark rounded-5 flex-grow-1 py-3">
                            <i class="bi bi-cart-plus me-2"></i>Add to Cart
                        </button>
                        <button class="btn btn-outline-dark rounded-5 px-4">
                            <i class="bi bi-heart"></i>
                        </button>
                    </div>

                    <!-- Product Info Details -->
                    <div class="mt-4">
                        <div class="d-flex gap-3 text-muted small">
                            <span><i class="bi bi-truck me-1"></i>Free Shipping</span>
                            <span><i class="bi bi-arrow-return-left me-1"></i>Easy Return</span>
                            <span><i class="bi bi-shield-check me-1"></i>Quality
                                Guarantee</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Related Products -->
            <div class="mt-5">
                <h3 class="fw-bold mb-4">Related Products</h3>
                <div class="row justify-content-center">
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
                                        <p class="card-text fs-5 fw-semibold">
                                            Rp.{{ number_format($item->price, 0, ',', '.') }}</p>
                                    </div>
                                    <a href="#" class="btn btn-dark rounded-5" type="submit">Buy</a>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-12">
                            <p class="text-center text-muted">No related products found.</p>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </section>

@endsection

{{-- stack to push --}}
@push('style')
    <style>
        .active-product {
            font-weight: bold;
            color: black;
        }

        .product-image {
            height: 400px;
            object-fit: cover;
            border-radius: 10px;
        }

        .thumbnail {
            height: 80px;
            object-fit: cover;
            cursor: pointer;
            border-radius: 8px;
            opacity: 0.6;
            transition: opacity 0.3s;
        }

        .thumbnail:hover,
        .thumbnail.active {
            opacity: 1;
            border: 2px solid #000;
        }

        .size-btn {
            width: 50px;
            height: 50px;
            border: 1px solid #dee2e6;
            background: white;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s;
        }

        .size-btn:hover,
        .size-btn.active {
            background: #000;
            color: white;
            border-color: #000;
        }

        .color-circle {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            cursor: pointer;
            border: 2px solid transparent;
        }

        .color-circle.active {
            border-color: #000;
            box-shadow:
                0 0 0 2px white,
                0 0 0 4px #000;
        }

        .quantity-btn {
            width: 40px;
            height: 40px;
            border: 1px solid #dee2e6;
            background: white;
            cursor: pointer;
        }

        .quantity-btn:hover {
            background: #f8f9fa;
        }
    </style>
@endpush

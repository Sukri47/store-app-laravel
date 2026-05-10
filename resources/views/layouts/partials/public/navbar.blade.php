 <!-- navbar -->
 <nav class="navbar navbar-expand-md bg-white">
     <div class="container">
         <a class="navbar-brand fw-bold poppins-black fs-1" href="#"><i class="bi bi-shop"></i> VitaStore</a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
             aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
             <ul class="navbar-nav mb-2 mb-lg-0">
                 <li class="nav-item">
                     <a class="nav-link active-home" aria-current="page" href="{{ route('home') }}">Shop</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link active-product" href="{{ route('product') }}">Product</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link active-about" href="{{ route('about') }}">About</a>
                 </li>
             </ul>
             <form class="d-flex border-5 flex-fill mx-md-5 mb-3 mb-md-0" role="search ">
                 <input class="form-control rounded-start-5 search-design border-0 w-100" type="search"
                     placeholder="Search" aria-label="Search" />
                 <button class="bi-search bg- rounded-end-5 border-0"></button>
             </form>
             <div class="btn btn-dark fw-semibold border-2">
                 {{-- <i class="bi bi-box-arrow-in-right pe-1"></i> --}}
                 @if (Auth::check())
                     <a href="{{ route('admin.dashboard') }}" class="text-white text-decoration-none"
                         type="button">Dashboard</a>
                 @else
                     <a href="{{ route('login') }}" class="text-white text-decoration-none" type="button">Login</a>
                 @endif

             </div>
         </div>
     </div>
 </nav>

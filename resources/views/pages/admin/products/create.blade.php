@extends('layouts.admin')

@section('content')
    <div class="container">
        {{-- error --}}
        @if (session('error'))
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-danger">{{ session('error') }}</div>
                </div>
            </div>
        @endif
        <div class="row">
            <div class="col-md-12">
                <h1>Tambah Products</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin.products.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">Pilih Kategori</label>
                                <select name="category_id" id="" class="form-control" required>
                                    @foreach ($categories as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="" class="">Nama Products</label>
                                <input type="text" name="name" id="" class="form-control"
                                    placeholder="Masukkan Nama Products">
                            </div>
                            <div class="form-group">
                                <label for="" class="">Harga Products</label>
                                <input type="number" name="price" id="" class="form-control"
                                    placeholder="Masukkan Harga Products">
                            </div>
                            <div class="form-group">
                                <label for="" class="">Stok Products</label>
                                <input type="number" name="stock" id="" class="form-control"
                                    placeholder="Masukkan Stock Products">
                            </div>
                            <div class="form-group">
                                <label for="" class="">Gambar Produk</label>
                                <input type="file" name="image" id="" class="form-control" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="" class="">Deskripsi Produk</label>
                                <textarea name="description" id="" class="form-control"></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary mt-3">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

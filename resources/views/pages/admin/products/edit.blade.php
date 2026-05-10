@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Edit Product</h1>
            </div>
        </div>
        {{-- alert error --}}
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin.products.update', $product->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="">Pilih Kategori</label>
                                <select name="category_id" id="" class="form-control" required>
                                    @foreach ($categories as $item)
                                        <option value="{{ $item->id }}"
                                            {{ old('category_id', $product->category_id) == $item->id ? 'selected' : '' }}>
                                            {{ $item->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="" class="">Nama Products</label>
                                <input type="text" name="name" id="" class="form-control"
                                    placeholder="Masukkan Nama Products" value="{{ old('name', $product->name) }}">
                            </div>
                            <div class="form-group">
                                <label for="" class="">Harga Products</label>
                                <input type="number" name="price" id="" class="form-control"
                                    placeholder="Masukkan Harga Products" value="{{ old('price', $product->price) }}">
                            </div>
                            <div class="form-group">
                                <label for="" class="">Stok Products</label>
                                <input type="number" name="stock" id="" class="form-control"
                                    placeholder="Masukkan Stock Products" value="{{ old('stock', $product->stock) }}">
                            </div>
                            @if ($product->image)
                                <label for="">Gambar Produk Saat Ini</label>
                                <div class="mb-3">
                                    <img src="{{ Storage::url('products/' . $product->image) }}" alt="{{ $product->name }}"
                                        width="150">
                                </div>
                            @endif
                            <div class="form-group">
                                <label for="" class="">Gambar Produk</label>
                                <input type="file" name="image" id="" class="form-control" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="" class="">Deskripsi Produk</label>
                                <textarea name="description" id="" class="form-control">{{ old('description', $product->description) }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

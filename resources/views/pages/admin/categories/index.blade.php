@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 d-flex justify-content-end">
                <a href="{{ route('admin.categories.create') }}" class="btn btn-success mb-3">Tambah Kategori</a>
            </div>
        </div>
        {{-- success --}}
        @if (session('success'))
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-success">{{ session('success') }}</div>
                </div>
            </div>
        @endif
        {{-- error --}}
        @if (session('error'))
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-danger">{{ session('error') }}</div>
                </div>
            </div>
        @endif
        {{-- success hapus --}}
        @if (session('successDelete'))
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('successDelete') }}
                        <button type="button" class="btn-close btn btn-" data-bs-dismiss="alert"
                            aria-label="Close">x</button>
                    </div>

                </div>
            </div>
        @endif
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Kategori</div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Name</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($categories as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td class="d-flex">
                                            <a href="{{ route('admin.categories.edit', $item->id) }}"
                                                class="btn btn-primary btn-sm mr-1">Edit</a>
                                            <form action="{{ route('admin.categories.destroy', $item->id) }}" method="post"
                                                class="delete-form">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="3" class="text-center">Data Tidak Ada Input Goublok </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const deleteForms = document.querySelectorAll('.delete-form');
            deleteForms.forEach(form => {
                form.addEventListener('submit', function(e) {
                    const confirmed = confirm('Apakah Anda yakin ingin menghapus kategori ini?');
                    if (!confirmed) {
                        e.preventDefault();
                    }
                });
            });
        });
    </script>
@endpush

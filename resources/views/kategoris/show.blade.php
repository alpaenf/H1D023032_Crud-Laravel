@extends('layouts.app')

@section('title', 'Detail Kategori')
@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-sm">
                <div class="card-header bg-dark text-light">
                    <h4 class="mb-0">Detail Kategori</h4>
                </div>
                <div class="card-body bg-secondary">
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label text-light">Nama Kategori</label>
                        <div class="col-sm-9">
                            <input type="text" readonly class="form-control-plaintext text-light" value="{{ $kategori->nama_kategori }}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label text-light">Slug</label>
                        <div class="col-sm-9">
                            <input type="text" readonly class="form-control-plaintext text-light" value="{{ $kategori->slug }}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label text-light">Keterangan</label>
                        <div class="col-sm-9">
                            <textarea readonly class="form-control-plaintext text-light" style="background: transparent; border: none; resize: none;">{{ $kategori->keterangan }}</textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label text-light">Dibuat pada</label>
                        <div class="col-sm-9">
                            <input type="text" readonly class="form-control-plaintext text-light" value="{{ $kategori->created_at->format('d M Y H:i') }}">
                        </div>
                    </div>
                    <div class="text-end">
                        <a href="{{ route('kategoris.index') }}" class="btn btn-light btn-sm">← Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

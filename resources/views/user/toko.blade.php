@extends('template.template-user')

@section('content')
@section('title', 'Store')
@section('akhir', 'Store')

<div class="container">
    <h3 style="font-family: cursive">Selamat Datang di K1ZuraStore</h3>
    <hr>
    <div class="row">
        <div class="col-md-6 mb-3">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Belum Punya Toko?</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Ayo Buat!</h6>
                    <a href="/toko-add" style="color: coral" class="card-link">Tambah Toko</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-3">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Produk</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Ayo berjualan!</h6>
                    <a href="/product-add" style="color: coral" class="card-link">Tambah Produk</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-3">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Daftar Produk</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Ini dia Daftar produk yang anda tambhkan</h6>
                    <a href="/product-list" style="color: coral" class="card-link">List Produk</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

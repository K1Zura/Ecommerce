@extends('template.template-user')
@section('content')
@section('title', 'Store')
@section('akhir', 'Store')

<div class="container">
    <h3 style="font-family: cursive">Selamat Datang di K1ZuraStore</h3>
    <hr>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
        <h5 class="card-title">Produk</h5>
        <h6 class="card-subtitle mb-2 text-muted">Ayo berjualan!</h6>
        <a href="/product-add" target="_blank" style="color: coral" class="card-link">Tambah Produk</a>
        </div>
    </div>
</div>
@endsection
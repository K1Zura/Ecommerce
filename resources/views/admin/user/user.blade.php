@extends('template.template')
@section('content')
@section('title', 'Home')
@section('pertama', 'User')
<div class="col-sm-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
          <center><h4 class="card-title" style="font-family: Georgia, 'Times New Roman', Times, serif">Data User</h4></center>
          <a href="/data-user" class="btn btn-primary col-sm-12 grid-margin">Detail</a>
      </div>
    </div>
</div>
<div class="col-sm-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
        <center><h4 class="card-title" style="font-family: Georgia, 'Times New Roman', Times, serif">Produk</h4></center>
        <a href="/data-produk" class="btn btn-primary col-sm-12 grid-margin">Detail</a>
    </div>
  </div>
</div>
@endsection
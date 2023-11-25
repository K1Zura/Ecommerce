@extends('template.template')
@section('content')
@section('title', 'Membership')
@section('pertama', 'Membership')
<div class="col-sm-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
          <center><h4 class="card-title" style="font-family: Georgia, 'Times New Roman', Times, serif">Data Membership</h4></center>
          <a href="/data-membership" class="btn btn-primary col-sm-12 grid-margin">Detail</a>
      </div>
    </div>
</div>
<div class="col-sm-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
        <center><h4 class="card-title" style="font-family: Georgia, 'Times New Roman', Times, serif">Produk</h4></center>
        <a href="/produk-membership" class="btn btn-primary col-sm-12 grid-margin">Detail</a>
    </div>
  </div>
</div>
@endsection

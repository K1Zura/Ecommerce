@extends('template.template')
@section('content')
@section('title', 'Home')
@section('pertama', 'Data User')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Product Data</h4>
        <form action="/data-produk" method="GET">
            <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                <tbody>
                </tbody>
            </table>
            </div>
        </form>
      </div>
    </div>
  </div>
@endsection
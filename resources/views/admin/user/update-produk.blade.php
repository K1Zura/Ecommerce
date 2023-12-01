@extends('template.template')
@section('content')
@section('title', 'Data')
@section('pertama', 'Data Produk')

<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Update</h4>
        <p class="card-description">
          Update Product
        </p>
        <form class="forms-sample" action="/update-produk-data/{{$barang->id}}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
          <div class="form-group">
            <label for="exampleInputName1">Name</label>
            <input type="text" name="name" class="form-control" id="exampleInputName1" value="{{$barang->name}}">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Kategori</label>
            <select name="kategori" id="" class="form-control">
                <option value="Baju" {{ $barang->kategori == 'Baju' ? 'selected' : '' }}>Baju</option>
                <option value="Celana" {{ $barang->kategori == 'Celana' ? 'selected' : '' }}>Celana</option>
                <option value="Aksesoris" {{ $barang->kategori == 'Aksesoris' ? 'selected' : '' }}>Aksesoris</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleTextarea1">Deskripsi</label>
            <input type="text" name="deskripsi" class="form-control" id="exampleInputName1" value="{{$barang->deskripsi}}">
          </div>
          <button type="submit" class="btn btn-primary mr-2">Submit</button>
          <a href="/data-produk" class="btn btn-light">Cancel</a>
        </form>
      </div>
    </div>
  </div>
@endsection

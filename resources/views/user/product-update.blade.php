@extends('template.template-user')
@section('content')
@section('title', 'Update Produk')
@section('akhir', 'Update Produk')
    
<br>
<div class="billing_details">
    <div class="row">
        <div class="col-lg-8">
            <h3>Tambah Produk</h3>
            <form class="row contact_form" action="/update/{{$barang->id}}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="col-md-12 form-group p_star">
                    <input type="text" class="form-control" id="first" name="name" placeholder="Product Name" value="{{$barang->name}}" required>
                </div>
                <div class="col-md-12 form-group p_star">
                    <select class="country_select" name="kategori">
                        <option value="{{$barang->kategori}}">{{$barang->kategori}}</option>
                        <option value="Baju">Baju</option>
                        <option value="Celana">Celana</option>
                        <option value="Aksesoris">Aksesoris</option>
                    </select>
                </div>
                <div class="col-md-12 form-group p_star">
                    <label for="formFile" class="form-label">Foto</label>
                    <input class="form-control " type="file" id="photo" name="photo">
                </div>
                <div class="col-md-12 form-group">
                    <div class="creat_account">
                        <h3>Produk Details</h3>
                    </div>
                    <div class="col-md-12 form-group">
                        <input type="number" class="form-control" id="zip" name="harga" placeholder="Price">
                    </div>
                    <div class="col-md-3 form-group">
                        <input type="number" class="form-control" id="zip" name="lebar" placeholder="Width">
                    </div>
                    <div class="col-md-3 form-group">
                        <input type="number" class="form-control" id="zip" name="panjang" placeholder="Height">
                    </div>
                    <div class="col-md-3 form-group">
                        <input type="number" class="form-control" id="zip" name="kedalaman" placeholder="Depth">
                    </div>
                    <div class="col-md-3 form-group">
                        <input type="number" class="form-control" id="zip" name="berat" placeholder="Weight">
                    </div>
                    <div class="col-md-3 form-group">
                        <input type="number" class="form-control" id="zip" name="jumlah" placeholder="Amount">
                    </div>
                    <div class="col-md-12 form-group">
                        <textarea class="form-control" name="deskripsi" id="deskripsi" rows="1" placeholder="Description">{{$barang->deskripsi}}</textarea>
                    </div>
                    <div class="col-md-12 form-group">
                        <select name="user_id" class="form-control">
                            <option value="{{ Auth::guard('user')->user()->id }}">{{ Auth::guard('user')->user()->name }}</option>
                        </select>
                    </div>
                    <br>
                    
                    <div class="col-md-12 form-group">
                        <label for="akun" class="container" style="font-family: 'Times New Roman', Times, serif">Akun</label>
                        <button class="primary-btn" type="submit">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
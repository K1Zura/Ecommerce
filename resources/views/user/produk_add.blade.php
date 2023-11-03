@extends('template.template-user')
@section('content')
@section('title', 'Tambah Produk')
@section('akhir', 'Tambah Produk')
    
<br>
<div class="billing_details">
    <div class="row">
        <div class="col-lg-8">
            <h3>Tambah Produk</h3>
            <form class="row contact_form" action="/product-add" method="post" novalidate="novalidate">
                @csrf
                <div class="col-md-12 form-group p_star">
                    <input type="text" class="form-control" id="first" name="name" placeholder="Product Name">
                </div>
                <div class="col-md-12 form-group">
                    <input type="text" class="form-control" id="company" name="company" placeholder="Company Name">
                </div>
                <div class="col-md-6 form-group p_star">
                    <input type="text" class="form-control" id="number" name="nomor" placeholder="Number Phone">
                </div>
                <div class="col-md-12 form-group p_star">
                    <select class="country_select" name="kategori">
                        <option value="">Kategori ...</option>
                        <option value="baju">Baju</option>
                        <option value="celana">Celana</option>
                        <option value="aksesoris">Aksesoris</option>
                    </select>
                </div>
                <div class="col-md-12 form-group p_star">
                    <input type="text" class="form-control" id="add1" name="alamat" placeholder="Address">
                </div>
                <div class="col-md-12 form-group">
                    <input type="text" class="form-control" id="zip" name="kode_post" placeholder="Postcode">
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
                        <textarea class="form-control" name="deskripsi" id="deskripsi" rows="1" placeholder="Description"></textarea>
                    </div>
                    <div class="col-md-12 form-group">
                        <button class="primary-btn" type="submit">Add</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
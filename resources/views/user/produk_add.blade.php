@extends('template.template-user')
@section('content')
@section('title', 'Tambah Produk')
@section('akhir', 'Tambah Produk')
@section('judul', 'Tambah Produk')
<br>
<div class="billing_details">
    <div class="row">
        <div class="col-lg-8">
            <h3>Tambah Produk</h3>
            <form class="row contact_form" action="/product-add" method="post" novalidate="novalidate" enctype="multipart/form-data">
                @csrf
                <div class="col-md-12 form-group p_star">
                    <label for="">Nama Barang</label>
                    <input type="text" class="form-control" id="first" name="name" placeholder="Product Name" required>
                </div>
                <div class="col-md-12 form-group p_star">
                    <label for="">Kategori Barang</label>
                    <select class="country_select" name="kategori">
                        <option value="">Kategori ...</option>
                        <option value="Baju">Baju</option>
                        <option value="Celana">Celana</option>
                        <option value="Aksesoris">Aksesoris</option>
                    </select>
                </div>
                <div class="col-md-12 form-group p_star">
                    <label for="formFile" class="form-label">Foto</label>
                    <p>Harus Sekitar 385 x 425 Pixels Kebawah</p>
                    <input class="form-control " type="file" id="photo" name="photo">
                </div>
                <div class="col-md-12 form-group">
                    <div class="creat_account">
                        <h3>Produk Details</h3>
                    </div>
                    <div class="col-md-3 form-group">
                        <label for="harga" class="form-label">Harga <strong>(Rp)</strong></label>
                        <div class="input-group">
                            <input type="number" class="form-control" id="harga" name="harga" placeholder="Price">
                        </div>
                    </div>
                    <div class="col-md-3 form-group">
                        <label for="">Lebar <strong>(cm)</strong></label>
                        <input type="number" class="form-control" id="zip" name="width" placeholder="Width">
                    </div>
                    <div class="col-md-3 form-group">
                        <label for="">Tinggi <strong>(cm)</strong></label>
                        <input type="number" class="form-control" id="zip" name="height" placeholder="Height">
                    </div>
                    <div class="col-md-3 form-group">
                        <label for="">Berat <strong>(g)</strong></label>
                        <input type="number" class="form-control" id="zip" name="weight" placeholder="Weight">
                    </div>
                    <div class="col-md-3 form-group">
                        <label for="">Jumlah</label>
                        <input type="number" class="form-control" id="zip" name="contain" placeholder="Amount">
                    </div>
                    <div class="col-md-12 form-group">
                        <textarea class="form-control" name="deskripsi" id="deskripsi" rows="1" placeholder="Description"></textarea>
                    </div>
                    <div class="col-md-12 form-group" hidden>
                        <select name="user_id" class="form-control">
                            <option value="{{ Auth::guard('user')->user()->id }}">{{ Auth::guard('user')->user()->name }}</option>
                        </select>
                        <label for="akun" class="container" style="font-family: 'Times New Roman', Times, serif">Akun</label>
                    </div>
                    <br>

                    <div class="col-md-12 form-group">
                        <button class="primary-btn" type="submit">Add</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

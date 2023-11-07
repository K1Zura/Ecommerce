@extends('template.template-user')
@section('content')
@section('title', 'Tambah Produk')
@section('akhir', 'Tambah Produk')
    
<br>
<div class="billing_details">
    <div class="row">
        <div class="col-lg-8">
            <h3>Toko</h3>
            <form class="row contact_form" action="/toko-add" method="post" novalidate="novalidate">
                @csrf   
                <div class="col-md-12 form-group">
                    <input type="text" class="form-control" id="company" name="company" placeholder="Company Name">
                </div>
                <div class="col-md-6 form-group p_star">
                    <input type="text" class="form-control" id="number" name="telepon" placeholder="Number Phone">
                </div>
                <div class="col-md-12 form-group p_star">
                    <input type="text" class="form-control" id="add1" name="address" placeholder="Address">
                </div>
                <div class="col-md-12 form-group">
                    <input type="text" class="form-control" id="zip" name="postcode" placeholder="Postcode">
                </div>
                <div class="col-md-12 form-group">
                    <button class="primary-btn" type="submit">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
@extends('template.template-user')
@section('content')
@section('title', 'Contact Produk')
@section('akhir', 'Contact Produk')
@section('judul', 'Contact')

<!--================Checkout Area =================-->
<section class="checkout_area section_gap">
    <div class="container">
        <div class="billing_details">
            <div class="row">
                <div class="col-lg-8">
                    <h3>Shopper Details</h3>
                    <form class="row contact_form" action="#" method="post" novalidate="novalidate">
                        <div class="col-md-12 form-group p_star">
                            <input type="text" class="form-control" id="first" name="name">
                            <span class="placeholder" data-placeholder="Name"></span>
                        </div>
                        <div class="col-md-6 form-group p_star">
                            <input type="text" class="form-control" id="number" name="number">
                            <span class="placeholder" data-placeholder="Phone number"></span>
                        </div>
                        <div class="col-md-6 form-group p_star">
                            <input type="text" class="form-control" id="email" name="compemailany">
                            <span class="placeholder" data-placeholder="Email Address"></span>
                        </div>
                        <div class="col-md-12 form-group p_star">
                            <input type="text" class="form-control" id="add1" name="add1">
                            <span class="placeholder" data-placeholder="Address"></span>
                        </div>
                        <div class="col-md-12 form-group p_star">
                            <input type="text" class="form-control" id="city" name="city">
                            <span class="placeholder" data-placeholder="Town/City"></span>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4">
                    <div class="order_box">
                        <h2>Your Order</h2>
                        <ul class="list">
                            @foreach($barang as $product)
                            <script>
                                function updateTotal(productId) {
                                var quantity = document.getElementById('sst_' + productId).value;
                                var price = {{$product->harga}}; // Replace this with the actual price from the server or use a data attribute
                                var total = contain * harga;
                                // Update the total in the Your Order section
                                document.getElementById('total_' + productId).innerText = 'Rp.' + total;
                            }
                            </script>
                                <li>
                                    <a href="#">{{ $product->name }}
                                        <span class="middle">x {{ $product->contain }}</span>
                                        <span class="last">Rp.{{ intval($product->harga) * intval($product->contain) }}</span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                        <ul class="list list_2">
                            <li><a href="#">Subtotal <span>$2160.00</span></a></li>
                            <li><a href="#">Shipping <span>Flat rate: $50.00</span></a></li>
                            <li><a href="#">Total <span>$2210.00</span></a></li>
                        </ul>
                        <div class="payment_item active">
                            <div class="radion_btn">
                                <input type="radio" id="f-option6" name="selector">
                                <label for="f-option6">Paypal </label>
                                <img src="img/product/card.jpg" alt="">
                                <div class="check"></div>
                            </div>
                            <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal
                                account.</p>
                        </div>
                        <div class="creat_account">
                            <input type="checkbox" id="f-option4" name="selector">
                            <label for="f-option4">I’ve read and accept the </label>
                            <a href="#">terms & conditions*</a>
                        </div>
                        <a class="primary-btn" href="#">Procees</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Checkout Area =================-->

@endsection

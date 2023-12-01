@extends('template.template-user')
@section('content')
@section('title', 'Checkout Produk')
@section('akhir', 'Checkout Produk')
@section('judul', 'Checkout')

<!--================Checkout Area =================-->
<section class="checkout_area section_gap">
    <form class="row contact_form" action="/checkout-add/{{$barang->id}}" method="post" novalidate="novalidate">
        @csrf
    <div class="container">
        <div class="billing_details">
            <div class="row">
                <div class="col-lg-8">
                    <h3>Shopper Details</h3>
                        @csrf
                        <div class="col-md-12 form-group p_star">
                            <input type="text" class="form-control" id="first" name="name" placeholder="Name">
                        </div>
                        <div class="col-md-6 form-group p_star">
                            <input type="text" class="form-control" id="number" name="telp" placeholder="Telepon">
                        </div>
                        <div class="col-md-6 form-group p_star">
                            <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                        </div>
                        <div class="col-md-12 form-group p_star">
                            <input type="text" class="form-control" id="add1" name="alamat" placeholder="Alamat">
                        </div>
                        <div class="col-md-12 form-group p_star">
                            <input type="text" class="form-control" id="city" name="kota" placeholder="Kota">
                        </div>
                        <div class="col-md-12 form-group p_star" hidden>
                            <input type="text" class="form-control" id="city" name="product_id" value="{{$barang->id}}">
                        </div>
                </div>
                <div class="col-lg-4">
                    <div class="order_box">
                        <h2>Your Order</h2>
                        <ul class="list">
                                <li>
                                    <a href="#">Product <span>Total</span></a>
                                </li>
                                <li>
                                    <a href="#">
                                        {{$barang->name}}
                                        <span class="middle">
                                            <div class="product_count">
                                                <input type="text" name="total" id="sst" maxlength="12" value="" title="Quantity:" class="input-text qty" onchange="updateTotal()">
                                                <button onclick="var result = document.getElementById('sst'); var sst = result.value; if (!isNaN(sst)) result.value++; return false;" class="increase items-count" type="button"><i class="lnr lnr-chevron-up"></i></button>
                                                <button onclick="var result = document.getElementById('sst'); var sst = result.value; if (!isNaN(sst) && sst > 0) result.value--; return false;" class="reduced items-count" type="button"><i class="lnr lnr-chevron-down"></i></button>
                                                <script>
                                                    function updateTotal() {
                                                        var quantity = document.getElementById('sst').value;
                                                        var price = {{$barang->harga}};
                                                        var total = quantity * price;
                                                        document.getElementById('totalPrice').innerText = 'Rp.' + total.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,');
                                                    }

                                                    function processOrder() {
                                                        var quantity = document.getElementById('sst').value;
                                                        var totalPrice = document.getElementById('totalPrice').innerText;
                                                        // You can send the quantity and total price to your server for further processing
                                                        console.log('Quantity: ' + quantity);
                                                        console.log('Total Price: ' + totalPrice);

                                                        // Add logic to handle the order processing
                                                        // For example, you can use JavaScript to gather shopper details and selected products
                                                        // Then send an AJAX request to the server for order processing
                                                        // You'll need to adapt this code based on your specific implementation
                                                        alert('Order processed!'); // Replace this with your actual order processing logic
                                                    }
                                                </script>
                                            </div>
                                        </span>
                                        <span class="last" id="totalPrice">Rp.{{ number_format($barang->harga, 2, '.', ',') }}</span>
                                    </a>
                                </li>
                            </form>
                        </ul>
                        <div class="payment_item active">
                            <div class="radion_btn">
                                <input type="radio" id="f-option-paypal" name="pembayaran" value="Paypal">
                                <label for="f-option-paypal">Paypal </label>
                                <img src="/asset/img/product/card.jpg" alt="">
                                <div class="check"></div>
                            </div>
                            <div class="radion_btn">
                                <input type="radio" id="f-option-dana" name="pembayaran" value="Dana">
                                <label for="f-option-dana">Dana </label>
                                <img src="/asset/img/product/dana-meta-logo.png" alt="">
                                <div class="check"></div>
                            </div>
                            <div class="radion_btn">
                                <input type="radio" id="f-option-atm" name="pembayaran" value="ATM">
                                <label for="f-option-atm">Debit/Kredit </label>
                                <img src="/asset/img/product/kartu.jpg" alt="">
                                <div class="check"></div>
                            </div>
                            <p>Pilihlah Pembayaran</p>
                        </div>
                        <button class="primary-btn" onclick="processOrder()">Proceed</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
</section>
<!--================End Checkout Area =================-->

<script>
    function processOrder() {
        // Add logic to handle the order processing
        // For example, you can use JavaScript to gather shopper details and selected products
        // Then send an AJAX request to the server for order processing
        // You'll need to adapt this code based on your specific implementation
        alert('Order processed!'); // Replace this with your actual order processing logic
    }
</script>

@endsection

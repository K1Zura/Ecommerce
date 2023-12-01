@extends('template.template-user')
@section('content')
@section('title', 'Keranjang')
@section('akhir', 'Keranjang')
@section('judul', 'Keranjang')
<!--================Cart Area =================-->
<section class="cart_area">
    <form action="" method="GET">
    <div class="container">
        <div class="cart_inner">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Product</th>
                            <th></th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($bag as $item)
                        <tr>
                            <td>
                                {{$item->name}}
                            </td>
                            <td>
                                <img src="{{asset('storage/photo/'.$item->image)}}" alt="" width="100px">
                            </td>
                            <td>
                                <div class="product_count">
                                    <input type="text" name="total" id="sst" maxlength="12" value="" title="Quantity:" class="input-text qty" onchange="updateTotal()">
                                    <button onclick="var result = document.getElementById('sst'); var sst = result.value; if (!isNaN(sst)) result.value++; return false;" class="increase items-count" type="button"><i class="lnr lnr-chevron-up"></i></button>
                                    <button onclick="var result = document.getElementById('sst'); var sst = result.value; if (!isNaN(sst) && sst > 0) result.value--; return false;" class="reduced items-count" type="button"><i class="lnr lnr-chevron-down"></i></button>
                                    <script>
                                        function updateTotal() {
                                            var quantity = document.getElementById('sst').value;
                                            var price = {{$item->harga}};
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
                            </td>
                            <td>
                                <h5 class="last" id="totalPrice">Rp.{{ number_format($item->harga, 2, '.', ',') }}</h5>
                            </td>
                        </tr>
                        @endforeach
                        <tr>
                            <td>

                            </td>
                            <td>

                            </td>
                            <td>
                                <h5>Subtotal</h5>
                            </td>
                            <td>
                                <h5>$2160.00</h5>
                            </td>
                        </tr>
                        <tr class="shipping_area">
                            <td>

                            </td>
                            <td>

                            </td>
                            <td>
                                <h5>Shipping</h5>
                            </td>
                            <td>
                                <div class="shipping_box">
                                </div>
                            </td>
                        </tr>
                        <tr class="out_button_area">
                            <td>

                            </td>
                            <td>

                            </td>
                            <td>

                            </td>
                            <td>
                                <div class="checkout_btn_inner d-flex align-items-center">
                                    <a class="gray_btn" href="/shop">Continue Shopping</a>
                                    <a class="primary-btn" href="#">Proceed to Buy</a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </form>
</section>
<!--================End Cart Area =================-->

@endsection

@extends('template.template-user')
@section('content')
@section('title', 'Contact Produk')
@section('akhir', 'Contact Produk')
@section('judul', 'Contact')

<style>
    /* Add this style to your CSS file or in your Blade file using the <style> tag */

.contact_area {
    padding: 80px 0;
}

.info_item {
    margin-bottom: 20px;
}

.info_item i {
    font-size: 20px;
    margin-right: 10px;
    color: #ff5e62;
}

.info_item h6 {
    font-size: 18px;
    color: #333;
    margin-bottom: 5px;
}

.info_item p {
    font-size: 14px;
    color: #777;
    margin: 0;
}
#map { height: 180px; }

/* Adjust the styling as needed */

</style>

<!--================Contact Area =================-->
<section class="contact_area section_gap_bottom">
    <div class="container">
        <div id="map"></div>
        <br>
        <div class="row">
            <div class="col-lg-5">
                <!-- Your main content goes here -->
                <!-- For example, you can add a contact form or additional information -->
            </div>
            <div class="col-lg-3">
                <!-- Contact information sidebar -->
                <div class="contact_info">
                    <div class="info_item">
                        <i class="lnr lnr-home"></i>
                        <h6>Karanganyar, Central Java</h6>
                        <p>Tawangmangu</p>
                    </div>

                    <div class="info_item">
                        <i class="lnr lnr-phone-handset"></i>
                        <h6><a href="https://wa.me/6289667916464" target="_blank">0896-6791-6464</a></h6>
                        <p>Mon to Fri 9am to 10pm</p>
                    </div>
                    <div class="info_item">
                        <i class="lnr lnr-envelope"></i>
                        <h6><a href="mailto:ikhtiarazra6@gmail.com">ikhtiarazra6@gmail.com</a></h6>
                        <p>Send us your query anytime!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================Contact Area =================-->

@endsection

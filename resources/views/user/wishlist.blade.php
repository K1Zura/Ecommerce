@extends('template.template-user')

@section('content')
@section('title', 'Wishlist')
@section('akhir', 'Wishlist')
@section('judul', 'Wishlist')
<br>
<h2>Wishlist</h2>
<hr>
<style>
    .single-deal img {
        width: 100%; /* Ensures the image takes the full width of its container */
        height: 300px; /* Set a fixed height for all images */
        object-fit: cover; /* Ensures the image covers the container without stretching */
    }
    .success-message {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: #ee3001;
    color: rgb(255, 247, 247);
    padding: 15px;
    border-radius: 5px;
    display: block;
    }
</style>
<div class="section-top-border">
    <form action="" method="GET">
        <div class="row gallery-item">
            @foreach ($wishlist as $product)
                <div class="col-md-4 mb-3">
                    <div class="single-deal">
                        <div class="overlay"></div>
                        <img class="img-fluid w-100" src="{{ asset('storage/photo/'.$product->image) }}" alt="">
                        <a href="/product-detail-user/{{$product->id}}">
                            <div class="deal-details">
                                <h6 class="deal-title">{{$product->name}}</h6>
                            </div>
                        </a>
                        <!-- Remove from wishlist link -->
                        <center><a href="{{ route('wishlist.remove', ['productId' => $product->id]) }}" class="primary-btn">Remove</a></center>
                    </div>
                </div>
            @endforeach
        </div>
    </form>
</div>

@endsection

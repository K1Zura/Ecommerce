@extends('template.template-user')
@section('content')
@section('title', 'Detail Produk')
@section('akhir', 'Detail Produk')
@section('judul', 'List Product')
<style>
    .gallery-item {
        position: relative;
    }

    .image-card {
        border: 1px solid #ccc;
        border-radius: 8px;
        overflow: hidden;
        transition: box-shadow 0.3s;
    }

    .image-card:hover {
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    }

    .image-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.7);
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: opacity 0.3s;
    }

    .image-card:hover .image-overlay {
        opacity: 1;
    }

    .image-name {
        text-align: center;
    }
</style>

<br>
<style>
    .single-deal img {
        width: 100%; /* Ensures the image takes the full width of its container */
        height: 300px; /* Set a fixed height for all images */
        object-fit: cover; /* Ensures the image covers the container without stretching */
    }
</style>
<div class="section-top-border">
    <form action="" method="GET">
        <div class="row gallery-item">
            @if (Auth::guard('user')->check() && Auth::guard('user')->user()->products->count() > 0)
                @foreach (Auth::guard('user')->user()->products as $product)
                    <div class="col-md-4 mb-3">
                        <div class="single-deal">
                            <div class="overlay"></div>
                            <img class="img-fluid w-100" src="{{ asset('storage/photo/'.$product->image) }}" alt="">
                            <a href="/product-detail/{{$product->id}}">
                                <div class="deal-details">
                                    <h6 class="deal-title">{{$product->name}}</h6>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="col-md-12">
                    <p>No products found for this user.</p>
                </div>
            @endif
        </div>
    </form>
</div>

@endsection

@extends('template.template-user')
@section('content')
@section('title', 'Shop')
@section('akhir', 'Shop')
@section('judul', 'Shop')
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-5">
            </div>
            <div class="col-xl-9 col-lg-8 col-md-7">
                <!-- Start Filter Bar -->
                <div class="filter-bar d-flex flex-wrap align-items-center">
                    <!-- Add the search engine here -->
                    <div class="search-engine">
                        <form action="" method="GET">
                            <input type="text" name="keyword" placeholder="Search...">
                            <button class="primary-btn">
                                Cari
                            </button>
                        </form>
                    </div>
                    <br>
                </div>
                <!-- End Filter Bar -->
                <!-- Start Best Seller -->
                <section class="lattest-product-area pb-40 category-list">
                    <div class="container">
                        <div class="row">
                            <form action="" method="GET" class="d-flex flex-wrap">
                                @foreach ($barang as $item)
                                @if ($item->validated == 1)
                                <!-- single product -->
                                <style>
                                    .single-product img {
                                        width: 100%;
                                        height: 600px;
                                        object-fit: cover;
                                    }
                                </style>
                                <div class="col-lg-4 col-md-6 mb-4">
                                    <div class="single-product">
                                        <img class="img-fluid" src="{{ asset('storage/photo/'.$item->image) }}" alt="">
                                        <div class="product-details">
                                            <h6>{{$item->name}}</h6>
                                            <div class="price">
                                                <h6>Rp.{{ number_format($item->harga, 2, '.', ',') }}</h6>
                                            </div>
                                            <div class="prd-bottom">
                                                @guest('user', 'membership')
                                                    <a href="{{ route('bag.add', ['productId' => $item->id]) }}" class="social-info">
                                                        <span class="ti-bag"></span>
                                                        <p class="hover-text">add to bag</p>
                                                    </a>
                                                    <a href="{{ route('wishlist.add', ['productId' => $item->id]) }}" class="social-info">
                                                        <span class="lnr lnr-heart"></span>
                                                        <p class="hover-text">Add to Wishlist</p>
                                                    </a>
                                                @else
                                                    @if(auth('user')->check())
                                                        <a href="{{ route('bag.add', ['productId' => $item->id]) }}" class="social-info">
                                                            <span class="ti-bag"></span>
                                                            <p class="hover-text">add to bag</p>
                                                        </a>
                                                    @endif

                                                    @if(auth('user')->check())
                                                        <a href="{{ route('wishlist.add', ['productId' => $item->id]) }}" class="social-info">
                                                            <span class="lnr lnr-heart"></span>
                                                            <p class="hover-text">Add to Wishlist</p>
                                                        </a>
                                                    @endif
                                                @endguest

                                                <a href="/product-detail-user/{{$item->id}}" class="social-info">
                                                    <span class="lnr lnr-move"></span>
                                                    <p class="hover-text">view more</p>
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                @endif
                                @endforeach
                            </form>
                        </div>
                    </div>
                </section>
                <!-- End Best Seller -->
                <!-- Start Filter Bar -->
                <div class="filter-bar d-flex flex-wrap align-items-center">
                    <div class="pagination">
                        {{$barang->withQueryString()->links('pagination::default')}}
                    </div>
                </div>
                <!-- End Filter Bar -->
            </div>
        </div>
    </div>


    <!-- Modal Quick Product View -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="container relative">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="product-quick-view">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="quick-view-carousel">
                                <div class="item" style="background: url(img/organic-food/q1.jpg);">

                                </div>
                                <div class="item" style="background: url(img/organic-food/q1.jpg);">

                                </div>
                                <div class="item" style="background: url(img/organic-food/q1.jpg);">

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="quick-view-content">
                                <div class="top">
                                    <h3 class="head">Mill Oil 1000W Heater, White</h3>
                                    <div class="price d-flex align-items-center"><span class="lnr lnr-tag"></span> <span class="ml-10">$149.99</span></div>
                                    <div class="category">Category: <span>Household</span></div>
                                    <div class="available">Availibility: <span>In Stock</span></div>
                                </div>
                                <div class="middle">
                                    <p class="content">Mill Oil is an innovative oil filled radiator with the most modern technology. If you are
                                        looking for something that can make your interior look awesome, and at the same time give you the pleasant
                                        warm feeling during the winter.</p>
                                    <a href="#" class="view-full">View full Details <span class="lnr lnr-arrow-right"></span></a>
                                </div>
                                <div class="bottom">
                                    <div class="color-picker d-flex align-items-center">Color:
                                        <span class="single-pick"></span>
                                        <span class="single-pick"></span>
                                        <span class="single-pick"></span>
                                        <span class="single-pick"></span>
                                        <span class="single-pick"></span>
                                    </div>
                                    <div class="quantity-container d-flex align-items-center mt-15">
                                        Quantity:
                                        <input type="text" class="quantity-amount ml-15" value="1" />
                                        <div class="arrow-btn d-inline-flex flex-column">
                                            <button class="increase arrow" type="button" title="Increase Quantity"><span class="lnr lnr-chevron-up"></span></button>
                                            <button class="decrease arrow" type="button" title="Decrease Quantity"><span class="lnr lnr-chevron-down"></span></button>
                                        </div>

                                    </div>
                                    <div class="d-flex mt-20">
                                        <a href="#" class="view-btn color-2"><span>Add to Cart</span></a>
                                        <a href="#" class="like-btn"><span class="lnr lnr-layers"></span></a>
                                        <a href="#" class="like-btn"><span class="lnr lnr-heart"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


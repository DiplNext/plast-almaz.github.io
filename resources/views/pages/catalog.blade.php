@extends('layouts.app')
@section('content')
    <!-- product page section start -->
    <div class="product_page_section mb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product_page_wrapper">
                        <!--shop toolbar area start-->
                        <div class="product_sidebar_header mb-60 d-flex justify-content-between align-items-center">
                            <div class="page__amount border">
                                <p><span>12</span> Product Found of <span>30</span></p>
                            </div>
                            <div class="product_header_right d-flex align-items-center">
                                {{-- <div class="sorting__by d-flex align-items-center">
                                    <span>Sort By : </span>
                                    <form class="select_option" action="#">
                                        <select name="orderby" id="short">
                                            <option selected value="1">Default</option>
                                            <option value="2">Sort by popularity</option>
                                            <option value="3">Sort by newness</option>
                                            <option value="4"> low to high</option>
                                            <option value="5"> high to low</option>
                                            <option value="6">Product Name: Z</option>
                                        </select>
                                    </form>
                                </div> --}}
                                <div class="product__toolbar__btn">
                                    <ul class="nav" role="tablist">
                                        <li class="nav-item">
                                            <button class="active" data-bs-toggle="tab" data-bs-target="#grid"
                                                role="tab" aria-controls="grid" aria-selected="true">
                                                <i class="ion-grid"></i>
                                            </button>
                                        </li>
                                        <li class="nav-item">
                                            <button data-bs-toggle="tab" data-bs-target="#list" aria-controls="list"
                                                role="tab" aria-selected="false"><i class="ion-ios-list"></i>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--shop toolbar area end-->

                        <!--shop gallery start-->
                        <div class="product_page_gallery">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="grid" role="tabpanel">
                                    <div class="row grid__product">
                                        @foreach ($products as $product)
                                            <div class="col-xl-3 col-md-4 col-sm-6">
                                                <article class="single_product wow fadeInUp" data-wow-delay="0.2s"
                                                    data-wow-duration="1.2s">
                                                    <figure>
                                                        <div class="product_thumb">
                                                            <a href="{{ route('product', [$category, $product]) }}">
                                                                <img src="{{ $product->thumbnail }}" alt="">
                                                            </a>
                                                            <div class="action_links">
                                                                <ul class="d-flex justify-content-center">
                                                                    <li class="quick_button">
                                                                        <a href="#" title="Quick View"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#modal_box">
                                                                            <span class="pe-7s-look"></span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <figcaption class="product_content text-center">
                                                            <h4><a href="{{ route('product', [$category, $product]) }}">
                                                                    {{ $product->name }}
                                                                </a>
                                                            </h4>
                                                            <div class="price_box">
                                                                <span class="current_price">${{ $product->price }}</span>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </article>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="list" role="tabpanel">
                                    <div class="list__product">
                                        @foreach ($products as $product)
                                            <article class="product_list_items border-bottom">
                                                <figure class="product_list_flex d-flex align-items-center">
                                                    <div class="product_thumb">
                                                        <a href="{{ route('product', [$category, $product]) }}">
                                                            <img src="{{ $product->thumbnail }}" alt="">
                                                        </a>
                                                        <div class="action_links">
                                                            <ul class="d-flex justify-content-center">
                                                                <li class="quick_button">
                                                                    <a href="#" title="Quick View" data-bs-toggle="modal"
                                                                        data-bs-target="#modal_box">
                                                                        <span class="pe-7s-look"></span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <figcaption class="product_list_content">
                                                        <h4><a href="{{ route('product', [$category, $product]) }}">
                                                                {{ $product->name }}
                                                            </a>
                                                        </h4>
                                                        <div class="product__ratting">
                                                            <ul class="d-flex">
                                                                <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                                <li><a href="#"><i class="ion-android-star-outline"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="price_box">
                                                            <span class="current_price">${{ $product->price }}</span>
                                                        </div>
                                                        <div class="product__desc">
                                                            <p>{{ $product->description }}</p>
                                                        </div>
                                                        <div class="action_links product_list_action">
                                                            <ul class="d-flex">
                                                                <li class="quick_button">
                                                                    <a href="#" title="Quick View" data-bs-toggle="modal"
                                                                        data-bs-target="#modal_box">
                                                                        <span class="pe-7s-look"></span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </article>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{ $products->links() }}
                        {{-- <div class="pagination poduct_pagination">
                            <ul>
                                <li class="current"><span>1</span></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li class="next">
                                    <a href="#">
                                        <i class="ion-chevron-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </div> --}}
                        <!--shop gallery end-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product page section end -->
@endsection

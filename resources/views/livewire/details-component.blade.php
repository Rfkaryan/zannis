<main>
    <section class="hero hero-normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>Katalog Alat Musik</span>
                        </div>
                        <ul>
                            <li><a href="#">Gitar Akustik</a></li>
                            <li><a href="#">Guitar Elektrik</a></li>
                            <li><a href="#">Biola & Violin</a></li>
                            <li><a href="#">Bass</a></li>
                            <li><a href="#">Ukulele</a></li>
                            <li><a href="#">Drum</a></li>
                            <li><a href="#">Keyboard & Piano</a></li>
                            <li><a href="#">Saksofon</a></li>
                            <li><a href="#">Suling</a></li>
                            <li><a href="#">Harmonika</a></li>
                            <li><a href="#">Aksesoris Musik</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                <div class="hero__search__categories">
                                    Kategori
                                    <span class="arrow_carrot-down"></span>
                                </div>
                                <input type="text" placeholder="Apa yang kamu butuhkan?">
                                <button type="submit" class="site-btn">CARI</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="breadcrumb-section set-bg" data-setbg="{{asset('assets/img/breadcrumb.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Alat Musik</h2>
                        <div class="breadcrumb__option">
                            <a href="/">Home</a>
                            <a href="/shop">Belanja</a>
                            <span>Alat Musik</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__pic">
                        <div class="product__details__pic__item">
                            <img class="product__details__pic__item--large"
                                src="{{asset('assets/img/product')}}/{{$product->image}}" alt="{{$product->name}}">
                        </div>
                        <div class="product__details__pic__slider owl-carousel">
                            <img data-imgbigurl="{{asset('assets/img/product/details/product-details-2.jpg')}}"
                                src="{{asset('assets/img/product/details/thumb-1.jpg')}}" alt="product thumbnail">
                            <img data-imgbigurl="{{asset('assets/img/product/details/product-details-3.jpg')}}"
                                src="{{asset('assets/img/product/details/thumb-2.jpg')}}" alt="product thumbnail">
                            <img data-imgbigurl="{{asset('assets/img/product/details/product-details-5.jpg')}}"
                                src="{{asset('assets/img/product/details/thumb-3.jpg')}}" alt="product thumbnail">
                            <img data-imgbigurl="{{asset('assets/img/product/details/product-details-4.jpg')}}"
                                src="{{asset('assets/img/product/details/thumb-4.jpg')}}" alt="product thumbnail">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__text">
                        <h3>{{$product->name}}</h3>
                        <div class="product__details__rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <span>(18 reviews)</span>
                        </div>
                        <div class="product__details__price">Rp.{{$product->regular_price}}</div>
                            {{$product->short_description}}
                        <br>
                        <br>
                        <div class="product__details__quantity">
                            <div class="quantity">
                                <div class="pro-qty">
                                    <input type="text" value="1">
                                </div>
                            </div>
                        </div>
                        <a href="#" class="primary-btn" wire:click.prevent="store({{$product->id}},'{{$product->name}}',{{$product->regular_price}})">Tambah Keranjang</a>
                        <a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a>
                        <ul>
                            <li><b>Availability</b> <span>{{$product->stock_status}}</span></li>
                            <li><b>Shipping</b> <span>01 day shipping. <samp>Free pickup today</samp></span></li>
                            {{-- <li><b>Weight</b> <span>0.5 kg</span></li> --}}
                            <li><b>Share on</b>
                                <div class="share">
                                    <a href="facebook.com"><i class="fa fa-facebook"></i></a>
                                    <a href="twitter.com"><i class="fa fa-twitter"></i></a>
                                    <a href="instagram.com"><i class="fa fa-instagram"></i></a>
                                    <a href="pinterest.com"><i class="fa fa-pinterest"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="product__details__tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab"
                                    aria-selected="true">Description</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab"
                                    aria-selected="false">Information</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab"
                                    aria-selected="false">Reviews <span>(1)</span></a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h6>Products Description</h6>
                                    {{$product->description}}
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-2" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h6>Products Infomation</h6>
                                    <p>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.
                                        Pellentesque in ipsum id orci porta dapibus. Proin eget tortor risus.
                                        Vivamus suscipit tortor eget felis porttitor volutpat. Vestibulum ac diam
                                        sit amet quam vehicula elementum sed sit amet dui. Donec rutrum congue leo
                                        eget malesuada. Vivamus suscipit tortor eget felis porttitor volutpat.
                                        Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Praesent
                                        sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ac
                                        diam sit amet quam vehicula elementum sed sit amet dui. Vestibulum ante
                                        ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
                                        Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.
                                        Proin eget tortor risus.</p>
                                    <p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Lorem
                                        ipsum dolor sit amet, consectetur adipiscing elit. Mauris blandit aliquet
                                        elit, eget tincidunt nibh pulvinar a. Cras ultricies ligula sed magna dictum
                                        porta. Cras ultricies ligula sed magna dictum porta. Sed porttitor lectus
                                        nibh. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.</p>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-3" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h6>Products Infomation</h6>
                                    <p>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.
                                        Pellentesque in ipsum id orci porta dapibus. Proin eget tortor risus.
                                        Vivamus suscipit tortor eget felis porttitor volutpat. Vestibulum ac diam
                                        sit amet quam vehicula elementum sed sit amet dui. Donec rutrum congue leo
                                        eget malesuada. Vivamus suscipit tortor eget felis porttitor volutpat.
                                        Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Praesent
                                        sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ac
                                        diam sit amet quam vehicula elementum sed sit amet dui. Vestibulum ante
                                        ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
                                        Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.
                                        Proin eget tortor risus.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="related-product">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title related__product__title">
                        <h2>Related Product</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($related_product as $r_product)
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="{{asset('assets/img/product')}}/{{$r_product->image}}">
                            <ul class="product__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="{{route('product.details',['slug'=>$r_product->slug])}}">{{$r_product->name}}</a></h6>
                            <h5>Rp.{{$r_product->regular_price}}</h5>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</main>

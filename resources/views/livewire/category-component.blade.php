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

    <section class="breadcrumb-section set-bg" data-setbg="{{ asset('assets/img/breadcrumb.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Zannis Store</h2>
                        <div class="breadcrumb__option">
                            <a href="/shop">Belanja</a>
                            <span>{{$category_name}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-5">
                    <div class="sidebar">
                        <div class="sidebar__item">
                            <h4>Kategori</h4>
                            <ul>
                                @foreach ($categories as $category)
                                <li><a
                                        href="{{route('product.category',['category_slug'=>$category->slug])}}">{{$category->name}}</a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="sidebar__item">
                            <h4>Rentang Harga</h4>
                            <div class="price-range-wrap">
                                <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"
                                    data-min="1000" data-max="9000000">
                                    <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                                    <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                    <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                </div>
                                <div class="range-slider">
                                    <div class="price-input">
                                        <input type="text" id="minamount" step="1000">
                                        <input type="text" id="maxamount" step="1000">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar__item sidebar__item__color--option">
                            <h4>Merek</h4>
                            <div class="sidebar__item__color sidebar__item__color--white">
                                <label for="ibanez">
                                    Ibanez
                                    <input type="radio" id="ibanez">
                                </label>
                            </div>
                            <div class="sidebar__item__color sidebar__item__color--white">
                                <label for="fender">
                                    Fender
                                    <input type="radio" id="fender">
                                </label>
                            </div>
                            <div class="sidebar__item__color sidebar__item__color--white">
                                <label for="yamaha">
                                    Yamaha
                                    <input type="radio" id="yamaha">
                                </label>
                            </div>
                            <div class="sidebar__item__color sidebar__item__color--white">
                                <label for="gibson">
                                    Gibson
                                    <input type="radio" id="gibson">
                                </label>
                            </div>
                            <div class="sidebar__item__color sidebar__item__color--white">
                                <label for="taylor">
                                    Taylor
                                    <input type="radio" id="taylor">
                                </label>
                            </div>
                            <div class="sidebar__item__color sidebar__item__color--white">
                                <label for="others">
                                    Others
                                    <input type="radio" id="others">
                                </label>
                            </div>
                        </div>
                        <div class="sidebar__item">
                            <h4>Terpopuler</h4>
                            <div class="sidebar__item__size">
                                <label for="new-arrival">
                                    New arrival
                                    <input type="radio" id="new-arrival">
                                </label>
                            </div>
                            <div class="sidebar__item__size">
                                <label for="trending-gear">
                                    Trending gear
                                    <input type="radio" id="trending-gear">
                                </label>
                            </div>
                            <div class="sidebar__item__size">
                                <label for="packages">
                                    Packages
                                    <input type="radio" id="packages">
                                </label>
                            </div>
                            <div class="sidebar__item__size">
                                <label for="brand">
                                    Brand
                                    <input type="radio" id="brand">
                                </label>
                            </div>
                        </div>
                        <div class="sidebar__item">
                            <div class="latest-product__text">
                                <h4>Produk Terbaru!</h4>
                                <div class="latest-product__slider owl-carousel">
                                    <div class="latest-prdouct__slider__item">
                                        <a href="#" class="latest-product__item">
                                            <div class="latest-product__item__pic">
                                                <img src="{{ asset('assets/img/latest-product/latest.png')}}" alt="">
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6>Ini Alat Musik</h6>
                                                <span>Rp.10.000</span>
                                            </div>
                                        </a>
                                        <a href="#" class="latest-product__item">
                                            <div class="latest-product__item__pic">
                                                <img src="{{ asset('assets/img/latest-product/latest.png')}}" alt="">
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6>Ini Alat Musik</h6>
                                                <span>Rp.10.000</span>
                                            </div>
                                        </a>
                                        <a href="#" class="latest-product__item">
                                            <div class="latest-product__item__pic">
                                                <img src="{{ asset('assets/img/latest-product/latest.png')}}" alt="">
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6>Ini Alat Musik</h6>
                                                <span>Rp.10.000</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="latest-prdouct__slider__item">
                                        <a href="#" class="latest-product__item">
                                            <div class="latest-product__item__pic">
                                                <img src="{{ asset('assets/img/latest-product/latest.png')}}" alt="">
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6>Ini Alat Musik</h6>
                                                <span>Rp.10.000</span>
                                            </div>
                                        </a>
                                        <a href="#" class="latest-product__item">
                                            <div class="latest-product__item__pic">
                                                <img src="{{ asset('assets/img/latest-product/latest.png')}}" alt="">
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6>Ini Alat Musik</h6>
                                                <span>Rp.10.000</span>
                                            </div>
                                        </a>
                                        <a href="#" class="latest-product__item">
                                            <div class="latest-product__item__pic">
                                                <img src="{{ asset('assets/img/latest-product/latest.png')}}" alt="">
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6>Ini Alat Musik</h6>
                                                <span>Rp.10.000</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-7">
                    <div class="product__discount">
                        <div class="section-title product__discount__title">
                            <h2>Diskon Hari Ini!</h2>
                        </div>
                        <div class="row">
                            <div class="product__discount__slider owl-carousel">
                                <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg"
                                            data-setbg="{{ asset('assets/img/product/discount/pd-1.jpg')}}">
                                            <div class="product__discount__percent">-20%</div>
                                            <ul class="product__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__discount__item__text">
                                            <span>Gitar Elektrik</span>
                                            <h5><a href="#">Ini juga Alat Musik</a></h5>
                                            <div class="product__item__price">Rp.10.000 <span>Rp.36.000</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg"
                                            data-setbg="{{ asset('assets/img/product/discount/pd-2.jpg')}}">
                                            <div class="product__discount__percent">-20%</div>
                                            <ul class="product__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__discount__item__text">
                                            <span>Biola</span>
                                            <h5><a href="#">Ini Alat Musik loh</a></h5>
                                            <div class="product__item__price">Rp.10.000 <span>Rp.36.000</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg"
                                            data-setbg="{{ asset('assets/img/product/discount/pd-3.jpg')}}">
                                            <div class="product__discount__percent">-20%</div>
                                            <ul class="product__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__discount__item__text">
                                            <span>Gitar Akustik</span>
                                            <h5><a href="#">Ini alat Musik</a></h5>
                                            <div class="product__item__price">Rp.10.000 <span>Rp.36.00</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg"
                                            data-setbg="{{ asset('assets/img/product/discount/pd-4.jpg')}}">
                                            <div class="product__discount__percent">-20%</div>
                                            <ul class="product__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__discount__item__text">
                                            <span>Gitar Akustik</span>
                                            <h5><a href="#">Ini juga Alat Musik</a></h5>
                                            <div class="product__item__price">Rp.10.000 <span>Rp.36.00</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg"
                                            data-setbg="{{ asset('assets/img/product/discount/pd-5.jpg')}}">
                                            <div class="product__discount__percent">-20%</div>
                                            <ul class="product__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__discount__item__text">
                                            <span>Gitar Akustik</span>
                                            <h5><a href="#">Ini juga Alat Musik</a></h5>
                                            <div class="product__item__price">Rp.10.000 <span>Rp.36.00</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg"
                                            data-setbg="{{ asset('assets/img/product/discount/pd-6.jpg')}}">
                                            <div class="product__discount__percent">-20%</div>
                                            <ul class="product__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__discount__item__text">
                                            <span>Gitar Akustik</span>
                                            <h5><a href="#">Ini juga Alat Musik</a></h5>
                                            <div class="product__item__price">Rp.10.000 <span>Rp.36.00</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="filter__item">
                        <div class="row">
                            <div class="col-lg-4 col-md-5">
                                <div class="filter__sort" wire:model="sorting">
                                    <span>Urutkan Berdasarkan</span>
                                    <select>
                                        <option value="default">Urutkan secara Default</option>
                                        <option value="price">Harga Terendah</option>
                                        <option value="price-desc">Harga Tertinggi</option>
                                        {{-- <option value="0">Popularitas</option> --}}
                                        <option value="date">Terbaru</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="filter__found">
                                    <h6><span>16</span> Produk Ditemukan</h6>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-3">
                                <div class="filter__option">
                                    <span class="icon_grid-2x2"></span>
                                    <span class="icon_ul"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        @foreach ($products as $product)
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg"
                                    data-setbg="{{ asset('assets/img/product/')}}/{{$product->image}}"
                                    alt="{{$product->name}}">
                                    <ul class="product__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                        <li><a href="#"
                                                wire:click.prevent="store({{$product->id}},'{{$product->name}}',{{$product->regular_price}})"><i
                                                    class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a
                                            href="{{route('product.details',['slug'=>$product->slug])}}">{{$product->name}}</a>
                                    </h6>
                                    <h5>{{$product->regular_price}}</h5>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                    <div class="product__pagination">
                        <a href="#">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

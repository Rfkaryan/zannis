<main id="main">
    <section class="hero">
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
                    <div class="hero__item set-bg" data-setbg="{{ asset('assets/img/hero/banner.jpg') }}">
                        <div class="hero__text">
                            <span>ALAT MUSIK BERKUALITAS</span>
                            <h2>TERBAIK DI KELASNYA <br />100% Original</h2>
                            <p>Gratis Pengiriman di daerah Bandung dan sekitarnya.</p>
                            <a href="#" class="primary-btn">BELANJA</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="{{ asset('assets/img/product/product_1.jpg') }}">
                            <h5><a href="#">Biola</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="{{ asset('assets/img/product/product_2.jpg') }}">
                            <h5><a href="#">Gitar Akustik</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="{{ asset('assets/img/product/product_3.jpg') }}">
                            <h5><a href="#">Bass</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="{{ asset('assets/img/product/product_4.jpg') }}">
                            <h5><a href="#">Drum</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="{{ asset('assets/img/product/product_5.jpg') }}">
                            <h5><a href="#">Gitar Elektrik</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="{{ asset('assets/img/product/product_6.jpg') }}">
                            <h5><a href="#">Harmonika</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="{{ asset('assets/img/product/product_7.jpg') }}">
                            <h5><a href="#">Head Phone</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="{{ asset('assets/img/product/product_8.jpg') }}">
                            <h5><a href="#">Head Phone</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="{{ asset('assets/img/product/product_9.jpg') }}">
                            <h5><a href="#">Mic</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="{{ asset('assets/img/product/product_10.jpg') }}">
                            <h5><a href="#">Piano</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="{{ asset('assets/img/product/product_11.jpg') }}">
                            <h5><a href="#">saxophone</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="{{ asset('assets/img/product/product_12.jpg') }}">
                            <h5><a href="#">Sound System</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="{{ asset('assets/img/product/product_13.jpg') }}">
                            <h5><a href="#">Suling</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="{{ asset('assets/img/product/product_14.jpg') }}">
                            <h5><a href="#">Ukulele</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Featured Product</h2>
                    </div>
                    <div class="featured__controls">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            <li data-filter=".oranges">Biola</li>
                            <li data-filter=".gitar-akustik">Gitar Akustik</li>
                            <li data-filter=".gitar-elektrik">Gitar Elektrik</li>
                            <li data-filter=".piano">Keyboard & Piano</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges gitar-akustik">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{ asset('assets/img/featured/feature.png') }}">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Ini Alat Musik</a></h6>
                            <h5>Rp. 150.000</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix gitar-elektrik piano">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{ asset('assets/img/featured/feature.png') }}">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Ini Alat Musik</a></h6>
                            <h5>Rp. 150.000</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix gitar-elektrik gitar-akustik">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{ asset('assets/img/featured/feature.png') }}">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Ini Alat Musik</a></h6>
                            <h5>Rp. 150.000</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix piano oranges">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{ asset('assets/img/featured/feature.png') }}">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Ini Alat Musik</a></h6>
                            <h5>Rp. 150.000</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix gitar-akustik gitar-elektrik">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{ asset('assets/img/featured/feature.png') }}">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Ini Alat Musik</a></h6>
                            <h5>Rp. 150.000</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges piano">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{ asset('assets/img/featured/feature.png') }}">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Ini Alat Musik</a></h6>
                            <h5>Rp. 150.000</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix gitar-akustik gitar-elektrik">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{ asset('assets/img/featured/feature.png') }}">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Ini Alat Musik</a></h6>
                            <h5>Rp. 150.000</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix piano gitar-elektrik">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{ asset('assets/img/featured/feature.png') }}">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Ini Alat Musik</a></h6>
                            <h5>Rp. 150.000</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="{{ asset('assets/img/banner/banner-1.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="{{ asset('assets/img/banner/banner-2.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="latest-product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Latest Products</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{ asset('assets/img/latest-product/latest.png') }}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Ini Alat Musik</h6>
                                        <span>Rp. 150.000</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{ asset('assets/img/latest-product/latest.png') }}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Ini Alat Musik</h6>
                                        <span>Rp. 150.000</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{ asset('assets/img/latest-product/latest.png') }}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Ini Alat Musik</h6>
                                        <span>Rp. 150.000</span>
                                    </div>
                                </a>
                            </div>
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{ asset('assets/img/latest-product/latest.png') }}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Ini Alat Musik</h6>
                                        <span>Rp. 150.000</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{ asset('assets/img/latest-product/latest.png') }}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Ini Alat Musik</h6>
                                        <span>Rp. 150.000</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{ asset('assets/img/latest-product/latest.png') }}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Ini Alat Musik</h6>
                                        <span>Rp. 150.000</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Top Rated Products</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{ asset('assets/img/latest-product/latest.png') }}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Ini Alat Musik</h6>
                                        <span>Rp. 150.000</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{ asset('assets/img/latest-product/latest.png') }}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Ini Alat Musik</h6>
                                        <span>Rp. 150.000</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{ asset('assets/img/latest-product/latest.png') }}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Ini Alat Musik</h6>
                                        <span>Rp. 150.000</span>
                                    </div>
                                </a>
                            </div>
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{ asset('assets/img/latest-product/latest.png') }}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Ini Alat Musik</h6>
                                        <span>Rp. 150.000</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{ asset('assets/img/latest-product/latest.png') }}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Ini Alat Musik</h6>
                                        <span>Rp. 150.000</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{ asset('assets/img/latest-product/latest.png') }}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Ini Alat Musik</h6>
                                        <span>Rp. 150.000</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Review Products</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{ asset('assets/img/latest-product/latest.png') }}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Ini Alat Musik</h6>
                                        <span>Rp. 150.000</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{ asset('assets/img/latest-product/latest.png') }}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Ini Alat Musik</h6>
                                        <span>Rp. 150.000</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{ asset('assets/img/latest-product/latest.png') }}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Ini Alat Musik</h6>
                                        <span>Rp. 150.000</span>
                                    </div>
                                </a>
                            </div>
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{ asset('assets/img/latest-product/latest.png') }}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Ini Alat Musik</h6>
                                        <span>Rp. 150.000</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{ asset('assets/img/latest-product/latest.png') }}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Ini Alat Musik</h6>
                                        <span>Rp. 150.000</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{ asset('assets/img/latest-product/latest.png') }}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Ini Alat Musik</h6>
                                        <span>Rp. 150.000</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="from-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title from-blog__title">
                        <h2>From The Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="{{ asset('assets/img/blog/blog-1.jpg') }}" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="#">Cooking tips make cooking simple</a></h5>
                            <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="{{ asset('assets/img/blog/blog-2.jpg') }}" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="#">6 ways to prepare breakfast for 30</a></h5>
                            <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="{{ asset('assets/img/blog/blog-3.jpg') }}" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="#">Visit the clean farm in the US</a></h5>
                            <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
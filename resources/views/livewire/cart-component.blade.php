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
                        <h2>Keranjang Belanja</h2>
                        <div class="breadcrumb__option">
                            <a href="/">Beranda</a>
                            <span>Keranjang</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">Produk</th>
                                    <th>Harga</th>
                                    <th>Banyaknya</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="shoping__cart__item">
                                        <img src="{{ asset('assets/img/cart/cart.png')}}" alt="">
                                        <h5>Gitar Elektrik - Yamaha</h5>
                                    </td>
                                    <td class="shoping__cart__price">
                                        Rp.2.500.000
                                    </td>
                                    <td class="shoping__cart__quantity">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input type="text" value="1">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="shoping__cart__total">
                                        Rp.2.500.000
                                    </td>
                                    <td class="shoping__cart__item__close">
                                        <span class="icon_close"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="shoping__cart__item">
                                        <img src="{{ asset('assets/img/cart/cart.png')}}" alt="">
                                        <h5>Senar Gitar Elixir</h5>
                                    </td>
                                    <td class="shoping__cart__price">
                                        Rp.500.000
                                    </td>
                                    <td class="shoping__cart__quantity">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input type="text" value="1">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="shoping__cart__total">
                                        Rp.1.000.000
                                    </td>
                                    <td class="shoping__cart__item__close">
                                        <span class="icon_close"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="shoping__cart__item">
                                        <img src="{{ asset('assets/img/cart/cart.png')}}" alt="">
                                        <h5>Gitar Akustik - Gibson</h5>
                                    </td>
                                    <td class="shoping__cart__price">
                                        Rp.1.500.000
                                    </td>
                                    <td class="shoping__cart__quantity">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input type="text" value="1">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="shoping__cart__total">
                                        Rp.1.500.000
                                    </td>
                                    <td class="shoping__cart__item__close">
                                        <span class="icon_close"></span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__btns">
                        <a href="#" class="primary-btn cart-btn">LANJUTKAN BELANJA</a>
                        <a href="#" class="primary-btn cart-btn cart-btn-right"><span class="icon_loading"></span>
                            PERBAHARUI</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__continue">
                        <div class="shoping__discount">
                            <h5>Kode Discount</h5>
                            <form action="#">
                                <input type="text" placeholder="Masukan kode kuponmu">
                                <button type="submit" class="site-btn">KONFIRMASI</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__checkout">
                        <h5>Total Keranjang</h5>
                        <ul>
                            <li>Total Harga <span>Rp.5.000.000</span></li>
                            <li>Discount <span>Rp.0</span></li>
                            <li>Total <span>Rp.5.000.000</span></li>
                        </ul>
                        <a href="/checkout" class="primary-btn">CHECKOUT</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
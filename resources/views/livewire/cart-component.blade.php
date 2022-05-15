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
                            @if (Session::has('success_message'))
                            <div class="alert alert-success">
                                <strong>SUCCESS</strong> {{Session::get('success_message')}}
                            </div>
                            @endif
                            <thead>
                                <tr>
                                    <th class="shoping__product">Produk</th>
                                    <th>Harga</th>
                                    <th>Banyaknya</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            @if (Cart::count() > 0)
                            <tbody>
                                @foreach (Cart::content() as $item)
                                <tr>
                                    <td class="shoping__cart__item">
                                        <img src="{{ asset('assets/img/product')}}/{{$item->model->image}}"
                                            alt="{{$item->model->name}}" style="height: 101px; widht: 101px;">
                                        <a href="{{route('product.details',['slug'=>$item->model->slug])}}">
                                            <h5>{{$item->model->name}}</h5>
                                        </a>
                                    </td>
                                    <td class="shoping__cart__price">
                                        {{$item->regular_price}}
                                    </td>
                                    <td class="shoping__cart__quantity">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <span class="dec qtybtn" wire:click.prevent="decreaseQuantity('{{$item->rowId}}')">-</span>
                                                <input type="text" value="{{$item->qty}}">
                                                <span class="inc qtybtn" wire:click.prevent="increaseQuantity('{{$item->rowId}}')">+</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="shoping__cart__total">
                                        {{$item->subtotal}}
                                    </td>
                                    <td class="shoping__cart__item__close">
                                        <span class="icon_close" wire:click.prevent="destroy('{{$item->rowId}}')"></span>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            @else
                                <p>NO ITEM IN CART</p>
                            @endif
                        </table>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__btns">
                        <a href="/shop" class="primary-btn cart-btn">LANJUTKAN BELANJA</a>
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
                            <li>Subtotal <span>Rp.{{Cart::subtotal()}}</span></li>
                            <li>Ongkir <span>Rp.{{Cart::tax()}}</span></li>
                            <li>Total <span>Rp.{{Cart::total()}}</span></li>
                        </ul>
                        <a href="/checkout" class="primary-btn">CHECKOUT</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

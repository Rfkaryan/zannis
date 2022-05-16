<!DOCTYPE html>
<html lang="id-id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tokopaeja | Belanja Alat Musik</title>


    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}" type="text/css">
    @livewireStyles
</head>

<body>

    <div id="preloder">
        <div class="loader"></div>
    </div>


    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="{{asset ('assets/img/logo.png') }}" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li>
                    <a href="/cart"><i class="fa fa-shopping-cart"></i>
                        @if (Cart::count() > 0)
                        <span>{{Cart::count()}}</span>
                        @endif
                    </a>
                </li>
            </ul>
            <div class="header__cart__price">item: <span>Rp.{{Cart::total()}}</span></div>
        </div>
        <div class="humberger__menu__widget">
            @if (Route::has('login'))
            @auth
            @if (Auth::user()->utype === 'ADM')
            <div class="header__top__right__language">
                <div><i class="fa fa-user"></i> Administrator ({{Auth::user()->name}})</div>
                <span class="arrow_carrot-down"></span>
                <ul>
                    <li><a href="{{route('logout')}}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                    </li>
                    <form id="logout-form" method='POST' action="{{route('logout')}}">
                        @csrf

                    </form>
                    <li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                </ul>
            </div>
            {{-- <div class="header__top__right__auth">
                            <a href="#"><i class="fa fa-user"></i> Administrator ({{Auth::user()->name}})</a>
            <a href=""><i class="fa fa-chart-line">Dashboard</i></a>
        </div> --}}
        @else
        <div class="header__top__right__language">
            <div><i class="fa fa-user"></i> User ({{Auth::user()->name}})</div>
            <span class="arrow_carrot-down"></span>
            <ul>
                <li><a href="{{route('logout')}}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                </li>
                <form id="logout-form" method='POST' action="{{route('logout')}}">
                    @csrf

                </form>
                {{-- <li><a href="{{route('user.dashboard')}}">Dashboard</a></li> --}}
            </ul>
        </div>
        {{-- <div class="header__top__right__auth">
                            <a href="#"><i class="fa fa-user"></i> Administrator ({{Auth::user()->name}})</a>
        <a href="{{route('user.dashboard')}}"><i class="fa fa-chart-line">Dashboard</i></a>
    </div> --}}
    @endif
    @else
    <div class="header__top__right__authreg">
        <a href="{{route('register')}}"><i class="fa fa-user"></i> Register</a>
    </div>
    <div class="header__top__right__auth">
        <a href="{{route('login')}}"><i class="fa fa-user"></i> Login</a>
    </div>

    @endif
    @endif
    </div>
    <nav class="humberger__menu__nav mobile-menu">
        <ul>
            <li class="active"><a href="/">Beranda</a></li>
            <li><a href="/shop">Belanja</a></li>
            <li><a href="#">Halaman</a>
                <ul class="header__menu__dropdown">
                    {{-- <li><a href="./shop-details.html">Detail Belanja</a></li> --}}
                    <li><a href="/cart">Keranjang</a></li>
                    <li><a href="/checkout">Check Out</a></li>

                </ul>
            </li>

            <li><a href="/contact">Kontak</a></li>
        </ul>
    </nav>
    <div id="mobile-menu-wrap"></div>
    <div class="header__top__right__social">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-instagram"></i></a>
    </div>
    <div class="humberger__menu__contact">

        {{-- <li><i class="fa fa-envelope"></i> email mungkin atau ga tempat cetak struk</li>
                <li>Bingung di isi apa</li> --}}
        </ul>
    </div>
    </div>



    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">

                            {{-- <li><i class="fa fa-envelope"></i> email mungkin atau ga tempat cetak struk</li>
                                <li>Bingung di isi apa</li> --}}
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                            @if (Route::has('login'))
                            @auth
                            @if (Auth::user()->utype === 'ADM')
                            <div class="header__top__right__language">
                                <div><i class="fa fa-user"></i> Administrator ({{Auth::user()->name}})</div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                    <li><a href="{{route('logout')}}"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                    </li>
                                    <form id="logout-form" method='POST' action="{{route('logout')}}">
                                        @csrf

                                    </form>
                                    <li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                                </ul>
                            </div>
                            {{-- <div class="header__top__right__auth">
                                        <a href="#"><i class="fa fa-user"></i> Administrator ({{Auth::user()->name}})</a>
                            <a href=""><i class="fa fa-chart-line">Dashboard</i></a>
                        </div> --}}
                        @else
                        <div class="header__top__right__language">
                            <div><i class="fa fa-user"></i> User ({{Auth::user()->name}})</div>
                            <span class="arrow_carrot-down"></span>
                            <ul>
                                <li><a href="{{route('logout')}}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                </li>
                                <form id="logout-form" method='POST' action="{{route('logout')}}">
                                    @csrf

                                </form>
                                {{-- <li><a href="{{route('user.dashboard')}}">Dashboard</a></li> --}}
                            </ul>
                        </div>
                        {{-- <div class="header__top__right__auth">
                                        <a href="#"><i class="fa fa-user"></i> Administrator ({{Auth::user()->name}})</a>
                        <a href="{{route('user.dashboard')}}"><i class="fa fa-chart-line">Dashboard</i></a>
                    </div> --}}
                    @endif
                    @else
                    <div class="header__top__right__authreg">
                        <a href="{{route('register')}}"><i class="fa fa-user"></i> Register</a>
                    </div>
                    <div class="header__top__right__auth">
                        <a href="{{route('login')}}"><i class="fa fa-user"></i> Login</a>
                    </div>

                    @endif
                    @endif
                </div>
            </div>
        </div>
        </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="/"><img src="{{asset ('assets/img/logo.png') }}" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="/">Beranda</a></li>
                            <li><a href="/shop">Belanja</a></li>
                            <li><a href="#">Halaman</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="/shop">Detail Belanja</a></li>
                                    <li><a href="/cart">Keranjang</a></li>
                                    <li><a href="/checkout">Check Out</a></li>

                                </ul>
                            </li>

                            <li><a href="./contact.html">Kontak</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="/cart"><i class="fa fa-shopping-cart"></i> @if (Cart::count() > 0)
                                    <span>{{Cart::count()}}</span>
                                    @endif</a></li>
                        </ul>
                        <div class="header__cart__price">item: <span>Rp.{{Cart::total()}}</span></div>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>


    {{$slot }}


    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="./index.html"><img src="{{asset ('assets/img/logo.png') }}" alt=""></a>
                        </div>
                        <ul>
                            <li>Alamat: Cijambe</li>
                            <li>No. Tlpn.: +62 856 5908 2846</li>
                            <li>Email: rezaanwar708@gmail.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <h6>Pintasan</h6>
                        <ul>
                            <li><a href="/">Beranda</a></li>
                            <li><a href="/shop">Belanja</a></li>
                            <li><a href="#">Halaman</a></li>
                            <li><a href="#">Kontak</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">Tokopedia</a></li>
                            <li><a href="#">Shopee</a></li>
                            <li><a href="#">Lazada</a></li>
                            <li><a href="#">Bukalapak</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h6>Bergabung dengan buletin kami</h6>
                        <p>Dapatkan update E-mail tentang toko terbaru kami dan penawaran khusus.</p>
                        <form action="#">
                            <input type="text" placeholder="Masukan E-Mail">
                            <button type="submit" class="site-btn">Subscribe</button>
                        </form>
                        <div class="footer__widget__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text">
                            <p>
                                Copyright &copy;<script>
                                    document.write(new Date().getFullYear());

                                </script> All rights reserved</p>
                        </div>
                        <div class="footer__copyright__payment"><img src="{{asset ('assets/img/payment.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>



    <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('assets/js/mixitup.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    @livewireScripts


</body>

</html>

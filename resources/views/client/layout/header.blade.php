    <header class="header-area header-style-1 header-height-2">
        <div class="header-top header-top-ptb-1 d-none d-lg-block">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-4">
                        <div class="header-info">
                            <ul>
                                <li><a href="page-about.htlm">About Us</a></li>
                                <li><a href="#">My Account</a></li>
                                <li><a href="shop-wishlist.html">Wishlist</a></li>
                                <li><a href="shop-order.html">Order Tracking</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-4">
                        <div class="text-center">
                            <div id="news-flash" class="d-inline-block">
                                <ul>
                                    <li>100% Secure delivery without contacting the courier</li>
                                    <li>Supper Value Deals - Save more with coupons</li>
                                    <li>Trendy 25silver jewelry, save up 35% off today</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4">
                        <div class="header-info header-info-right">
                            <ul>
                                <li>Need help? Call Us: <strong class="text-brand"> + 1800 900</strong></li>
                                <li>
                                    <a class="language-dropdown-active" href="#">English <i
                                            class="fi-rs-angle-small-down"></i></a>
                                    <ul class="language-dropdown">
                                        <li>
                                            <a href="#"><img
                                                    src="{{ asset('assets/client/assets/imgs/theme/flag-fr.png') }}"
                                                    alt="" />Français</a>
                                        </li>
                                        <li>
                                            <a href="#"><img
                                                    src="{{ asset('assets/client/assets/imgs/theme/flag-dt.png') }}"
                                                    alt="" />Deutsch</a>
                                        </li>
                                        <li>
                                            <a href="#"><img
                                                    src="{{ asset('assets/client/assets/imgs/theme/flag-ru.png') }}"
                                                    alt="" />Pусский</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-middle header-middle-ptb-1 d-none d-lg-block">
            <div class="container">
                <div class="header-wrap">
                    <div class="logo logo-width-1">
                        <a href="{{route('home')}}"><img src="{{ asset('assets/client/assets/imgs/theme/logo.svg') }}"
                                alt="logo" /></a>
                    </div>
                    <div class="header-right">
                        <div class="search-style-2">
                            <form action="#">
                                <select class="select-active">
                                    <option>All Categories</option>
                                    <option>Milks and Dairies</option>
                                    <option>Wines & Alcohol</option>
                                    <option>Clothing & Beauty</option>
                                    <option>Pet Foods & Toy</option>
                                    <option>Fast food</option>
                                    <option>Baking material</option>
                                    <option>Vegetables</option>
                                    <option>Fresh Seafood</option>
                                    <option>Noodles & Rice</option>
                                    <option>Ice cream</option>
                                </select>
                                <input type="text" placeholder="Search for items..." />
                            </form>
                        </div>
                        <div class="header-action-right">
                            <div class="header-action-2">
                                <div class="search-location">
                                    <form action="#">
                                        <select class="select-active">
                                            <option>Your Location</option>
                                            <option>Alabama</option>
                                            <option>Alaska</option>
                                            <option>Arizona</option>
                                            <option>Delaware</option>
                                            <option>Florida</option>
                                            <option>Georgia</option>
                                            <option>Hawaii</option>
                                            <option>Indiana</option>
                                            <option>Maryland</option>
                                            <option>Nevada</option>
                                            <option>New Jersey</option>
                                            <option>New Mexico</option>
                                            <option>New York</option>
                                        </select>
                                    </form>
                                </div>
                                <div class="header-action-icon-2">
                                    <a href="shop-compare.html">
                                        <img class="svgInject" alt="Nest"
                                            src="{{ asset('assets/client/assets/imgs/theme/icons/icon-compare.svg') }}" />
                                        <span class="pro-count blue">3</span>
                                    </a>
                                    <a href="shop-compare.html"><span class="lable ml-0">Compare</span></a>
                                </div>
                                <div class="header-action-icon-2">
                                    <a href="shop-wishlist.html">
                                        <img class="svgInject" alt="Nest"
                                            src="{{ asset('assets/client/assets/imgs/theme/icons/icon-heart.svg') }}" />
                                        <span class="pro-count blue">6</span>
                                    </a>
                                    <a href="shop-wishlist.html"><span class="lable">Wishlist</span></a>
                                </div>
                                <div class="header-action-icon-2">
                                    <a class="mini-cart-icon" href="shop-cart.html">
                                        <img alt="Nest"
                                            src="{{ asset('assets/client/assets/imgs/theme/icons/icon-cart.svg') }}" />
                                        <span class="pro-count blue">2</span>
                                    </a>
                                    <a href="shop-cart.html"><span class="lable">Cart</span></a>
                                    <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                        <ul>
                                            <li>
                                                <div class="shopping-cart-img">
                                                    <a href="#"><img alt="Nest"
                                                            src="{{ asset('assets/client/assets/imgs/shop/thumbnail-3.jpg') }}" /></a>
                                                </div>
                                                <div class="shopping-cart-title">
                                                    <h4><a href="#">Daisy Casual Bag</a></h4>
                                                    <h4><span>1 × </span>$800.00</h4>
                                                </div>
                                                <div class="shopping-cart-delete">
                                                    <a href="#"><i class="fi-rs-cross-small"></i></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="shopping-cart-img">
                                                    <a href="#"><img alt="Nest"
                                                            src="{{ asset('assets/client/assets/imgs/shop/thumbnail-2.jpg') }}" /></a>
                                                </div>
                                                <div class="shopping-cart-title">
                                                    <h4><a href="#">Corduroy Shirts</a></h4>
                                                    <h4><span>1 × </span>$3200.00</h4>
                                                </div>
                                                <div class="shopping-cart-delete">
                                                    <a href="#"><i class="fi-rs-cross-small"></i></a>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="shopping-cart-footer">
                                            <div class="shopping-cart-total">
                                                <h4>Total <span>$4000.00</span></h4>
                                            </div>
                                            <div class="shopping-cart-button">
                                                <a href="{{ route('web.cart-page') }}" class="outline">View cart</a>
                                                <a href="{{ route('web.checkout-page') }}">Checkout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="header-action-icon-2">
                                    <a href="#">
                                        <img class="svgInject" alt="Nest"
                                            src="{{ asset('assets/client/assets/imgs/theme/icons/icon-user.svg') }}" />
                                    </a>
                                    <a href="#"><span class="lable ml-0">My Profile</span></a>
                                    <div class="cart-dropdown-wrap cart-dropdown-hm2 account-dropdown">
                                        <ul>
                                            <li>
                                                <a href="{{ route('web.my-account') }}"><i
                                                        class="fi fi-rs-user mr-10"></i>My
                                                    Account</a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fi fi-rs-location-alt mr-10"></i>Order
                                                    Tracking</a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fi fi-rs-label mr-10"></i>My
                                                    Voucher</a>
                                            </li>
                                            <li>
                                                <a href="shop-wishlist.html"><i class="fi fi-rs-heart mr-10"></i>My
                                                    Wishlist</a>
                                            </li>
                                            <li>
                                                <a href="#"><i
                                                        class="fi fi-rs-settings-sliders mr-10"></i>Setting</a>
                                            </li>
                                            <li>
                                                <a href=""><i class="fi fi-rs-sign-out mr-10"></i>Sign
                                                    out</a>
                                                {{-- @if (auth()->user())
                                                    <form action="{{ route('logout') }}" method="POST">
                                                        @csrf
                                                        <a type="submit" :href="route('logout')"
                                                            onclick="event.preventDefault();
                                                            this.closest('form').submit();"
                                                            {{ __('Log Out') }}>
                                                            <i class="fi fi-rs-sign-out mr-10"></i>
                                                            Logout
                                                        </a>
                                                    </form>
                                                @endif --}}
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom header-bottom-bg-color sticky-bar">
            <div class="container">
                <div class="header-wrap header-space-between position-relative">
                    <div class="logo logo-width-1 d-block d-lg-none">
                        <a href="{{route('home')}}"><img src="{{ asset('assets/client/assets/imgs/theme/logo.svg') }}"
                                alt="logo" /></a>
                    </div>
                    <div class="header-nav d-none d-lg-flex">
                        <div class="main-categori-wrap d-none d-lg-block">
                            <a class="categories-button-active" href="#">
                                <span class="fi-rs-apps"></span> <span class="et">Browse</span> All Categories
                                <i class="fi-rs-angle-down"></i>
                            </a>
                            <div class="categories-dropdown-wrap categories-dropdown-active-large font-heading">
                                <div class="d-flex categori-dropdown-inner">
                                    <ul>
                                        <li>
                                            <a href="#"> <img
                                                    src="{{ asset('assets/client/assets/imgs/theme/icons/category-1.svg') }}"
                                                    alt="" />Milks
                                                and Dairies</a>
                                        </li>
                                        <li>
                                            <a href="#"> <img
                                                    src="{{ asset('assets/client/assets/imgs/theme/icons/category-2.svg') }}"
                                                    alt="" />Clothing
                                                & beauty</a>
                                        </li>
                                        <li>
                                            <a href="#"> <img
                                                    src="{{ asset('assets/client/assets/imgs/theme/icons/category-3.svg') }}"
                                                    alt="" />Pet
                                                Foods & Toy</a>
                                        </li>
                                        <li>
                                            <a href="#"> <img
                                                    src="{{ asset('assets/client/assets/imgs/theme/icons/category-4.svg') }}"
                                                    alt="" />Baking
                                                material</a>
                                        </li>
                                        <li>
                                            <a href="#"> <img
                                                    src="{{ asset('assets/client/assets/imgs/theme/icons/category-5.svg') }}"
                                                    alt="" />Fresh
                                                Fruit</a>
                                        </li>
                                    </ul>
                                    <ul class="end">
                                        <li>
                                            <a href="#"> <img
                                                    src="{{ asset('assets/client/assets/imgs/theme/icons/category-6.svg') }}"
                                                    alt="" />Wines &
                                                Drinks</a>
                                        </li>
                                        <li>
                                            <a href="#"> <img
                                                    src="{{ asset('assets/client/assets/imgs/theme/icons/category-7.svg') }}"
                                                    alt="" />Fresh
                                                Seafood</a>
                                        </li>
                                        <li>
                                            <a href="#"> <img
                                                    src="{{ asset('assets/client/assets/imgs/theme/icons/category-8.svg') }}"
                                                    alt="" />Fast
                                                food</a>
                                        </li>
                                        <li>
                                            <a href="#"> <img
                                                    src="{{ asset('assets/client/assets/imgs/theme/icons/category-9.svg') }}"
                                                    alt="" />Vegetables</a>
                                        </li>
                                        <li>
                                            <a href="#"> <img
                                                    src="{{ asset('assets/client/assets/imgs/theme/icons/category-10.svg') }}"
                                                    alt="" />Bread
                                                and Juice</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="more_slide_open" style="display: none">
                                    <div class="d-flex categori-dropdown-inner">
                                        <ul>
                                            <li>
                                                <a href="#"> <img
                                                        src="{{ asset('assets/client/assets/imgs/theme/icons/icon-1.svg') }}"
                                                        alt="" />Milks
                                                    and Dairies</a>
                                            </li>
                                            <li>
                                                <a href="#"> <img
                                                        src="{{ asset('assets/client/assets/imgs/theme/icons/icon-2.svg') }}"
                                                        alt="" />Clothing
                                                    & beauty</a>
                                            </li>
                                        </ul>
                                        <ul class="end">
                                            <li>
                                                <a href="#"> <img
                                                        src="{{ asset('assets/client/assets/imgs/theme/icons/icon-3.svg') }}"
                                                        alt="" />Wines &
                                                    Drinks</a>
                                            </li>
                                            <li>
                                                <a href="#"> <img
                                                        src="{{ asset('assets/client/assets/imgs/theme/icons/icon-4.svg') }}"
                                                        alt="" />Fresh
                                                    Seafood</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="more_categories"><span class="icon"></span> <span
                                        class="heading-sm-1">Show
                                        more...</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="main-menu main-menu-padding-1 main-menu-lh-2 d-none d-lg-block font-heading">
                        <nav>
                            <ul>
                                <li>
                                    <a class="{{ request()->routeIs('home') ? 'active' : '' }}"
                                        href="{{ route('home') }}">Home</a>
                                </li>
                                <li>
                                    <a class="{{ request()->routeIs('web.about-us') ? 'active' : '' }}"
                                        href="{{ route('web.about-us') }}">About</a>
                                </li>
                                <li class="position-static">
                                    <a class="{{ request()->routeIs('web.products') ? 'active' : '' }}"
                                        href="{{ route('web.products') }}">Prodcuts <i
                                            class="fi-rs-angle-down"></i></a>
                                    <ul class="mega-menu">
                                        <li class="sub-mega-menu sub-mega-menu-width-22">
                                            <a class="menu-title" href="#">Fruit & Vegetables</a>
                                            <ul>
                                                <li><a href="#">Meat & Poultry</a></li>
                                                <li><a href="#">Fresh Vegetables</a></li>
                                                <li><a href="#">Herbs & Seasonings</a></li>
                                                <li><a href="#">Cuts & Sprouts</a></li>
                                                <li><a href="#">Exotic Fruits & Veggies</a></li>
                                                <li><a href="#">Packaged Produce</a></li>
                                            </ul>
                                        </li>
                                        <li class="sub-mega-menu sub-mega-menu-width-22">
                                            <a class="menu-title" href="#">Breakfast & Dairy</a>
                                            <ul>
                                                <li><a href="#">Milk & Flavoured Milk</a></li>
                                                <li><a href="#">Butter and Margarine</a></li>
                                                <li><a href="#">Eggs Substitutes</a></li>
                                                <li><a href="#">Marmalades</a></li>
                                                <li><a href="#">Sour Cream</a></li>
                                                <li><a href="#">Cheese</a></li>
                                            </ul>
                                        </li>
                                        <li class="sub-mega-menu sub-mega-menu-width-22">
                                            <a class="menu-title" href="#">Meat & Seafood</a>
                                            <ul>
                                                <li><a href="#">Breakfast Sausage</a></li>
                                                <li><a href="#">Dinner Sausage</a></li>
                                                <li><a href="#">Chicken</a></li>
                                                <li><a href="#">Sliced Deli Meat</a></li>
                                                <li><a href="#">Wild Caught Fillets</a></li>
                                                <li><a href="#">Crab and Shellfish</a></li>
                                            </ul>
                                        </li>
                                        <li class="sub-mega-menu sub-mega-menu-width-34">
                                            <div class="menu-banner-wrap">
                                                <a href="#"><img
                                                        src="{{ asset('assets/client/assets/imgs/banner/banner-menu.png') }}"
                                                        alt="Nest" /></a>
                                                <div class="menu-banner-content">
                                                    <h4>Hot deals</h4>
                                                    <h3>
                                                        Don't miss<br />
                                                        Trending
                                                    </h3>
                                                    <div class="menu-banner-price">
                                                        <span class="new-price text-success">Save to 50%</span>
                                                    </div>
                                                    <div class="menu-banner-btn">
                                                        <a href="#">Shop now</a>
                                                    </div>
                                                </div>
                                                <div class="menu-banner-discount">
                                                    <h3>
                                                        <span>25%</span>
                                                        off
                                                    </h3>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Blog</a>
                                </li>
                                <li>
                                    <a class="{{ request()->routeIs('web.contact-us') ? 'active' : '' }}"
                                        href="{{ route('web.contact-us') }}">Contact</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="hotline d-none d-lg-flex">
                        <img src="{{ asset('assets/client/assets/imgs/theme/icons/icon-headphone.svg') }}"
                            alt="hotline" />
                        <p>1900 - 888<span>24/7 Support Center</span></p>
                    </div>
                    <div class="header-action-icon-2 d-block d-lg-none">
                        <div class="burger-icon burger-icon-white">
                            <span class="burger-icon-top"></span>
                            <span class="burger-icon-mid"></span>
                            <span class="burger-icon-bottom"></span>
                        </div>
                    </div>
                    <div class="header-action-right d-block d-lg-none">
                        <div class="header-action-2">
                            <div class="header-action-icon-2">
                                <a href="shop-wishlist.html">
                                    <img alt="heart-icon"
                                        src="{{ asset('assets/client/assets/imgs/theme/icons/icon-heart.svg') }}" />
                                    <span class="pro-count white">4</span>
                                </a>
                            </div>
                            <div class="header-action-icon-2">
                                <a class="mini-cart-icon" href="#">
                                    <img alt="cart-icon"
                                        src="{{ asset('assets/client/assets/imgs/theme/icons/icon-cart.svg') }}" />
                                    <span class="pro-count white">2</span>
                                </a>
                                <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                    <ul>
                                        <li>
                                            <div class="shopping-cart-img">
                                                <a href="#"><img alt="Nest"
                                                        src="assets/imgs/shop/thumbnail-3.jpg" /></a>
                                            </div>
                                            <div class="shopping-cart-title">
                                                <h4><a href="#">Plain Striola Shirts</a></h4>
                                                <h3><span>1 × </span>$800.00</h3>
                                            </div>
                                            <div class="shopping-cart-delete">
                                                <a href="#"><i class="fi-rs-cross-small"></i></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="shopping-cart-img">
                                                <a href="#"><img alt="Nest"
                                                        src="assets/imgs/shop/thumbnail-4.jpg" /></a>
                                            </div>
                                            <div class="shopping-cart-title">
                                                <h4><a href="#">Macbook Pro 2024</a></h4>
                                                <h3><span>1 × </span>$3500.00</h3>
                                            </div>
                                            <div class="shopping-cart-delete">
                                                <a href="#"><i class="fi-rs-cross-small"></i></a>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="shopping-cart-footer">
                                        <div class="shopping-cart-total">
                                            <h4>Total <span>$383.00</span></h4>
                                        </div>
                                        <div class="shopping-cart-button">
                                            <a href="{{ route('web.cart-page') }}">View cart</a>
                                            <a href="{{ route('web.checkout-page') }}">Checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="mobile-header-active mobile-header-wrapper-style">
        <div class="mobile-header-wrapper-inner">
            <div class="mobile-header-top">
                <div class="mobile-header-logo">
                    <a href="{{ route('home') }}"><img src="{{ asset('assets/client/assets/imgs/theme/logo.svg') }}"
                            alt="logo" /></a>
                </div>
                <div class="mobile-menu-close close-style-wrap close-style-position-inherit">
                    <button class="close-style search-close">
                        <i class="icon-top"></i>
                        <i class="icon-bottom"></i>
                    </button>
                </div>
            </div>
            <div class="mobile-header-content-area">
                <div class="mobile-search search-style-3 mobile-header-border">
                    <form action="#">
                        <input type="text" placeholder="Search for items…" />
                        <button type="submit"><i class="fi-rs-search"></i></button>
                    </form>
                </div>
                <div class="mobile-menu-wrap mobile-header-border">
                    <!-- mobile menu start -->
                    <nav>
                        <ul class="mobile-menu font-heading">
                            <li class="menu-item-has-children">
                                <a href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="{{ route('web.about-us') }}">About</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="{{ route('web.products') }}">Products</a>
                                <ul class="dropdown">
                                    <li class="menu-item-has-children">
                                        <a href="#">Women's Fashion</a>
                                        <ul class="dropdown">
                                            <li><a href="#">Dresses</a></li>
                                            <li><a href="#">Blouses & Shirts</a></li>
                                            <li><a href="#">Hoodies & Sweatshirts</a></li>
                                            <li><a href="#">Women's Sets</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Men's Fashion</a>
                                        <ul class="dropdown">
                                            <li><a href="#">Jackets</a></li>
                                            <li><a href="#">Casual Faux Leather</a></li>
                                            <li><a href="#">Genuine Leather</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Technology</a>
                                        <ul class="dropdown">
                                            <li><a href="#">Gaming Laptops</a></li>
                                            <li><a href="#">Ultraslim Laptops</a></li>
                                            <li><a href="#">Tablets</a></li>
                                            <li><a href="#">Laptop Accessories</a></li>
                                            <li><a href="#">Tablet Accessories</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="blog-category-fullwidth.html">Blog</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Contact</a>
                            </li>
                        </ul>
                    </nav>
                    <!-- mobile menu end -->
                </div>
                <div class="mobile-header-info-wrap">
                    <div class="single-mobile-header-info">
                        <a href="page-contact.html"><i class="fi-rs-marker"></i> Our location </a>
                    </div>
                    <div class="single-mobile-header-info">
                        <a href="page-login.html"><i class="fi-rs-user"></i>Log In / Sign Up </a>
                    </div>
                    <div class="single-mobile-header-info">
                        <a href="#"><i class="fi-rs-headphones"></i>(+01) - 2345 - 6789 </a>
                    </div>
                </div>
                <div class="mobile-social-icon mb-50">
                    <h6 class="mb-15">Follow Us</h6>
                    <a href="#"><img
                            src="{{ asset('assets/client/assets/imgs/theme/icons/icon-facebook-white.svg') }}"
                            alt="facebbok-icon" /></a>
                    <a href="#"><img
                            src="{{ asset('assets/client/assets/imgs/theme/icons/icon-twitter-white.svg') }}"
                            alt="twitter-icon" /></a>
                    <a href="#"><img
                            src="{{ asset('assets/client/assets/imgs/theme/icons/icon-instagram-white.svg') }}"
                            alt="instagram-icon" /></a>
                    <a href="#"><img
                            src="{{ asset('assets/client/assets/imgs/theme/icons/icon-pinterest-white.svg') }}"
                            alt="pinterest-icon" /></a>
                    <a href="#"><img
                            src="{{ asset('assets/client/assets/imgs/theme/icons/icon-youtube-white.svg') }}"
                            alt="youtube-icon" /></a>
                </div>
                <div class="site-copyright">Copyright 2024 © All rights reserved.</div>
            </div>
        </div>
    </div>
    <!--End header-->

    <!-- Quick view -->
    <div class="modal fade custom-modal" id="quickViewModal" tabindex="-1" aria-labelledby="quickViewModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12 mb-md-0 mb-sm-5">
                            <div class="detail-gallery">
                                <span class="zoom-icon"><i class="fi-rs-search"></i></span>
                                <!-- MAIN SLIDES -->
                                <div class="product-image-slider">
                                    <figure class="border-radius-10">
                                        <img src="{{ asset('assets/client/assets/imgs/shop/product-16-2.jpg') }}"
                                            alt="product image" />
                                    </figure>
                                    <figure class="border-radius-10">
                                        <img src="{{ asset('assets/client/assets/imgs/shop/product-16-1.jpg') }}"
                                            alt="product image" />
                                    </figure>
                                    <figure class="border-radius-10">
                                        <img src="{{ asset('assets/client/assets/imgs/shop/product-16-3.jpg') }}"
                                            alt="product image" />
                                    </figure>
                                    <figure class="border-radius-10">
                                        <img src="{{ asset('assets/client/assets/imgs/shop/product-16-4.jpg') }}"
                                            alt="product image" />
                                    </figure>
                                    <figure class="border-radius-10">
                                        <img src="{{ asset('assets/client/assets/imgs/shop/product-16-5.jpg') }}"
                                            alt="product image" />
                                    </figure>
                                    <figure class="border-radius-10">
                                        <img src="{{ asset('assets/client/assets/imgs/shop/product-16-6.jpg') }}"
                                            alt="product image" />
                                    </figure>
                                    <figure class="border-radius-10">
                                        <img src="{{ asset('assets/client/assets/imgs/shop/product-16-7.jpg') }}"
                                            alt="product image" />
                                    </figure>
                                </div>
                                <!-- THUMBNAILS -->
                                <div class="slider-nav-thumbnails">
                                    <div><img src="{{ asset('assets/client/assets/imgs/shop/thumbnail-3.jpg') }}"
                                            alt="product image" /></div>
                                    <div><img src="{{ asset('assets/client/assets/imgs/shop/thumbnail-4.jpg') }}"
                                            alt="product image" /></div>
                                    <div><img src="{{ asset('assets/client/assets/imgs/shop/thumbnail-5.jpg') }}"
                                            alt="product image" /></div>
                                    <div><img src="{{ asset('assets/client/assets/imgs/shop/thumbnail-6.jpg') }}"
                                            alt="product image" /></div>
                                    <div><img src="{{ asset('assets/client/assets/imgs/shop/thumbnail-7.jpg') }}"
                                            alt="product image" /></div>
                                    <div><img src="{{ asset('assets/client/assets/imgs/shop/thumbnail-8.jpg') }}"
                                            alt="product image" /></div>
                                    <div><img src="{{ asset('assets/client/assets/imgs/shop/thumbnail-9.jpg') }}"
                                            alt="product image" /></div>
                                </div>
                            </div>
                            <!-- End Gallery -->
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="detail-info pr-30 pl-30">
                                <span class="stock-status out-stock"> Sale Off </span>
                                <h3 class="title-detail"><a href="shop-product-right.html" class="text-heading">Seeds
                                        of
                                        Change Organic Quinoa, Brown</a></h3>
                                <div class="product-detail-rating">
                                    <div class="product-rate-cover text-end">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 90%"></div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (32 reviews)</span>
                                    </div>
                                </div>
                                <div class="clearfix product-price-cover">
                                    <div class="product-price primary-color float-left">
                                        <span class="current-price text-brand">$38</span>
                                        <span>
                                            <span class="save-price font-md color3 ml-15">26% Off</span>
                                            <span class="old-price font-md ml-15">$52</span>
                                        </span>
                                    </div>
                                </div>
                                <div class="detail-extralink mb-30">
                                    <div class="detail-qty border radius">
                                        <a href="#" class="qty-down"><i class="fi-rs-angle-small-down"></i></a>
                                        <span class="qty-val">1</span>
                                        <a href="#" class="qty-up"><i class="fi-rs-angle-small-up"></i></a>
                                    </div>
                                    <div class="product-extra-link2">
                                        <button type="submit" class="button button-add-to-cart"><i
                                                class="fi-rs-shopping-cart"></i>Add to cart</button>
                                    </div>
                                </div>
                                <div class="font-xs">
                                    <ul>
                                        <li class="mb-5">Vendor: <span class="text-brand">Nest</span></li>
                                        <li class="mb-5">MFG:<span class="text-brand"> Jun 4.2024</span></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Detail Info -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade custom-modal" id="onloadModal" tabindex="-1" aria-labelledby="onloadModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    <div class="deal" style="background-image: url('assets/client/assets/imgs/banner/popup-1.png')">
                        <div class="deal-top">
                            <h6 class="mb-10 text-brand-2">Deal of the Day</h6>
                        </div>
                        <div class="deal-content detail-info">
                            <h4 class="product-title"><a href="shop-product-right.html" class="text-heading">Organic
                                    fruit for your family's health</a></h4>
                            <div class="clearfix product-price-cover">
                                <div class="product-price primary-color float-left">
                                    <span class="current-price text-brand">$38</span>
                                    <span>
                                        <span class="save-price font-md color3 ml-15">26% Off</span>
                                        <span class="old-price font-md ml-15">$52</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="deal-bottom">
                            <p class="mb-20">Hurry Up! Offer End In:</p>
                            <div class="deals-countdown pl-5" data-countdown="2025/03/25 00:00:00">
                                <span class="countdown-section"><span class="countdown-amount hover-up">03</span><span
                                        class="countdown-period"> days </span></span><span
                                    class="countdown-section"><span class="countdown-amount hover-up">02</span><span
                                        class="countdown-period"> hours </span></span><span
                                    class="countdown-section"><span class="countdown-amount hover-up">43</span><span
                                        class="countdown-period"> mins </span></span><span
                                    class="countdown-section"><span class="countdown-amount hover-up">29</span><span
                                        class="countdown-period"> sec </span></span>
                            </div>
                            <div class="product-detail-rating">
                                <div class="product-rate-cover text-end">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 90%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (32 rates)</span>
                                </div>
                            </div>
                            <a href="#" class="btn hover-up">Shop Now <i
                                    class="fi-rs-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

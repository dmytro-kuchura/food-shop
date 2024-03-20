<div class="footer">
    <div class="container">
        <div class="footer-inner">
            <div class="footer-middle">
                <div class="row">
                    <div class="col-xl-3 f-col">
                        <div class="footer-static-block">
                            <span class="opener plus"></span>
                            <h3 class="title">{{ __('static.footer.contacts') }}<span></span></h3>
                            <ul class="footer-block-contant address-footer">
                                <li class="item"><i class="fa fa-envelope"> </i>
                                    <p><a href="javascript:void(0)">info@shop.store</a></p>
                                </li>
                                <li class="item"><i class="fa fa-phone"> </i>
                                    <p>(+38) 050 123 1234</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6 footer-center">
                        <div class="row">
                            <div class="col-xl-4 f-col">
                                <div class="footer-static-block">
                                    <span class="opener plus"></span>
                                    <h3 class="title">{{ __('static.footer.catalog') }}<span></span></h3>
                                    <ul class="footer-block-contant link">
                                        @if($tree)
                                            @foreach($tree[0] as $obj)
                                                <li>
                                                    <a href="{{ route('shop.category', ['category' => $obj->alias]) }}">
                                                        <i class="fa fa-angle-right"></i>{{ $obj->name }}
                                                    </a>
                                                </li>
                                            @endforeach
                                        @endif
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-4 f-col">
                                <div class="footer-static-block">
                                    <span class="opener plus"></span>
                                    <h3 class="title">{{ __('static.footer.information') }}<span></span></h3>
                                    <ul class="footer-block-contant link">
                                        <li>
                                            <a href="{{ route('news.index') }}">
                                                <i class="fa fa-angle-right"></i>{{ __('static.footer.news') }}
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-4 f-col">
                                <div class="footer-static-block">
                                    <span class="opener plus"></span>
                                    <h3 class="title">{{ __('static.footer.user') }}<span></span></h3>
                                    <ul class="footer-block-contant link">
                                        <li>
                                            <a href="{{ route('login') }}">
                                                <i class="fa fa-angle-right"></i>{{ __('static.footer.login') }}
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('register') }}">
                                                <i class="fa fa-angle-right"></i>{{ __('static.footer.registration') }}
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('wishlist') }}">
                                                <i class="fa fa-angle-right"></i>{{ __('static.footer.wishlist') }}
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 f-col footer-about">
                        <div class="footer-static-block">
                            <span class="opener plus"></span>
                            <h3 class="title">{{ __('static.footer.contact_us') }}<span></span></h3>
                            <contact-us-form></contact-us-form>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="footer-bottom ">
                <div class="row mtb-30">
                    <div class="col-lg-6 ">
                        <div class="footer_social mb-sm-30 center-sm">
                            <ul class="social-icon">
                                <li><a title="Youtube" class="youtube"><i class="fa fa-youtube"> </i></a></li>
                                <li><a title="Instagram" class="linkedin"><i class="fa fa-instagram"> </i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 ">
                        <div class="payment">
                            <ul class="payment_icon">
                                <li class="visa">
                                    <a href="javascript:void(0)">
                                        <img src="{{ asset('images/visa.png') }}" alt="Visa">
                                    </a>
                                </li>
                                <li class="discover">
                                    <a href="javascript:void(0)">
                                        <img src="{{ asset('images/mastercard.png') }}" alt="MasterCard">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copy-right-bg">
        <div class="container">
            <div class="row  align-center">
                <div class="col-12 mb-30">
                    <div class="site-link">
                        <ul>
                            <li><a href="{{ route('about') }}">{{ __('static.footer.about') }}</a>/</li>
                            <li><a href="{{ route('payments') }}">{{ __('static.footer.payments') }}</a>/</li>
                            <li><a href="{{ route('delivery') }}">{{ __('static.footer.delivery') }}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12">
                    <div class="">
                        <div class="copy-right ">
                            Make with <i class="fa fa-heart" style="color: red"> </i> in Ukraine
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@widget('message')

<div class="scroll-top">
    <div class="scrollup"></div>
</div>


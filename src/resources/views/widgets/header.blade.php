<header class="navbar navbar-custom container-full-sm" id="header">
    @auth
        @if(Auth::user()->role == 'ADMIN')
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-6"></div>
                        <div class="col-6">
                            <div class="top-right-link right-side">
                                <ul>
                                    <li class="info-link checkout-icon">
                                        <a href="{{ route('admin.dashboard') }}" title="Checkout">{{ __('static.header.admin') }}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    @endauth
    <div class="header-middle">
        <div class="container position-s">
            <div class="row m-0">
                <div class="col-xl-5 col-lg-5 menu-position col-xl-40per p-0  position-initial">
                    <div id="menu" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            @if($tree)
                                @foreach($tree[0] as $obj)
                                    <li class="level dropdown">
                                        <span class="opener plus"></span>
                                        <a href="{{ route('shop.category', ['category' => $obj->alias]) }}"
                                           class="page-scroll">{{ $obj->name }}</a>
                                    </li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-6 col-xl-20per align-center left-sm p-0">
                    <div class="header-middle-left">
                        <div class="navbar-header float-none-sm">
                            <a class="navbar-brand page-scroll" href="{{ route('home') }}">
                                <img alt="Store" class="main-logo" src="{{ asset('/images/kubfood_logo.png') }}">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-4 col-6 col-xl-40per p-0">
                    <div class="right-side header-right-link">
                        <ul>
                            <li class="account-icon"><a href="javascript:void(0)"><span></span></a>
                                <div class="header-link-dropdown account-link-dropdown">
                                    <ul class="link-dropdown-list">
                                        <li>
                                            @guest
                                                <span class="dropdown-title">{{ __('static.header.welcome_guest') }}</span>
                                                <ul>
                                                    <li>
                                                        <a href="{{ route('login') }}">{{ __('static.header.login') }}</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ route('register') }}">{{ __('static.header.registration') }}</a>
                                                    </li>
                                                </ul>
                                            @else
                                                <span
                                                    class="dropdown-title">{{ __('static.header.welcome_user') }} {{ Auth::user()->name }}!</span>
                                                <ul>
                                                    <li>
                                                        <a href="{{ route('profile') }}">{{ __('static.header.profile') }}</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ route('logout') }}"
                                                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                            {{ __('static.header.exit') }}
                                                        </a>
                                                    </li>
                                                </ul>

                                                <form id="logout-form" action="{{ route('logout') }}"
                                                      method="POST"
                                                      style="display: none;">
                                                    @csrf
                                                </form>
                                            @endguest
                                        </li>
                                        {{--<li>--}}
                                        {{--    <span class="dropdown-title">Язык :</span>--}}
                                        {{--    <ul>--}}
                                        {{--        <li><a class="active" href="javascript:void(0)">Русский</a></li>--}}
                                        {{--        <li><a href="javascript:void(0)">Украинский</a></li>--}}
                                        {{--    </ul>--}}
                                        {{--</li>--}}
                                    </ul>
                                </div>
                            </li>
                            <cart></cart>
                            <li class="side-toggle">
                                <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle"
                                        type="button"><i class="fa-bar"></i></button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

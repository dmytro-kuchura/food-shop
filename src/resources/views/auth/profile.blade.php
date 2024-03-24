@extends('layouts.main')

@section('title', $page->title ?? $page->name)
@section('description', $page->description ?? null)
@section('keywords', $page->keywords ?? null)

@section('content')
    @widget('breadcrumbs')
    <section class="checkout-section ptb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="account-sidebar account-tab mb-sm-30">
                        <div class="dark-bg tab-title-bg">
                            <div class="heading-part">
                                <div class="sub-title"><span></span>{{ __('static.profile.menu') }}</div>
                            </div>
                        </div>
                        <div class="account-tab-inner">
                            <ul class="account-tab-stap">
                                <li id="profile" class="active">
                                    <a href="javascript:void(0)">{{ __('static.profile.profile') }}<i class="fa fa-angle-right"></i>
                                    </a>
                                </li>
                                <li id="orders">
                                    <a href="javascript:void(0)">{{ __('static.profile.orders') }}<i class="fa fa-angle-right"></i>
                                    </a>
                                </li>
                                <li id="password">
                                    <a href="javascript:void(0)">{{ __('static.profile.change_password') }}<i class="fa fa-angle-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div id="data-profile" class="account-content" data-temp="tabdata">
                        <div class="row">
                            <div class="col-12">
                                <div class="heading-part heading-bg mb-30">
                                    <h2 class="heading m-0">{{ __('static.profile.profile') }}</h2>
                                </div>
                            </div>
                        </div>
                        <div class="mb-30">
                            <div class="row">
                                <div class="col-12">
                                    <div class="heading-part">
                                        <h3 class="sub-heading">{{ __('static.profile.auth_name') }} {{ $user->name }}</h3>
                                    </div>
                                    <p>
                                        На это странице Вы сможете сменить свои персональные данные.
                                    </p>
                                </div>
                            </div>
                            <form class="main-form full" method="POST" action="{{ route('profile.change') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="input-box">
                                            <label for="name">{{ __('static.profile.name') }}</label>
                                            <input type="text" placeholder="{{ __('static.profile.name') }}" required
                                                   value="{{ $user->name }}"
                                                   name="name" id="name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-box">
                                            <label for="last_name">{{ __('static.profile.last_name') }}</label>
                                            <input type="text" placeholder="{{ __('static.profile.last_name') }}" required
                                                   value="{{ $user->last_name ?? '' }}"
                                                   name="last_name" id="last_name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-box">
                                            <label for="middle_name">{{ __('static.profile.middle_name') }}</label>
                                            <input type="text" placeholder="{{ __('static.profile.middle_name') }}" required
                                                   value="{{ $user->middle_name ?? '' }}"
                                                   name="middle_name" id="middle_name">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="input-box">
                                            <label for="name">{{ __('static.profile.phone') }}</label>
                                            <input type="text" placeholder="{{ __('static.profile.phone') }}" required
                                                   value="{{ $user->phone ?? '' }}"
                                                   name="phone" id="phone">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="input-box">
                                            <label for="name">{{ __('static.profile.email') }}</label>
                                            <input type="text" placeholder="{{ __('static.profile.email') }}"
                                                   value="{{ $user->email ?? '' }}"
                                                   name="email" id="email">
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <button class="btn-color" type="submit">{{ __('static.profile.change_profile') }}</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div id="data-orders" class="account-content" data-temp="tabdata" style="display:none">
                        <div id="form-print" class="admission-form-wrapper">
                            <div class="row">
                                <div class="col-12">
                                    <div class="heading-part heading-bg mb-30">
                                        <h2 class="heading m-0">{{ __('static.profile.orders') }}</h2>
                                    </div>
                                </div>
                            </div>
                            @foreach($orders as $order)
                                <div class="row">
                                    <div class="col-12">
                                        <div class="cart-item-table commun-table">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                    <tr>
                                                        <th colspan="4">
                                                            <ul>
                                                                <li>
                                                                    <span>Замовлення створено</span>
                                                                    <span>{{ $order->getUkrainianDate() }}</span>
                                                                </li>
                                                                <li class="price-box">
                                                                    <span>Підсумок</span>
                                                                    <span class="price">₴ {{ $order->total }}</span>
                                                                </li>
                                                                <li>
                                                                    <span>№ Замовлення</span>
                                                                    <span>#{{ $order->id }}</span>
                                                                </li>
                                                            </ul>
                                                        </th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($order->items as $item)
                                                        <tr>
                                                            <td>
                                                                <a href="{{ route('shop.item', ['alias' => $item->product->alias, 'id' => $item->product->id]) }}">
                                                                    <div class="product-image">
                                                                        <img
                                                                            src="{{ $item->product->image ?? '/images/no-image.png' }}"
                                                                            alt="{{ $item->product->name }}">
                                                                    </div>
                                                                </a>
                                                            </td>
                                                            <td>
                                                                <div class="product-title">
                                                                    <a href="{{ route('shop.item', ['alias' => $item->product->alias, 'id' => $item->product->id]) }}">
                                                                        {{ $item->product->name }}
                                                                    </a>
                                                                </div>
                                                                <div class="product-info-stock-sku m-0">
                                                                    <div>
                                                                        <label>Кіл-ть: </label>
                                                                        <span
                                                                            class="info-deta">{{ $item->count }}</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="base-price price-box">
                                                                    <span class="price">₴ {{ $item->cost }}</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div id="data-password" class="account-content" data-temp="tabdata" style="display:none">
                        <div class="row">
                            <div class="col-12">
                                <div class="heading-part heading-bg mb-30">
                                    <h2 class="heading m-0">{{ __('static.profile.change_password') }}</h2>
                                </div>
                            </div>
                        </div>
                        <form class="main-form full" method="POST" action="{{ route('profile.change.password') }}">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="input-box">
                                        <label for="password">{{ __('static.profile.old_password') }}</label>
                                        <input type="password" placeholder="{{ __('static.profile.old_password') }}" required
                                               name="password" id="password">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-box">
                                        <label for="new_password">{{ __('static.profile.new_password') }}</label>
                                        <input type="password" placeholder="{{ __('static.profile.new_password') }}" required
                                               name="new_password" id="new_password">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-box">
                                        <label for="new_password_confirmation">{{ __('static.profile.confirm_password') }}</label>
                                        <input type="password" placeholder="{{ __('static.profile.confirm_password') }}" required
                                               name="new_password_confirmation" id="new_password_confirmation">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn-color" type="submit">{{ __('static.profile.change_password') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@extends('layouts.main')

@section('title', $result->title ?? $result->name)
@section('description', $result->description ?? null)
@section('keywords', $result->keywords ?? null)

@section('content')
    @widget('breadcrumbs')
    <section class="pt-70">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 mb-xs-30">

                            <div class="fotorama" data-nav="thumbs" data-allowfullscreen="native">
                                @if(count($result->images) > 0)
                                    @foreach($result->images as $image)
                                        <a href="#">
                                            <img src="{{ $image->link }}" alt="{{ $result->name }}">
                                        </a>
                                    @endforeach
                                @else
                                    <a href="#">
                                        <img src="{{ $result->image }}" alt="{{ $result->name }}">
                                    </a>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7">
                            <div class="row">
                                <div class="col-12">
                                    <div class="product-detail-main">
                                        <div class="product-item-details">
                                            <h1 class="product-item-name">{{ $result->name }}</h1>

                                            <div class="price-box">
                                                <span class="price">₴ {{ $result->cost }}</span>
                                                @if($result->sale)
                                                    <del class="price old-price">₴ {{ $result->cost_old }}</del>
                                                @endif
                                            </div>
                                            <div class="product-info-stock-sku">
                                                <div>
                                                    <label>{{ __('static.catalog.available') }}: </label>
                                                    @if($result->available)
                                                        <span class="info-deta">{{ __('static.catalog.is_available') }}</span>
                                                    @else
                                                        <span class="info-deta">{{ __('static.catalog.is_not_available') }}</span>
                                                    @endif
                                                </div>
                                                <div>
                                                    <label>{{ __('static.catalog.articul') }}: </label>
                                                    <span class="info-deta">{{ $result->stock_keeping_unit }}</span>
                                                </div>
                                            </div>
                                            <ul class="product-list">
                                                <li><i class="fa fa-check"></i>Авторська спеція</li>
                                                <li><i class="fa fa-check"></i>Доставка по всій Україні</li>
                                                <li><i class="fa fa-check"></i>Міжнародна доставка</li>
                                            </ul>
                                            <hr class="mb-20">
                                            <add-to-cart :item="{{ $result->id }}"></add-to-cart>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ptb-70">
        <div class="container">
            <div class="product-detail-tab">
                <div class="row">
                    <div class="col-lg-12">
                        <div id="tabs">
                            <ul class="nav nav-tabs">
                                <li><a class="tab-Description selected" title="Description">{{ __('static.catalog.description') }}</a></li>
                                <li><a class="tab-Product-Tags" title="Product-Tags">{{ __('static.catalog.specifications') }}</a></li>
                            </ul>
                        </div>
                        <div id="items">
                            <div class="tab_content">
                                <ul>
                                    <li>
                                        <div class="items-Description selected">
                                            <div class="Description">{!! $result->information !!}</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="items-Product-Tags">
                                            <p>{!! $result->specification !!}</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

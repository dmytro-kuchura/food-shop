@extends('layouts.main')

@section('title', $page->title ?? $page->name)
@section('description', $page->description ?? null)
@section('keywords', $page->keywords ?? null)

@section('content')
    @widget('breadcrumbs')
    <section class="checkout-section ptb-70">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="checkout-step mb-40">
                        <ul>
                            <li class="active-checkout-step">
                                <a href="{{ route('checkout') }}">
                                    <div class="step">
                                        <div class="line"></div>
                                        <div class="circle">1</div>
                                    </div>
                                    <span>{{ __('static.checkout.checkout_step') }}</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <div class="step">
                                        <div class="line"></div>
                                        <div class="circle">2</div>
                                    </div>
                                    <span>{{ __('static.checkout.finish_step') }}</span>
                                </a>
                            </li>
                            <li>
                                <div class="step">
                                    <div class="line"></div>
                                </div>
                            </li>
                        </ul>
                        <hr>
                    </div>
                    <checkout user="{{ $user }}"></checkout>
                </div>
            </div>
        </div>
    </section>
@endsection

@extends('layouts.main')

@section('title', $news->title ?? $news->name)
@section('description', $news->description ?? null)
@section('keywords', $news->keywords ?? null)

@section('content')
    @widget('breadcrumbs')
    <section class="ptb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-12 mb-60">
                            <div class="blog-media mb-20">
                                <img
                                    src="{{ $news->image ? $news->image : '/images/no-image.png' }}"
                                    alt="{{ $news->name }}">
                            </div>
                            <div class="blog-detail ">
                                <div class="post-info">
                                    <ul>
                                        <li>
                                            <span class="post-date">{{ $news->getRussianDate() }}</span>
                                        </li>
                                        <li><span>{{ __('static.news.published') }}: </span>
                                            <a href="javascript:void(0)"> {{ __('static.news.author') }}</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="blog-title">
                                    <a href="javascript:void(0)">{{ $news->name }}</a>
                                </div>
                                {!! $news->content !!}
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div style="display: none;" itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating" class="reviews-props">
            <div class="reviews-rating">
                Оценка: <span itemprop="ratingValue">4.3</span>
                <meta itemprop="worstRating" content="3">
                <meta itemprop="bestRating" content="5">
            </div>
        </div>

        <div style="display: none;" itemscope itemtype="http://schema.org/Article">
            <p itemprop="name">{{ $news->name }}</p>
            <meta itemprop="headline" content="{{ $news->name }}">
            <p itemprop="articleBody">{{ $news->content }}</p>">
            <meta itemprop="description" content="{{ $news->short }}"/>
            <p itemprop="genre">Техническая</p>
            <p itemprop="author">Velo-City</p>
            <p itemprop="datePublished">{{ substr(gmdate('r', strtotime($news->created_at)), 0, -5).'GMT' }}</p>
            <p itemprop="dateModified">{{ substr(gmdate('r', strtotime($news->created_at)), 0, -5).'GMT' }}</p>
            <p itemprop="mainEntityOfPage">1</p>

            <div itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                <meta itemprop="name" content="Velo-City интернет-магазин">
                <meta itemprop="telephone" content="+380505701900">
                <meta itemprop="address" content="Херсон, Украина">
                <span itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
                    <img class="itemprops" itemprop="url image" width="250" height="250" src="/images/logo-new.png" alt="Velo-City интернет-магазин" />
                    <meta itemprop="width" content="250">
                    <meta itemprop="height" content="250">
                </span>
            </div>

            <p itemprop="image">{{ $news->image ?? '/images/no-image.png' }}</p>
        </div>
    </section>
@endsection

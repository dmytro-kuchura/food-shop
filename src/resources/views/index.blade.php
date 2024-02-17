@extends('layouts.main')

@section('title', $page->title ?? $page->name)
@section('description', $page->description ?? null)
@section('keywords', $page->keywords ?? null)

@section('content')
{{--    @widget('banner')--}}
{{--    @widget('subBanner')--}}
{{--    @widget('featuredProducts')--}}
{{--    @widget('offerOfTheWeek')--}}
{{--    @widget('perellexBanner')--}}
{{--    @widget('featuredProductsSlider')--}}
{{--    @widget('blog')--}}
{{--    @widget('services')--}}
{{--    @widget('newsLetter')--}}
@endsection

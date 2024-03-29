@extends('layouts.main')

@section('title', $page->title ?? $page->name)
@section('description', $page->description ?? null)
@section('keywords', $page->keywords ?? null)

@section('content')
    @widget('featuredProducts')
    @widget('news')
    @widget('newsLetter')
@endsection

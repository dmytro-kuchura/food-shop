@if($news)
    <section class="pt-70">
        <div class="container">
            <div class="row">
                <div class="col-12 ">
                    <div class="heading-part align-center mb-30">
                        <h2 class="main_title heading"><span>{{ __('static.widget.latest_news') }}</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div id="blog" class="owl-carousel">
                    @foreach($news as $record)
                        <div class="item">
                            <div class="blog-item">
                                <div class="row">
                                    <div class="col-md-6 mb-xs-30">
                                        <div class="blog-media">
                                            <img src="{{ $record->image ?? '/images/no-image.png' }}" alt="{{ $record->name }}">
                                            <div class="blog-effect"></div>
                                            <a href="{{ route('news.inner', ['alias' => $record->alias]) }}"
                                               title="{{ $record->name }}"
                                               class="read">&nbsp;</a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="blog-detail">
                                            <div class="blog-title">
                                                <a href="{{ route('news.inner', ['alias' => $record->alias]) }}">{{ $record->name }}</a>
                                            </div>
                                            <span>{{ __('static.widget.news_published') }}: {{ __('static.widget.news_author') }}</span>
                                            <div class="post-info">
                                                <p>{{ $record->short }}</p>
                                                <ul>
{{--                                                    <li>--}}
{{--                                                    <a href="javascript:void(0)">({{ count($record->comments) }}) комментариев</a>--}}
{{--                                                    </li>--}}
                                                    <li class="right-side">
                                                        <a href="{{ route('news.inner', ['alias' => $record->alias]) }}">{{ __('static.widget.details') }}
                                                            <i class="fa fa-angle-double-right"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endif

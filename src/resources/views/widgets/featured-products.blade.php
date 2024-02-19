<section class="pt-70">
    <div class="container">
        <div class="product-listing">
            <div class="row">
                <div class="col-12">
                    <div class="heading-part align-center mb-30">
                        <h2 class="main_title heading"><span>{{ __('static.widget.popular') }}</span></h2>
                    </div>
                </div>
            </div>
            <div class="pro_cat">
                <div class="row">
                    <div class="owl-carousel pro-cat-slider">
                        @foreach($items as $item)
                            @widget('item', ['item' => $item])
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="probootstrap-section probootstrap-section-lighter">
    <div class="container">
        <div class="row heading">
            <h2 class="mt0 mb50 text-center">{!! $title !!}</h2>
        </div>
        <div class="row">
            @foreach($products as $product)
            <div class="col-md-4 col-sm-6">
                <div class="probootstrap-card probootstrap-listing">
                    <div class="probootstrap-card-media">
                        <img src="{!! $product->image !!}" class="img-responsive" alt="{!! $product->alt !!}">
                        <a href="#" class="probootstrap-love"><i class="icon-heart"></i></a>
                    </div>
                    <div class="probootstrap-card-text">
                        <h2 class="probootstrap-card-heading"><a href="#">{!! $product->title !!}</a></h2>
                        <div class="probootstrap-listing-location">
                            <i class="icon-location2"></i> <span>{!! $product->category !!}</span>
                        </div>
                        <div class="probootstrap-listing-category for-sale"><span>{!! $product->message !!}</span></div>
                        <div class="probootstrap-listing-price"><strong>$ {!! $product->price !!}</strong> / u</div>
                    </div>
                    <div class="probootstrap-card-extra">
                        <ul>
                            <li>
                                Disponibles
                                <span>{!! $product->stock !!}</span>
                            </li>
                            <li>
                                Alto
                                <span>{!! $product->height !!} m</span>
                            </li>
                            <li>
                                Ancho
                                <span>{!! $product->width !!} m</span>
                            </li>
                            <li>
                                Profundidad
                                <span>{!! $product->depth !!} m</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- END listing -->
            </div>
            @if($loop->index > 0 && $loop->index % 2 == 0)            
            <div class="clearfix visible-sm-block"></div>
            @endif
            @endforeach
        </div>
    </div>
</section>
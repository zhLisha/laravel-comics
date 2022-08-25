<section class="product-details">
    <div class="top-layer">
        
    </div>

    {{-- Content --}}
    <div class="small-container flex">

       

        <div class="details">
            @foreach ($productDetail as $product)
                <div class="title">
                    {{$product['title']}}
                </div>

                 {{-- Product Thumb --}}
                <div class="thumb">
                    <img src="{{ $product['thumb'] }}" alt="">
                </div>

                {{-- Avalaibility and Price--}}
                <div class="price-avalaibility flex">
                    <div class="price-detail flex">
                        <span>U.S. Price: 
                            <span class="price"> {{ $product['price']}} </span>
                        </span>
                        
                        <span>AVALAIBLE</span>
                    </div>
                    <div class="cta-avalaibility">
                        <span>Check Avalaibility <span class="chevron-down">&#9660;</span></span>
                    </div>
                </div>

                {{-- Details Text --}}
                <div class="description">
                    <p>
                        {{$product['description']}}
                    </p>
                </div>                
            @endforeach
        </div>

        {{-- Advertisement --}}
        @include('../components.advertisement')
    </div>
</section>
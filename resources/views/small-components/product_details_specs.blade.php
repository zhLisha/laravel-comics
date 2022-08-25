<?php 
    $mainIcons = [
        [
            'text' => 'DIGITAL COMICS',
            'icon'=> 'img/byu-comics-dc.png'
        ],
        [
            'text' => 'SHOP DC',
            'icon'=> 'img/byu-comic-shop.png'
        ],
        [
            'text' => 'COMIC SHOP LOCATOR',
            'icon'=> 'img/shops-locator.png'
        ],
        [
            'text' => 'SUBSCRIPTION',
            'icon'=> 'img/merchandise.png'
        ]
    ];
?>


<section class="product-specs">
    {{-- Content --}}
    <div class="small-container flex">

        @foreach ($productDetail as $product)
            {{-- Talent --}}
            <div class="talent">
                <div class="title">
                    <h3>Talent</h3>
                </div>

                {{-- Artists --}}
                <div class="categories art-by flex">
                    <div class="title">
                        <span>Art By:</span>
                    </div>
                    <div class="content">
                        @foreach ($product['artists'] as $name)
                            <a href="#">
                                {{ $name }}
                            </a>
                        @endforeach
                    </div>
                </div>

                {{-- Writers --}}
                <div class="categories written-by flex">
                    <div class="title">
                        <span>Written by:</span>
                    </div>
                    <div class="content">
                        @foreach ($product['writers'] as $name)
                            <a href="#">
                                {{ $name }}
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- Specs --}}
            <div class="specs">
                <div class="title">
                    <h3>Specs</h3>
                </div>

                {{-- Series --}}
                <div class="categories series flex">
                    <div class="title">
                        <span>Series: </span>
                    </div>

                    <div class="content">
                        <a href="#">{{ $product['series'] }}</a>
                    </div>
                </div>

                {{-- Price --}}
                <div class="categories price flex">
                    <div class="title">
                        <span>U.S. Price: </span>
                    </div>

                    <div class="content">
                        <span>{{ $product['price'] }}</span>
                    </div>
                </div>

                {{-- Sale --}}
                <div class="categories sale flex">
                    <div class="title">
                        <span>On Sale Date: </span>
                    </div>

                    <div class="content">
                        <span>{{ $product['sale_date'] }}</span>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    {{-- Merchandising --}}
    <div class="merchandising">
        <div class="small-container">
            <ul class="flex">
                @foreach ($mainIcons as $icon)
                    <li>
                        <a class="flex" href="#">
                            <span>{{$icon['text']}}</span>
                            <img src="{{ asset($icon['icon'])}}" alt="">
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>   
    </div>
</section>
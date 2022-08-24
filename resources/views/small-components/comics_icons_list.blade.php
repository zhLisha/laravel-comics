<?php 
    $mainIcons = [
        [
            'text' => 'DIGITAL COMICS',
            'icon'=> 'img/buy-comics-digital-comics.png'
        ],
        [
            'text' => 'DC MERCHANDISE',
            'icon'=> 'img/buy-comics-merchandise.png'
        ],
        [
            'text' => 'SUBSCRIPTION',
            'icon'=> 'img/buy-comics-subscriptions.png'
        ],
        [
            'text' => 'COMIC SHOP LOCATOR',
            'icon'=> 'img/buy-comics-shop-locator.png'
        ],
        [
            'text' => 'DC POWER VISA',
            'icon'=> 'img/buy-dc-power-visa.svg'
        ]
    ]
?>

<div class="main-icons">
    <ul class="small-container flex">
       @foreach ($mainIcons as $icon)
            <li>
                <a href="#" class="flex">
                    <div class="icon">
                        <img src="{{ asset($icon['icon']) }}" alt="Logo {{$icon['text']}}">
                    </div>
                    <div class="icon-name">
                        <span>{{ $icon['text'] }}</span>
                    </div>
                </a>
            </li>
       @endforeach
    </ul>
</div>
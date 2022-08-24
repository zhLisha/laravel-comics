<?php 

    $socialIcons = [
        [
            'icon' => 'img/footer-facebook.png',
            'alt' => 'Icona Facebook'
        ],
        [
            'icon' =>  'img/footer-twitter.png',
            'alt' => 'Icona Twitter'
        ],
        [
            'icon' =>  'img/footer-youtube.png',
            'alt' => 'Icona Youtube'
        ],
        [
            'icon' =>  'img/footer-pinterest.png',
            'alt' => 'Icona Pinterest'
        ],
        [
            'icon' =>  'img/footer-periscope.png',
            'alt' => 'Icona periscope'
        ]
    ]
?>

<div class="footer-social">
    <div class="container flex">

        <!-- Button -->
        <div class="button">
            <a class="btn" href="icons.url"><span>SINGN-UP NOW!</span></a>
        </div>

        <!-- Social -->
        <div class="social flex">
            <a href="icons.url"> <span class="flex"> FOLLOW US </span></a>
            <!-- icons -->
            <ul class="social-icons flex">
                @foreach ($socialIcons as $item)
                    <li>
                        <a href="#"> 
                            <img src="{{ asset($item['icon']) }}" alt="">
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
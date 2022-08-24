<?php 

    $footerListLeft = [
        [
            'title' =>  'DC COMICS',
            'url' =>  '#',
            'listA' =>  [
                [
                    'link' => 'Charactera'
                ],
                [
                    'link' => 'Comics'
                ],
                [
                    'link' => 'Movies'
                ],
                [
                    'link' => 'TV'
                ],
                [
                    'link' => 'Games'
                ],
                [
                    'link' => 'VideosS'
                ],
                [
                    'link' => 'News'
                ]
            ]   
        ],
        [
            'title' =>  'SHOP',
            'url' => '#',
            'listA' =>  [
                [
                    'link' => 'Shop DC'
                ],
                [
                    'link' => 'Shop DC Collectibles'
                ]
            ]   
        ]
    ];

    $footerListGeneral = [
        [
            'title' => 'DC',
            'url' => '#',
            'listA' => [
                [
                    'link' => 'Terms Of Use'
                ],
                [
                    'link' => 'Privacy policy (New)'
                ],
                [
                    'link' => 'Ad Choices'
                ],
                [
                    'link' => 'Advertasing'
                ],
                [
                    'link' => 'Jobs'
                ],
                [
                    'link' => 'Subsciptions'
                ],
                [
                    'link' => 'Talent Workshops'
                ],
                [
                    'link' => 'CPSC Certificates'
                ],
                [
                    'link' => 'Ratings'
                ],
                [
                    'link' => 'Shop Help'
                ],
                [
                    'link' => 'Contact Us'
                ]
            ]   
        ]
    ];

    $footerListSites = [
        [
            'title' => 'SITES',
            'url' => '#',
            'listA' => [
                [
                    'link' => 'DC'
                ],
                [
                    'link' => 'MAD Magazine'
                ],
                [
                    'link' => 'Dc Kids'
                ],
                [
                    'link' => 'DC Universe'
                ],
                [
                    'link' => 'DC Power Visa'
                ]
            ]   
        ]
    ];

?>


<div class="jumbotron-bg">
    <div class="container">
        <!-- Content List -->
        <div class="content-list flex">

            <!-- Left column list -->
            <ul class="footer-list">
                <li class="list-container flex">
                    <ul class="dc-comics-list">
                        @foreach ($footerListLeft as $item)
                        <li>
                            <!-- Title -->
                            <div class="title">
                                {{ $item['title'] }}
                            </div>

                            {{-- Links --}}
                            <ul>
                                @foreach ($item['listA'] as $link)
                                    <li>
                                        <a href="">
                                            {{ $link['link']}}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        @endforeach
                    </ul>

                    <ul class="dc-general-list">
                    @foreach ($footerListGeneral as $item)
                        <li>
                            <!-- Title -->
                            <div class="title">
                                {{ $item['title'] }}
                            </div>
                            
                            {{-- Links --}}
                            <ul>
                                @foreach ($item['listA'] as $link)
                                    <li>
                                        <a href="">
                                            {{ $link['link']}}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        @endforeach
                    </ul>

                    <ul class="shop-list">
                    @foreach ($footerListSites as $item)
                        <li>
                            <!-- Title -->
                            <div class="title">
                                {{ $item['title'] }}
                            </div>

                            {{-- Links --}}
                            <ul>
                                @foreach ($item['listA'] as $link)
                                    <li>
                                        <a href="">
                                            {{ $link['link']}}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        @endforeach
                    </ul>
                </li>
            </ul>

        </div>
        
        
        {{-- Copy --}}
        <div class="copy">
            <p>
                All Site Content TM and &#169; 2020 DC Entertainment, unless otherwise 
                <a href="#">noted here</a>. 
                All rights reserved. <a href="#">Cookies Settings</a>
            </p>
        </div>
    </div>
 </div>
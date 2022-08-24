<?php 
    $navList = [
        [
            'text' => 'CHARACTERS',
            'active' => 'disable',
            'route' => 'characters'
        ],
        [
            'text' => 'COMICS',
            'active' => 'current',
            'route' => 'comics'
        ],
        [
            'text' => 'MOVIES',
            'active' => 'disable',
            'route' => 'movies'
        ],
        [
            'text' => 'TV',
            'active' => 'disable',
            'route' => 'home'
        ],
        [
            'text' => 'GAMES',
            'active' => 'disable',
            'route' => 'home'
        ],
        [
            'text' => 'COLLECTIONS',
            'active' => 'disable',
            'route' => 'home'
        ],
        [
            'text' => 'VIDEO',
            'active' => 'disable',
            'route' => 'home'
        ],
        [
            'text' => 'FANS',
            'active' => 'disable',
            'route' => 'home'
        ],
        [
            'text' => 'NEWS',
            'active' => 'disable',
            'route' => 'home'
        ],
        [
            'text' => 'SHOP',
            'active' => 'disable',
            'route' => 'home'
        ]
    ]
?>


<header>
    <div class="header">
        <div class="container flex">
            <!-- Logo -->
            <div class="logo">
                <a href="{{ route('home') }}"><img src="{{ asset('img/dc-logo.png') }}" alt="Dc Logo"></a>
            </div>
            <!-- Nav -->
            <nav>
                <ul class="flex">
                    @foreach ($navList as $item)
                        <li class="{{$item['active']}}">
                            <a href="{{ route($item['route']) }}">{{ $item['text']}}</a>
                        </li>
                    @endforeach
                </ul>
            </nav>
        </div>
    </div>
</header>
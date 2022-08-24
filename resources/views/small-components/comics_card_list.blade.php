<section class="main-content">
    <div class="container">
        <!-- Current Series -->
        <div class="current-series btn">
            <span> CURRENT SERIES </span>
        </div>

        <ul class="series-list flex">
            @foreach ($comics as $comic) 
                <li class="card"> 
                    <a href="#">
                        <div class="image">
                            <img src="{{$comic['thumb']}}" :alt="">
                        </div>
                        <div class="thumb-title">
                            <span>{{$comic['title']}}</span>
                        </div>
                    </a>
                </li>
            @endforeach
        </ul>

        <!-- Load More BTN -->
        <button class="btn">
            <span>LOAD MORE</span>
        </button>
    </div>
</section>
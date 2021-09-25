<link rel="stylesheet" href="{{ URL::asset('css/homepage.css') }}">
<h1>{{$user->name}}</h1>


<div class="main" data-aos="fade-right">
    <ul class="cards">
        @foreach($user->posts as $post)
        <a href="/postpageclothing/{{$post->id}}">
        <li class="cards_item">
            <div class="card">
                <div class="card_image"><img class="cardsfoto" src="/storage/{{$post->image}}"></div>
                <div class="card_content">
                    <a> <i id="favourite" class="far fa-heart"></i> </a>
                    <h1 class="card_title1">{{$post->price}}</h1> <br>
                    <!--  <p class="card_text">Size : 40-45 <br> Available colors : Black , red , green</p> -->
                    <h2 class="card_title">{{$post->name}}</h2> <br>
                </div>
            </div>
        </li>
    </a>
        @endforeach
    </ul>
</div>
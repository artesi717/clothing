<link rel="stylesheet" href="{{ URL::asset('css/homepage.css') }}">




<div class="carouseli1">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item img-fluid active">
                <img class="d-block w-100 foto img-fluid" src="https://underarmourme.com/storage/app/media/Campaigns/ua-sportsmask/video-cover.jpg" alt="First slide">
            </div>
            <div class="carousel-item img-fluid">
                <img class="d-block w-100 foto img-fluid" src="https://s3.us-east-1.amazonaws.com/vnda-cockpit/www-streetopia-me/2021/03/23/605a5d80b21a1fullbanner_1920x800px.jpg" alt="Second slide">
            </div>
            <div class="carousel-item img-fluid">
                <img class="d-block w-100 foto img-fluid" src="https://i8.amplience.net/i/jpl/desktop-homepage-top-banner-1920x840-b32e6f9f3a23eae14d4bf97d2e981991?qlt=80&fmt=webp" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<br>

<section id="cliens" class="cliens section-bg" data-aos="fade-up">
    <div class="container">

        <div class="row" data-aos="zoom-in">
            <div class="col-lg-2 col-md-4 col-8 d-flex align-items-center justify-content-center">
                <img src="https://upload.wikimedia.org/wikipedia/commons/3/36/Logo_nike_principal.jpg" class="img-fluid" alt="">
            </div>

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/20/Adidas_Logo.svg/1024px-Adidas_Logo.svg.png" class="img-fluid" alt="">
            </div>

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="https://cdn.shopify.com/s/files/1/2374/3709/products/The_north_face_thumb_8fd74e2f-763e-42dd-ace2-4f0fa4180527_1080x.jpg" class="img-fluid" alt="">
            </div>

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/44/Under_armour_logo.svg/2560px-Under_armour_logo.svg.png" class="img-fluid" alt="">
            </div>

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="https://logos-world.net/wp-content/uploads/2020/04/Air-Jordan-Symbol.png" class="img-fluid" alt="">
            </div>

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="https://i.pinimg.com/originals/7b/91/5e/7b915e395a3880edc9a0cf12ac13cd96.jpg" class="img-fluid" alt="">
            </div>
        </div>

    </div>
</section>


<br><br>
<h1 class="shopby">Shop By Category</h1>

<br> <br>

<div class="row13" data-aos="fade-left">
    <div class="column1">
        <div class="card3">
            <a href=""> <img width="91%" src="https://media.kohlsimg.com/is/image/kohls/3593715_Baroque_Green?wid=600&hei=600&op_sharpen=1" alt=""> </a><br>
            <a class="shop11" href="">Shop Clothing</a>
        </div>
    </div>

    <div class="column1">
        <div class="card3">
            <a href=""> <img width="80%" src="https://i.ibb.co/V0F4JFG/output-onlinepngtools-10.png" alt=""></a> <br>
            <a class="shop11" href="">Shop Footwear</a>
        </div>
    </div>

    <div class="column1">
        <div class="card3">
            <a href=""> <img width="80%" src="https://res.cloudinary.com/www-flook-co-za/image/upload/c_fit,q_auto:eco/v1/product-image/128945.jpg" alt=""></a> <br>
            <a class="shop11" href="">Shop Accessories</a>
        </div>
    </div>

</div>




<br><br>




<img data-aos="fade-down" width="100%" src="https://i8.amplience.net/i/jpl/desktop-1680x244-eb12ebfebf34cd60ef04bc792183862f?qlt=80&fmt=webp" alt="">
<br>
<h1 class="latestdr">Latest Drops</h1>
<div class="main" data-aos="fade-right">
    <ul class="cards">
        @foreach($posts as $post)
        <li class="cards_item">
            <a href="/postpageclothing/{{$post->id}}">
            <div class="card">
                <div class="card_image"><img class="cardsfoto" src="/storage/{{$post->image}}"></div>
                <div class="card_content">
                    <a> <i id="favourite" class="far fa-heart"></i> </a>
                    <h1 class="card_title1">{{$post->price}}</h1> <br>
                    <!--  <p class="card_text">Size : 40-45 <br> Available colors : Black , red , green</p> -->
                    <h2 class="card_title">{{$post->name}}</h2> <br>
                </div>
            </div>
            </a>
        </li>
        @endforeach
    </ul>
</div>

<br><br>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
    (function() {
        var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/61320b3cd6e7610a49b3784d/1felnnovb';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script>
<!--End of Tawk.to Script-->


<style>

</style>

<script>
    $('.carousel').carousel({
        interval: 6000,
        pause: "false"
    });

    AOS.init({
        duration: 1500

    });
    AOS.init();
    AOS.init({
        once: true
    })


    // AOS.init({
    //    offset: 200,
    //    duration: 600,
    //    easing: 'ease-in-sine',
    //    delay: 100,
    //  });
</script>
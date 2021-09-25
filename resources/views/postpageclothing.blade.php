@include('navbar')

<div>

    <div class="row1">
        <div class="foto">
            <img class="fotoeproduktit" src="/storage/{{$post->image}}" alt="">
        </div>
        <div class="information">

            <!-- Ketu shenohet kategoria -->
            <h3 class="categoria">{{$post->category}}</h3>

            <!-- Ketu shenohet emri i produktit -->
            <h1 class="emriproductit">{{$post->name}}</h1> <br>

            <!-- Ketu shenohet cmimi -->
            <h2 class="cmimiproductit">{{$post->price}}</h2>
            <hr class="hr1">


            <br><br>
            <button type="button" class="btn btn-primary madhesiaproductit" data-toggle="modal" data-target="#exampleModalCenter">
                Size & Fit Guide
            </button>
            <br> <br>
            <div class="inline">
                <button class="xs-size butonimadhsise">XS</button>
                <button class="s-size butonimadhsise">SM</button>
                <button class="m-size butonimadhsise">MD</button>
                <button class="l-size butonimadhsise">LG</button>
                <button class="xl-size butonimadhsise">XL</button>
                <button class="xxl-size butonimadhsise">XXL</button>
            </div>
            <br> <br>


            <div class="inline">
                <select class="form-select butoniquantity" aria-label="Default select example">
                    <option selected>Quantity</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                </select>
                <button type="button" class="btn btn-primary myButton31" data-toggle="modal" data-target="#exampleModalCenter1">
                    Add to bag
                </button>

                <button type="button" class="btn btn-primary favouritemodal" data-toggle="modal" data-target="#exampleModal3">
                    <i style="font-size:25px;color:black;" id="favourite" class="far fa-heart"></i>
                </button>


            </div>

            <br><br>
            <!-- Ketu shenohet description i produktit -->
            <h1 class="descriptionprod">What's it do?</h1>
            <p class="pershkrimi">The Nike Sportswear Tech Fleece Full-Zip Hoodie is made from a double-sided spacer fabric for
                added warmth without extra weight. A slightly taller collar in the hood helps keep you dry in cold, wet weather.</p>
        </div>

    </div>
    <br><br><br><br><br><br>
    <br><br><br><br><br><br>
    <br><br><br><br><br><br>

</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">HOW TO MEASURE</h5> <br>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>CHEST: Place the tape measure under your arms at the fullest part of your chest, wrap around your body until your fingers meet and mark the measurement.
                    WAIST: Measure around your natural waistline—right above your hips. Be careful not to squeeze too tight to allow a little give.</p>
                <img src="https://i.ibb.co/c2R9JFN/measureman.png" alt=""> <br>
                <img width="100%" src="https://i.ibb.co/0yzzjJV/measureman1.png" alt="">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
@guest
<form method="post" action="{{ route('login') }}">
    @csrf
    <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class=" emrimodul1" id="exampleModalLongTitle">Log in to use this feature</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="page">

                        <!-- ketu shenohet email -->

                        <label class="field field_v1">
                            <input id="phone" type="phone" placeholder="&nbsp;" class="field__input form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>

                            @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                            <span class="field__label-wrap">
                                <span class="field__label">Phone</span>
                            </span>
                        </label>


                        <!-- ketu shenohet password -->

                        <label class="field field_v2">
                            <input id="password" type="password" placeholder="&nbsp;" class="field__input form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
    
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <span class="field__label-wrap">
                                <span class="field__label">Password</span>
                            </span>
                        </label>

                        <!-- <label class="field field_v3">
                        <input class="field__input" placeholder="e.g. melnik909@ya.ru">
                        <span class="field__label-wrap">
                            <span class="field__label">E-mail</span>
                        </span>
                    </label> -->
                    </div>
                    <a style="text-align:right;" class="forgotten121" href="">Forgotten your password?</a> <br> <br>
                    <p class="terms11">By logging in, you agree to our Privacy Policy and Terms of Use.</p> <br>

                    <button class="myButton313" type="submit">Sign In</button>
                    {{ URL::previous() }}

                </div>
                <div class="modal-footer">
                    Not a Member? &nbsp; <a href="">Join us</a>
                </div>
            </div>
        </div>
    </div>

</form>
@endguest

@auth

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> <i style="color:green;" class="fas fa-check-circle"></i> &nbsp; (1) Item Added To Bag </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body productadded">
                <!-- emri -->
                <div class="container31">
                    <div class="image">
                        <img class="fotofavourite" src="/storage/{{$post->image}}" alt="">
                    </div>
                    <div class="text">
                        <!-- ketu del fotoja e produktit bashk me emer dhe cmim  -->
                        <h2 class="emriproduktitmodul">{{$post->name}}</h2>
                        <h1 class="sizemodul1">Size :{{$post->size}}</h1>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary continueshop" data-dismiss="modal">Continue shopping</button>
                <a class="viewbag btn btn-primary" href="/cart">View Bag & Check Out</a>
            </div>
        </div>
    </div>
</div>

@endauth


<!-- Modal -->
<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> <i style="color:green;" class="fas fa-check-circle"></i> &nbsp; (1) Item Added To Bag </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body productadded">
                <!-- emri -->
                <div class="container31">
                    <div class="image">
                        <img class="fotofavourite" src="/storage/{{$post->image}}" alt="">
                    </div>
                    <div class="text">
                        <!-- ketu del fotoja e produktit bashk me emer dhe cmim  -->
                        <h2 class="emriproduktitmodul">{{$post->name}}</h2>
                        <h1 class="sizemodul1">Size :{{$post->size}}</h1>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary continueshop" data-dismiss="modal">Continue shopping</button>
                <a class="viewbag btn btn-primary" href="/cart">View Bag & Check Out</a>
            </div>
        </div>
    </div>
</div>


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

@include('footer')

<style>
    .btn-primary {
        border-color: white;
    }

    .continueshop {
        background-color: white;
        color: black;
        border: 1px solid black;
    }

    .viewbag {
        background: rgb(136, 181, 246);
        background: linear-gradient(90deg, rgba(136, 181, 246, 1) 0%, rgba(61, 116, 193, 1) 58%, rgba(21, 69, 136, 1) 100%);
    }

    .viewbag:hover {
        color: #BFC9CA;
        background-color: lightblue;
    }

    .modal-footer {
        justify-content: center;
    }

    .sizemodul1 {
        font-size: 13px;
        color: gray;
        font-weight: 600;
    }

    .container31 {
        display: flex;
        align-items: center;
        justify-content: center
    }

    .fotofavourite {
        max-width: 100%;
        width: auto;
    }

    .image {
        flex-basis: 10%
    }

    .text {
        font-size: 20px;
        padding-left: 50px;
    }

    .fotofavourite {
        max-width: 120%;
    }

    .productadded {
        display: inline-block;
    }

    .emriproduktitmodul {
        font-size: 1rem;
    }

    .modal-header {
        border-bottom: 0 none;
    }

    .modal-footer {
        border-top: 0 none;
    }

    .favouritemodal {
        background-color: white;
    }

    .favouritemodal:hover {
        border: 0;
        outline: 0;
    }

    .favouritemodal:focus {
        border: 0;
        outline: 0;
    }

    .favouritemodal:after {
        border: 0;
        outline: 0;
    }

    .notamember {
        font-size: 16px;
    }

    .close {
        color: darkblue;
        size: 25px;
    }

    .myButton313 {
        background: rgb(136, 181, 246);
        background: linear-gradient(90deg, rgba(136, 181, 246, 1) 0%, rgba(61, 116, 193, 1) 58%, rgba(21, 69, 136, 1) 100%);
        border-radius: 2px;
        cursor: pointer;
        width: 100%;
        color: #ffffff;
        font-weight: 800;
        font-size: 16px;
        padding: 10px 103px;
        text-decoration: none;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .myButton313:hover {
        background-color: #5cbf2a;
        text-decoration: none;
    }

    .myButton313:active {
        position: relative;
        top: 1px;
    }

    .terms11 {
        clear: both;
        font-size: 12px;
        line-height: 16px;
        text-align: center;
        padding-left: 20%;
        padding-right: 20%;
        color: gray;
    }

    .forgotten121 {
        color: #bcbcbc;
        font-size: 12px;
        text-decoration: none;
        float: right;
        padding-right: 10px;
    }

    .keepme {
        margin-left: 15px;
    }

    .signedin {
        font-size: 12px;
        margin-left: 7px;
        color: gray;
        margin-bottom: -50px;
    }

    .emrimodul1 {
        font-size: 1.7rem;
        text-align: center;
        font-weight: 800;
        font-family: 'DotGothic16', sans-serif;
    }

    .modal-title {
        font-weight: 700;
        font-size: 1rem;
        line-height: 1.5;
    }

    .colour1 {
        background-color: red;
    }

    .ngjyra {
        height: 19px;
        border: 1px solid white;
        border-radius: 50%;
    }

    .ngjyra:focus {
        outline: 0;
        border: 0;
    }

    .favourite {
        font-size: 36px;
    }

    .descriptionprod {
        font-weight: 500;
        font-size: .875rem;
        line-height: 1.43;
        margin-bottom: 1rem;
    }

    .myButton31 {
        background-color: #2980B9;
        border-radius: 6px;
        display: inline-block;
        cursor: pointer;
        color: #ffffff;
        font-size: 17px;
        padding: 7px 54px;
        text-decoration: none;
    }

    .myButton31:hover {
        background-color: #85C1E9;
        text-decoration: none;
    }

    .myButton31:active {
        position: relative;
    }

    .butoniquantity {
        background-color: white;
        color: black;
        border: 1px solid gray;
        width: 105px;
        border-radius: 5px;
        padding: 8px;
    }

    .butoniquantity:hover {
        outline: 0;
        border: 0;
        background-color: #85C1E9;
    }

    .butonimadhsise {
        border: 1px solid gray;
        border-radius: 5px;
        padding: 4px 19px;
        font-weight: 800;
        background-color: white;
    }

    .butonimadhsise:focus {
        background-color: #85C1E9;
        outline: 0px;
    }

    .butonimadhsise:active {
        background-color: #85C1E9;
        outline: 0px;
    }

    .inline {
        display: inline-block;
    }

    .madhesiaproductit {
        color: #5f5f5f;
        font-size: .975rem;
        background: white;
        border: 0;
        line-height: 1.67;
        text-decoration: underline;
        font-weight: 600;
        padding: 0;
    }

    .madhesiaproductit:after {
        border: 0;
        outline: 0;
    }

    .ngjyraproductit {
        font-size: .975rem;
    }

    body {
        font-family: 'DM Sans', sans-serif;
    }

    .cmimiproductit {
        font-size: 22px;
        font-weight: 400;
        color: gray;
    }

    .emriproductit {
        font-size: 26px;
        font-weight: 800;
    }

    .fotoeproduktit {
        margin-top: 20%;
        max-width: 90%;
    }

    .categoria {
        font-size: 13px;
        color: grey;
    }

    .foto {
        float: left;
        width: 30%;
        padding: 10px;
        height: 300px;
    }

    .information {
        float: left;
        width: 30%;
        padding: 10px;
        margin-top: 7%;
        height: 300px;
    }

    .row1 {
        margin-left: 23%;
    }

    .row1:after {
        content: "";
        display: table;
        clear: both;
    }

    @media screen and (max-width: 600px) {

        .information,
        .foto {
            width: 100%;
        }
    }

    /* loginforma ne modul */

    /*
=====
RESET STYLES
=====
*/

    .field__input {
        --uiFieldPlaceholderColor: var(--fieldPlaceholderColor, #85C1E9);
        background-color: transparent;
        border-radius: 0;
        border: none;
        -webkit-appearance: none;
        -moz-appearance: none;
        font-family: inherit;
        font-size: inherit;
    }


    .field__input:focus::-webkit-input-placeholder {
        color: var(--uiFieldPlaceholderColor);
    }


    .field__input:focus::-moz-placeholder {
        color: var(--uiFieldPlaceholderColor);
    }


    /*
=====
CORE STYLES
=====
*/


    .field {
        --uiFieldBorderWidth: var(--fieldBorderWidth, 2px);
        --uiFieldPaddingRight: var(--fieldPaddingRight, 1rem);
        --uiFieldPaddingLeft: var(--fieldPaddingLeft, 1rem);
        --uiFieldBorderColorActive: var(--fieldBorderColorActive, rgba(22, 22, 22, 1));
        display: var(--fieldDisplay, inline-flex);
        position: relative;
        font-size: var(--fieldFontSize, 1rem);
    }


    .field__input {
        box-sizing: border-box;
        width: var(--fieldWidth, 100%);
        height: var(--fieldHeight, 3rem);
        padding: var(--fieldPaddingTop, 1.25rem) var(--uiFieldPaddingRight) var(--fieldPaddingBottom, .5rem) var(--uiFieldPaddingLeft);
        border-bottom: var(--uiFieldBorderWidth) solid var(--fieldBorderColor, rgba(0, 0, 0, .25));
    }


    .field__input:focus {
        outline: none;
    }


    .field__input::-webkit-input-placeholder {
        opacity: 0;
        transition: opacity .2s ease-out;
    }


    .field__input::-moz-placeholder {
        opacity: 0;
        transition: opacity .2s ease-out;
    }


    .field__input:focus::-webkit-input-placeholder {
        opacity: 1;
        transition-delay: .2s;
    }


    .field__input:focus::-moz-placeholder {
        opacity: 1;
        transition-delay: .2s;
    }


    .field__label-wrap {
        box-sizing: border-box;
        pointer-events: none;
        cursor: text;
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
    }


    .field__label-wrap::after {
        content: "";
        box-sizing: border-box;
        width: 100%;
        height: 0;
        opacity: 0;
        position: absolute;
        bottom: 0;
        left: 0;
    }


    .field__input:focus~.field__label-wrap::after {
        opacity: 1;
    }


    .field__label {
        position: absolute;
        left: var(--uiFieldPaddingLeft);
        top: calc(50% - .5em);
        line-height: 1;
        font-size: var(--fieldHintFontSize, inherit);
        transition: top .2s cubic-bezier(0.9, -0.15, 0.1, 1.15), opacity .2s ease-out, font-size .2s ease-out;
        will-change: bottom, opacity, font-size;
    }


    .field__input:focus~.field__label-wrap .field__label,
    .field__input:not(:placeholder-shown)~.field__label-wrap .field__label {
        --fieldHintFontSize: var(--fieldHintFontSizeFocused, .75rem);
        top: var(--fieldHintTopHover, .25rem);
    }


    /* 
effect 1
*/

    .field_v1 .field__label-wrap::after {
        border-bottom: var(--uiFieldBorderWidth) solid var(--uiFieldBorderColorActive);
        transition: opacity .2s ease-out;
        will-change: opacity;
    }


    /* 
effect 2
*/

    .field_v2 .field__label-wrap {
        overflow: hidden;
    }

    .field_v2 .field__label-wrap::after {
        border-bottom: var(--uiFieldBorderWidth) solid var(--uiFieldBorderColorActive);
        transform: translate3d(-105%, 0, 0);
        will-change: transform, opacity;
        transition: transform .285s ease-out .2s, opacity .2s ease-out .2s;
    }

    .field_v2 .field__input:focus~.field__label-wrap::after {
        transform: translate3d(0, 0, 0);
        transition-delay: 0;
    }


    /*
effect 3
*/

    .field_v3 .field__label-wrap::after {
        border: var(--uiFieldBorderWidth) solid var(--uiFieldBorderColorActive);
        will-change: opacity, height;
        transition: height .2s ease-out, opacity .2s ease-out;
    }

    .field_v3 .field__input:focus~.field__label-wrap::after {
        height: 100%;
    }


    /*
=====
LEVEL 4. SETTINGS
=====
*/

    .field {
        --fieldBorderColor: #85C1E9;
        --fieldBorderColorActive: #1F618D;
    }


    /*
=====
DEMO
=====
*/

    .page {
        box-sizing: border-box;
        width: 100%;
        max-width: 480px;
        margin: auto;
        padding: 1rem;
        display: grid;
        grid-gap: 30px;
    }

    .substack {
        border: 1px solid #EEE;
        background-color: #fff;
        width: 100%;
        max-width: 480px;
        height: 280px;
        margin: 1rem auto;
        ;
    }
</style>
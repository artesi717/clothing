@include('navbar')
<br><br><br><br><br>


<div class="row131">
  <div class="yourbag">


    <div class="card card66 mb-3" style="max-width: 540px;">

      <div class="mbiyourbag">
        <i style="color:#3498DB;" class="fas fa-shopping-cart"></i> &nbsp; Faster checkout <br>
        <i style="color:#3498DB;" class="fas fa-exchange-alt"></i> &nbsp; Easier returns <br>
        <i style="color:#3498DB;" class="fas fa-truck"></i> &nbsp;Quick order information and tracking
      </div>

      <br><br><br>

      <h1 class="yourbag11">Your Bag &nbsp; &nbsp; <b style="font-size: 15px; ">(1) item</b></h1>
      <hr style="width: 130%;"> <br>




       



      <!-- produkti -->
     
      <div class="row g-0">
        <div class="col-md-4">
          <img src="/storage/{{$post->image}}" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body trupikartes">
            <h5 class="card-title emriproduktit131">{{$post->name}}</h5>
            <h5 style="float:right; margin-top:-56px; font-weight:800;" class="card-title">{{$post->price}}$</h5>

            <p class="card-text cardatekst">Color: White / Midnight Green - 105</p>
            <p class="card-text cardatekst">Size: {{$post->size}}</p>

            <select class="form-select butoniquantity" aria-label="Default select example">
              <option selected>Quantity</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
            </select>

          </div>
          <a class="berllog" href=""><i class="fas fa-trash"></i></a>
        </div>
      </div>
   <br>
     

      <hr style="width: 130%;">

    </div>

  </div>
  <div class="column31313" style="background-color:#f7f7f7;">
    <h2 class="ordersummary">Order Summary</h2> <br>

    <p style="font-size: 13px;">Subtotal (1): <b style="float:right; font-weight:400;">{{$post->price}}$</b>
    <p style="font-size: 13px;">Subtotal (1): <b style="float:right; font-weight:400;">430€</b> </p> <br>
    <hr> <br>

    <h2 style="font-size: 20px;" class="ordersummary">Estimated Total: <b style="float:right;">525€</b></h2> <br>
    <hr> <br>

    <p style="font-size: 13px;">Postage included:<b style="float:right; font-weight:400;">2€</b> </p> <br><br>

    <a href="#" class="myButton313">Checkout</a>


  </div>
</div>






<br><br><br><br><br>
<br><br><br><br><br>
<br><br><br><br><br>
<br><br><br><br><br>
<br><br><br><br><br>


<br><br><br><br><br>

<br><br><br><br><br>

<br><br><br><br><br>

@include('footer')

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


<style>
  .berllog {
    float: right;
    margin-top: 30px;
    margin-right: -130px;
    color: black;
    font-size: 20px;
  }


  body {
    font-family: 'DM Sans', sans-serif;
    width: auto;
  }

  .ordersummary {
    font-size: 1rem;
    font-family: 'DM Sans', sans-serif;
    font-weight: 600;
    line-height: 1.5;

  }


  .trupikartes {
    width: 140%;
  }


  .myButton313 {
    background: rgb(136, 181, 246);
    background: linear-gradient(90deg, rgba(136, 181, 246, 1) 0%, rgba(61, 116, 193, 1) 58%, rgba(21, 69, 136, 1) 100%);
    border-radius: 2px;
    cursor: pointer;
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


  .mbiyourbag {
    display: inline-block;
    font-weight: 800;
    font-family: 'DM Sans', sans-serif;

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


  .emriproduktit131 {
    font-size: 1.1rem;
    width: 80%;

  }

  .cardatekst {
    font-size: .85rem;

  }

  .yourbag11 {
    font-weight: 800;
    font-family: 'DM Sans', sans-serif;
    display: inline-block;
  }

  .card66 {
    margin-left: 25%;
    border: 0;
  }


  * {
    box-sizing: border-box;
  }

  .column31313 {
    float: left;
    width: 23%;
    padding: 40px;
    height: 600px;
  }

  .yourbag {
    float: left;
    width: 60%;
    padding: 10px;
    height: 300px;
  }

  .row131 {}

  /* Clear floats after the columns */
  .row:after {
    content: "";
    display: table;
    clear: both;
  }

  /* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
  @media screen and (max-width: 600px) {
    .column {
      width: 100%;
    }
  }
</style>
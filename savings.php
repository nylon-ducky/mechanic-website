<!DOCTYPE php>
<php lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

  <link rel="stylesheet" media="screen and (min-width: 675px)" href="wideScreen.css">

  <link rel="stylesheet" media="screen and (max-width: 674px)" href="smallScreen.css">

  <title>Rad Rides Studio</title>
</head>

<body>

  <h1 id="head-img" class="jumbotron text-center animate__slideInDown">Manic Mechanic<br /><small>At The Rad Rides
      Studio</small></h1>

  <div id="navBar" class="animate__fadeInDownBig" onclick="openNav()">
    <div class="burger"></div>
    <div class="burger"></div>
    <div class="burger"></div>
    <a href="index.php" class="nav">Home</a>

    <a href="savings.php" class="nav">Savings</a>

    <a href="appointment.php" class="nav">Book An Appointment</a>

    <a href="contact.php" class="nav">Contact</a>
  </div>
  <!-- end burger && header -->

  <!-- carousel -->
  <div id="myCarousel" class="carousel slide" data-ride="carousel" data-pause="hover">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="carousel-item active">
        <div class="coupon d-block w-100">
          <div class="LGtxt">Free Tire Rotation</div>
          <img class="barcode" src="assets/barcode.png" />
          <br />
          <small>Coupon valid with the purchase of an oil change. Only one coupon per transaction. To Use: All you need
            to do is hold up your phone at the register and the casheir will scan a coupon of your choosing.</small>
        </div>
      </div>

      <div class="carousel-item">
        <div class="coupon d-block w-100">
          <div class="LGtxt">Save 10%</div>
          <img class="barcode" src="assets/barcode.png" />
          <br />
          <small>Coupon valid on the purchase of any regular maintenance. Only one coupon per transaction. To Use: All
            you need to do is hold up your phone at the register and the casheir will scan a coupon of your
            choosing.</small>
        </div>
      </div>

      <div class="carousel-item">
        <div class="coupon d-block w-100">
          <div class="LGtxt">Save 5%</div>
          <img class="barcode" src="assets/barcode.png" />
          <br />
          <small>Coupon valid with a purchase of any dent repair. Only one coupon per transaction. To Use: All you need
            to do is hold up your phone at the register and the casheir will scan a coupon of your choosing.</small>
        </div>
      </div>

    </div>

  </div>

  <div id="pauseCarousel">Click the corrosponding indicator to pause on the coupon you'd like to use.</div>


  <script src="app.js"></script>
</body>

</php>

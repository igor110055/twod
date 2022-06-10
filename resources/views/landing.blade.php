<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Crypto 2d" />
    <meta name="keywords" content="Crypto 2d">
    <meta name="author" content="Myan Myan Bet" />
    <!-- Favicon icon -->
    <link rel="icon" href="{{asset('images/favicon.png')}}" size="32" type="image/x-icon">
    <title>Myan Myan Bet</title>
    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/landing.css')}}">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <meta name="robots" content="noindex,follow" />
  </head>
  <body>
    <!-- Navigation -->
    <div class="navigation">
      <div class="navigation-left">
        <a href="#"><img src="{{asset('images/logo.png')}}" alt=""></a>
        <!-- <a href="#">Shoes</a>
        <a href="#">Clothes</a>
        <a href="#">Accessories</a> -->
      </div>
      <div class="navigation-center title">
        Myan Myan Bet - Crypto2D
      </div>
      <div class="navigation-right">
        <!-- <a href="#"><img src="images/shopping-bag.png" alt=""></a> -->
        <button class="login-btn" href="#">Login</button>
      </div>
    </div>
    <!-- Slider Wrapper -->
    <div class="css-slider-wrapper">
      <input type="radio" name="slider" class="slide-radio3" checked id="slider_3">
      <input type="radio" name="slider" class="slide-radio2" id="slider_2">
      <!-- Slider Pagination -->
      <div class="slider-pagination">
        <label for="slider_3" class="page3"></label>
        <label for="slider_2" class="page2"></label>
      </div>
      <!-- Slider #1 -->
      <div class="slider slide-3">
        <img src="images/model-1.jpg" alt="">
        <div class="slider-content">
          <h4>BTC / BUSD</h4>
          <h2>Myan Myan Bet - Crypto2D</h2>
          <a href="{{asset('images/myanmyanbet.apk')}}"><button type="button" class="buy-now-btn" name="button"><img src="{{asset('images/android.png')}}"></button></a>
        </div>
        <div class="number-pagination">
          <span>1</span>
        </div>
      </div>
      <!-- Slider #2 -->
      <div class="slider slide-2">
        <img src="images/model-2.jpg" alt="">
        <div class="slider-content">
          <h4>ETH / BUSD</h4>
          <h2>Myan Myan Bet - Crypto2D</h2>
          <a href="{{asset('images/myanmyanbet.apk')}}"><button type="button" class="buy-now-btn" name="button"><img src="{{asset('images/android.png')}}"> </button></a>
        </div>
        <div class="number-pagination">
          <span>2</span>
        </div>
      </div>
    </div>
    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" charset="utf-8"></script>
    <script>
      var TIMEOUT = 6000;
    var interval = setInterval(handleNext, TIMEOUT);
    function handleNext() {
        var $radios = $('input[class*="slide-radio"]');
        var $activeRadio = $('input[class*="slide-radio"]:checked');

        var currentIndex = $activeRadio.index();
        var radiosLength = $radios.length;
        $radios
          .attr('checked', false);
        if (currentIndex >= radiosLength - 1) {
          $radios
            .first()
            .attr('checked', true);
        } else {

          $activeRadio
            .next('input[class*="slide-radio"]')
            .attr('checked', true);
        }
      }
    </script>
  </body>
</html>

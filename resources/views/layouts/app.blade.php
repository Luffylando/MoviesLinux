<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

        <link rel="stylesheet" href="http://localhost:8000/css/swiper.min.css">
        <link rel="stylesheet" href="http://localhost:8000/css/main.css">
        <link href="https://fonts.googleapis.com/css?family=Cinzel|Concert+One|Cuprum|Old+Standard+TT|Rajdhani|Special+Elite" rel="stylesheet"> 
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

   
        <script src="/js/app.js"></script>

        <title>Laravel</title>

    </head>
    <body>

    <nav id="mainNav">
        <ul id="logoUl"> 
            <a id="logo"><img src="http://localhost:8000/image/l1.png" alt="logo"></a>
        </ul>      
       

        <ul id="logReg">    
            <li><a href="">Login |</a></li>
            <li><a href="">Register</a></li>

            
        </ul>
        <ul id="navRight"> 

            <li><a href="http://localhost:8000/">Home</a></li>
            <li><a href="">Browse Movies</a></li>

        </ul>
     
        <ul id="navSearch">
            <input type="search" placeholder="Ajax call">
        </ul>
    </nav>

    <main>
        @yield('content')
    </main>


    <div class="footer">
        Movie Site &copy; - 2018
    </div>

    <script src="http://localhost:8000/js/swiper.min.js"></script>

     <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.swiper-container', {
      effect: 'coverflow',
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 'auto',
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows : true,
      },
      pagination: {
        el: '.swiper-pagination',
      },
    });
  </script>

    </body>
</html>

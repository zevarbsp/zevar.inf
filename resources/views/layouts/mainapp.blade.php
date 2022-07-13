<!DOCTYPE html>
<html>
   <!-- Mirrored from gambolthemes.net/workwise-new/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Jul 2022 13:45:18 GMT -->
   <head>
      <meta charset="UTF-8">
      <title>WorkWise Html Template</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="" />
      <meta name="keywords" content="" />
      <link rel="stylesheet" type="text/css" href="css/animate.css">
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="css/line-awesome.css">
      <link rel="stylesheet" type="text/css" href="css/line-awesome-font-awesome.min.css">
      <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
      <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="css/jquery.mCustomScrollbar.min.css">
      <link rel="stylesheet" type="text/css" href="lib/slick/slick.css">
      <link rel="stylesheet" type="text/css" href="lib/slick/slick-theme.css">
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <link rel="stylesheet" type="text/css" href="css/responsive.css">
   </head>
   <body>
      <div class="wrapper">
         <header>
            @include('inc.header')
         </header>
         <main>
            <div class="main-section">
               <div class="container">
                  <div class="main-section-data">
                     <div class="row">
                        
                        <div class="col-lg-3 col-md-4 pd-left-none no-pd">
                           @yield('left')
                        </div>

                        <div class="col-lg-6 col-md-8 no-pd">
                           @yield('maincontent')
                        </div>

                        <div class="col-lg-3 pd-right-none no-pd">
                           @yield('right')
                        </div>

                     </div>
                  </div>
               </div>
            </div>
         </main>
      </div>
      <script type="text/javascript" src="js/jquery.min.js"></script>
      <script type="text/javascript" src="js/popper.js"></script>
      <script type="text/javascript" src="js/bootstrap.min.js"></script>
      <script type="text/javascript" src="js/jquery.mCustomScrollbar.js"></script>
      <script type="text/javascript" src="lib/slick/slick.min.js"></script>
      <script type="text/javascript" src="js/scrollbar.js"></script>
      <script type="text/javascript" src="js/script.js"></script>
   </body>
</html>
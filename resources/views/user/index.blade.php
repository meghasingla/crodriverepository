


<!DOCTYPE html>
<html>
<head>
<title>Cro Drive</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Car Rental Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
    function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/galleryeffect.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/jquery.flipster.css">
    <link rel='stylesheet' href='css/dscountdown.css' type='text/css' media='all' />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet"> 
<link href="//fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Faster+One" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

</head>
<body>

<!-- banner -->
<div class="banner-w3ls" id="home" >
<!-- header -->
<div class="header-w3l-agile" >
    <div class="header_left">
      <ul>
        <li><a href="mailto:info@example.com"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>info@example.com</a></li>
        <li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>+123 456 7890</li>
      </ul>
    </div>
    <div class="header_right">
          <div class="w3ls-social-icons">
          <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
          <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
          <a class="pinterest" href="#"><i class="fa fa-google-plus"></i></a>
          <a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
          
        </div>

    </div>
    <div class="clearfix"></div>
</div>

<!--signup-->
<div class="container"> 
    <br>
 
    <!--<h1><b>Signin</b></h1>-->
    
     
   
 </div>
  


  <div class="container">
    <div class="header-nav">
      <nav class="navbar navbar-default">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
             @section('header')
            <a href="{{ route('user.index') }}" style="color: #f5af02">Home</a>
          @if(Auth::check())
        <p>Logged in as:</p>
        
        <p>
            Name: {{ Auth::user()->name }}<br>
            Email: {{ Auth::user()->email }}<br>
            
            <a href="{{ url('user/account') }}">My Account</a> | 
            <a href="{{ url('user/logout') }}">Logout</a> <!-- Can use url() or route() helper functions for URL -->
        </p>
    @else
        <p style="margin-left: 1000px;color:#f5af02;">
            <a href="{{ route('user.logout') }}" style="color: #f5af02;">Login</a> | 
            <a href="{{ route('user.register') }}" style="color: #f5af02;">Register</a> 

        </p>
    @endif
        
        @if(Session::has('flash_message'))
            <div style="color:green; border:1px solid #aaa; padding:4px; margin-top:10px">
                {{ Session::get('flash_message') }}
            </div>
        @endif
 
        @if($errors->any())
            <div style="color:red; border:1px solid #aaa; padding:4px; margin-top:10px">
                @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif
        
        <div>            
            @yield('content')
        </div>
        

 
@section('content')    

    
  
        
@endsection
            <h1 style="margin-top: -50px;"><a  href="index.html"><span class="logo-c">C</span><i class="" aria-hidden="true"></i>RO Drive</a><p class="sub-cap">The Best Drive</p></h1>

          </div>
      
          <div class="clearfix"> </div> 
        </nav>

    </div>
 
    <h2>Coming Soon</h2>
    <h3>We are ready to launch our New Website</h3>
    <h1 style="color:#fff;"> <center>Crodrive Offers: Upto 90% Off on first 1000 rides.</center></h1>
      <!--timer-->
            <div class="agileits-timer"> 
              <div class="main-title">
                 <div class="demo2"></div>
            </div>
            </div>
            
            <!--//timer-->
            <div class="callbacks_container">
            <ul class="rslides" id="slider3">
              <li>
                <div class="w3l_banner_info">
                   <h4>Find Best Rental Car</h4>
                  
                </div>
              </li>
              <li>
                <div class="w3l_banner_info">
                  <h4>A Reliable way to travel!</h4>
                  
                </div>
              </li>
              <li>
                <div class="w3l_banner_info">
                   <h4>Save time when you arrive!</h4>
                
                  
                </div>
              </li>
              <li>
                <div class="w3l_banner_info">
                  <h4>Rent for a month.</h4>
                  
                </div>
              </li>
            </ul>
          </div>
        </div>
 <div id="marquee">
<marquee scrollamount="30"><img src="../images/move.png" height="100" width="250"></marquee>

</div>

  </div>

  </body>
</html>

<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!--scripts--> 
<!-- Counter required files -->
        <script type="text/javascript" src="js/dscountdown.min.js"></script>
        <script src="js/demo-1.js"></script>
        <script>
            jQuery(document).ready(function($){                     
                $('.demo2').dsCountDown({
                    endDate: new Date("December 24, 2020 23:59:00"),
                    theme: 'black'
                    });                             
            });
        </script>
    <!-- //Counter required files -->

    <!--//scripts--> 
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){     
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script>
<!-- start-smoth-scrolling -->
<!--banner Slider starts Here-->
                        <script src="js/responsiveslides.min.js"></script>
                            <script>
                                // You can also use "$(window).load(function() {"
                                $(function () {
                                  // Slideshow 4
                                  $("#slider3").responsiveSlides({
                                    auto: true,
                                    pager:true,
                                    nav:false,
                                    speed: 500,
                                    namespace: "callbacks",
                                    before: function () {
                                      $('.events').append("<li>before event fired.</li>");
                                    },
                                    after: function () {
                                      $('.events').append("<li>after event fired.</li>");
                                    }
                                  });
                            
                                });
                             </script>
                            <script src="js/modernizr.custom.js"></script>
        
                            
    <script src="js/jquery.flipster.js"></script>
<script>

    $(function(){ $(".flipster").flipster({ style: 'carousel', start: 0 }); });


</script>   
<!--banner Slider starts Here-->
                             <!-- required-js-files-->
                            <link href="css/owl.carousel.css" rel="stylesheet">
                                <script src="js/owl.carousel.js"></script>
                                    <script>
                                $(document).ready(function() {
                                  $("#owl-demo").owlCarousel({
                                    items :5,
                                    itemsDesktop : [768,4],
                                    itemsDesktopSmall : [414,3],
                                    lazyLoad : true,
                                    autoPlay : true,
                                    navigation :true,
                                    
                                    navigationText :  false,
                                    pagination :false,
                                    
                                  });
                                  
                                });
                                </script>
                                 <!--//required-js-files-->
<!-- smooth scrolling -->
    <script type="text/javascript">
        $(document).ready(function() {
        /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear' 
            };
        */                              
        $().UItoTop({ easingType: 'easeOutQuart' });
        });
    </script>
    <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
<script type="text/javascript" src="js/bootstrap.js"></script>





<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<title>Immigro | Visa & Immigrations Services HTML Template | Home Page 02</title>

<link href="{{asset('Assets/FrontEnd/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('Assets/FrontEnd/css/style.css')}}" rel="stylesheet">

<link rel="shortcut icon" href="{{asset('Assets/FrontEnd/images/favicon.png')}}" type="image/x-icon">
<link rel="icon" href="{{asset('Assets/FrontEnd/images/favicon.png')}}" type="image/x-icon">

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>
    
    <div class="page-wrapper">
        
      
        <header class="main-header header-style-two">
         
    
            <div class="header-lower">

                <div class="main-box">

                    <div class="logo-box">

                        <div class="logo" id="logo_id1">

                        </div>

                    </div>
    
                    <div class="nav-outer">
                        
                        <nav class="nav main-menu">

                            <ul class="navigation" id="navbar_id1">
                              

                            </ul>

                        </nav>
    
                     
                    </div>
                </div>
            </div>
    
            <div class="mobile-menu">
                <div class="menu-backdrop"></div>
            
                <nav class="menu-box">
                    <div class="upper-box" >
                        <div class="nav-logo" id="logo_id2">
                       
                        </div>
                        <div class="close-btn">
                            <i class="icon fa fa-times"></i>
                        </div>
                    </div>
            
                    <ul class="navigation clearfix" id="navbar_id2" >
                    </ul>
                  
                </nav>
            </div>
            <div class="sticky-header">
                <div class="auto-container">
                    <div class="inner-container">

                        <div class="logo" id="logo_id3">


                        </div>
            
                        <div class="nav-outer">
                            <nav class="main-menu">
                                <div class="navbar-collapse show collapse clearfix">
                                    <ul class="navigation clearfix" id="navbar_id3">
                                    </ul>
                                </div>
                            </nav>
            
                            <div class="mobile-nav-toggler"><span class="icon lnr-icon-bars"></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        
    
    


@yield('content')


	<footer class="main-footer">
		<div class="bg bg-pattern-7"></div>
		<div class="auto-container">
			<div class="footer-upper">

				<div class="logo-box" id="logo_id4">

                </div>

				<ul class="contact-info">
					<li>
						<i class="icon fa fa-phone-square"></i>
						<span class="title">Phone:</span>
						<div class="text"><a href="tel:+9288006830">+91 9999999999</a></div>
					</li>
					<li>
						<i class="icon fa fa-envelope"></i>
						<span class="title">Email:</span>
						<div class="text"><a href="mailto:eziaro@company.com">dhway@company.com</a></div>
					</li>
					<li>
						<i class="icon fa fa-map-marker"></i>
						<span class="title">Address:</span>
						<div class="text">Wall Street,Ahmedabad</div>
					</li>
				</ul>
				<div class="btn-box">
					<a href="page-contact.html" class="theme-btn btn-style-four"><span class="btn-title">Book Consultation</span></a>
				</div>
			</div>
		</div>
	

	
		<div class="footer-bottom">
			<div class="auto-container">
				<div class="inner-container">
					<div class="copyright-text">&copy; Copyright 2023 by <a href="/home">dhway.com</a></div>
				</div>
			</div>
		</div>
	</footer>

</div>

<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

<script src="{{asset('Assets/FrontEnd/js/jquery.js')}}"></script> 
<script src="{{asset('Assets/FrontEnd/js/popper.min.js')}}"></script>

<script src="{{asset('Assets/FrontEnd/plugins/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{asset('Assets/FrontEnd/plugins/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('Assets/FrontEnd/plugins/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script src="{{asset('Assets/FrontEnd/plugins/revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script src="{{asset('Assets/FrontEnd/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script src="{{asset('Assets/FrontEnd/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{asset('Assets/FrontEnd/plugins/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script src="{{asset('Assets/FrontEnd/plugins/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script src="{{asset('Assets/FrontEnd/plugins/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script src="{{asset('Assets/FrontEnd/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{asset('Assets/FrontEnd/plugins/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
<script src="{{asset('Assets/FrontEnd/js/main-slider-script.js')}}"></script>


<script src="{{asset('Assets/FrontEnd/js/bootstrap.min.js')}}"></script>
<script src="{{asset('Assets/FrontEnd/js/jquery.fancybox.js')}}"></script>
<script src="{{asset('Assets/FrontEnd/js/jquery-ui.js')}}"></script>
<script src="{{asset('Assets/FrontEnd/js/wow.js')}}"></script>
<script src="{{asset('Assets/FrontEnd/js/appear.js')}}"></script>
<script src="{{asset('Assets/FrontEnd/js/select2.min.js')}}"></script>
<script src="{{asset('Assets/FrontEnd/js/swiper.min.js')}}"></script>
<script src="{{asset('Assets/FrontEnd/js/owl.js')}}"></script>
<script src="{{asset('Assets/FrontEnd/js/script.js')}}"></script>


<script>
     function getnavbar()
               {
                   fetch("http://localhost:8000/api/navbars").then((res)=>res.json()).then((response)=>
                   {
                       console.log(response);
                       navbars1 = ""
                      
                       response.forEach(navbar =>  
                       {
                           navbars1 +=
                           `<li><a href="/${navbar.navbar}">${navbar.navbar}</a></li>`
                       });
                       document.getElementById("navbar_id1").innerHTML = navbars1
                       document.getElementById("navbar_id2").innerHTML = navbars1
                       document.getElementById("navbar_id3").innerHTML = navbars1
                 
                   })
               }
               
               getnavbar()
</script>
<script>
    function getlogo()
    {
       fetch("http://localhost:8000/api/logos").then((res)=>res.json()).then((response)=>
       {
           console.log(response);

           logos1 = ""
           
           response.forEach(logo => 
           {
               logos1 +=`<a href="/home"><img src="/storage/${logo.logo}" alt="Logo Not found" title="Tronis"></a>`
           });

           document.getElementById("logo_id1").innerHTML = logos1
           document.getElementById("logo_id2").innerHTML = logos1
           document.getElementById("logo_id3").innerHTML = logos1
           document.getElementById("logo_id4").innerHTML = logos1

        })
    }
   
   getlogo()

  
</script>
</body>

</html>
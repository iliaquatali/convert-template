<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Musicm</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/bootstrap.min.css')}}">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/style.css')}}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">
      <!-- fevicon -->
      <link rel="icon" type="image/gif" href="{{asset('frontend/images/fevicon.png')}}"/>
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{asset('frontend/css/jquery.mCustomScrollbar.min.css')}}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets --> 
      <link href="https://fonts.googleapis.com/css?family=Orbitron:400,500,600,700|Poppins:400,700&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.min.css')}}">
      <link rel="stylesoeet" href="{{asset('frontend/css/owl.theme.default.min.css')}}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <body>
      <!--header section start -->
      <div class="header_section">
         <div class="container-fluid padding_0">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <a class="logo" href="{{asset('/')}}"><img src="{{asset('frontend/images/logo.png')}}"></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                     <li class="nav-item">
                       <a class="nav-link" href="{{asset('/')}}">Home</a>
                     </li>
                     <li class="nav-item">
                       <a class="nav-link" href="{{asset('news')}}">News</a>
                     </li>
                     <li class="nav-item">
                       <a class="nav-link" href="{{asset('events')}}">Events</a>
                     </li>
                      <li class="nav-item">
                       <a class="nav-link" href="{{asset('videos')}}">Videos</a>
                     </li>
                     <li class="nav-item">
                       <a class="nav-link" href="{{asset('music')}}">Music</a>
                     </li>
                     <li class="nav-item">
                       <a class="nav-link" href="{{asset('contact')}}">Contact Us</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#"><img src="{{asset('frontend/images/user-icon.png')}}"> <span class="padding_left_10">Login</span></a>
                     </li>
                     <li class="nav-item">
                       <a class="nav-link" href="#"><img src="{{asset('frontend/images/shopping-bag.png')}}"></a>
                     </li>
                  </ul>
               </div>
            </nav>
         </div>
      </div>
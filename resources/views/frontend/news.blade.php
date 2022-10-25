@extends('frontend.layouts.main')
@section('main-container')

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
      <title>News</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets --> 
      <link href="https://fonts.googleapis.com/css?family=Orbitron:400,500,600,700|Poppins:400,700&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesoeet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <body>
      <!-- news section start -->
      <div class="news_section layout_padding">
         <div class="container">
            <div class="news_taital_main">
               <h1 class="latest_text">Latest news</h1>
               <div class="seemor_bt"><a href="#">See More</a></div>
            </div>
         </div>
      </div>
      <div class="news_section_2">
         <div class="container">
            <div class="down_arrow"><img src="{{asset('frontend/images/down-arrow.png')}}"></div>
            <div class="row">
               <div class="col-lg-3 col-sm-6">
                  <div class="images_main">
                     <div class="image_1"><img src="{{asset('frontend/images/img-1.png')}}" class="image_1"></div>
                     <div class="text_main">
                        <h2 class="business_text">Business News</h2>
                        <p class="date_text">01/03/2019</p>
                     </div>
                     <p class="ipsum_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,</p>
                     <div class="seemor_bt_1"><a href="#">See More</a></div>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-6">
                  <div class="images_main">
                     <div class="image_1"><img src="{{asset('frontend/images/img-2.png')}}" class="image_1"></div>
                     <div class="text_main">
                        <h2 class="business_text">Business News</h2>
                        <p class="date_text">01/03/2019</p>
                     </div>
                     <p class="ipsum_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,</p>
                     <div class="seemor_bt_1"><a href="#">See More</a></div>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-6">
                  <div class="images_main">
                     <div class="image_1"><img src="{{asset('frontend/images/img-3.png')}}" class="image_1"></div>
                     <div class="text_main">
                        <h2 class="business_text">Business News</h2>
                        <p class="date_text">01/03/2019</p>
                     </div>
                     <p class="ipsum_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,</p>
                     <div class="seemor_bt_1"><a href="#">See More</a></div>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-6">
                  <div class="images_main">
                     <div class="image_1"><img src="{{asset('frontend/images/img-4.png')}}" class="image_1"></div>
                     <div class="text_main">
                        <h2 class="business_text">Business News</h2>
                        <p class="date_text">01/03/2019</p>
                     </div>
                     <p class="ipsum_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,</p>
                     <div class="seemor_bt_1"><a href="#">See More</a></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   
@endsection
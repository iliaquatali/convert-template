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
      <title>Events</title>
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
      <link rel="icon" href="{{asset('frontend/images/fevicon.png" type="image/gif')}}" />
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
      <!-- review section start -->
      <div class="review_section layout_padding">
         <div class="container">
            <h1 class="review_taital">Review Pepole </h1>
         </div>
      </div>
      <div class="review_section_2">
         <div class="container">
            <div class="review_box">
               <div id="slide_carousel" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <div class="review_left_box">
                           <div class="review_image_1"><img src="{{asset('frontend/images/review-img-1.png')}}"></div>
                           <h2 class="senha_text">Senha</h2>
                           <p class="many_text">many variations of passages of Lorem Ipsum available, but the majority have suffered alteration</p>
                        </div>
                        <div class="review_middle_box">
                           <div class="review_image_1"><img src="{{asset('frontend/images/review-img-2.png')}}"></div>
                           <h2 class="senha_text">sminter</h2>
                           <p class="many_text">many variations of passages of Lorem Ipsum available, but the majority have suffered alteration</p>
                        </div>
                        <div class="review_right_box">
                           <div class="review_image_1"><img src="{{asset('frontend/images/review-img-3.png')}}"></div>
                           <h2 class="senha_text">minter</h2>
                           <p class="many_text">many variations of passages of Lorem Ipsum available, but the majority have suffered alteration</p>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="review_left_box">
                           <div class="review_image_1"><img src="{{asset('frontend/images/review-img-1.png')}}"></div>
                           <h2 class="senha_text">Senha</h2>
                           <p class="many_text">many variations of passages of Lorem Ipsum available, but the majority have suffered alteration</p>
                        </div>
                        <div class="review_middle_box">
                           <div class="review_image_1"><img src="{{asset('frontend/images/review-img-2.png')}}"></div>
                           <h2 class="senha_text">sminter</h2>
                           <p class="many_text">many variations of passages of Lorem Ipsum available, but the majority have suffered alteration</p>
                        </div>
                        <div class="review_right_box">
                           <div class="review_image_1"><img src="{{asset('frontend/images/review-img-3.png')}}"></div>
                           <h2 class="senha_text">minter</h2>
                           <p class="many_text">many variations of passages of Lorem Ipsum available, but the majority have suffered alteration</p>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="review_left_box">
                           <div class="review_image_1"><img src="{{asset('frontend/images/review-img-1.png')}}"></div>
                           <h2 class="senha_text">Senha</h2>
                           <p class="many_text">many variations of passages of Lorem Ipsum available, but the majority have suffered alteration</p>
                        </div>
                        <div class="review_middle_box">
                           <div class="review_image_1"><img src="{{asset('frontend/images/review-img-2.png')}}"></div>
                           <h2 class="senha_text">sminter</h2>
                           <p class="many_text">many variations of passages of Lorem Ipsum available, but the majority have suffered alteration</p>
                        </div>
                        <div class="review_right_box">
                           <div class="review_image_1"><img src="{{asset('frontend/images/review-img-3.png')}}"></div>
                           <h2 class="senha_text">minter</h2>
                           <p class="many_text">many variations of passages of Lorem Ipsum available, but the majority have suffered alteration</p>
                        </div>
                     </div>
                  </div>
                  <a class="carousel-control-prev" href="#slide_carousel" role="button" data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                  </a>
                  <a class="carousel-control-next" href="#slide_carousel" role="button" data-slide="next">
                    <i class="fa fa-angle-right"></i>
                  </a>
               </div>
            </div>  
         </div>
      </div>
      
    
@endsection
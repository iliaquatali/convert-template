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
      <title>Musicm</title>
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
      
      <!-- banner section start -->
      <div class="banner_section layout_padding">
         <div id="main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <div class="banner_taital">
                        <h1 class="banner_taital">Let’s start music</h1>
                        <p class="banner_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration </p>
                     </div>
                     <div class="play_now_bt"><a href="#">Play Now</a></div>
                     <h1 class="Music_text">Music</h1>
                     <form class="example" action="/action_page.php">
                       <input type="text" placeholder="Search.." name="search">
                       <button type="submit"><i class="fa fa-search"></i></button>
                     </form>
                  </div>
                  <div class="container-fluid">
                     <h4 class="number_text active">10 <span style="text-align: right; float: right;">02</span></h4>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="banner_taital">
                        <h1 class="banner_taital">Let’s start music</h1>
                        <p class="banner_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration </p>
                     </div>
                     <div class="play_now_bt"><a href="#">Play Now</a></div>
                     <h1 class="Music_text">Music</h1>
                     <form class="example" action="/action_page.php">
                       <input type="text" placeholder="Search.." name="search">
                       <button type="submit"><i class="fa fa-search"></i></button>
                     </form>
                  </div>
                  <div class="container-fluid">
                     <h4 class="number_text active">10 <span style="text-align: right; float: right;">02</span></h4>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="banner_taital">
                        <h1 class="banner_taital">Let’s start music</h1>
                        <p class="banner_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration </p>
                     </div>
                     <div class="play_now_bt"><a href="#">Play Now</a></div>
                     <h1 class="Music_text">Music</h1>
                     <form class="example" action="/action_page.php">
                       <input type="text" placeholder="Search.." name="search">
                       <button type="submit"><i class="fa fa-search"></i></button>
                     </form>
                  </div>
                  <div class="container-fluid">
                     <h4 class="number_text active">10 <span style="text-align: right; float: right;">02</span></h4>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
              <i class="fa fa-angle-left"></i>
            </a>
            <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
              <i class="fa fa-angle-right"></i>
            </a>
         </div>
      </div>
      <!-- banner section end -->
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
      <!-- news section end -->
      <!-- music section start -->
      <div class="news_section layout_padding">
         <div class="container">
            <div class="news_taital_main">
               <h1 class="latest_text">Latest Music</h1>
               <div class="seemor_bt"><a href="#">See More</a></div>
            </div>
         </div>
      </div>
      <div class="news_section_2">
         <div class="container">
            <div class="down_arrow"><img src="{{asset('frontend/images/down-arrow.png')}}"></div>
            <div id="my_slider" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="row">
                        <div class="col-lg-3 col-sm-6">
                           <div class="images_main">
                              <div class="image_1"><img src="{{asset('frontend/images/img-5.png')}}" class="image_1"></div>
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
                              <div class="image_1"><img src="{{asset('frontend/images/img-6.png')}}" class="image_1"></div>
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
                              <div class="image_1"><img src="{{asset('frontend/images/img-7.png')}}" class="image_1"></div>
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
                              <div class="image_1"><img src="{{asset('frontend/images/img-8.png')}}" class="image_1"></div>
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
                  <div class="carousel-item">
                     <div class="row">
                        <div class="col-lg-3 col-sm-6">
                           <div class="images_main">
                              <div class="image_1"><img src="{{asset('frontend/images/img-5.png')}}" class="image_1"></div>
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
                              <div class="image_1"><img src="{{asset('frontend/images/img-6.png')}}" class="image_1"></div>
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
                              <div class="image_1"><img src="{{asset('frontend/images/img-7.png')}}" class="image_1"></div>
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
                              <div class="image_1"><img src="{{asset('frontend/images/img-8.png')}}" class="image_1"></div>
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
                  <div class="carousel-item">
                     <div class="row">
                        <div class="col-lg-3 col-sm-6">
                           <div class="images_main">
                              <div class="image_1"><img src="{{asset('frontend/images/img-5.png')}}" class="image_1"></div>
                              <div class="text_main">
                                 <h2 class="business_text">Music</h2>
                                 <p class="date_text">01/03/2019</p>
                              </div>
                              <p class="ipsum_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,</p>
                              <div class="seemor_bt_1"><a href="#">See More</a></div>
                           </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                           <div class="images_main">
                              <div class="image_1"><img src="{{asset('frontend/images/img-6.png')}}" class="image_1"></div>
                              <div class="text_main">
                                 <h2 class="business_text">Music</h2>
                                 <p class="date_text">01/03/2019</p>
                              </div>
                              <p class="ipsum_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,</p>
                              <div class="seemor_bt_1"><a href="#">See More</a></div>
                           </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                           <div class="images_main">
                              <div class="image_1"><img src="{{asset('frontend/images/img-7.png')}}" class="image_1"></div>
                              <div class="text_main">
                                 <h2 class="business_text">Music & Video</h2>
                                 <p class="date_text">01/03/2019</p>
                              </div>
                              <p class="ipsum_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,</p>
                              <div class="seemor_bt_1"><a href="#">See More</a></div>
                           </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                           <div class="images_main">
                              <div class="image_1"><img src="{{asset('frontend/images/img-8.png')}}" class="image_1"></div>
                              <div class="text_main">
                                 <h2 class="business_text">Live Event Music</h2>
                                 <p class="date_text">01/03/2019</p>
                              </div>
                              <p class="ipsum_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,</p>
                              <div class="seemor_bt_1"><a href="#">See More</a></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
                 <i class="fa fa-angle-left"></i>
               </a>
               <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
                 <i class="fa fa-angle-right"></i>
               </a>
             </div>
         </div>
      </div>
      <!-- music section end -->
      <!-- video section start -->
      <div class="video_section layout_padding">
         <div class="container">
            <div class="news_taital_main">
               <h1 class="latest_text">Upcoming New videos</h1>
               <div class="seemor_bt"><a href="#">See More</a></div>
            </div>
         </div>
      </div>
      <div class="news_section_2">
      <div class="container">
         <div class="down_arrow"><img src="{{asset('frontend/images/down-arrow.png')}}"></div>
         <div id="costum_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="row">
                     <div class="col-lg-3 col-sm-6">
                        <div class="images_main">
                           <div class="video_box">
                              <h2 class="upcoming_text">Upcoming <br>New<br> videos</h2>
                           </div>
                           <div class="text_main">
                              <h2 class="business_text">Music</h2>
                              <p class="date_text">01/03/2019</p>
                           </div>
                           <p class="ipsum_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,</p>
                           <div class="seemor_bt_1"><a href="#">See More</a></div>
                        </div>
                     </div>
                     <div class="col-lg-3 col-sm-6">
                        <div class="images_main">
                           <div class="video_box">
                              <h2 class="upcoming_text">Upcoming <br>New<br> videos</h2>
                           </div>
                           <div class="text_main">
                              <h2 class="business_text">Music</h2>
                              <p class="date_text">01/03/2019</p>
                           </div>
                           <p class="ipsum_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,</p>
                           <div class="seemor_bt_1"><a href="#">See More</a></div>
                        </div>
                     </div>
                     <div class="col-lg-3 col-sm-6">
                        <div class="images_main">
                           <div class="video_box">
                              <h2 class="upcoming_text">Upcoming <br>New<br> videos</h2>
                           </div>
                           <div class="text_main">
                              <h2 class="business_text">Music & Video</h2>
                              <p class="date_text">01/03/2019</p>
                           </div>
                           <p class="ipsum_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,</p>
                           <div class="seemor_bt_1"><a href="#">See More</a></div>
                        </div>
                     </div>
                     <div class="col-lg-3 col-sm-6">
                        <div class="images_main">
                           <div class="video_box">
                              <h2 class="upcoming_text">Upcoming <br>New<br> videos</h2>
                           </div>
                           <div class="text_main">
                              <h2 class="business_text">Live Event Music</h2>
                              <p class="date_text">01/03/2019</p>
                           </div>
                           <p class="ipsum_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,</p>
                           <div class="seemor_bt_1"><a href="#">See More</a></div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="row">
                     <div class="col-lg-3 col-sm-6">
                        <div class="images_main">
                           <div class="video_box">
                              <h2 class="upcoming_text">Upcoming <br>New<br> videos</h2>
                           </div>
                           <div class="text_main">
                              <h2 class="business_text">Music</h2>
                              <p class="date_text">01/03/2019</p>
                           </div>
                           <p class="ipsum_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,</p>
                           <div class="seemor_bt_1"><a href="#">See More</a></div>
                        </div>
                     </div>
                     <div class="col-lg-3 col-sm-6">
                        <div class="images_main">
                           <div class="video_box">
                              <h2 class="upcoming_text">Upcoming <br>New<br> videos</h2>
                           </div>
                           <div class="text_main">
                              <h2 class="business_text">Music</h2>
                              <p class="date_text">01/03/2019</p>
                           </div>
                           <p class="ipsum_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,</p>
                           <div class="seemor_bt_1"><a href="#">See More</a></div>
                        </div>
                     </div>
                     <div class="col-lg-3 col-sm-6">
                        <div class="images_main">
                           <div class="video_box">
                              <h2 class="upcoming_text">Upcoming <br>New<br> videos</h2>
                           </div>
                           <div class="text_main">
                              <h2 class="business_text">Music & Video</h2>
                              <p class="date_text">01/03/2019</p>
                           </div>
                           <p class="ipsum_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,</p>
                           <div class="seemor_bt_1"><a href="#">See More</a></div>
                        </div>
                     </div>
                     <div class="col-lg-3 col-sm-6">
                        <div class="images_main">
                           <div class="video_box">
                              <h2 class="upcoming_text">Upcoming <br>New<br> videos</h2>
                           </div>
                           <div class="text_main">
                              <h2 class="business_text">Live Event Music</h2>
                              <p class="date_text">01/03/2019</p>
                           </div>
                           <p class="ipsum_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,</p>
                           <div class="seemor_bt_1"><a href="#">See More</a></div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="row">
                     <div class="col-lg-3 col-sm-6">
                        <div class="images_main">
                           <div class="video_box">
                              <h2 class="upcoming_text">Upcoming <br>New<br> videos</h2>
                           </div>
                           <div class="text_main">
                              <h2 class="business_text">Music</h2>
                              <p class="date_text">01/03/2019</p>
                           </div>
                           <p class="ipsum_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,</p>
                           <div class="seemor_bt_1"><a href="#">See More</a></div>
                        </div>
                     </div>
                     <div class="col-lg-3 col-sm-6">
                        <div class="images_main">
                           <div class="video_box">
                              <h2 class="upcoming_text">Upcoming <br>New<br> videos</h2>
                           </div>
                           <div class="text_main">
                              <h2 class="business_text">Music</h2>
                              <p class="date_text">01/03/2019</p>
                           </div>
                           <p class="ipsum_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,</p>
                           <div class="seemor_bt_1"><a href="#">See More</a></div>
                        </div>
                     </div>
                     <div class="col-lg-3 col-sm-6">
                        <div class="images_main">
                           <div class="video_box">
                              <h2 class="upcoming_text">Upcoming <br>New<br> videos</h2>
                           </div>
                           <div class="text_main">
                              <h2 class="business_text">Music & Video</h2>
                              <p class="date_text">01/03/2019</p>
                           </div>
                           <p class="ipsum_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,</p>
                           <div class="seemor_bt_1"><a href="#">See More</a></div>
                        </div>
                     </div>
                     <div class="col-lg-3 col-sm-6">
                        <div class="images_main">
                           <div class="video_box">
                              <h2 class="upcoming_text">Upcoming <br>New<br> videos</h2>
                           </div>
                           <div class="text_main">
                              <h2 class="business_text">Live Event Music</h2>
                              <p class="date_text">01/03/2019</p>
                           </div>
                           <p class="ipsum_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,</p>
                           <div class="seemor_bt_1"><a href="#">See More</a></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#costum_slider" role="button" data-slide="prev">
              <i class="fa fa-angle-left"></i>
            </a>
            <a class="carousel-control-next" href="#costum_slider" role="button" data-slide="next">
              <i class="fa fa-angle-right"></i>
            </a>
         </div>
      </div>
      </div>
      <!-- video section end -->
      <!-- newsletter section start -->
      <div class="newsletter_section layout_padding">
         <div class="container">
            <h1 class="subscribe_taital">Subscribe Newsletter</h1>
            <p class="subscribe_text">There are many variations of passages of Lorem Ipsum available, but </p>
            <div class="newsletter_box">
               <input type="text" class="email_text" placeholder="Enter Your email" name="Enter Your email">
               <div class="subscribe_bt"><a href="#">Subscribe</a></div>
            </div>
         </div>
      </div>
      <!-- newsletter section end -->
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
      <!-- review section end -->
     
@endsection
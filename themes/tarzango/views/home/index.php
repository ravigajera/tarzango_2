<style type="text/css">
::-webkit-input-placeholder { /* Chrome/Opera/Safari */
 font-family: 'Apercu-Regular';
 color: #373b71;
}
::-moz-placeholder { /* Firefox 19+ */
 font-family: 'Apercu-Regular';
 color: #373b71;
}
:-ms-input-placeholder { /* IE 10+ */
 font-family: 'Apercu-Regular';
 color: #373b71;
}
:-moz-placeholder { /* Firefox 18- */
 font-family: 'Apercu-Regular';
 color: #373b71;
}
</style>
<?php require $themeurl.'views/home/slider.php';?>
</div>
<!--<div class="container-fluid planning">-->
<div class="planning">
  <div class="container ">
    <div class="row">
      <div class="book-detail">
        <h2>Planning a Event and need to accommodate your group with a hotel?</h2>
        <h4>No worries, we can do 3 things well. </h4>
        <div class="col-sm-4">
          <figure> <img src="<?php echo $theme_url; ?>img/icon-hotel.png" alt="Hotel"> </figure>
          <h5>
            <div style="text-align:center;"> <span style="position: absolute;vertical-align: middle;margin-left: 52px;margin-top:-10px; width: 70px;height: 2px;background: #ffc3df;"></span> Hotel Negotiator </div>
          </h5>
          <P style="padding-left: 10px; padding-right: 20px;">Handle all of the negotiations with the hotels 
            that are within walking distance to your event. 
            And get a lot perks added with our relationships. </P>
        </div>
        <div class="col-sm-4">
          <figure> <img src="<?php echo $theme_url; ?>img/icon-team.png" alt="Hotel"> </figure>
          <h5>
            <div style="text-align:center;"> <span style="position: absolute;vertical-align: middle;margin-left: 50px;margin-top:-10px; width: 70px;height: 2px;background: #ffc3df;"></span> Concierge Team </div>
          </h5>
          <P>Dedicated support. A real life team 
            to greet your guest on arrival. Airport 
            transfer & easy hotel check ins.  </P>
        </div>
        <div class="col-sm-4">
          <figure> <img src="<?php echo $theme_url; ?>img/icon-label.png" alt="Hotel"> </figure>
          <h5>
            <div style="text-align:center;"> <span style="position: absolute;vertical-align: middle;margin-left: 28px;margin-top:-10px; width: 70px;height: 2px;background: #ffc3df;"></span> White Label </div>
          </h5>
          <P>Provide you with a unique site that 
            matches your brand for your guest to 
            visit to make their reservations. </P>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
  <div class="hotel-btn-space"> <a href="<?php echo base_url().'groupbooking'; ?>" title="Let’s get Started" class="pink-btn">Let’s get Started</a></div>
</div>
<div class="container-fluid how-section vip-membership">
  <div class="container">
    <div class="col-md-7 ptop70">
      <h4 class="description" style="text-align:left;font-size:30px;padding-bottom: 0px;">Become a V.I.P member Now and receive additional</h4>
      </br>
      <h4 style="text-align:left;font-size:30px;margin-top:-10px;font-family: 'Apercu-Bold';">10% off plus some AWESOME perks...</h4>
      <a href="<?php echo base_url().'membership';?>" style="float:left" title="group booking" class="pink-btn">membership</a> </div>
    <div class="col-sm-5"> <img style="margin-top: 0px" src="images/membership-door.png"> </div>
  </div>
</div>
<div class=" home_page">
  <div class="section3">
    <div class="container">
      <div class="row">
        <div>
          <h2>Hotels Just Booked</h2>
          <?php 
            $img_ary_repla = array('bigger/','demo.');
            for ($r_b=0; $r_b < 3 ; $r_b++) {  
              if($recent_book[$r_b]->book_response){
                $total = $recent_book[$r_b]->book_roomtotal;
                $url = $recent_book[$r_b]->slug;
                $book_location = $recent_book[$r_b]->book_location;
              }else{
                for ($l_ex=0; $l_ex < count($recent_book_l) ; $l_ex++) { 
                  if($recent_book_l[$l_ex]->id == $recent_book[$r_b]->itemid){
                    $total = $recent_book_l[$l_ex]->book_roomtotal;
                    $url = $recent_book_l[$l_ex]->slug;
                    $book_location = $recent_book_l[$l_ex]->book_location;
                  }
                }
              }
              ?>
          <div class="col-sm-4">
            <div class="box first booked-bg<?php echo $r_b; ?>" style="background-image:url('<?php echo str_replace($img_ary_repla, "",  $recent_book[$r_b]->thumbnail); ?>')">
              <div class="stars"> <?php echo $recent_book[$r_b]->stars; ?> </div>
              <div class="texts">
                <h1><?php echo $recent_book[$r_b]->title; ?></h1>
                <!-- <h2><?php echo $book_location; ?></h2> --> 
              </div>
              <h3>$ <?php echo $total; ?><span> /night</span></h3>
              <a href="<?php echo $url; ?>"><img class="arrow" src="<?php echo $theme_url; ?>img/home_arrow.png"></a> </div>
            <!--<p>30 minutes ago</p>-->
            <p></p>
          </div>
          <?php }
            ?>
            
            <div class="clearfix"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="section4 home-top0">
    <div class="container">
      <div class="row">
        <div class="fav-block">
          <h3 class="titelh3">Explore your favorite Cities</h3>
          <div class="clearfix"></div>
          <?php if(count($dest) > 3){ 
              for ($d_i=0; $d_i < 3 ; $d_i++) { 
                
              ?>
          <div class="col-sm-4  fav-block "> <img style="width:100%;" class="img-responsive" src="<?php echo base_url().'uploads/images/dest_img/thumb_img/'.$dest[$d_i]->thumb_img; ?>">
            <h2><?php echo $dest[$d_i]->name; ?></h2>
            <a href="<?php echo base_url().'attraction/city/'.$dest[$d_i]->top_destinations_id; ?>" ><img class="arrow" src="images/arrow_img.png"></a> </div>
          <?php } } ?>
          
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="trust-us" style="">
    <div class="container">
      <div class="row">
        <div>
          <h2>They Trust Us</h2>
          <p>For once, it’s completely okay to follow the crowd - especially when that crowd is made up of over 10,000 different companies,<br>
            switching from “OTA” to Tarzango for their business bookings. All the cool kids are doing it, so why not you?</p>
          <div class="company-logo1" style="">
            <div class="col-sm-3 col-xs-6"> <div class="text-center"><img class="img-responsive01" src="<?php echo $theme_url; ?>img/company-logo-1.png"></div> </div>
            <div class="col-sm-3 col-xs-6"> <div class="text-center"><img class="img-responsive01" src="<?php echo $theme_url; ?>img/company-logo-2.png"> </div></div>
            <div class="col-sm-3 col-xs-6"> <div class="text-center"><img class="img-responsive01" src="<?php echo $theme_url; ?>img/company-logo-3.png"> </div></div>
            <div class="col-sm-3 col-xs-6"> <div class="text-center"><img class="img-responsive01" src="<?php echo $theme_url; ?>img/company-logo-4.png"> </div></div>
            <div class="clearfix"></div>
          </div>
          
          <div class="company-logo2">
            <div class="col-sm-3 col-xs-6"> <div class="text-center"><img class="img-responsive01" src="<?php echo $theme_url; ?>img/company-logo-5.png"> </div></div>
            <div class="col-sm-3 col-xs-6"> <div class="text-center"><img class="img-responsive01" src="<?php echo $theme_url; ?>img/company-logo-6.png"> </div></div>
            <div class="col-sm-3 col-xs-6"> <div class="text-center"><img class="img-responsive01" src="<?php echo $theme_url; ?>img/company-logo-7.png"> </div></div>
            <div class="col-sm-3 col-xs-6"> <div class="text-center"><img class="img-responsive01" src="<?php echo $theme_url; ?>img/company-logo-8.png"> </div></div>
            <div class="clearfix"></div>
          </div>
          <div class="clearfix"></div>
          <p style="margin-bottom: 40px">And many more..</p>
        </div>
      </div>
    </div>
  </div>
  <!--  <div class="section5" style="">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h2>Follow Us</h2>
            <p>Find out what's hot and new, and get discounts for being a loyal Tarzango Customer.</p>
            <div class="follow_us">
               <a href="#">FIND YOUR HOTEL</a>
            </div>
          </div>
        </div>
      </div>
      </div> -->
  <div class="container-fluid newsletter">
    <div class="container">
      <h2>Sign Up for our Newsletter </h2>
      <form>
        <ul>
          <div style="font-family: 'ProximaNovaA-Light'; font-size: 18px; color: #fff;" class="subscriberesponse"></div>
          <li>
            <?php  if(!empty($customerloggedin)){ 
          ?>
            <input class="form-control fccustom2 sub_email" type="email" id="exampleInputEmail1" value="<?php echo $profile->accounts_email ?>" placeholder="Email">
            <?php }else{ ?>
            <input class="form-control fccustom2 sub_email" type="email" id="exampleInputEmail1" placeholder="Email">
            <?php } ?>
          </li>
          <li>
            <input type="submit" class="btn btn-default btncustom sub_newsletter" value="subscribe">
          </li>
        </ul>
      </form>
      <P>Don't worry, we won't spam you</P>
    </div>
  </div>
  <div class="section7">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text">
          <h2>Get the App</h2>
          <h2>Coming soon on iOS and Desktop</h2>
        </div>
        <div class="col-sm-1"> </div>
        <div class="col-sm-10">
          <div class="col-sm-3">
            <hr class="line">
            <h6>Book Your Hotel</h6>
            <p>Lorem ipsum consectetur ultrices ac facilisis est neque fames, eget vel libero egestas viverra lacinia facilisis.</p>
          </div>
          <div class="col-sm-6"> </div>
          <div class="col-sm-3">
            <hr class="line">
            <h6>Book Your Flight</h6>
            <p>Lorem ipsum consectetur ultrices ac facilisis est neque fames, eget vel libero egestas viverra lacinia facilisis.</p>
          </div>
        </div>
        <div class="col-sm-1"> </div>
        <div class="col-sm-12 get-app">
          <div class="col-sm-3">
            <hr class="line">
            <h6>plan an Event</h6>
            <p>Lorem ipsum consectetur ultrices ac facilisis est neque fames, eget vel libero egestas viverra lacinia facilisis.</p>
          </div>
          <div class="col-sm-6"> </div>
          <div class="col-sm-3">
            <hr class="line">
            <h6>Plan Your Entire Trip</h6>
            <p>Lorem ipsum consectetur ultrices ac facilisis est neque fames, eget vel libero egestas viverra lacinia facilisis.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- <div class="container-fluid app-store">
  <div class="container">
    <h2>Get the App</h2>
    <h3>Coming soon on iOS and Desktop</h3>
    <div class="row app-service">
      <div class="col-sm-4 col-lg-4">
        <div class="col-lg-offset-4 app-box" style="width:250px">
          <h3>Book Your Hotel</h3>
          <p>Lorem ipsum consectetur ultrices ac facilisis est neque fames, eget vel libero egestas viverra lacinia facilisis.</p>
        </div>
        <div class="col-lg-offset-2 app-box" style="width:250px">
          <h3>Plan an Event</h3>
          <p>Lorem ipsum consectetur ultrices ac facilisis est neque fames, eget vel libero egestas viverra lacinia facilisis.</p>
        </div>
      </div>
      <div class="col-sm-4 col-lg-4 text-center">
        <figure> <img src="<?php echo $theme_url; ?>img/phone.png" alt="" style="max-width:100%" title=""/> </figure>
      </div>
      <div class="col-sm-4 col-lg-4">
        <div class="app-box" style="width:250px">
          <h3>Book Your flight</h3>
          <p>Lorem ipsum consectetur ultrices ac facilisis est neque fames, eget vel libero egestas viverra lacinia facilisis.</p>
        </div>
        <div class="col-lg-offset-4 app-box" style="width:200px">
          <h3>Plan Your Entire Trip</h3>
          <p>We’ll guide you through you hotel and air flight options for a better travel experience.</p>
        </div>
      </div>
    </div>
  </div>
</div> -->
  <div class="container-fulid helpyou" >
    <div class="container">
      <h2>Going somewhere? Need a Hotel, let us help you!</h2>
      <a class="pink-btn" title="tarzango" href="#">tarzango</a> </div>
  </div>
</div>
</div>
<div class="container-fluid" style="display:none;">
  <div class="container">
    <div class="row">
      <div class="row slider-room">
        <h2>Top Hotels maybe you will like</h2>
        <h4>Discover Your Dream Trip with Tarzango</h4>
        <div class="col-md-3"> 
          <!-- Controls --> 
          <!--<div class="controls pull-right hidden-xs">
                    <a class="left fa fa-chevron-left btn btn-primary" href="#carousel-example-generic"
                        data-slide="prev"></a><a class="right fa fa-chevron-right btn btn-primary" href="#carousel-example-generic"
                            data-slide="next"></a>--> 
        </div>
      </div>
    </div>
    <div id="owl-demo" class="owl-carousel" > 
      <!-- Wrapper for slides -->
      <?php foreach($featuredHotels as $item){ ?>
      <a href="<?php echo $item->slug ?>">
      <div class="item active">
        <div class="col-item">
          <div class="photo"> <img src="<?php echo $item->thumbnail;?>" class="img-responsive" alt="<?php echo character_limiter($item->title,35); ?>" /> </div>
          <div class="info">
            <div class="row">
              <div class="price col-xs-12">
                <h5> <?php echo character_limiter($item->title,15);?></h5>
                <h6><?php echo character_limiter($item->location,20);?></h6>
                <div class="price-text-color"> <?php echo $item->currSymbol; ?><?php echo $item->price;?>&nbsp;</div>
              </div>
              <div class="rating hidden-sm col-xs-12"><?php echo $item->stars;?> </div>
            </div>
            <div class="clearfix"> </div>
          </div>
        </div>
      </div>
      </a>
      <?php } ?>
    </div>
  </div>
  <!-- <div class="hotel-btn-space"> <a href="#" title="View all hotel" class="btn-hotel">view all hotel</a></div> --> 
</div>
<div class="container-fluid feature" style="display:none;">
  <div class="container">
    <div class="tab-pane ">
      <h2>App Features</h2>
      <div class="r1 row"> 
        <!-- Block 1 -->
        <div class="c1 col-sm-4 col-md-4 col-sm-push-4">
          <div class="img-wireframe"> <img class="img-responsive center-block" src="img/phone1.png" alt="Image"></div>
        </div>
        <!-- End Block 1 --> 
        <!-- Block 2 -->
        
        <div class="c2 col-sm-4 col-md-4 col-sm-pull-4">
          <div class="overview-wrapper row img_check" data-img_url="<?php echo $theme_url; ?>img/phone.png">
            <div class="hidden-sm hidden-xs hidden-xs col-sm-3 pull-right ico text-center"><i class="fa fa-map-o"  ></i></div>
            <div class="overview-content col-md-9 text-right">
              <h3 class="title chceck_lk" >Plan Your Entire Trip</h3>
              <p class="description" >We’ll guide you through you hotel and air flight options for a better travel experience.</p>
            </div>
            <div class="clearfix"></div>
          </div>
          <div class="overview-wrapper img_check" data-img_url="<?php echo $theme_url; ?>img/phone1.png">
            <div class="hidden-sm hidden-xs col-sm-3 pull-right ico text-center"><i class="fa fa-plane" style="background-color:#0781ce;color:#FFF;"></i></div>
            <div class="overview-content col-md-9 text-right">
              <h3 class="title" style="color:#0781ce;">Book Your Flight</h3>
              <p class="description">Lorem ipsum consectetur ultrices ac facilisis est neque fames, eget vel libero egestas viverra lacinia facilisis.</p>
            </div>
            <div class="clearfix"></div>
          </div>
          <div class="overview-wrapper img_check" data-img_url="<?php echo $theme_url; ?>img/phone2.png">
            <div class="hidden-sm hidden-xs col-sm-3 pull-right ico text-center"><i class="fa fa-hotel"></i></div>
            <div class="overview-content col-md-9 text-right">
              <h3 class="title">Book Your Hotel</h3>
              <p class="description">Lorem ipsum consectetur ultrices ac facilisis est neque fames, eget vel libero egestas viverra lacinia facilisis.</p>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
        <div class="c3 col-sm-4 col-md-4">
          <div class="overview-wrapper img_check" data-img_url="<?php echo $theme_url; ?>img/phone3.png">
            <div class="hidden-sm hidden-xs hidden-xs col-sm-3 ico text-center"><i class="fa fa-cab"></i></div>
            <div class="overview-content col-md-9 text-left">
              <h3 class="title">Request a Ride</h3>
              <p class="description">Nunc varius ut dolor ut lobortis. Ut nec augue bibendum, sodales nisl a, dignissim arcu.</p>
            </div>
            <div class="clearfix"></div>
          </div>
          <div class="overview-wrapper img_check" data-img_url="<?php echo $theme_url; ?>img/phone4.png">
            <div class="hidden-sm hidden-xs col-sm-3 ico text-center"><i class="fa fa-users"></i></div>
            <div class="overview-content col-md-9 text-left">
              <h3 class="title">Plan an Event</h3>
              <p class="description">Lorem ipsum consectetur ultrices ac facilisis est neque fames, eget vel libero egestas viverra lacinia facilisis.</p>
            </div>
            <div class="clearfix"></div>
          </div>
          <div class="overview-wrapper img_check" data-img_url="<?php echo $theme_url; ?>img/phone5.png">
            <div class="hidden-sm hidden-xs col-sm-3 ico text-center"><i class="fa fa-binoculars"></i></div>
            <div class="overview-content col-md-9 text-left">
              <h3 class="title">Explore The City</h3>
              <p class="description">Lorem ipsum consectetur ultrices ac facilisis est neque fames, eget vel libero egestas viverra lacinia facilisis.</p>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
$(".img_check").click(function(e) { 
  var image_url = $(this).data('img_url');
  $(".ico").children("i").css("color","#585b60");
  $(".ico").children("i").css("background-color","#FFF");
  $(".title").css("color","#000");
  $(this).children(".text-center").children("i").css("background-color","#0781ce");
  $(this).children(".text-center").children("i").css("color","#FFF");
  $(this).children(".overview-content").children("h3").css("color","#0781ce");
  $(".img-wireframe").children("img").attr("src",image_url);
});
/*$(".img_check_2").click(function(e) { 
alert(); 
});*/
</script>
<div class="container-fluid coming-soon text-center" style="display:none;">
  <div class="container">
    <div class="col-md-12">
      <h2>Coming soon on iOS and Desktop </h2>
      <p>TARZANGO fights the Booking nightmares away
        and delivers you to safety with the right way to travel.</p>
      <div class="apple-btn"><a href="#" title=""><img src="img/app-coming-soon.png" alt="" title=""></a></div>
    </div>
    <div class="coming-soon-img"> <img src="img/coming-soon.png" alt="" title=""> </div>
  </div>
</div>
<div class="container"> </div>
<div class="clearfix" style="margin-bottom:0px;"></div>
<div class="container" style="display:none;"> 
  <!-- <br><br> -->
  <div class="row" > 
    <!-- Hotel -->
    <?php if(pt_main_module_available('hotels') && 1 == 2){ ?>
    <div class="form-group">
      <h2 class="main-title go-right"><?php echo trans('056');?></h2>
      <div class="clearfix"></div>
      <i class="tiltle-line go-right"></i> </div>
    <?php //$f_h= 0; 
  //echo json_encode($featuredHotels);
  for ($f_h=0; $f_h < 3 ; $f_h++) { 
    
    $item = $featuredHotels[$f_h];
  //foreach($featuredHotels as $item){ 
    ?>
    <div class="col-md-4 col-sm-6 col-xs-12 ">
      <div class="row">
        <div class="img_list"> <a href="<?php echo $item->slug;?>"> <img class="dealthumb go-right" src="<?php echo $item->thumbnail;?>" alt="<?php echo character_limiter($item->title,35);?>">
          <div class="short_info"></div>
          </a> </div>
        <div class="custom">
          <div class="dealtitle go-right">
            <p><a href="<?php echo $item->slug;?>" class="dark go-text-right go-right rtl_title_home shadow"><?php echo character_limiter($item->title,20);?></a></p>
            <span class="size13 white mt-9 go-right"><?php echo $item->stars;?> <br>
            <span class="go-right"><?php echo character_limiter($item->location,20);?>&nbsp;</span></span> </div>
          <div class="dealprice go-left mt0">
            <?php if($item->price > 0){ ?>
            <p class="size12 white lh2"><?php echo $item->currCode;?> <span class="white shadow rate"> <?php echo $item->currSymbol; ?><?php echo $item->price;?>
              <?php } ?>
              </span> </p>
          </div>
        </div>
      </div>
    </div>
    <?php  } ?>
    <div class="clearfix"></div>
    <br>
    <br>
    <?php } ?>
    
    <!-- Hotel --> 
    
    <!-- Expedia Hotels -->
    <?php if(pt_main_module_available('ean') && 1==2 ){ ?>
    <div class="form-group" style="display:none;" >
      <h2 class="main-title go-right"><?php echo trans('056');?></h2>
      <div class="clearfix"></div>
      <i class="tiltle-line go-right"></i> </div>
    <?php foreach($featuredHotelsEan->hotels as $item){ ?>
    <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp animated">
      <div class="row">
        <div class="img_list"> <a href="<?php echo $item->slug;?>"> <img class="dealthumb go-right" src="<?php echo $item->thumbnail;?>" alt="<?php echo character_limiter($item->title,35);?>"> <img class="overlay" src="<?php echo $theme_url; ?>assets/img/overlay.png" style="z-index: " alt="overlay">
          <div class="short_info"></div>
          </a> </div>
        <div class="custom">
          <div class="dealtitle go-right">
            <p><a href="<?php echo $item->slug;?>" class="dark go-text-right go-right rtl_title_home shadow"><?php echo character_limiter($item->title,20);?></a></p>
            <span class="size13 white mt-9 go-right"><?php echo $item->stars;?> <br>
            <span class="go-right"><?php echo character_limiter($item->location,20);?>&nbsp;</span></span> </div>
          <div class="dealprice go-left mt0">
            <?php if($item->price > 0){ ?>
            <p class="size12 white lh2"><?php echo $item->currCode;?> <span class="white shadow rate"> <?php echo $item->currSymbol; ?><?php echo $item->price;?>
              <?php } ?>
              </span> </p>
          </div>
        </div>
      </div>
    </div>
    <?php } ?>
    <div class="clearfix"></div>
    <br>
    <br>
    <?php } ?>
    <!-- Expedia Hotels --> 
    
    <!-- Tours -->
    <?php if(pt_main_module_available('tours')){ ?>
    <div class="form-group" style="display:none;">
      <h2 class="main-title go-right"><?php echo trans('0451');?></h2>
      <div class="clearfix"></div>
      <i class="tiltle-line go-right"></i> </div>
    <div class="row" ng-controller="appCtrl as ctrl" layout="column" ng-cloak="" ng-app="phptravelsApp">
      <div id="accordion">
        <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInLeft animated">
          <div class="list-group"> <a href="javascript:void(0)" class="list-group-item active"><i class="icon_set_1_icon-61"></i> <?php echo trans('032');?></a>
            <?php $toursLocation = toursWithLocations(); foreach($toursLocation->locations as $loc){ ?>
            <a href="" class="list-group-item" ng-click="getData(<?php echo $loc->id;?>)"><i class="icon_set_1_icon-41"></i> <?php echo $loc->name; ?> <span class="btn btn-default btn-xs pull-right"><?php echo $loc->count; ?></span></a>
            <?php } ?>
          </div>
        </div>
        <div class="panel">
          <div id="collapse1" class="panel-collapse collapse in">
            <div class="col-md-9 col-sm-6 col-xs-12">
              <div class="col-lg-{{lg}} col-md-{{md}} col-sm-12 col-xs-12 wow fadeIn animated" ng-repeat="item in items">
                <div class="row">
                  <div class="img_list"> <a href="{{item.slug}}"> <img class="dealthumb go-right" ng-src="{{item.thumbnail}}" alt="{{item.title}}">
                    <div class="short_info"></div>
                    </a> </div>
                  <div class="custom">
                    <div class="dealtitle go-right">
                      <p><a href="<?php echo $item->slug;?>" class="dark go-text-right go-right rtl_title_home shadow"> {{item.title | strLimit: 20}} </a></p>
                      <span class="size13 white mt-9 go-right"><span ng-bind-html="item.stars"></span> <br>
                      <span class="go-right"> {{item.location | strLimit: 20}}</span></span> </div>
                    <div class="dealprice go-left mt0">
                      <p class="size12 white lh2">{{item.currCode}} <span class="white shadow rate"> {{item.currSymbol}}{{item.price}} </span> </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>
    <br>
    <br>
    <style> 
.panel { margin-bottom: 0px; background-color: transparent; border: 1px solid transparent; border-radius: 0px; -webkit-box-shadow: 0 0px 0px rgba(0, 0, 0, .05); box-shadow: 0 0px 0px rgba(0, 0, 0, .05); } 
</style>
    <?php } ?>
    <script src='<?php echo base_url(); ?>assets/js/angular.js'></script> <script src="<?php echo base_url(); ?>assets/js/angular-sanitize.js"></script> <script type="text/javascript"> (function () { 'use strict'; angular .module('phptravelsApp',['ngSanitize']) .controller('appCtrl', appCtrl); function appCtrl ($scope, $http) { var self = this; var url = "<?php echo base_url();?>tours/featuredTours/"; $scope.lg = "6"; $scope.md = "6"; $scope.items = []; $http.get(url).success(function(data) { $scope.items = data; $scope.setClasses($scope.items); }); $scope.getData = function(loc){ $http.get(url+loc).success(function(data) { $scope.items = data; $scope.setClasses($scope.items); }); }; $scope.setClasses = function(data){ var totalItems = data.length; if(totalItems == 1){ $scope.lg = "6 tours12"; $scope.md = "6 tours12"; }else if(totalItems == 2){ $scope.lg = "6"; $scope.md = "6"; }else if(totalItems > 2){ $scope.lg = "6"; $scope.md = "6"; } }; } angular.module('phptravelsApp').filter('strLimit', function() { 'use strict'; return function(input, limit) { if (input) { if (limit > input.length) { return input.slice(0, limit); } else { return input.slice(0, limit) + '...'; } } }; }); })(); </script> 
    <!-- Tours --> 
    
    <!-- Cars -->
    <?php if(pt_main_module_available('cars')){ ?>
    <div class="form-group" style="display:none;">
      <h2 class="main-title go-right"><?php echo trans('0490');?></h2>
      <div class="clearfix"></div>
      <i class="tiltle-line go-right"></i> </div>
    <?php foreach($featuredCars as $item){ ?>
    <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp animated">
      <div class="row">
        <div class="img_list"> <a href="<?php echo $item->slug;?>"> <img class="dealthumb go-right" src="<?php echo $item->thumbnail;?>" alt="<?php echo character_limiter($item->title,35);?>">
          <div class="short_info"></div>
          </a> </div>
        <div class="custom">
          <div class="dealtitle go-right">
            <p><a href="<?php echo $item->slug;?>" class="dark go-text-right go-right rtl_title_home shadow"><?php echo character_limiter($item->title,20);?></a></p>
            <span class="size13 white mt-9 go-right"><?php echo $item->stars;?> <br>
            <span class="go-right"><?php echo character_limiter($item->location,20);?>&nbsp;</span></span> </div>
          <div class="dealprice go-left mt0">
            <?php if($item->price > 0){ ?>
            <p class="size12 white lh2"><?php echo $item->currCode;?> <span class="white shadow rate"> <?php echo $item->currSymbol; ?><?php echo $item->price;?>
              <?php } ?>
              </span> </p>
          </div>
        </div>
      </div>
    </div>
    <?php } ?>
    <div class="clearfix"></div>
    <br>
    <br>
    <?php } ?>
    <!-- Cars --> 
  </div>
</div>

<!-- offers -->
<?php if($offersCount > 500){ ?>
<div class="lastminute4" style="display:none;">
  <div class="container" >
    <div class="form-group">
      <h2 class="main-title"><?php echo trans('0341');?> <?php echo trans('Offers');?></h2>
      <div class="clearfix"></div>
      <i class="tiltle-line"></i> </div>
    <div class="row"> <!-- Carousel -->
      <div class="wrapper">
        <div class="list_carousel wow fadeInUp">
          <ul id="foo2">
            <?php foreach($specialoffers as $offer){ ?>
            <li> <a href="<?php echo $offer->slug;?>"><img class="offers-hover img-responsive" src="<?php echo $offer->thumbnail;?>" alt="<?php echo character_limiter($offer->title,15);?>"/></a>
              <div class="m1">
                <h6 class="lh1 dark go-right"><b> <?php echo character_limiter($offer->title,35);?> &nbsp;&nbsp;</b></h6>
                <h6 class="lh1 green go-right"> <!--<?php echo character_limiter($offer->desc,120);?>-->
                  <?php if($offer->price > 0){ ?>
                  <?php echo $offer->currCode;?> <b><?php echo $offer->currSymbol; ?><?php echo $offer->price;?></b>
                  <?php } ?>
                  &nbsp;&nbsp; </h6>
              </div>
            </li>
            <?php } ?>
          </ul>
          <div class="clearfix"></div>
          <a id="prev_btn2" class="prev offers" href="#"><img src="<?php echo $theme_url; ?>images/spacer.png" alt=""/></a> <a id="next_btn2" class="next offers" href="#"><img src="<?php echo $theme_url; ?>images/spacer.png" alt=""/></a> </div>
      </div>
    </div>
  </div>
</div>
<?php } ?>
<!-- offers -->

<?php
$CI = &get_instance(); 
$is_gb_done = $CI->session->userdata('is_gb_done');

if($is_gb_done == 'true'){
  $CI->session->set_userdata('is_gb_done','false');
?>
<script>
$(document).ready(function(){
  $('#myModal').modal('show');
  $('#myModal').addClass('in');
  $('#myModal').show();
});
</script>
<div class="modal fade thank-you " id="myModal" role="dialog" >
  <div class="modal-dialog"> 
    
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <div class="col-sm-12">
          <div class="col-sm-6 left_section">
            <h1>Thank You,</h1>
            <p>Your request has been assigned to a negotiator!</p>
            <p class="last">We'll get back to you within the next 48 hours</p>
          </div>
          <div class="col-sm-6 right_section">
            <div class="col-sm-12 inner_logo"> <a href=""><img class="img-responsive" src="images/logo.png"></a> </div>
            <h3>Become a Member</h3>
            <h4>We provide a modern way for Group Travelers to book large room blocks.</h4>
            <a class="get-button" href="<?php echo base_url().'membership' ?>">GET STARTED</a> </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php } ?>

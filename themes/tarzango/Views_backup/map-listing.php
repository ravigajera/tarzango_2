</div>
</div>
<script src="<?php echo $theme_url; ?>plugins/lazy/jquery.unveil.js"></script>
<script>
    $(function() {
        $("img").unveil(300);
    });
    </script>
<style type="text/css">
  footer{
    float: left;
    width: 100%;
  }
  .fa-star {
      font-size: 16px !important;
      padding-right: 7px;
  }
	#top .slider {
		min-height: 130px;
	}
	#top .slider .cover {
		min-height: 130px;
	}
	.fa-star {
		font-size: 23px;
	}
	.bg_list_image {
		background-repeat: no-repeat;
		background-size: cover;
		width: 100%;
	}
	/*.offset-1{
		background-color:rgba(54,8,54,0.4785714285714286) !important
	  }*/
	.white_font {
		color: white;
	}
	.header-right {
		display: none;
	}
	.listing-search {
	 background: url(<?php echo $theme_url;
	?>img/header-bg.png) no-repeat;
		background-size: 100%;
		padding-bottom: 20px;
	}
	.form-group input {
		color: #FFF;
		background-color: transparent;
		border: none;
		box-shadow: none;
		transition: none;
		border-radius: 0px;
		border-bottom: 1px solid rgba(255,255,225,0.8);
	}
	.form-group select {
		border: solid 2px #555187;
		border-radius: 3px;
		color: #555187;
		font-family: 'Apercu-Regular';
		font-size: 15px;
		/*text-transform: uppercase;*/
		letter-spacing: 1px;
		text-align: center;
		padding: 10px 29px;
		height: auto;
		width: inherit;
		background: TRANSPARENT;
		box-shadow: none !important;
     text-align-last:center;
	}
	.form-group label {
		color: rgba(255,255,255,0.5);
		font-family: 'Roboto', sans-serif;
		font-weight: 300;
		font-size: 17px;
	}
	.form-group button[type="submit"] {
    color: #000;
    font-size: 17px;
    text-transform: capitalize;
    padding: 18px;
    display: inline-block;
    background: #ffc100;
    font-weight: 500;
    border-radius: 5px;
    /*
    margin: 10px 0 0 0;
    */
    -webkit-border-radius: 5px;
    text-decoration: none;
    transition: all 0.3s ease;
    -webkit-transition: all 0.3s ease;
    border: 0;
  }
	.refine {
		padding: 0px;
	}
	.starRating:not(old) {
		display : inline-block;
		width : 9.5em;
		height : 1.6em;
		overflow : hidden;
		vertical-align : bottom;
	}
	.rating {
		width: 100%;
		margin-bottom: 15px;
		color: rgba(255,255,255,0.5);
	}
	.starRating:not(old) > input {
		margin-right : -100%;
		opacity : 0;
	}
	.starRating:not(old) > label {
		display : block;
		float : right;
		position : relative;
		background : url('<?php echo $theme_url ?>images/star-off.png');
		background-size : contain;
	}
	.starRating:not(old) > label:before {
		content : '';
		display : block;
		width : 1.5em;
		height : 1.5em;
		background : url('<?php echo $theme_url ?>images/star-on.png');
		background-size : contain;
		opacity : 0;
		transition : opacity 0.2s linear;
	}
	.starRating:not(old) > label:hover:before, .starRating:not(old) > label:hover ~ label:before, .starRating:not(:hover) > :checked ~ label:before {
		opacity : 1;
	}

   .map-view {
    border:0px !important;
  }
  .map-view .form-group:active { 
    background-color: yellow;
}

  header.header-section .sorting .col-sm-1.view-option a img 
  {
    margin:0px !important;
  }


      .header-navigation-section .menu img {
      float: right;
      margin-top: 27px;
      cursor: pointer;
  }
  .header-navigation-section .menu p.close-button {
      display: none;
      background-color: #fff;
      padding: 20px 7px;
      line-height: 0px;
      font-size: 50px;
      color: #a0e5fd;
      font-family: proximanova_light;
      border-radius: 100%;
      position: absolute;
      top: -54px !important;
      right: 0px;
      cursor: pointer;
  }
  .open{
    margin-top: -44px !important;
      margin-left: 60px !important;
  }
  .menu-dropdown {
      position: absolute;
      display: none;
      background-image: url(../images/menu-bg.png);
      background-repeat: no-repeat;
      background-size: 100% 100%;
      padding: 60px;
      width: 340px;
      height: auto;
      right: 25px !important;
      top: 15px !important;
      z-index: 1111;
  }
  @media(min-width: 375px){
    .menu-dropdown{
      top: 100px ;
    }
    .header-navigation-section .menu p.close-button{
      top: -30px ;
    }
  }
  @media(min-width: 425px){
    .menu-dropdown{
      top: 80px ;
    }
    .header-navigation-section .menu p.close-button{
      top: -27px ;
    }
  }
  @media(min-width: 768px){
    .menu-dropdown{
      top: 50px ;
    }
  }
  @media (min-width: 1200px)
  {
      .form-control
    {
      width:100% !important;
    }
    .first_container
    {
      width:1210px !important;
    }
  }
</style>

<header class="header-section">
  <div class="container-main">
    <div class="container first_container" style="z-index: 1 ;width:100%">
      <div class="row">
        <div class="col-sm-12">
          <div class="col-sm-11 logo" style="top:-15px">
            <a href="<?php echo base_url(); ?>"><img class="" src="images/logo2.png"></a>
            <p>Tarzango - Know where you want to go. We'll do the rest.</p>
          </div>
           <?php include 'menu_header.php';?>
        </div>
      </div>
      <div class="row fields">
        <div class="col-sm-12">
          <form  class="container form_header_one" action="<?php echo $baseUrl;?>search" method="GET" role="search">
            <div class="col-sm-3">
              <div class="form-group">
                <input id="HotelsPlacesEan" name="city"  type="text" class="form-control RTL search-location" placeholder="<?php echo trans('026');?>" value="<?php if(!empty($_GET['city'])){ echo $_GET['city']; }else{ echo $selectedCity; } ?>" required >
              </div>
            </div>
            <div class="col-sm-2">
              <div class="form-group">
                <input type="text" placeholder=" <?php echo trans('07');?>" name="checkIn" class="dpean1 form-control" value="<?php echo $checkin; ?>" required >
              </div>
            </div>
            <div class="col-sm-2">
              <div class="form-group">
                 <input type="text" class="form-control dpean2" placeholder=" <?php echo trans('09');?>" name="checkOut" value="<?php echo $checkout; ?>" required >
              </div>
            </div>
            <div class="col-sm-1">
              <div class="form-group">
                <select class="form-control" name="room" id="room" style="padding:10px 5px;border-radius: 3px; border: 0px;">
            <option value="">Room</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
          </select>
              </div>
            </div>
            <div class="col-sm-1">
              <div class="form-group">

            <select  class="form-control" style="border-radius: 3px; border: 0px; " 
            placeholder=" Adults<?php //echo trans('011');?> " name="child" id="child">
              <option value="">Children</option>
                <?php for($j = 1; $j <= 3; $j++ ){ ?>
                <option value="<?php echo $j; ?>" <?php if($j == $child){ echo "selected"; } ?> > <?php echo $j; ?> </option>
                <?php } ?>
            </select>
              </div>
            </div>
            <div class="col-sm-1">
              <div class="form-group">
                <select class="RTL form-control" style="border-radius: 3px; border: 0px;" placeholder=" <?php echo trans('');?> "  name="adults" id="guest">
                 <option value="">Adults</option>
            <?php for($i = 1; $i <= 9; $i++){ if(empty($adults)){ $adults = 2; } ?>
            <option value="<?php echo $i; ?>" <?php if($i == $adults){ echo ""; } ?> ><?php echo $i; ?></option>
            <?php } ?>
          </select>
              </div>
            </div>
            <div class="col-sm-2">
              <div class="form-group submit-button">
                 <button type="submit" class="btn-action btn btn-sm btn-block update_btn" style=""><!--<i class="icon_set_1_icon-78"></i>--> UPDATE</button>
              </div>
            </div>
          </form>
          <input type="hidden" name="childages" id="childages" value="">
      <input type="hidden" name="search" value="search" >
      <input type="hidden" id="lat" name="lat" value="<?php echo $lat; ?>">
      <input type="hidden" id="long" name="long" value="<?php echo $long; ?>">
        </div>
      </div>
      <div class="row sorting">
        <div class="col-sm-12">
          <form class="" id="sorting" method="get" name="sorting">
            <div class="col-sm-1 title">
              <div class="form-group">
                <p>Sort Results by</p>
              </div>
            </div>
            <div class="col-sm-2 default">
              <div class="form-group">
                <label>RECOMMENDED</label>
              </div>
            </div>
            <div class="col-sm-2">
              <div class="form-group">
                <select class="form-control" id="rooms" name="rooms">
                <option value="1">POPULARITY</option>
                </select>
              </div>
            </div>
            <div class="col-sm-2">
              <div class="form-group">
                <select class="form-control" id="rooms" name="rooms">
                <option value="1">PRICE</option>
                </select>
              </div>
            </div>
            <div class="col-sm-2">
              <div class="form-group">
                <select class="form-control" id="children" name="children">
                <option value="1">DISTANCE</option>
                </select>
              </div>
            </div>

            <?php $protocol = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
                  $base_url = $protocol . "://" . $_SERVER['HTTP_HOST'];
                  $complete_url_final =   $base_url . $_SERVER["REQUEST_URI"];
                  $ary_url =  array('/search?' , '/search1?' , '/search2?' , '/search3?');
            ?>
           
            <div class=" col-sm-2 map-view">
            <?php $complete_url3 = str_replace($ary_url, "/search3?", $complete_url_final); ?>
             <a class=" " id="map-listing" href="<?php echo $complete_url3; ?>"  >
              <div class=" form-group">
                <label class="">MAP VIEW</label>
              </div>
            </div>
            <div class="col-sm-1 view-option">
          
               <?php $complete_url2 = str_replace($ary_url, "/search2?", $complete_url_final); ?>
              <a class="" id="grid-listing" style="width: 50% !important;float: left;" href="<?php echo $complete_url2; ?>" > <img src="images/icon/grid-list-icon.png"> </a>
              <?php $complete_url1 = str_replace($ary_url, "/search1?", $complete_url_final); ?>
              <a class="" id="box-listing" href="<?php echo $complete_url1; ?>"  > <img  src="images/icon/box-list-icon.png" > </a> 
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</header>
    <script>
 
    $("#box-listing").click(function(){
      $('#main-listing').show();
   });
   $("#grid-listing").click(function(){
      $('#main-listing').hide();
   });
    
    $(function() { 
          $("#room").change( function(){
            var room = $(this).val();
            console.log(room);
            $(".remove_age").remove();
            $("#guest").html('<option value="" style="display:none;">Select</option>');
            $("#child").html('<option value="" style="display:none;">Select</option>');
            $("#child").append('<option value="0" >0</option>');
            if(room == 1){
              var j = 1;
              for(var i=1;i<7;i++){
                j = room * i;
                if(j < 7){
                  $("#guest").append('<option value="'+j+'" >'+j+'</option>');
                }
              }
            }else if(room != ""){
              var j = 1;
              for(var i=1;i<13;i++){
                j = room * i;
                
                if(j < 13){
                  $("#guest").append('<option value="'+j+'" >'+j+'</option>');
                }
                
              }
            }
            
              k = room * 2;
              l = k / 2 ;
              
              $("#child").append('<option value="'+l+'" >'+l+'</option>');
              $("#child").append('<option value="'+k+'" >'+k+'</option>');

          });
          var placeSearch, autocomplete;
          var componentForm = {
            route: 'long_name', // street_address
            locality: 'long_name', // city
            administrative_area_level_1: 'short_name', // state
            country: 'long_name',
            postal_code: 'short_name',
          };
          google.maps.event.addDomListener(window,"load",function(){
              autocomplete = new google.maps.places.Autocomplete(document.getElementById("HotelsPlacesEan"));
              google.maps.event.addListener(autocomplete, 'place_changed', function() {
                fillInAddress();
              });
          }); 
          function fillInAddress() {

          var place = autocomplete.getPlace();

          for (var i = 0; i < place.address_components.length; i++) {
            var addressType = place.address_components[i].types[0];
           

          document.getElementById("lat").value = place.geometry.location.lat();
          document.getElementById("long").value = place.geometry.location.lng();
          }
        }
      });
  </script> 
    
  </div>
  <!-- CONTENT -->
  <link rel="stylesheet" href="<?php echo $theme_url; ?>css/flexslider.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="<?php echo $theme_url; ?>css/style_listing.css" type="text/css" media="screen" />
  
  <!-- <div class="collapse" id="collapseMap">
  <div id="map" class="map"></div>
  <br>
</div> -->
  


  <div class="clearfix"></div>
  <?php if($appModule == "ean"){ ?>
  <!-- Start Ean search form left side --> 
  
  <!-- End Ean search form left side -->
  
  <?php }else{ ?>
  <?php } ?>
  <div class="list-view" id="main-listing">
<div class="hotel-detail-map">
  <div class="hotel-detail-map-body">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="col-sm-6 left_part">
            <p class="title">Showing 169 Hotels in Las Vegas, NV</p>
            <div class="col-sm-12 hotel-list">

               <?php
          
               if(!empty($module)){ 
                $h_data_pass = $module;
                $i = 0;
                foreach($module as $item){ 
                 $image_base_url = base_url().'uploads/images/hotels/slider/';
                 $image_base_url = str_replace("demo.", "", $image_base_url);
                 $img_main_url = 'http://photos.hotelbeds.com/giata/';
                 $img_list = $item->all_img;


              ?>

              <div class="col-sm-6 box odd">
                <h4><?php echo character_limiter($item->title,13);?></h4>
                <h3><?php echo $item->currCode; ?> <?php echo $item->price;?></h3>
                <div class="col-sm-12 image-box" style="padding-bottom:20px">
                 <?php echo $item->stars;?>
                </div>
  
              <?php 
                     for ($h_img=0; $h_img < 1; $h_img++) { 
                       if (array_key_exists('himg_image', $img_list[$h_img])) {
                          $image_url = $image_base_url.$img_list[$h_img]->himg_image;
                    ?>
              <img class="img-responsive" src="<?php echo $image_url; ?>"> 
              <?php }else{ ?>

              <img class="img-responsive" src="<?php echo $img_main_url.$img_list[$h_img]->path; ?>"> 
                <?php } } ?>
                <a  href="<?php echo $item->slug;?>"><button>RESERVE</button></a>
              </div> 

              <?php } } ?>


              

            </div>
            <div class="col-sm-12 pagination">
             
              <div id="demo_pag1"></div>
            </div>
          </div>
          <div class="col-sm-6 right_part"  >
            <div id="map_data" style="width:100%;margin-left: 12px;margin-top: 75px;height: 685px;" >
            </div>
            <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3220.887903925542!2d-115.14509868519855!3d36.16928231065911!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c8c39f95ded1e3%3A0x112f59c33e7585fc!2sThe+D+Las+Vegas!5e0!3m2!1sen!2sin!4v1471507146561" width="100%" height="auto" frameborder="0" style="border:0" allowfullscreen></iframe> -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="last-section">
    <div class="col-sm-12 text-center">
      <div class="container-main">
        <div class="container">
          <h4 class="col-sm-9 text-right">Going somewhere? Need a Hotel, let us help you!</h4>
          <a class="col-sm-3 text-center" href="#">TARZANGO</a>
        </div>
      </div>
    </div>
  </div>
</div>

    

<link rel="stylesheet" type="text/css" href="<?php echo $theme_url; ?>css/jquery.bs_pagination.min.css"></link>
<link rel="script" type="text/javascript" href="<?php echo $theme_url; ?>js/jquery.bs_pagination.min.js"></link>
<script>
/*$(function() {
 
  $("#demo_pag1").bs_pagination({
    totalPages: 100
  });
 
});*/
</script>
<style>
.infoBox{
  background-color: white;
  width: 290px;
  border-radius: 5px;
}
#marker_info h4{
  float: left;
  margin-left: 10px;
  color: #1a124e;
  font-weight: bold;
}
#marker_info h3{
  float: right;
  margin-right: 10px;
  margin-top: 10px;
  color: #ff73b3;
}
#marker_info span{
  float: left;
  margin-bottom: 25px;
  margin-left: 10px;

}
#marker_info{
  width: 290px;
  height: 250px;
  padding: 10px;
  border-radius: 2px;
}
</style>
    <script>
  
  
  (function(A) {

    if (!Array.prototype.forEach)
     A.forEach = A.forEach || function(action, that) {
       for (var i = 0, l = this.length; i < l; i++)
         if (i in this)
           action.call(that, this[i], i, this);
       };

     })(Array.prototype);

     var
     mapObject,
     markers = [],
     markersData = {

       'map-red': [
        <?php foreach($module as $item): ?>
       {
         name: 'hotel name',
         location_latitude: "<?php echo $item->latitude;?>",
         location_longitude: "<?php echo $item->longitude;?>",
         map_image_url: "<?php echo $item->thumbnail;?>",
         name_point: "<?php echo character_limiter($item->title,13);?>",
         stars: '<?php echo $item->stars;?>',
         price: "<?php echo $item->price;?>",
         description_point: "<?php echo character_limiter(strip_tags(trim($item->desc)),75);?>",
         url_point: "<?php echo $item->slug;?>"
       },
        <?php endforeach; ?>

       ],

     };
     var mapOptions = {
        zoom: 12,
        center: new google.maps.LatLng(<?php echo $item->latitude;?>, <?php echo $item->longitude;?>),
        styles: [
           
        ],
        mapTypeId: google.maps.MapTypeId.ROADMAP,

         mapTypeControl: false,
         mapTypeControlOptions: {
           style: google.maps.MapTypeControlStyle.DROPDOWN_MENU,
           position: google.maps.ControlPosition.LEFT_CENTER
         },
         panControl: false,
         panControlOptions: {
           position: google.maps.ControlPosition.TOP_RIGHT
         },
         zoomControl: true,
         zoomControlOptions: {
           style: google.maps.ZoomControlStyle.LARGE,
           position: google.maps.ControlPosition.TOP_RIGHT
         },
         scrollwheel: false,
         scaleControl: false,
         scaleControlOptions: {
           position: google.maps.ControlPosition.TOP_LEFT
         },
         streetViewControl: true,
         streetViewControlOptions: {
           position: google.maps.ControlPosition.LEFT_TOP
         },
        
       };
     var marker;
     mapObject = new google.maps.Map(document.getElementById('map_data'), mapOptions);
     for (var key in markersData)
       markersData[key].forEach(function (item) {
         marker = new google.maps.Marker({
           position: new google.maps.LatLng(item.location_latitude, item.location_longitude),
           map: mapObject,
           icon: '<?php echo base_url(); ?>assets/img/map_pin_room.png',
         });

         if ('undefined' === typeof markers[key])
           markers[key] = [];
         markers[key].push(marker);
         google.maps.event.addListener(marker, 'click', (function () {
       closeInfoBox();
       getInfoBox(item).open(mapObject, this);
       mapObject.setCenter(new google.maps.LatLng(item.location_latitude, item.location_longitude));
      }));



  });

   function hideAllMarkers () {
     for (var key in markers)
       markers[key].forEach(function (marker) {
         marker.setMap(null);
       });
   };

   function closeInfoBox() {
     $('div.infoBox').remove();
   };
 
    function getInfoBox(item) {
       return new InfoBox({
         content:
         '<div class="marker_info col-sm-6 box odd" id="marker_info">' +
         '<h4>'+ item.name_point +'</h4>' +
         '<h3> $ '+ item.price +'</h3>' +
         '<span> '+ item.stars +'</span>' +
         '<div class="col-sm-12 image-box">' +
         '<img style="width:270px;height:150px" class="img-responsive" src="' + item.map_image_url + '" alt=""/>' +
         '</div>',
         disableAutoPan: true,
         maxWidth: 0,
         pixelOffset: new google.maps.Size(-150, -325),
         closeBoxMargin: '0px -20px 2px 2px',
         closeBoxURL: "<?php echo $theme_url; ?>assets/img/close.png",
         isHidden: false,
         pane: 'floatPane',
         enableEventPropagation: true
       }); 
    };  
 
</script> 
    <script src="<?php echo $theme_url; ?>assets/js/infobox.js"></script> 
  </div>
</div>
</div>

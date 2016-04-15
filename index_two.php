<!doctype html>
<!--[if lt IE 7 ]><html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]><html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]><html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]><html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en" class="no-js"> <!--<![endif]-->



	<!-- header top bar -->
<?php 
include_once 'header.phtml';
?>	
	<!--/ header top bar -->
		
<!-- header -->
<div class="header" style="background:url(images/bg/pattern_1.jpg)">
	
    <div class="container">
    <!-- header slider -->
    <div class="offers_slider">            
        <div id="offers_slider">
            <!--<div class="slide_item">
            	<div class="slide_img"><a href="offers-details.html"><img src="images/temp/slider_2_1.jpg" alt=""></a></div>
                <div class="slide_text">
                	<h2><a href="offers-details.html">Porsche Carrera 4</a></h2>
                    <div class="info_line"><span>FIRST REGISTRATION:</span> November 2010</div>
                    <div class="info_line"><span>FUEL CONSUMPTION:</span> 32,6 MPG</div>
                    <div class="info_line"><span>NO. OF KILOMETERS:</span> 17,443</div>
                    <div class="info_price"><span>Price (incl. VAT):</span> $39,580 <a href="#" class="save-item">Save</a></div>
                </div>
            </div>-->
            
            <div class="slide_item img_right">
            	<!--<div class="slide_img">
                <iframe src="http://player.vimeo.com/video/39136609?byline=0&amp;portrait=0" width="640" height="360" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                </div>
                <div class="slide_text">
                	<h2><a href="offers-details.html">Aston Martin DB9</a></h2>
                    <div class="info_line"><span>FIRST REGISTRATION:</span> October 2009</div>
                    <div class="info_line"><span>FUEL CONSUMPTION:</span> 22,6 MPG</div>
                    <div class="info_line"><span>NO. OF KILOMETERS:</span> 45,950</div>
                    <div class="info_price"><span>Price (incl. VAT):</span> $43,200 <a href="#" class="save-item">Save</a></div>
                </div>-->
				<div class="slide_img"><a href="offers-details.html"><img src="images/temp/slider_2_1.jpg" alt=""></a></div>
                <div class="slide_text">
                	<h1 style="font-size:40px; font-family:Arial, Helvetica, sans-serif; font-weight:bold;">
						<a href="offers-details.html">Design a Mockup in Minutes.</a>
					</h1>                
                    <div style="margin-top:-30px;"><h2 style="color:#FFFFFF; margin-top:0px;">Design a vehicle wrap and get quotes</h2></div>
                    
					<div class="info_line"><a href="designtool.php"><img src="images/designbtn_2.png"></a></div>
                </div>
            </div>
            
            <div class="slide_item img_right">
            	<div class="slide_img"><a href="offers-details.html"><img src="images/temp/slider_2_3.jpg" alt=""></a></div>
                <div class="slide_text">
                	<h2><a href="offers-details.html">Find Wrap Shops in Seconds.</a></h2>
                    <div class="info_line"><a href="designtool.php"><img src="images/designbtn_2.png"></a></div>
                    <div class="info_line"><h3 style="color:#FFFFFF;">Design a vehicle wrap and get quotes</h3></div>
					<div class="info_price" style="font-size:20px;">Quick. Easy. Free.</div>
                </div>
            </div>
            
            <!--<div class="slide_item">
            	<div class="slide_img"><a href="offers-details.html"><img src="images/temp/slider_2_4.jpg" alt=""></a></div>
                <div class="slide_text">
                	<h2><a href="offers-details.html">BMW GT3 2.5 TDI</a></h2>
                    <div class="info_line"><span>FIRST REGISTRATION:</span> November 2010</div>
                    <div class="info_line"><span>FUEL CONSUMPTION:</span> 32,6 MPG</div>
                    <div class="info_line"><span>NO. OF KILOMETERS:</span> 17,443</div>
                    <div class="info_price"><span>Price (incl. VAT):</span> $39,580 <a href="#" class="save-item">Save</a></div>
                </div>
            </div>-->
            
        </div>
        <div class="slider_pag" id="offers_slider_pag"></div>
    </div>
    <script>	
         jQuery(document).ready(function($) {
			function carOffersInit() {
				 $('#offers_slider').carouFredSel({
					pagination : "#offers_slider_pag",
					responsive : true,				
					infinite: false,
					circular: true,
					auto: {
						play: true,
						timeoutDuration: 4000
					},
					width: '100%',
					scroll: {
						items : 1,
						fx : "fade",
						pauseOnHover: true
					}
				});						
			}
			carOffersInit();			
			var resizeTimer;
			$(window).resize(function() {
				clearTimeout(resizeTimer);
				resizeTimer = setTimeout(carOffersInit, 100);
			});			          
         });
    </script> 
    <!--/ header slider -->
	</div>            
</div>
<!--/ header -->

<!-- middle -->   
	<!--<div class="middle_row row_white search_row">
		<div class="container">
			<form action="#" class="search_form advsearch_hide clearfix">
            	<div class="row field_select">
                    <label class="label_title">Select Maker:</label>
                    <select class="select_styled" name="car_maker">
                        <option value="1">Alfa Romeo</option>
                        <option value="2">Audi</option>
                        <option value="3">BMW</option>
                        <option value="4">Chevrolet</option>
                        <option value="5">Ford</option>
                        <option value="6">Honda</option>                                                
                        <option value="7">Lexus</option>
                        <option value="8">Mazda</option>
                        <option value="9">Mercedes Benz</option>
                        <option value="10">Mitsubishi</option>
                        <option value="11">Nissan</option>
                        <option value="12">Opel</option>
                        <option value="13">Toyota</option>                       
                        <option value="14">Volkswagen</option>
                        <option value="15">Volvo</option>                        
                    </select>
                </div>
                
                <div class="row field_select">
                    <label class="label_title">Select Model:</label>
                    <select class="select_styled" name="car_model">
                        <option value="1">626</option>
                        <option value="2">323</option>
                        <option value="3">3</option>
                        <option value="4">5</option>
                        <option value="5">7</option>
                        <option value="6">СX-7</option>                                                
                        <option value="7">MVP</option>
                        <option value="8">RX-8</option>
                        <option value="9">MX-3</option>
                        <option value="10">MX-5</option>
                        <option value="11">MX-6</option>
                        <option value="12">BT-50</option>
                        <option value="13">CX-9</option>                                          
                    </select>
                </div>
                
                <div class="row field_select">
                    <label class="label_title">1st Registration from:</label>
                    <select class="select_styled" name="car_year">
                        <option value="1">2001</option>
                        <option value="2">2002</option>
                        <option value="3">2003</option>
                        <option value="4">2004</option>
                        <option value="5">2005</option>
                        <option value="6">2006</option>                                                
                        <option value="7">2007</option>
                        <option value="8">2008</option>
                        <option value="9">2009</option>
                        <option value="10">2010</option>
                        <option value="11">2011</option>
                        <option value="12">2012</option>
                    </select>
                </div>
                
                <div class="row field_select">
                    <label class="label_title">Price until:</label>
                    <select class="select_styled" name="car_model">
                        <option value="1">3000 EUR</option>
                        <option value="2">5000 EUR</option>
                        <option value="3">7000 EUR</option>
                        <option value="4" selected>10000 EUR</option>
                        <option value="5">20000 EUR</option>
                        <option value="6">Unlimited</option>
                    </select>
                </div>
                
                <div class="adv_search_hidden clearfix">
                <div class="row field_select">
                    <label class="label_title">Mileage up to:</label>
                    <select class="select_styled" name="car_mileage">
                        <option value="1">50.000</option>
                        <option value="2">100.000</option>
                        <option value="3">150.000</option>
                        <option value="4">200.000</option>
                        <option value="5">300.000 +</option>
                    </select>
                </div>
                
                <div class="row field_select">
                    <label class="label_title">Fuel Type:</label>
                    <select class="select_styled" name="car_fuel_type">
                        <option value="1">Petrol </option>
                        <option value="2">Diesel</option>
                        <option value="3">Natural Gas</option>
                        <option value="4">LPG</option>
                        <option value="5">Electric</option>
                        <option value="6">Hybrid </option>                                                                                      
                    </select>
                </div>
                
                <div class="row field_select">
                    <label class="label_title">Vehicle Type:</label>
                    <select class="select_styled" name="car_type">
                        <option value="1">Compact Cars</option>
                        <option value="2">SUVs & PickUps </option>
                        <option value="3">Estate Saloons</option>
                        <option value="4">Sedan Cars</option>
                        <option value="5">Sports Cars</option>
                        <option value="6">Van & Minibus</option>                                                
                    </select>
                </div>
                
                <div class="row field_select">
                    <label class="label_title">Country / State:</label>
                    <select class="select_styled" name="car_location">
                        <option value="1">New York</option>
                        <option value="2">San Diego</option>
                        <option value="3">Chicago</option>
                        <option value="4">San Francisco</option>
                        <option value="5">Los Angeles</option>
                        <option value="6">Boston</option>
                    </select>
                </div>
                </div>
                
                <div class="row rowSubmit">
                	<label class="label_title" id="adv_search_open">Advanced Search</label>
                    <span class="btn btn_search"><input type="submit" value="SEARCH"></span>
                </div>
            </form>
            <script type="text/javascript">
			jQuery(document).ready(function($) {					
				// Show/Hide Advanced Search
				$(".adv_search_hidden").hide();
				$("#adv_search_open").click(function(){								
					if ($(this).closest(".search_form").hasClass("advsearch_hide")) {
						$(".adv_search_hidden").stop().slideDown();
						$(this).html("Close Advanced Search");
					} else {
						$(".adv_search_hidden").stop().slideUp();
						$(this).html("Advanced Search");
					}
					$(this).closest(".search_form").toggleClass("advsearch_hide");					
				});				
			});				
			</script>
		</div>
	</div>-->
	
	<!-- testimonials -->
    <div class="middle_row row_white testimonials">
		<div class="container">
        	
            <div class="slider_container clearfix" id="testimonials">                      	 
                <div class="slider-item">
                    <div class="quote-text" style="font-size:30px;">
                    <p>New! Low-Cost Wrap Alternatives, Custom Products & Accessories</p>
                    </div>
                    <div class="quote-author">Wraps can be expensive and time consuming for a small business or large fleet.
Quick & easy vehicle advertising options like <span>custom magnets</span> or <span>decals</span> are perfect ways to save time & money:</div>                 
                </div>
                <div class="slider-item">
                    <div class="quote-text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                    <div class="quote-author"><span>James Backer</span>, Buyer</div>
                </div>
                <div class="slider-item">
                    <div class="quote-text">
                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. We have to say it has made us delighted we chose Medica.</p>
                    </div>
                    <div class="quote-author"><span>Mr. Smith</span>, Partner</div>
                </div>	                        
            </div>
            <a class="prev" id="testimonials_prev" href="#"></a>
            <a class="next" id="testimonials_next" href="#"></a>
            <script>
			jQuery(document).ready(function($) {
				$('#testimonials').carouFredSel({
					next : "#testimonials_next",
					prev : "#testimonials_prev",
					infinite: false,
					items: 1,
					auto: false,
					scroll: {
						items : 1,
						fx: "crossfade",
						easing: "linear",
						duration: 300
					}
				});
			});
            </script>    
            
        </div>
	</div>
    <!--/ testimonials -->
	
	
	
	<!-- latest_offers -->
	<div class="middle_row latest_offers">
		<div class="container clearfix">         			
        	<h2>LARGE RANGE OF PRODUCTS</h2>
                     
            <a href="#" class="link_more">View All Latest Added</a>
		</div>
            
        <div id="latest_offers">
            <div class="latest_item">
            <a href="offers-details.html"><img src="images/temp/prod_img_02.jpg" alt=""></a>
            <a href="offers-details.html">Accessories</a>
            </div>
			<div class="latest_item">
            <a href="offers-details.html"><img src="images/temp/prod_img_01.jpg" alt=""></a>
            <a href="offers-details.html">Car Magnets</a>
            </div>
            <div class="latest_item">
            <a href="offers-details.html"><img src="images/temp/prod_img_03.jpg" alt=""></a>
            <a href="offers-details.html">Vehicle Floor Mats</a>
            </div>
            <div class="latest_item">
            <a href="offers-details.html"><img src="images/temp/prod_img_04.jpg" alt=""></a>
            <a href="offers-details.html">DIY Advertising</a>
            </div>
            <div class="latest_item">
            <a href="offers-details.html"><img src="images/temp/prod_img_05.jpg" alt=""></a>
            <a href="offers-details.html">Car Decals</a>
            </div>
            <div class="latest_item">
            <a href="offers-details.html"><img src="images/temp/prod_img_06.jpg" alt=""></a>
            <a href="offers-details.html">Vehicle Wrap Printing</a>
            </div>
        </div>
        
        <a class="prev" id="latest_offers_prev" href="#"></a>
        <a class="next" id="latest_offers_next" href="#"></a>
                    
        <script>	
        jQuery(document).ready(function($) {	
			var screenRes = $(window).width();
			
            $('#latest_offers').carouFredSel({
                prev : "#latest_offers_prev",
                next : "#latest_offers_next", 
                infinite: false,
                circular: true,
                auto: false,
                width: '100%',				
                scroll: {
                    items : 1,
					onBefore: function (data) {
						if (screenRes > 900) {
						data.items.visible.eq(0).animate({opacity: 0.15},300);
						data.items.old.eq(-1).animate({opacity: 1},300);
						data.items.visible.eq(-1).animate({opacity: 0.15},300);		               
						}
		            },
					onAfter: function (data) {
						if (screenRes > 900) {
						data.items.old.eq(0).animate({opacity: 1},300);	
						}
		            }
                }
            });			
			if (screenRes > 900) {
				var vis_items = $("#latest_offers").triggerHandler("currentVisible");
				vis_items.eq(-1).animate({opacity: 0.15},100);
				vis_items.eq(0).animate({opacity: 0.15},100);
			}
        });
        </script>
	</div>
    <!--/ latest_offers -->
	
	
	
	
	<!-- testimonials -->
    <div class="middle_row row_white">
		<div class="container">
        	
            <div class="slider_container clearfix" id="testimonials">                      	 
                <div class="slider-item">
                    <div style="font-size:30px;">
                    <p>How to Design Your Own Vehicle Wrap Mockup and Get Quotes:</p>
                    </div>
                </div>
            </div>
            <!--<a class="prev" id="testimonials_prev" href="#"></a>
            <a class="next" id="testimonials_next" href="#"></a>
            <script>
			jQuery(document).ready(function($) {
				$('#testimonials').carouFredSel({
					next : "#testimonials_next",
					prev : "#testimonials_prev",
					infinite: false,
					items: 1,
					auto: false,
					scroll: {
						items : 1,
						fx: "crossfade",
						easing: "linear",
						duration: 300
					}
				});
			});
            </script> -->   
            
        </div>
	</div>
    <!--/ testimonials -->
	
	
	<div class="middle_row row_light_gray">
		<div class="container clearfix">  
			<!-- week offer -->
            <div class="special_offers">  <!--week_offer-->
            	<h1>1. Design Your Vehicle Wrap Mockup</h1>
                <div class="offer_box">
	                <div class="offer_image"><a href="offers-details.html"><img src="images/temp/week_offer.jpg" alt=""></a></div>
                    <div class="offer_text">
                    	<!--<h3><a href="offers-details.html">Tesla Model S Prestige</a></h3>
                        <div class="offer_price">$83.599</div>-->
                        <div class="offer_descr">
                          <p align="justify">Create your own custom vehicle wrap or decal design mockup in minutes – it really is that easy!  <a title="Choose A Car to Design a Custom Vehicle Wrap" href="http://www.utahwrap.com">Choose a vehicle closest to your own</a> and then try   out eye catching colors and more.</p>
                          <div align="justify">
                            <ul>
                              <li>Use our backgrounds and graphics</li>
                              <li>Choose any colors</li>
                              <li>Create cool color fades</li>
                              <li>Save to your profile</li>
                            </ul>
                          </div>
                          <ul>
                          </ul>
                        </div>
                    </div>
                    <div class="link_more"><a href="#"><img src="images/getstartedtoday-green-2.png" border="0"></a></div>
                </div>
            </div>
            <!--/ week offer -->
            <!-- special offer -->
			<div class="special_offers">
            	<h1>2. Find Wrap Offer & Get Quote</h1>
                <div class="offer_box">
	                <div class="offer_image"><a href="offers-details.html"><img src="images/temp/week2.jpg" alt=""></a></div>
                    <div class="offer_text">
                        <div class="offer_descr">
                          <p align="justify">Once you’ve created your car wrap design choose any car wrap shops in   your area (anywhere in the world) to request free quotes.  The shops of   your choice will contact you with quotes. The shop of your choice can   then redesign your car wrap mockup with professional quality, review it   with you, print it, and install it on your car, vehicle, or fleet.</p>
                          <div align="justify">
                            <ul>
                              <li>Any Address or Zip Code</li>
                              <li>Select Unlimited Shops</li>
                              <li>Add special instructions</li>
                              <li>Connect conveniently by email</li>
                              <li>Receive Free Quotes</li>
                              <li>Find a good price</li>
                              <li><em>Bring your design to life!</em></li>
                            </ul>
                          </div>
                          <ul>
                          </ul>
                        </div>
                    </div>
                    <!--<div class="link_more"><a href="#">View More Details</a></div>-->
					<div class="link_more"><a href="#"><img src="images/viewmore.png" border="0"></a></div>
                </div>
            </div>
            <!--<div class="special_offers">
            	<h2>SPECIAL DEALS</h2>
                
                <div id="special_offers">
                	<div class="special_item">
                    	<div class="special_image">
                    	<a href="offers-details.html"><img src="images/temp/special_offer_1.jpg" alt=""></a>
                        </div>
                        <div class="special_text">
                        	<h3><a href="offers-details.html">Range Rover Evoque</a></h3>
                            <div class="info_row"><span>FIRST REG:</span> FEB 2013</div>
                            <div class="info_row"><span>FUEL CONS:</span> 32,6 MPG</div>
                            <div class="info_row"><span>MILEAGE</span> 170,443</div>
                            <div class="special_price">$32.690</div>
                        </div>
                    </div>
                    
                    <div class="special_item">
                    	<div class="special_image">
                    	<a href="offers-details.html"><img src="images/temp/special_offer_2.jpg" alt=""></a>
                        </div>
                        <div class="special_text">
                        	<h3><a href="offers-details.html">Alfa Romeo Mito</a></h3>
                            <div class="info_row"><span>FIRST REG:</span> AUG 2012</div>
                            <div class="info_row"><span>FUEL CONS:</span> 56,6 MPG</div>
                            <div class="info_row"><span>MILEAGE</span> 30,443</div>
                            <div class="special_price">$15.690</div>
                        </div>
                    </div>
                    
                    <div class="special_item">
                    	<div class="special_image">
                    	<a href="offers-details.html"><img src="images/temp/special_offer_3.jpg" alt=""></a>
                        </div>
                        <div class="special_text">
                        	<h3><a href="offers-details.html">Mercedes CLA 220d</a></h3>
                            <div class="info_row"><span>FIRST REG:</span> NOV 2012</div>
                            <div class="info_row"><span>FUEL CONS:</span> 42,6 MPG</div>
                            <div class="info_row"><span>MILEAGE</span> 12,443</div>
                            <div class="special_price">$44.690</div>
                        </div>
                    </div>
                    
                    <div class="special_item">
                    	<div class="special_image">
                    	<a href="offers-details.html"><img src="images/temp/special_offer_4.jpg" alt=""></a>
                        </div>
                        <div class="special_text">
                        	<h3><a href="offers-details.html">Tesla Model S Prestige</a></h3>
                            <div class="info_row"><span>FIRST REG:</span> FEB 2013</div>
                            <div class="info_row"><span>FUEL CONS:</span> 32,6 MPG</div>
                            <div class="info_row"><span>MILEAGE</span> 170,443</div>
                            <div class="special_price">$32.690</div>
                        </div>
                    </div>
                    
                    <div class="special_item">
                    	<div class="special_image">
                    	<a href="offers-details.html"><img src="images/temp/special_offer_5.jpg" alt=""></a>
                        </div>
                        <div class="special_text">
                        	<h3><a href="offers-details.html">Renault</a></h3>
                            <div class="info_row"><span>FIRST REG:</span> FEB 2013</div>
                            <div class="info_row"><span>FUEL CONS:</span> 32,6 MPG</div>
                            <div class="info_row"><span>MILEAGE</span> 20,443</div>
                            <div class="special_price">$27.690</div>
                        </div>
                    </div>
                    
                </div>
                <a class="prev" id="special_offers_prev" href="#"></a>
            	<a class="next" id="special_offers_next" href="#"></a>
                
                <div class="link_more"><a href="#">View All Special Offers</a></div>
            
                <script>	
				jQuery(document).ready(function($) {
					function carSpecicalInit() {
						var car_specical = $('#special_offers');
						car_specical.carouFredSel({
							prev : "#special_offers_prev",
							next : "#special_offers_next",
							infinite: true,
							circular: false,
							auto: false,
							width: '100%',
							direction: "down",						
							scroll: {
								items : 1
							}
						});						
					}
					$(window).load(function() {
						carSpecicalInit();
					}); 
					var resizeTimer;
					$(window).resize(function() {
						clearTimeout(resizeTimer);
						resizeTimer = setTimeout(carSpecicalInit, 100);
					});							          
				});
			    </script> 
            </div>-->           
            <!--/ special offer -->			
		</div>
	</div>
	
    <!-- car types -->
	<div class="middle_row row_gray">
		<div class="container clearfix">  
			
            <div class="car_types_list">
            	<h2>Choose from a wide variety of vehicles wraps!</h2>
                <ul>
	                <li class="type_hover cart_type_1">
						<a href="#" class="front"><strong>SCOOTERS & BIKES</strong> <em>76 OFFERS</em></a>
		                <a href="#" class="back"><strong>SCOOTERS & BIKES</strong> <em>View more</em></a>
                    </li>
                    <li class="type_hover cart_type_2">
                        <a href="#" class="front"><strong>SEDANS & ESTATES</strong> <em>1354 OFFERS</em></a>
                        <a href="#" class="back"><strong>SEDANS & ESTATES</strong> <em>View more</em></a>
                    </li>
                    <li class="type_hover cart_type_3">
                    <a href="#" class="front"><strong>SPORTS CARS</strong> <em>68 OFFERS</em></a>
                    <a href="#" class="back"><strong>SPORTS CARS</strong> <em>View more</em></a>
                    </li>
                    <li class="type_hover cart_type_4">
                    <a href="#" class="front"><strong>SUVS & PICKUPS</strong> <em>512 OFFERS</em></a>
                    <a href="#" class="back"><strong>SUVS & PICKUPS</strong> <em>View more</em></a>
                    </li>
                    <li class="type_hover cart_type_5">
                    <a href="#" class="front"><strong>VANS & TRUCKS</strong> <em>255 OFFERS</em></a>
                    <a href="#" class="back"><strong>VANS & TRUCKS</strong> <em>View more</em></a>
                    </li>
                </ul>                
            	<!--<a href="#" class="link_more">SEE ALL OUR OFFERS</a>-->
            </div>
            <script>	
			jQuery(document).ready(function($) {		
				$('.type_hover').hover(function(){
					$(this).addClass('flip');
				},function(){
					$(this).removeClass('flip');
				});		          
			});
			</script> 
            
		</div>
	</div>
    <!--/ car types -->
    
	
    
    
    
    <!-- popular brands -->
	<div class="middle_row row_light_gray brand_list">
		<div class="container">
	            <h2>SATISFIED CLIENTS :</h2>
	            <ul>
	            	<li><a href="#"><img src="images/temp/brand_logo_1.png" alt=""></a></li>
                    <li><a href="#"><img src="images/temp/brand_logo_2.png" alt=""></a></li>
                    <li><a href="#"><img src="images/temp/brand_logo_3.png" alt=""></a></li>
                    <li><a href="#"><img src="images/temp/brand_logo_4.png" alt=""></a></li>
	            </ul>
	            
	            <a href="#" class="link_more">View All Clients </a>
      </div>
	</div>
    <!--/ popular brands -->

<!--/ middle -->

<?php include_once 'footer.php'; ?>


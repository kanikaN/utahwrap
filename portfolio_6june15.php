<!doctype html>
<!--[if lt IE 7 ]><html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]><html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]><html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]><html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en" class="no-js"> <!--<![endif]-->

<!-- Mirrored from demo.themefuse.com/html/AutoTrader/blog-sidebar-left.html by HTTrack Website Copier/3.x [XR&CO'2013], Sat, 16 May 2015 15:15:59 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="author" content="ThemeFuse">
<meta name="keywords" content="">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="description" content="Professional quality, huge selection, lowest prices for high quality, easy to install car wrap. Get your Carbon Fiber, Matte, Gloss, Chrome, Snake Skin, Glow and other amazing vehicle vinyl films." />        
<title>Portfolio| Premium wraps for your vehicle or fleet | www.utahwrap.com</title>
<link href='http://fonts.googleapis.com/css?family=Cabin:400,400italic,500,600,700|PT+Serif+Caption:400,400italic' rel='stylesheet' type='text/css'>
<link rel="shortcut icon" href="favicon.html">

<link href="style.css" media="screen" rel="stylesheet">
<link href="screen.css" media="screen" rel="stylesheet">
<!-- custom CSS -->
<link href="custom.css" media="screen" rel="stylesheet">

<!-- main JS libs  -->
<script src="js/libs/modernizr.min.js"></script>
<script src="js/libs/respond.min.js"></script>					 
<script src="js/libs/jquery.min.js"></script>

<!-- scripts  -->
<script src="js/jquery.easing.min.js"></script>
<script src="js/general.js"></script>
<script src="js/hoverIntent.js"></script>
<!-- carousel -->
<script src="js/jquery.carouFredSel.min.js"></script>
<script src="js/jquery.touchSwipe.min.js"></script>
<!-- styled select -->
<link rel="stylesheet" href="css/cusel.css">
<script src="js/cusel-min.js"></script>
<!-- custom input -->
<link href="css/customInput.html" rel="stylesheet">
<script src="js/jquery.customInput.js"></script>
<!-- range slider -->
<link href="css/jslider.css" rel="stylesheet">
<script type="text/javascript" src="js/jquery.slider.bundle.js"></script>

<!--#####################################-->
<!--Slider New Start-->
<!--#####################################-->
<script type="text/javascript" src="js/jssor.js"></script>
    <script type="text/javascript" src="js/jssor.slider.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            //Reference http://www.jssor.com/development/slider-with-slideshow-jquery.html
            //Reference http://www.jssor.com/development/tool-slideshow-transition-viewer.html

            var _SlideshowTransitions = [
                //Rotate Overlap
                { $Duration: 1200, $Zoom: 11, $Rotate: -1, $Easing: { $Zoom: $JssorEasing$.$EaseInQuad, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad }, $Opacity: 2, $Round: { $Rotate: 0.5 }, $Brother: { $Duration: 1200, $Zoom: 1, $Rotate: 1, $Easing: $JssorEasing$.$EaseSwing, $Opacity: 2, $Round: { $Rotate: 0.5 }, $Shift: 90 } },
                //Switch
                { $Duration: 1400, x: 0.25, $Zoom: 1.5, $Easing: { $Left: $JssorEasing$.$EaseInWave, $Zoom: $JssorEasing$.$EaseInSine }, $Opacity: 2, $ZIndex: -10, $Brother: { $Duration: 1400, x: -0.25, $Zoom: 1.5, $Easing: { $Left: $JssorEasing$.$EaseInWave, $Zoom: $JssorEasing$.$EaseInSine }, $Opacity: 2, $ZIndex: -10 } },
                //Rotate Relay
                { $Duration: 1200, $Zoom: 11, $Rotate: 1, $Easing: { $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad }, $Opacity: 2, $Round: { $Rotate: 1 }, $ZIndex: -10, $Brother: { $Duration: 1200, $Zoom: 11, $Rotate: -1, $Easing: { $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad }, $Opacity: 2, $Round: { $Rotate: 1 }, $ZIndex: -10, $Shift: 600 } },
                //Doors
                { $Duration: 1500, x: 0.5, $Cols: 2, $ChessMode: { $Column: 3 }, $Easing: { $Left: $JssorEasing$.$EaseInOutCubic }, $Opacity: 2, $Brother: { $Duration: 1500, $Opacity: 2 } },
                //Rotate in+ out-
                { $Duration: 1500, x: -0.3, y: 0.5, $Zoom: 1, $Rotate: 0.1, $During: { $Left: [0.6, 0.4], $Top: [0.6, 0.4], $Rotate: [0.6, 0.4], $Zoom: [0.6, 0.4] }, $Easing: { $Left: $JssorEasing$.$EaseInQuad, $Top: $JssorEasing$.$EaseInQuad, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad }, $Opacity: 2, $Brother: { $Duration: 1000, $Zoom: 11, $Rotate: -0.5, $Easing: { $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad }, $Opacity: 2, $Shift: 200 } },
                //Fly Twins
                { $Duration: 1500, x: 0.3, $During: { $Left: [0.6, 0.4] }, $Easing: { $Left: $JssorEasing$.$EaseInQuad, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true, $Brother: { $Duration: 1000, x: -0.3, $Easing: { $Left: $JssorEasing$.$EaseInQuad, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 } },
                //Rotate in- out+
                { $Duration: 1500, $Zoom: 11, $Rotate: 0.5, $During: { $Left: [0.4, 0.6], $Top: [0.4, 0.6], $Rotate: [0.4, 0.6], $Zoom: [0.4, 0.6] }, $Easing: { $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad }, $Opacity: 2, $Brother: { $Duration: 1000, $Zoom: 1, $Rotate: -0.5, $Easing: { $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad }, $Opacity: 2, $Shift: 200 } },
                //Rotate Axis up overlap
                { $Duration: 1200, x: 0.25, y: 0.5, $Rotate: -0.1, $Easing: { $Left: $JssorEasing$.$EaseInQuad, $Top: $JssorEasing$.$EaseInQuad, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad }, $Opacity: 2, $Brother: { $Duration: 1200, x: -0.1, y: -0.7, $Rotate: 0.1, $Easing: { $Left: $JssorEasing$.$EaseInQuad, $Top: $JssorEasing$.$EaseInQuad, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad }, $Opacity: 2 } },
                //Chess Replace TB
                { $Duration: 1600, x: 1, $Rows: 2, $ChessMode: { $Row: 3 }, $Easing: { $Left: $JssorEasing$.$EaseInOutQuart, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Brother: { $Duration: 1600, x: -1, $Rows: 2, $ChessMode: { $Row: 3 }, $Easing: { $Left: $JssorEasing$.$EaseInOutQuart, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 } },
                //Chess Replace LR
                { $Duration: 1600, y: -1, $Cols: 2, $ChessMode: { $Column: 12 }, $Easing: { $Top: $JssorEasing$.$EaseInOutQuart, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Brother: { $Duration: 1600, y: 1, $Cols: 2, $ChessMode: { $Column: 12 }, $Easing: { $Top: $JssorEasing$.$EaseInOutQuart, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 } },
                //Shift TB
                { $Duration: 1200, y: 1, $Easing: { $Top: $JssorEasing$.$EaseInOutQuart, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Brother: { $Duration: 1200, y: -1, $Easing: { $Top: $JssorEasing$.$EaseInOutQuart, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 } },
                //Shift LR
                { $Duration: 1200, x: 1, $Easing: { $Left: $JssorEasing$.$EaseInOutQuart, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Brother: { $Duration: 1200, x: -1, $Easing: { $Left: $JssorEasing$.$EaseInOutQuart, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 } },
                //Return TB
                { $Duration: 1200, y: -1, $Easing: { $Top: $JssorEasing$.$EaseInOutQuart, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $ZIndex: -10, $Brother: { $Duration: 1200, y: -1, $Easing: { $Top: $JssorEasing$.$EaseInOutQuart, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $ZIndex: -10, $Shift: -100 } },
                //Return LR
                { $Duration: 1200, x: 1, $Delay: 40, $Cols: 6, $Formation: $JssorSlideshowFormations$.$FormationStraight, $Easing: { $Left: $JssorEasing$.$EaseInOutQuart, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $ZIndex: -10, $Brother: { $Duration: 1200, x: 1, $Delay: 40, $Cols: 6, $Formation: $JssorSlideshowFormations$.$FormationStraight, $Easing: { $Top: $JssorEasing$.$EaseInOutQuart, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $ZIndex: -10, $Shift: -100 } },
                //Rotate Axis down
                { $Duration: 1500, x: -0.1, y: -0.7, $Rotate: 0.1, $During: { $Left: [0.6, 0.4], $Top: [0.6, 0.4], $Rotate: [0.6, 0.4] }, $Easing: { $Left: $JssorEasing$.$EaseInQuad, $Top: $JssorEasing$.$EaseInQuad, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad }, $Opacity: 2, $Brother: { $Duration: 1000, x: 0.2, y: 0.5, $Rotate: -0.1, $Easing: { $Left: $JssorEasing$.$EaseInQuad, $Top: $JssorEasing$.$EaseInQuad, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad }, $Opacity: 2 } },
                //Extrude Replace
                { $Duration: 1600, x: -0.2, $Delay: 40, $Cols: 12, $During: { $Left: [0.4, 0.6] }, $SlideOut: true, $Formation: $JssorSlideshowFormations$.$FormationStraight, $Assembly: 260, $Easing: { $Left: $JssorEasing$.$EaseInOutExpo, $Opacity: $JssorEasing$.$EaseInOutQuad }, $Opacity: 2, $Outside: true, $Round: { $Top: 0.5 }, $Brother: { $Duration: 1000, x: 0.2, $Delay: 40, $Cols: 12, $Formation: $JssorSlideshowFormations$.$FormationStraight, $Assembly: 1028, $Easing: { $Left: $JssorEasing$.$EaseInOutExpo, $Opacity: $JssorEasing$.$EaseInOutQuad }, $Opacity: 2, $Round: { $Top: 0.5 } } }
            ];

            var _CaptionTransitions = [
            //CLIP|LR
            {$Duration: 900, $Clip: 3, $Easing: $JssorEasing$.$EaseInOutCubic },
            //CLIP|TB
            {$Duration: 900, $Clip: 12, $Easing: $JssorEasing$.$EaseInOutCubic },

            //DDGDANCE|LB
            {$Duration: 1800, x: 0.3, y: -0.3, $Zoom: 1, $Easing: { $Left: $JssorEasing$.$EaseInJump, $Top: $JssorEasing$.$EaseInJump, $Zoom: $JssorEasing$.$EaseOutQuad }, $Opacity: 2, $During: { $Left: [0, 0.8], $Top: [0, 0.8] }, $Round: { $Left: 0.8, $Top: 2.5} },
            //DDGDANCE|RB
            {$Duration: 1800, x: -0.3, y: -0.3, $Zoom: 1, $Easing: { $Left: $JssorEasing$.$EaseInJump, $Top: $JssorEasing$.$EaseInJump, $Zoom: $JssorEasing$.$EaseOutQuad }, $Opacity: 2, $During: { $Left: [0, 0.8], $Top: [0, 0.8] }, $Round: { $Left: 0.8, $Top: 2.5} },

            //TORTUOUS|HL
            {$Duration: 1500, x: 0.2, $Zoom: 1, $Easing: { $Left: $JssorEasing$.$EaseOutWave, $Zoom: $JssorEasing$.$EaseOutCubic }, $Opacity: 2, $During: { $Left: [0, 0.7] }, $Round: { $Left: 1.3} },
            //TORTUOUS|VB
            {$Duration: 1500, y: -0.2, $Zoom: 1, $Easing: { $Top: $JssorEasing$.$EaseOutWave, $Zoom: $JssorEasing$.$EaseOutCubic }, $Opacity: 2, $During: { $Top: [0, 0.7] }, $Round: { $Top: 1.3} },

            //ZMF|10
            {$Duration: 600, $Zoom: 11, $Easing: { $Zoom: $JssorEasing$.$EaseInExpo, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 },

            //ZML|R
            {$Duration: 600, x: -0.6, $Zoom: 11, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Zoom: $JssorEasing$.$EaseInCubic }, $Opacity: 2 },
            //ZML|B
            {$Duration: 600, y: -0.6, $Zoom: 11, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Zoom: $JssorEasing$.$EaseInCubic }, $Opacity: 2 },

            //ZMS|B
            {$Duration: 700, y: -0.6, $Zoom: 1, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Zoom: $JssorEasing$.$EaseInCubic }, $Opacity: 2 },

            //ZM*JDN|LB
            {$Duration: 1200, x: 0.8, y: -0.5, $Zoom: 11, $Easing: { $Left: $JssorEasing$.$EaseLinear, $Top: $JssorEasing$.$EaseOutCubic, $Zoom: $JssorEasing$.$EaseInCubic }, $Opacity: 2, $During: { $Top: [0, 0.5]} },
            //ZM*JUP|LB
            {$Duration: 1200, x: 0.8, y: -0.5, $Zoom: 11, $Easing: { $Left: $JssorEasing$.$EaseLinear, $Top: $JssorEasing$.$EaseInCubic, $Zoom: $JssorEasing$.$EaseInCubic }, $Opacity: 2, $During: { $Top: [0, 0.5]} },
            //ZM*JUP|RB
            {$Duration: 1200, x: -0.8, y: -0.5, $Zoom: 11, $Easing: { $Left: $JssorEasing$.$EaseLinear, $Top: $JssorEasing$.$EaseInCubic, $Zoom: $JssorEasing$.$EaseInCubic }, $Opacity: 2, $During: { $Top: [0, 0.5]} },

            //ZM*WVR|LT
            {$Duration: 1200, x: 0.5, y: 0.3, $Zoom: 11, $Easing: { $Left: $JssorEasing$.$EaseLinear, $Top: $JssorEasing$.$EaseInWave }, $Opacity: 2, $Round: { $Rotate: 0.8} },
            //ZM*WVR|RT
            {$Duration: 1200, x: -0.5, y: 0.3, $Zoom: 11, $Easing: { $Left: $JssorEasing$.$EaseLinear, $Top: $JssorEasing$.$EaseInWave }, $Opacity: 2, $Round: { $Rotate: 0.8} },
            //ZM*WVR|TL
            {$Duration: 1200, x: 0.3, y: 0.5, $Zoom: 11, $Easing: { $Left: $JssorEasing$.$EaseInWave, $Top: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Round: { $Rotate: 0.8} },
            //ZM*WVR|BL
            {$Duration: 1200, x: 0.3, y: -0.5, $Zoom: 11, $Easing: { $Left: $JssorEasing$.$EaseInWave, $Top: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Round: { $Rotate: 0.8} },

            //RTT|10
            {$Duration: 700, $Zoom: 11, $Rotate: 1, $Easing: { $Zoom: $JssorEasing$.$EaseInExpo, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInExpo }, $Opacity: 2, $Round: { $Rotate: 0.8} },

            //RTTL|R
            {$Duration: 700, x: -0.6, $Zoom: 11, $Rotate: 1, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Zoom: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInCubic }, $Opacity: 2, $Round: { $Rotate: 0.8} },
            //RTTL|B
            {$Duration: 700, y: -0.6, $Zoom: 11, $Rotate: 1, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Zoom: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInCubic }, $Opacity: 2, $Round: { $Rotate: 0.8} },

            //RTTS|R
            {$Duration: 700, x: -0.6, $Zoom: 1, $Rotate: 1, $Easing: { $Left: $JssorEasing$.$EaseInQuad, $Zoom: $JssorEasing$.$EaseInQuad, $Rotate: $JssorEasing$.$EaseInQuad, $Opacity: $JssorEasing$.$EaseOutQuad }, $Opacity: 2, $Round: { $Rotate: 1.2} },
            //RTTS|B
            {$Duration: 700, y: -0.6, $Zoom: 1, $Rotate: 1, $Easing: { $Top: $JssorEasing$.$EaseInQuad, $Zoom: $JssorEasing$.$EaseInQuad, $Rotate: $JssorEasing$.$EaseInQuad, $Opacity: $JssorEasing$.$EaseOutQuad }, $Opacity: 2, $Round: { $Rotate: 1.2} },

            //RTT*JDN|RT
            {$Duration: 1000, x: -0.8, y: 0.5, $Zoom: 11, $Rotate: 0.2, $Easing: { $Left: $JssorEasing$.$EaseLinear, $Top: $JssorEasing$.$EaseOutCubic, $Zoom: $JssorEasing$.$EaseInCubic }, $Opacity: 2, $During: { $Top: [0, 0.5]} },
            //RTT*JDN|LB
            {$Duration: 1000, x: 0.8, y: -0.5, $Zoom: 11, $Rotate: 0.2, $Easing: { $Left: $JssorEasing$.$EaseLinear, $Top: $JssorEasing$.$EaseOutCubic, $Zoom: $JssorEasing$.$EaseInCubic }, $Opacity: 2, $During: { $Top: [0, 0.5]} },
            //RTT*JUP|RB
            {$Duration: 1000, x: -0.8, y: -0.5, $Zoom: 11, $Rotate: 0.2, $Easing: { $Left: $JssorEasing$.$EaseLinear, $Top: $JssorEasing$.$EaseInCubic, $Zoom: $JssorEasing$.$EaseInCubic }, $Opacity: 2, $During: { $Top: [0, 0.5]} },
            {$Duration: 1000, x: -0.5, y: 0.8, $Zoom: 11, $Rotate: 1, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Top: $JssorEasing$.$EaseLinear, $Zoom: $JssorEasing$.$EaseInCubic }, $Opacity: 2, $During: { $Left: [0, 0.5] }, $Round: { $Rotate: 0.5 } },
            //RTT*JUP|BR
            {$Duration: 1000, x: -0.5, y: -0.8, $Zoom: 11, $Rotate: 0.2, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Top: $JssorEasing$.$EaseLinear, $Zoom: $JssorEasing$.$EaseInCubic }, $Opacity: 2, $During: { $Left: [0, 0.5]} },

            //R|IB
            {$Duration: 900, x: -0.6, $Easing: { $Left: $JssorEasing$.$EaseInOutBack }, $Opacity: 2 },
            //B|IB
            {$Duration: 900, y: -0.6, $Easing: { $Top: $JssorEasing$.$EaseInOutBack }, $Opacity: 2 },

            ];

            var options = {
                $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $AutoPlaySteps: 1,                                  //[Optional] Steps to go for each navigation request (this options applys only when slideshow disabled), the default value is 1
                $AutoPlayInterval: 4000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 1,                               //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

                $ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                $SlideDuration: 500,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
                //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                $SlideSpacing: 0, 					                //[Optional] Space between each slide in pixels, default value is 0
                $DisplayPieces: 1,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                $ParkingPosition: 0,                                //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
                $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
                $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
                $DragOrientation: 3,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

                $SlideshowOptions: {                                //[Optional] Options to specify and enable slideshow or not
                    $Class: $JssorSlideshowRunner$,                 //[Required] Class to create instance of slideshow
                    $Transitions: _SlideshowTransitions,            //[Required] An array of slideshow transitions to play slideshow
                    $TransitionsOrder: 1,                           //[Optional] The way to choose transition to play slide, 1 Sequence, 0 Random
                    $ShowLink: true                                    //[Optional] Whether to bring slide link on top of the slider when slideshow is running, default value is false
                },

                $CaptionSliderOptions: {                            //[Optional] Options which specifies how to animate caption
                    $Class: $JssorCaptionSlider$,                   //[Required] Class to create instance to animate caption
                    $CaptionTransitions: _CaptionTransitions,       //[Required] An array of caption transitions to play caption, see caption transition section at jssor slideshow transition builder
                    $PlayInMode: 1,                                 //[Optional] 0 None (no play), 1 Chain (goes after main slide), 3 Chain Flatten (goes after main slide and flatten all caption animations), default value is 1
                    $PlayOutMode: 3                                 //[Optional] 0 None (no play), 1 Chain (goes before main slide), 3 Chain Flatten (goes before main slide and flatten all caption animations), default value is 1
                },

                $BulletNavigatorOptions: {                                //[Optional] Options to specify and enable navigator or not
                    $Class: $JssorBulletNavigator$,                       //[Required] Class to create navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 0,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                    $Lanes: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
                    $SpacingX: 10,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
                    $SpacingY: 10,                                   //[Optional] Vertical space between each item in pixel, default value is 0
                    $Orientation: 1                                 //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
                },

                $ArrowNavigatorOptions: {
                    $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 2                                //[Required] 0 Never, 1 Mouse Over, 2 Always
                }
            };

            var jssor_slider1 = new $JssorSlider$("slider1_container", options);
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
                if (parentWidth)
                    jssor_slider1.$ScaleWidth(Math.min(parentWidth, 950));
                else
                    window.setTimeout(ScaleSlider, 30);
            }
            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
</script>
<!--#####################################-->
<!--Slider New End-->
<!--#####################################-->

</head>

<body>
<div class="body_wrap">
	
	<!-- header top bar -->
	<div class="header_top">
		<div class="container">
		
			<div class="logo">
				<a href="index.html"><img src="images/logo.png" alt=""></a>
			</div>
			
			<!-- topmenu -->    
			<nav id="topmenu" class="clearfix">            
				<ul class="dropdown" style="border:0px solid #FF0000; margin-right:20px;">    
                	<!--<li class="menu-level-0 current-menu-ancestor"><a href="#"><span>Home</span></a>-->
					<li class="menu-level-0"><a href="index_two.php"><span>Home</span></a>
						<!--<ul class="submenu-1">
	                    	<li class="menu-level-1"><a href="index.html"><span>Home Slider 1</span></a></li>
                            <li class="menu-level-1 current-menu-item"><a href="index2.html"><span>Home Slider 2</span></a></li>
                            <li class="menu-level-1"><a href="index3.html"><span>Home Slider 3</span></a></li>
						</ul>-->
					</li>                                                                            
					<li class="menu-level-0"><a href="#"><span>Create</span></a>
                    	<!--<ul class="submenu-1">
	                    	<li class="menu-level-1"><a href="offers-search.html"><span>Search Page</span></a></li>
                            <li class="menu-level-1"><a href="offers-list.html"><span>Offers List - Filter Right</span></a></li>
                            <li class="menu-level-1"><a href="offers-list-left.html"><span>Offers List - Filter Left</span></a></li>
                            <li class="menu-level-1"><a href="car-makers.html"><span>Car Makers</span></a></li>
						</ul>-->
                    </li>       
                    
	                <li class="menu-level-0 mega-nav"><a href="portfolio.php"><span>Portfolio</span></a>
	                	<!--<ul class="submenu-1">                      	                                                                                                  
	                        <li class="menu-level-1 mega-nav-widget">                            	
	                            
	                            <div class="widget-container widget_text"> 
	                                <h3 class="widget-title">Welcome Text</h3>
	                                <div class="textwidget">
	                                    <p>Easily add a functional and highly customizable Mega Menu to your WordPress website. Choose your option of five different color schemes within the WordPress admin, or style it to your liking with your own stylesheet. </p>
	                                    <p>Lorem ipsum dolor sit amet, consectetur adiping elit. Class aptent taciti sociosqu ad litora torquent per conubia nostr.</p>
	                                </div>
	                            </div>
	                           
	                        </li>	                        
                            <li class="menu-level-1"><a href="#"><span>Vehicles</span></a>
	                            <ul class="submenu-2">                                
	                                <li class="menu-level-2"><a href="blog.html"><span>Motorbikes</span></a></li>
	                                <li class="menu-level-2"><a href="blog.html"><span>Compacts</span></a></li>
	                                <li class="menu-level-2"><a href="blog.html"><span>Sedans</span></a></li>
	                                <li class="menu-level-2"><a href="blog.html"><span>4x4 SUVs</span></a></li>
	                                <li class="menu-level-2"><a href="blog.html"><span>Pickups</span></a></li>
	                                <li class="menu-level-2 more-nav"><a href="blog.html"><span>view all</span></a></li>
	                            </ul>
							</li>
	                        <li class="menu-level-1"><a href="#"><span>Submenu</span></a>
	                            <ul class="submenu-2">                                
	                                <li class="menu-level-2"><a href="blog.html"><span>1st Blog Category</span></a></li>
	                                <li class="menu-level-2"><a href="blog.html"><span>Second Category</span></a></li>
	                                <li class="menu-level-2"><a href="blog.html"><span>3rd Category</span></a></li>
	                                <li class="menu-level-2"><a href="blog.html"><span>Forth Category</span></a></li>
	                                <li class="menu-level-2"><a href="blog.html"><span>Another Category</span></a></li>
	                                <li class="menu-level-2 more-nav"><a href="blog.html"><span>view all</span></a></li>
	                            </ul>
							</li>                        	                                                                    
	                    </ul>-->
	                </li>
                    <!--<li class="menu-level-0"><a href="#"><span>Gallery</span></a>
						<ul class="submenu-1">
                        	<li class="menu-level-1"><a href="blog.html"><span>Blog</span></a></li>							
							<li class="menu-level-1"><a href="page-about.html"><span>About Page</span></a></li>
							<li class="menu-level-1"><a href="page-faq.html"><span>FAQ</span></a></li>
                            <li class="menu-level-1"><a href="page-pricing.html"><span>Pricing Page</span></a></li>
                            <li class="menu-level-1"><a href="#"><span>Shortcodes</span></a>
								<ul class="submenu-2">                        		
									<li class="menu-level-2"><a href="shortcodes-buttons.html"><span>Buttons & Lists</span></a></li> 
									<li class="menu-level-2"><a href="shortcodes-text.html"><span>Text & Images</span></a></li>
									<li class="menu-level-2"><a href="shortcodes-charts.html"><span>Charts</span></a></li>  
									<li class="menu-level-2"><a href="shortcodes-columns.html"><span>Columns</span></a></li>
									<li class="menu-level-2"><a href="shortcodes-columns-full.html"><span>Columns full width</span></a></li>
									<li class="menu-level-2"><a href="shortcodes-lightbox.html"><span>Lightbox</span></a></li>
									<li class="menu-level-2"><a href="shortcodes-media.html"><span>Videos & Galleries</span></a></li>
									<li class="menu-level-2"><a href="shortcodes-maps.html"><span>Google Maps</span></a></li>
									<li class="menu-level-2"><a href="shortcodes-tabs.html"><span>Tabs & Toggles</span></a></li>
									<li class="menu-level-2"><a href="shortcodes-tables.html"><span>Boxes & Tables</span></a></li>                            
									<li class="menu-level-2"><a href="shortcodes-typography.html"><span>Typography</span></a></li>
									<li class="menu-level-2"><a href="shortcodes-widgets.html"><span>Custom Widgets</span></a></li>
								</ul>   
							</li>
							<li class="menu-level-1"><a href="blog-sidebar-left.html"><span>Sidebar Left</span></a></li>
							<li class="menu-level-1"><a href="page-404.html"><span>Page 404</span></a></li>
						</ul>
					</li> -->
					<li class="menu-level-0"><a href="contact.php"><span>Contact Us</span></a></li>                                
				</ul>   
			</nav>    
			<!--/ topmenu -->
		</div>
	</div>
	<!--/ header top bar -->

<!-- header -->
<!--<div style="border:1px solid #FF0000;">
            
	<div class="header_title" style="border:1px solid #FF0000;">
    	
    </div>

</div>-->
<div class="header header_thin" style="border:0px solid #FF0000;; background-image:url(images/temp/slider_1_1.jpg); height:60px;">
            
	<div class="header_title" style="height:65px;">
    	<h1><span>See Our Portfolio to Get Your Idea</span></h1>
    </div>

</div>
<!--/ header -->

<!-- breadcrumbs -->
<div class="middle_row row_white breadcrumbs">
    <div class="container">
        <!--####################################################-->
		<!-- Imran Jssor Slider Begin -->
		<!-- To move inline styles to css file/block, please specify a class name for each element. --> 
		<!--####################################################-->
		<div id="slider1_container" style="border:0px solid #FF0000; position: relative; top: 0px; left: 0px; width: 600px; height: 300px; overflow: hidden;">
	
			<!-- Loading Screen -->
			<div u="loading" style="position: absolute; top: 0px; left: 0px;">
				<div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
					background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
				</div>
				<div style="position: absolute; display: block; background: url(images/img/loading.gif) no-repeat center center;
					top: 0px; left: 0px;width: 100%;height:100%;">
				</div>
			</div>
			
			<!-- Slides Container -->
			<div u="slides" style="border:0px solid #FF0000; cursor: move; position: absolute; left: 0px; top: 0px; width: 600px; height: 300px; overflow: hidden;">
				<div>
					<a u=image href="#"><img src="images/img/landscape/01.jpg" /></a>
					<div u=caption t="*" class="captionOrange"  style="position:absolute; left:20px; top: 30px; width:300px; height:30px;"> 
					slideshow transition twins
					</div>
				</div>
				<div>
					<a u=image href="#"><img src="images/img/landscape/02.jpg" /></a>
					<div u=caption t="*" class="captionOrange"  style="position:absolute; left:20px; top: 30px; width:300px; height:30px;"> 
					random caption transition
					</div>
				</div>
				<div>
					<a u=image href="#"><img src="images/img/landscape/03.jpg" /></a>
					<div u=caption t="*" class="captionOrange"  style="position:absolute; left:20px; top: 30px; width:300px; height:30px;"> 
					mobile ready, touch swipe
					</div>
				</div>
				<div>
					<a u=image href="#"><img src="images/img/landscape/04.jpg" /></a>
					<div u=caption t="*" class="captionOrange"  style="position:absolute; left:20px; top: 30px; width:300px; height:30px;"> 
					responsive, scale smoothly
					</div>
				</div>
			</div>
			
			<!--#region Bullet Navigator Skin Begin -->
			<!-- Help: http://www.jssor.com/development/slider-with-bullet-navigator-jquery.html -->
			<style>
				/* jssor slider bullet navigator skin 01 css */
				/*
				.jssorb01 div           (normal)
				.jssorb01 div:hover     (normal mouseover)
				.jssorb01 .av           (active)
				.jssorb01 .av:hover     (active mouseover)
				.jssorb01 .dn           (mousedown)
				*/
				.jssorb01 {
					position: absolute;
				}
				.jssorb01 div, .jssorb01 div:hover, .jssorb01 .av {
					position: absolute;
					/* size of bullet elment */
					width: 12px;
					height: 12px;
					filter: alpha(opacity=70);
					opacity: .7;
					overflow: hidden;
					cursor: pointer;
					border: #000 1px solid;
				}
				.jssorb01 div { background-color: gray; }
				.jssorb01 div:hover, .jssorb01 .av:hover { background-color: #d3d3d3; }
				.jssorb01 .av { background-color: #fff; }
				.jssorb01 .dn, .jssorb01 .dn:hover { background-color: #555555; }
			</style>
			<!-- bullet navigator container -->
			<div u="navigator" class="jssorb01" style="bottom: 16px; right: 10px;">
				<!-- bullet navigator item prototype -->
				<div u="prototype"></div>
			</div>
			<!--#endregion Bullet Navigator Skin End -->
			
			<!--#region Arrow Navigator Skin Begin -->
			<!-- Help: http://www.jssor.com/development/slider-with-arrow-navigator-jquery.html -->
			<style>
				/* jssor slider arrow navigator skin 05 css */
				/*
				.jssora05l                  (normal)
				.jssora05r                  (normal)
				.jssora05l:hover            (normal mouseover)
				.jssora05r:hover            (normal mouseover)
				.jssora05l.jssora05ldn      (mousedown)
				.jssora05r.jssora05rdn      (mousedown)
				*/
				.jssora05l, .jssora05r {
					display: block;
					position: absolute;
					/* size of arrow element */
					width: 40px;
					height: 40px;
					cursor: pointer;
					background: url(images/img/a17.png) no-repeat;
					overflow: hidden;
				}
				.jssora05l { background-position: -10px -40px; }
				.jssora05r { background-position: -70px -40px; }
				.jssora05l:hover { background-position: -130px -40px; }
				.jssora05r:hover { background-position: -190px -40px; }
				.jssora05l.jssora05ldn { background-position: -250px -40px; }
				.jssora05r.jssora05rdn { background-position: -310px -40px; }
			</style>
			<!-- Arrow Left -->
			<span u="arrowleft" class="jssora05l" style="top: 123px; left: 8px;">
			</span>
			<!-- Arrow Right -->
			<span u="arrowright" class="jssora05r" style="top: 123px; right: 8px;">
			</span>
			<a style="display: none" href="http://www.jssor.com">Bootstrap Slider</a>
		</div>
		<!--####################################################-->
		<!-- Jssor Slider End -->
		<!--####################################################-->
    </div>
</div>
<!--/ breadcrumbs -->

<!-- middle -->   
<div id="middle" class="cols2 sidebar_left">
	<div class="container clearfix">  
		<!-- content -->
        <div class="content">
        	
            <!-- posts list -->
            <div class="postlist">
            	
                <!--<div class="post-item">
                	<div class="post-title">
	                    <h2><a href="blog-details.html">Luxury Compact SUVs: the new trend in 2013</a></h2>	                                    
	                </div>
                    <div class="post-aside clearfix">
	                    <div class="post-image"><a href="blog-details.html"><img src="images/temp/post_img_big_1.jpg" alt="" /></a></div>                                      
	                    <div class="post-meta">
	                     	<div class="info_row"><span>Posted On:</span> 09. 25. 13</div>
	                        <div class="info_row"><span>Written BY:</span> Max Biaggi</div>
	                        <div class="info_row"><span>Comments:</span> <a href="blog-details.html#comments">24</a></div>
	                        <a href="#" class="link_more">READ MORE <span>&gt;</span></a>
						</div>     
	                    <div class="entry">
	                    	<p>Phasellus molestie magna non est bibendum non venenatis nisl tempor. Suspendisse dictum feugiat nisl ut dapibus. Mauris iaculis porttitor posuere. Praesent id metus massa, ut blandit odio. Proin quis tortor orci. Etiam at risus et justo dignissim congue. Donec congue lacinia dui, a porttitor lectus condimentum laoreet. Nunc eu ullamcorper orci... </p>
	                    </div>    
                    </div>                
                </div>-->
                
                <!--<div class="post-item">
                	<div class="post-title">
	                    <h2><a href="blog-details.html">Ferrari has unveiled its £1m Enzo replacement at Geneva</a></h2>	                                    
	                </div>   
                    <div class="post-aside clearfix">                 
	                    <div class="post-image"><a href="blog-details.html"><img src="images/temp/post_img_big_2.jpg" alt="" /></a></div>                                      
	                    <div class="post-meta">
	                     	<div class="info_row"><span>Posted On:</span> 10. 08. 13</div>
	                        <div class="info_row"><span>Written BY:</span> Felipe Massa</div>
	                        <div class="info_row"><span>Comments:</span> <a href="blog-details.html#comments">32</a></div>
	                        <a href="#" class="link_more">READ MORE <span>&gt;</span></a>
						</div>     
	                    <div class="entry">
	                    	<p>Mauris iaculis porttitor posuere. Praesent id metus massa, ut blandit odio. Proin quis tortor orci. Etiam at risus et justo dignissim congue. Donec congue lacinia dui, a porttitor lectus condimentum laoreet. Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum... </p>
	                    </div>
					</div>
                </div>-->
                
                <!--<div class="post-item">
                	<div class="post-title">
	                    <h2><a href="blog-details.html">We’ve tested the 2013 Mercedes-Benz G63 AMG 6x6 Concept</a></h2>	                                    
	                </div>   
                    <div class="post-aside clearfix">                 
	                    <div class="post-image"><a href="blog-details.html"><img src="images/temp/post_img_big_3.jpg" alt="" /></a></div>                                      
	                    <div class="post-meta">
	                     	<div class="info_row"><span>Posted On:</span> 10. 08. 13</div>
	                        <div class="info_row"><span>Written BY:</span> Casey Stoner</div>
	                        <div class="info_row"><span>Comments:</span> <a href="blog-details.html#comments">7</a></div>
	                        <a href="#" class="link_more">READ MORE <span>&gt;</span></a>
						</div>     
	                    <div class="entry">
	                    	<p>Proin quis tortor orci. Etiam at risus et justo dignissim congue. Donec congue lacinia dui, a porttitor lectus condimentum laoreet.</p>
                            <p> Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla justo, eget luctus tortor. Nulla facilisi...</p>
	                    </div>
					</div>
                </div>-->
                
                <!--<div class="post-item">
                	<div class="post-title">
	                    <h2><a href="blog-details.html">2013 Subaru BRZ Limited vs. Route Napoléon</a></h2>	                                    
	                </div>   
                    <div class="post-aside clearfix">                 
	                    <div class="post-image "><a href="blog-details.html"><img src="images/temp/post_img_1.jpg" alt="" /></a></div>                                      
	                    <div class="post-meta">
	                     	<div class="info_row"><span>Posted On:</span> 09. 03. 13</div>
	                        <div class="info_row"><span>Written BY:</span> J.P. Montoya Stoner</div>
	                        <div class="info_row"><span>Comments:</span> <a href="blog-details.html#comments">7</a></div>
	                        <a href="#" class="link_more">READ MORE <span>&gt;</span></a>
						</div>     
	                    <div class="entry">
	                    	<p>Proin quis tortor orci. Etiam at risus et justo dignissim congue. Donec congue lacinia dui, a porttitor lectus condimentum laoreet. Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla justo, eget luctus tortor. Nulla facilisi. Duis aliquet egestas purus in blandit. Proin quis tortor orci. Etiam at risus et justo dignissim congue. Donec congue lacinia dui, a porttitor lectus condimentum laoreet. Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla justo, eget luctus tortor. Nulla facilisi. Duis aliquet egestas purus in blandit...</p>
                      </div>
					</div>
                </div>-->
                
                <div class="post-item">
                	<div class="post-title">
	                    <h2><a href="#">We go to the lengths that others don’t</a></h2>	                                    
	                </div>   
                    <div class="post-aside clearfix">                 
	                    <div class="post-image alignright"><a href="#"><img src="images/temp/post_img_2.jpg" alt="" /></a></div>                                      
	                    <div class="post-meta">
	                     	<div class="info_row"><span>Unique graphics</span></div>
	                        <div class="info_row"><span>Eye-catching</span></div>
	                        <div class="info_row"><span>catchy graphics</span></div>
	                        <a href="#" class="link_more">Contact Us <span>&gt;</span></a>
						</div>     
	                    <div class="entry">
	                    	<p>When wrapping your vehicle, we take the extra time and care to remove parts of the vehicle that should be wrapped under and NOT over. This includes tail lights, emblems, badges, bumpers and other parts. These little details mean a more seamless installation, and one that will last you for years to come.</p>
	                    </div>
					</div>
                </div>
                
                <div class="post-item">
                	<div class="post-title">
	                    <h2><a href="#">It’s all in the details – The Installation</a></h2>	                                    
	                </div>   
                    <div class="post-aside clearfix">                 
	                    <div class="post-image "><a href="#"><img src="images/temp/week_offer.jpg" alt="" /></a></div>                                      
	                    <div class="post-meta">
	                     	<div class="info_row"><span>360 degree design</span></div>
	                        <div class="info_row"><span>Winterfresh Wrap</span></div>
	                        <div class="info_row"><span>Promote your brand</span></div>
	                        <a href="#" class="link_more">Contact Us</a>
						</div>     
	                    <div class="entry">
	                    	<p>One of the most important aspects of a vehicle wrap is actually often one of the most overlooked ones – the installation. What most of our clients don’t know is that the life of your vehicle wrap almost always comes down to the talent and experience of your vehicle wrap installer.

Our wrap installers work on vehicles full time, and have been professionally trained, working for years in the field. That’s why we can offer a level of quality and precision that other companies just can’t match. All of our wraps also include a detailed inspection checklist and warranty booklet.</p>
                      </div>
					</div>
                </div>
                
            </div>
            <!--/ posts list -->
            
            <!-- pagination -->
            <!--<div class="tf_pagination">
	            <div class="inner">
	            	<a class="page_prev" href="#"><span></span>PREV</a> 
                	<a class="page_next" href="#"><span></span>NEXT</a>
                
                	<span class="page-numbers page_current">1</span> <a href="#" class="page-numbers">2</a>  <a href="#" class="page-numbers">3</a> <a href="#" class="page-numbers">4</a> <a href="#" class="page-numbers">5</a> <a href="#" class="page-numbers">6</a> <a href="#" class="page-numbers">7</a> &hellip;  <a href="#" class="page-numbers">18</a>     
                      
	            </div>
            </div>-->
            <!--/ pagination -->
            
        </div>
        <!--/ content -->
        
        <!-- sidebar -->
        <div class="sidebar">
        	<div class="box">
            
            	<!-- widget_categories -->
		        <!--<div class="widget-container widget_categories">
					<h3 class="widget-title">Blog Categories:</h3>
                    <ul>
                        <li><a href="#"><span>About Our Services</span> <em>(32)</em></a></li> 
                        <li><a href="#"><span>Auto News</span> <em>(47)</em></a></li>
                        <li class="current-menu-item"><a href="#"><span>New Cars in Showroom</span> <em>(18)</em></a></li>
                        <li><a href="#"><span>Service Announcements</span> <em>(49)</em></a></li>
                        <li><a href="#"><span>Formula 1</span> <em>(23)</em></a></li>
                        <li><a href="#"><span>Motorbike Races</span> <em>(10)</em></a></li>
                        <li><a href="#"><span>Holiday Caravaning</span> <em>(33)</em></a></li>
                    </ul>
				</div>  -->
		        <!--/ widget_categories -->
                
                <!-- widget_recent_comments -->                   
	            <!--<div class="widget-container widget_popular">
					<h3 class="widget-title">Most Popular Posts</h3>
	                <ul>
                        <li><a href="#">Luxury Compact SUVs: the new</a></li> 
                        <li><a href="#">Ferrari has unveiled its £1m Enzo</a></li>
                        <li><a href="#">We’ve tested the 2013 Mercedes-Benz</a></li>
                        <li><a href="#">2013 Subaru BRZ Limited vs. Route</a></li>
                        <li><a href="#">Sed ut perspiciatis unde omnis iste natus error sit</a></li>
                        <li><a href="#">Totam rem aperiam eaque</a></li>
                    </ul>
				</div>-->
				<!--/ widget_recent_comments --> 
                
                <!-- widget_tag_cloud -->
		        <div class="widget-container widget_tag_cloud">	        	
	                <h3 class="widget-title">Tag Cloud:</h3>
	                <div class="tagcloud">
	                    <a href='#' class='tag-link-4' title='2 topics' style='font-size: 10pt;'>Spot Wrap</a>
	                    <a href='#' class='tag-link-7' title='3 topics' style='font-size: 15pt;'>Full Wrap-1</a>
	                    <a href='#' class='tag-link-3' title='2 topics' style='font-size: 10pt;'>Wrap Kits</a>
	                    <a href='#' class='tag-link-6' title='3 topics' style='font-size: 17pt;'>Full Wrap-1</a>
	                    <a href='#' class='tag-link-5' title='2 topics' style='font-size: 10pt;'>Back Side Wrap</a>
	                </div>
	            </div>
	            <!--/ widget_tag_cloud -->
                
                <!-- widget_archive -->
		        <!--<div class="widget-container widget_archive">
					<h3 class="widget-title">Archives</h3>		
					<ul>
                    	<li><a href="#">April 2013</a></li>
                    	<li><a href="#">March 2013</a></li>
                    	<li><a href="#">February 2013</a></li>
						<li><a href="#">January 2013</a></li>
						<li><a href="#">December 2012</a></li>
	                    <li><a href="#">November 2012</a></li>
	                    <li><a href="#">October 2012</a></li>
                        <li><a href="#">September 2012</a></li>
						<li><a href="#">August 2012</a></li>
	                    <li><a href="#">July 2012</a></li>
	                    <li><a href="#">June 2012</a></li>
					</ul>
				</div> -->
				<!--/ widget_archive -->
                
                <!-- twiiter widget -->
	            <!--<div class="widget-container widget_twitter">							
	                <h3 class="widget-title">Twitter Feed</h3>							
	                <div class="tweet_list">											   
	                    <div class="tweet_item clearfix">
	                        <div class="tweet_image"><img src="images/temp/twitter_avatar.png" width="30" height="30" alt="" /></div>
	                        <div class="tweet_text">
	                            <div class="inner">
	                            Sociosqu ad litora torquent per conubia, Lorem ipsum dolor sit amet, consectetur adiping elit. <a href="#">http://t.co/dwRp8eds</a>
	                            <span class="tweet_time">About 3 hours ago</span>
	                            </div>
	                        </div>
	                    </div>   
	                    
	                    <div class="tweet_item clearfix">
	                        <div class="tweet_image"><img src="images/temp/twitter_avatar.png" width="30" height="30" alt="" /></div>
	                        <div class="tweet_text">
	                            <div class="inner">
	                            Lorem ipsum dolor sit amet, consectetur adiping elit. Class aptent taciti sociosqu ad litora torquent per conubia nostr <a href="#">http://t.co/dwRp8eds</a>
	                            <span class="tweet_time">About 7 hours ago ago</span>
	                          </div>
	                        </div>
	                    </div>	
                        
                        <div class="tweet_item clearfix">
	                        <div class="tweet_image"><img src="images/temp/twitter_avatar.png" width="30" height="30" alt="" /></div>
	                        <div class="tweet_text">
	                            <div class="inner">
	                            Take a look at The New York Times redesigns <a href="#">ow.ly/jcyzw</a> What do you make of them? <a href="#">#webdesign</a>
	                            <span class="tweet_time">About 3 hours ago</span>
	                            </div>
	                        </div>
	                    </div>
                        							
	                </div>
		        </div>-->
		        <!--/ twiiter widget --> 
                
                <!-- flickr widget -->
				<!--<div class="widget-container flickr">
	                <h3 class="widget-title">Flickr Image Gallery:</h3>
	                <div class="flickr_badge_image"><a href="http://www.flickr.com/photos/themefuse/4745330331/"><img src="../../../farm5.static.flickr.com/4077/4745330331_befc3d910d_s.jpg" alt="A photo on Flickr" title="Bon Apetit HTML/WP template - Homepage" height="100" width="100"></a></div>
	                
	                <div class="flickr_badge_image"><a href="http://www.flickr.com/photos/themefuse/4745331021/"><img src="../../../farm5.static.flickr.com/4098/4745331021_a65f34e26f_s.jpg" alt="A photo on Flickr" title="Bon Apetit HTML/WP template - Homepage" height="100" width="100"></a></div>
	                
	                <div class="flickr_badge_image"><a href="http://www.flickr.com/photos/themefuse/4745967666/"><img src="../../../farm5.static.flickr.com/4119/4745967666_b996719848_s.jpg" alt="A photo on Flickr" title="TechOffers HTML Newsletter" height="100" width="100"></a></div>
	                
	                <div class="flickr_badge_image"><a href="http://www.flickr.com/photos/themefuse/4745329719/"><img src="../../../farm5.staticflickr.com/4074/4745329719_624b0af07a_s.jpg" alt="A photo on Flickr" title="TechOffers HTML Newsletter" height="100" width="100"></a></div>
	                
	                <div class="flickr_badge_image"><a href="http://www.flickr.com/photos/themefuse/4745969376/"><img src="../../../farm5.staticflickr.com/4093/4745330557_3a0782a879_s.jpg" alt="A photo on Flickr" title="Art Gallery HTML/WP template - Homepage" height="100" width="100"></a></div>                        
	                <div class="flickr_badge_image" id="flickr_badge_image6"><a href="http://www.flickr.com/photos/themefuse/4745330159/"><img src="../../../farm5.staticflickr.com/4075/4745330159_b0e28f2221_s.jpg" alt="A photo on Flickr" title="Bon Apetit HTML/WP template - Homepage" height="100" width="100"></a></div>	                 
	                
	                <div class="flickr_badge_image"><a href="http://www.flickr.com/photos/themefuse/4745967666/"><img src="../../../farm5.static.flickr.com/4119/4745967666_b996719848_s.jpg" alt="A photo on Flickr" title="TechOffers HTML Newsletter" height="100" width="100"></a></div>
	                
	                <div class="flickr_badge_image"><a href="http://www.flickr.com/photos/themefuse/4745330331/"><img src="../../../farm5.static.flickr.com/4077/4745330331_befc3d910d_s.jpg" alt="A photo on Flickr" title="Bon Apetit HTML/WP template - Homepage" height="100" width="100"></a></div>
	                
	                <div class="flickr_badge_image"><a href="http://www.flickr.com/photos/themefuse/4745331021/"><img src="../../../farm5.static.flickr.com/4098/4745331021_a65f34e26f_s.jpg" alt="A photo on Flickr" title="Bon Apetit HTML/WP template - Homepage" height="100" width="100"></a></div>                
	                
	            </div>-->
				<!--/ flickr widget -->
                
                <!-- subscribe buttons -->
                <div class="widget-container subscribe_btn">
					<a href="#" class="btn btn_rss"><span>SUBSCRIBE TO RSS</span></a>
                </div>
                <!--/ subscribe buttons -->                                               
            
            <div class="box_bot"></div>
            </div>
            
            <!--<div class="facebook_box">
				<img width="270" height="270" alt="" src="images/temp/sidebar_facebook.jpg" style="display:block">
			</div>-->
                
        </div>
        <!--/ sidebar -->  
              
    </div>
</div>
<!--/ middle -->

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

<div class="footer">
	<div class="container clearfix">
    
		<div class="f_col f_col_1">  
            <h3>Vehicles:</h3>
            <ul>
                <li><a href="#"><span>Motorbikes</span></a></li> 
                <li><a href="#"><span>Compacts</span></a></li>
                <li><a href="#"><span>Sedans</span></a></li>
                <li><a href="#"><span>4x4 SUVs</span></a></li>
                <li><a href="#"><span>Pickups</span></a></li>
                <li><a href="#"><span>Vans & Trucks</span></a></li>                                
            </ul>
        </div>
        <!--/ footer col 1 -->
        
        <div class="f_col f_col_2">        	
			<h3>Services:</h3>
            <ul>
                <li><a href="#"><span>Vehicle Wrap Printing</span></a></li> 
                <li><a href="#"><span>Car Decals</span></a></li>
                <li><a href="#"><span>DIY Advertising</span></a></li>
                <li><a href="#"><span>Wrap Accessories</span></a></li>
            </ul>
        </div>
        <!--/ footer col 2 -->
        
        <div class="f_col f_col_3">        	
            <h3>Privacy:</h3>
            <ul>
                <li><a href="#"><span>Terms & Conditions</span></a></li> 
                <li><a href="#"><span>Privacy Statement</span></a></li>
                <li><a href="#"><span>F.A.Q.</span></a></li>
                <li><a href="#"><span>Support</span></a></li>
                <li><a href="#"><span>Confidentiality</span></a></li>
            </ul>
        </div>        
        <!--/ footer col 3 -->
        
        <div class="f_col f_col_4">   
           	<h3>OUR OFFICE</h3>
            <div class="footer_address">
                <div class="address">
	                21 Sun Jose, Los Angeles<br>
	                California, 90456
                </div>
                <div class="hours">
                	Mon - Fri: 9AM - 7 PM<br>
					Sat - Sun: 9AM - 2 PM
				</div>
                <a href="contact.html" class="notice">View Bigger Map</a>
            </div>
            <div class="footer_map" style="background:url(images/temp/footer_map.jpg);"><a href="contact.html" class="amap"></a></div>
      	</div>
        <!--/ footer col 4 -->
        
        <div class="clear"></div>
        
        <div class="footer_social">
        	<div class="social_inner">
			    <a href="#" class="social-google"><span>Google +1</span></a>
			    <a href="#" class="social-fb"><span>Facebook</span></a>
			    <a href="#" class="social-twitter"><span>Twitter</span></a>
			    <a href="#" class="social-dribble"><span>Dribble</span></a>
			    <a href="#" class="social-linkedin"><span>LinkedIn</span></a>
			    <a href="#" class="social-vimeo"><span>Vimeo</span></a>
			    <a href="#" class="social-flickr"><span>Flickr</span></a>
			    <a href="#" class="social-da"><span>Devianart</span></a>
            </div>
		</div>
        
        <div class="footer_contacts">
        	<span class="phone">555-32.78.75</span>
            <span class="email">hello@autotrader.com</span>
        </div>
        
        <div class="copyright">
        Copyright © All Rights Reserved for <a href="http://utahwrap.com">Utahwrap</a>  &nbsp;&nbsp;
        </div>
        	        
    </div> 
</div>

</div>
</body>

<!-- Mirrored from demo.themefuse.com/html/AutoTrader/blog-sidebar-left.html by HTTrack Website Copier/3.x [XR&CO'2013], Sat, 16 May 2015 15:15:59 GMT -->
</html>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Create simple website using codeigniter  </title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <!-- Latest compiled and minified Jquery library -->
        <script src='https://code.jquery.com/jquery-2.1.1.min.js'></script>
		<script src="<?= base_url('jssor/jssor.slider-27.5.0.min.js');?>"></script>


	

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <link href="http://cdnjs.cloudflare.com/ajax/libs/jquery.colorbox/1.4.33/example1/colorbox.min.css" rel="stylesheet"/>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.colorbox/1.4.33/jquery.colorbox-min.js"></script>
        <style>#loader{display: none}</style>
</head>
	
<body>
    <div class="container-fluid ">
        <div class="row clearfix">
		<div class="col-md-12 column">
			<nav class="navbar navbar-default" role="navigation">
				<div class="navbar-header">
                 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> 
				 <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span>
				 <span class="icon-bar"></span></button> 
				 <a class="navbar-brand" href="<?php echo base_url() ?>">CodeIgniter</a>
				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active">
							<a href="<?php echo base_url() ?>">Home</a>
						</li>
						<li>
							<a href="<?php echo base_url() ?>home/portfolio">Portfolio</a>
						</li>
                                                <li>
							<a href="<?php echo base_url() ?>home/about_us">About us</a>
						</li>
                                                <li>
							<a href="<?php echo base_url() ?>home/contact_us">Contact us</a>
						</li>
                                                 <li>
						     <a href="<?php echo base_url() ?>home/services">Services</a>
						</li>
						
					</ul>
                    <ul class="nav navbar-nav pull-right">
						<li>
                                                    <a href="http://facebook.com/TrycatchClasses/"><img style="height: 17px;" src="https://cdn0.iconfinder.com/data/icons/small-n-flat/24/678128-social-facebook-32.png"/></a>
						</li>
						<li>
							<a href="http://twitter.com/trycatchclasses/"><img style="height: 17px;" src="https://cdn1.iconfinder.com/data/icons/logotypes/32/square-twitter-32.png"/></a>
						</li>
                                                <li>
							<a href="https://plus.google.com/+TryCatchClassesMumbai/"><img style="height: 17px;" src="https://cdn1.iconfinder.com/data/icons/logotypes/32/square-google-plus-32.png"/></a>
						</li>
                                                
					</ul>
					
				</div>
				
			</nav>
		</div>
	</div>
        
    </div>	
	



	



<!-- #region Jssor Slider Begin -->
<!-- Generator: Jssor Slider Maker -->
<script type="text/javascript">
    jssor_1_slider_init = function() {

        var jssor_1_options = {
          $AutoPlay: 1,
          $ArrowNavigatorOptions: {
            $Class: $JssorArrowNavigator$
          },
          $BulletNavigatorOptions: {
            $Class: $JssorBulletNavigator$
          }
        };

        var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

        /*#region responsive code begin*/

        var MAX_WIDTH = 1550;

        function ScaleSlider() {
            var containerElement = jssor_1_slider.$Elmt.parentNode;
            var containerWidth = containerElement.clientWidth;

            if (containerWidth) {

                var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                jssor_1_slider.$ScaleWidth(expectedWidth);
            }
            else {
                window.setTimeout(ScaleSlider, 30);
            }
        }

        ScaleSlider();

        $Jssor$.$AddEvent(window, "load", ScaleSlider);
        $Jssor$.$AddEvent(window, "resize", ScaleSlider);
        $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
        /*#endregion responsive code end*/
    };
</script>
<style>
    /*jssor slider loading skin double-tail-spin css*/
    .jssorl-004-double-tail-spin img {
        animation-name: jssorl-004-double-tail-spin;
        animation-duration: 1.6s;
        animation-iteration-count: infinite;
        animation-timing-function: linear;
    }

    @keyframes jssorl-004-double-tail-spin {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
    }

    /*jssor slider bullet skin 031 css*/
    .jssorb031 {position:absolute;}
    .jssorb031 .i {position:absolute;cursor:pointer;}
    .jssorb031 .i .b {fill:#000;fill-opacity:0.5;stroke:#fff;stroke-width:1200;stroke-miterlimit:10;stroke-opacity:0.3;}
    .jssorb031 .i:hover .b {fill:#fff;fill-opacity:.7;stroke:#000;stroke-opacity:.5;}
    .jssorb031 .iav .b {fill:#fff;stroke:#000;fill-opacity:1;}
    .jssorb031 .i.idn {opacity:.3;}

    /*jssor slider arrow skin 051 css*/
    .jssora051 {display:block;position:absolute;cursor:pointer;}
    .jssora051 .a {fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10;}
    .jssora051:hover {opacity:.8;}
    .jssora051.jssora051dn {opacity:.5;}
    .jssora051.jssora051ds {opacity:.3;pointer-events:none;}
</style>
<div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1550px;height:500px;overflow:hidden;visibility:hidden;">
    <!-- Loading Screen -->
    <div data-u="loading" class="jssorl-004-double-tail-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
        <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="/jssor/mkk2/double-tail-spin.svg" />
    </div>
    <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1550px;height:500px;overflow:hidden;">
        <div data-fillmode="2">
            <!-- <img data-u="image" src="pic/rsz_pic1.jpg" /> -->
			<img data-u="image" src="<?php echo base_url('pic/rsz_pic1.jpg'); ?>" />
        </div>
        <div>
            <!-- <img data-u="image" src="pic/rsz_pic2.jpg" /> -->
			<img data-u="image" src="<?php echo base_url('pic/rsz_pic2.jpg'); ?>" />

        </div>
        <div>
            <!-- <img data-u="image" src="pic/rsz_pic3.jpg" /> -->
			<img data-u="image" src="<?php echo base_url('pic/rsz_pic3.jpg'); ?>" />

        </div>
        <div>
            <!-- <img data-u="image" src="pic/rsz_pic4.jpg" /> -->
			<img data-u="image" src="<?php echo base_url('pic/rsz_pic4.jpg'); ?>" />

        </div>
        
    </div>
    <!-- Bullet Navigator -->
    <div data-u="navigator" class="jssorb031" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
        <div data-u="prototype" class="i" style="width:10px;height:10px;">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <circle class="b" cx="8000" cy="8000" r="5800"></circle>
            </svg>
        </div>
    </div>
    <!-- Arrow Navigator -->
    <div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
        <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
            <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
        </svg>
    </div>
    <div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
        <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
            <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
        </svg>
    </div>
</div>
<script type="text/javascript">jssor_1_slider_init();</script>
<!-- #endregion Jssor Slider End -->








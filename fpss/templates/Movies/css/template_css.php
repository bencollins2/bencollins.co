<?php
if(!isset($fpssTemplateIncluded)){
	header("Content-type: text/css; charset: UTF-8");
	$width = (int) $_GET['w'];
	$height = (int) $_GET['h'];
	$sidebarWidth = (int) $_GET['sw'];
}
?>
/**
 * @version		$Id: template_css.php 201 2010-12-29 20:04:55Z joomlaworks $
 * @package		Frontpage Slideshow (standalone)
 * @author		JoomlaWorks http://www.joomlaworks.gr
 * @copyright	Copyright (c) 2006 - 2010 JoomlaWorks, a business unit of Nuevvo Webware Ltd. All rights reserved.
 * @license		Commercial - This code cannot be redistributed without permission from Nuevvo Webware Ltd.
 */

/* --- Slideshow Containers --- */
#fpss-outer-container {margin:8px auto;padding:2px;border:1px solid #999;overflow:hidden;width:<?php echo $width+$sidebarWidth; ?>px;height:<?php echo $height; ?>px;}
/* This element controls the slideshow spacing and border */
#fpss-container {position:relative;margin:0;padding:0;clear:both;width:<?php echo $width+$sidebarWidth; ?>px;}
#fpss-slider {float:right;background:none;overflow:hidden;width:<?php echo $width; ?>px;height:<?php echo $height; ?>px;}
#slide-loading {background:#000 url(../images/loading_black.gif) no-repeat center center;width:<?php echo $width; ?>px;height:<?php echo $height; ?>px;}
#slide-wrapper {display:none;width:<?php echo $width; ?>px;height:<?php echo $height; ?>px;}
#slide-wrapper #slide-outer {height:<?php echo $height; ?>px;}
#slide-wrapper #slide-outer .slide {left:<?php echo $sidebarWidth; ?>px;width:<?php echo $width; ?>px;height:<?php echo $height; ?>px;}

/* --- Slideshow Block --- */
#slide-wrapper #slide-outer .slide {position:absolute;overflow:hidden;}
#slide-wrapper #slide-outer .slide .slide-inner {margin:0;color:#fff;overflow:hidden;background:#3a3a3a;text-align:left;z-index:8;height:<?php echo $height; ?>px;}
#slide-wrapper #slide-outer .slide .slide-inner a.fpss_img span span span {background:none;}

/* --- Content --- */
.fpss-introtext {width:20%;height:auto;font-size:11px;margin:0;padding:0;position:absolute;top:0;bottom:0;background:url(../images/transparent_bg.png);right:<?php echo round($width/80); ?>px;text-align:left;}
.fpss-introtext .slidetext {margin:0;padding:0 8px;}

/* --- Navigation Buttons --- */
#pseudobox {display:none;}
#navi-outer {float:left;margin:0/* 0 0 -20px*/;padding:0;background:#3a3a3a;overflow:hidden;position:relative;z-index:9;height:<?php echo $height; ?>px;width:<?php echo $sidebarWidth; ?>px;}
#navi-outer ul {margin:-1px 0 0 0;padding:0;list-style:none;background:none;text-align:left;}
#navi-outer li {display:inline;padding:0;margin:0;border:none;height:72px;list-style:none;background:none;}
#navi-outer li.noimages {display:none;}
#navi-outer li a {display:block;padding:4px 12px;margin:0;text-decoration:none;font-size:11px;color:#fff;background:#505050 url(../images/nav.gif) repeat-x bottom;border-top:1px solid #5c5a5b;height:68px;overflow:hidden;}
#navi-outer li a:hover,
#navi-outer li a.navi-active {display:block;padding:4px 12px;margin:0;text-decoration:none;font-size:11px;color:#fff;background:#d2d2d2 url(../images/nav-active.gif) repeat-x bottom;border-top:1px solid #6a6a6a;height:68px;overflow:hidden;}
#navi-outer li a span.navbar-img,
#navi-outer li a:hover span.navbar-img,
#navi-outer li a.navi-active span.navbar-img {display:block;width:65px;height:40px;overflow:hidden;background:#232323;border:2px solid #232323;margin:4px 4px 0 0;padding:0;float:right;}
#navi-outer li a span.navbar-img img {opacity:0.6;-moz-opacity:0.6;filter:alpha(opacity=60);width:65px;height:auto;}
#navi-outer li a:hover span.navbar-img img,
#navi-outer li a.navi-active span.navbar-img img {opacity:1.0;-moz-opacity:1.0;filter:alpha(opacity=100);width:65px;height:auto;}
#navi-outer li a span.navbar-key {display:none;}
#navi-outer li a span.navbar-title {font-weight:bold;font-size:12px;display:block;margin:0 0 4px;padding:0;color:#fff;line-height:13px;}
#navi-outer li a span.navbar-tagline {font-weight:normal;color:#f2f2f2;margin:0;padding:0;font-size:11px;line-height:12px;}
#navi-outer li a:hover span.navbar-tagline,
#navi-outer li a.navi-active span.navbar-tagline {font-weight:normal;color:#333;}
span.navbar-clr {display:block;clear:both;}

/* --- Notice: Add custom text styling here to overwrite your template's CSS styles! --- */
.fpss-introtext .slidetext h1 {font-size:28px;line-height:28px;margin:0;padding:20px 0 2px 0;color:#fff;}
.fpss-introtext .slidetext h1 a {font-size:28px;margin:0;padding:0;color:#fff;text-decoration: none;}
.fpss-introtext .slidetext h1 a:hover {font-size:28px;margin:0;padding:0;color:#c00;}
.fpss-introtext .slidetext h2 {font-size:11px;margin:0;padding:0;color:#bbb;font-weight:normal;}
.fpss-introtext .slidetext h3 {font-size:11px;margin:0 0 4px 0;padding:0;display:none;}
.fpss-introtext .slidetext p {margin:0;padding:8px 0;background:url(../images/dotted.gif) repeat-x bottom;color:#fff;}
.fpss-introtext .slidetext a.readon {position:absolute;left:8px;bottom:12px;width:100px;margin:0;padding:6px 0 6px 12px;/*background:url(../images/readmore.png) no-repeat;*/color:#fff;border:none;}
.fpss-introtext .slidetext a.readon:hover {position:absolute;left:8px;bottom:12px;width:100px;margin:0;padding:6px 0 6px 12px;/*background:url(../images/readmore-hover.png) no-repeat;*/color:#fff;border:none;}

/* --- Generic Styling (highly recommended) --- */
#fpss-outer-container a:active,
#fpss-outer-container a:focus {outline:0;}
#fpss-container img {border:none;}
.fpss-introtext .slidetext img,
.fpss-introtext .slidetext p img {display:none;} /* this will hide images inside the introtext */
.fpss-clr {clear:both;height:0;line-height:0;}

/* --- End of stylesheet --- */

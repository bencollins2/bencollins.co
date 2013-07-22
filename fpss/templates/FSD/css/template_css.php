<?php
if(!isset($fpssTemplateIncluded)){
	header("Content-type: text/css; charset: UTF-8");
	$width = (int) $_GET['w'];
	$height = (int) $_GET['h'];
	$sidebarWidth = (int) $_GET['sw'];
}
?>
/**
 * @version		$Id: template_css.php 125 2010-09-28 21:22:02Z joomlaworks $
 * @package		Frontpage Slideshow (standalone)
 * @author		JoomlaWorks http://www.joomlaworks.gr
 * @copyright	Copyright (c) 2006 - 2010 JoomlaWorks, a business unit of Nuevvo Webware Ltd. All rights reserved.
 * @license		Commercial - This code cannot be redistributed without permission from Nuevvo Webware Ltd.
 */

/* --- Slideshow Containers --- */
#fpss-outer-container {/*clear:both;*/width:<?php echo $width+$sidebarWidth; ?>px;margin:13px auto;padding:0 0px;/*border:1px dashed #777;background:#fff;*/}
#fpss-container {/*clear:both;*/margin:0;padding:0;position:relative;width:<?php echo $width+$sidebarWidth; ?>px;}
#fpss-slider {overflow:hidden;background:none;/*clear:both;*/width:<?php echo $width; ?>px;height:<?php echo $height; ?>px;}

/* --- Slideshow Block --- */
.slide {position:absolute;right:0;width:<?php echo $width+$sidebarWidth; ?>px;}
#slide-wrapper {display:none;font-size:11px;text-align:left;width:<?php echo $width; ?>px;height:<?php echo $height; ?>px;}
#slide-loading {background:#fff url(../images/loading.gif) no-repeat center;text-align:center;margin-left:<?php echo $sidebarWidth; ?>px;width:<?php echo $width; ?>px;height:<?php echo $height; ?>px;}
#slide-outer {height:<?php echo $height; ?>px;}
#slide-outer .slide-inner {margin:0;color:#fff;overflow:visible;height:<?php echo $height; ?>px;}
#slide-outer .slide-inner a.fpss_img {display:block;margin:0 0 0 <?php echo $sidebarWidth; ?>px;padding: 0 0 0 1px;border:1px solid #7b7b7b;overflow:hidden;
	-moz-box-shadow: 6px 6px 8px #ddd;
	-webkit-box-shadow: 6px 6px 8px #ddd;
	box-shadow: 6px 6px 8px #ddd;*
}
#slide-outer .slide-inner a.fpss_img span {display:block;margin:0 0;overflow:hidden;height:<?php echo $height; ?>px;position:relative;}
#slide-outer .slide-inner a.fpss_img span span {margin:0;}
#slide-outer .slide-inner a.fpss_img span span span {background:url(../images/readmore.png) no-repeat right bottom;}
#slide-outer .slide-inner a.fpss_img span span span img {display:none;}

/* --- Content --- */
.fpss-introtext {font: 13px/1.5 'Helvetica Neue',Arial,'Liberation Sans',FreeSans,sans-serif;margin:0;padding:0;position:absolute;top:0;left:0;overflow:hidden;/*background:#fff;*/width:<?php echo $sidebarWidth-10; ?>px;height:<?php echo $height-80; ?>px;}
.fpss-introtext .slidetext {padding:0px 8px 4px 2px;margin-top:-5px;}

/* --- Navigation Buttons --- */
#navi-outer {position:absolute;bottom:0;left:-13px;/*clear:both;*/margin:8px 0 0px 0;padding:0;width:<?php echo $sidebarWidth; ?>px;overflow:visible;display:block;}
#navi-outer ul {margin:0;padding:0 16px;text-align:right;}
#navi-outer li {display:inline;background:none;padding:0;margin:0;}
#navi-outer li a,#navi-outer li a:hover,#navi-outer li a.navi-active {display:block;float:left;overflow:hidden;width:30px;height:30px;padding:0;margin:2px;text-decoration:none;line-height:40px;background:#fff;}
#navi-outer li a {border:1px solid #999;}
#navi-outer li a:hover {border:1px solid #000;}
#navi-outer li a.navi-active {border:1px solid #000;}
#navi-outer li a img,#navi-outer li a:hover img,#navi-outer li a.navi-active img {height:180px;width:auto;display:block;margin:-5px 0 0 -55px;}
#navi-outer li a img {opacity:.3;-moz-opacity:0.6;filter:alpha(opacity=60);}
#navi-outer li a:hover img {opacity:1.0;-moz-opacity:1.0;filter:alpha(opacity=100);}
#navi-outer li a.navi-active img {opacity:1.0;-moz-opacity:1.0;filter:alpha(opacity=100);}
#navi-outer li a span.navbar-img {}
#navi-outer li a span.navbar-key {padding:0 2px;margin:-180px 8px 0 0;font-weight: bold;float:right;z-index:100;color:#474747;}
#navi-outer li a span.navbar-title {display:none;}
#navi-outer li a span.navbar-tagline {display:none;}
#navi-outer li a span.navbar-clr {display:none;}
#navi-outer li.noimages {display:none;}

/* --- Notice: Add custom text styling here to overwrite your template's CSS styles! --- */
.fpss-introtext .slidetext h1 {margin:0 0 5px;padding:0;color:#6D6D6D;line-height:22px;}
.fpss-introtext .slidetext h1 a {font-size:18px;color:#6D6D6D;text-decoration: none;}
.fpss-introtext .slidetext h1 a:hover {font-size:18px;color:#05B5BD;}
.fpss-introtext .slidetext h2 {font-size:12px;margin:0 0 10px;padding:0;color:#999;}
.fpss-introtext .slidetext h3 {font-size:11px;margin:0;padding:0;display:none;}
.fpss-introtext .slidetext p {margin:0;padding:0;color:#6D6D6D;}
.fpss-introtext .slidetext a.readon {display:none;}
.fpss-introtext .slidetext a.readon:hover {display:none;}

/* --- Generic Styling (highly recommended) --- */
#fpss-outer-container a:active,
#fpss-outer-container a:focus {outline:0;}
#fpss-container img {border:none;}
.fpss-introtext .slidetext img,
.fpss-introtext .slidetext p img {display:none;} /* this will hide images inside the introtext */
.fpss-clr {/*clear:both;*/height:0;line-height:0;}

/* --- End of stylesheet --- */
<?php 

	header("Content-type: text/css");
	
//	$color1 = ($_GET['c1']) ? $_GET['c1'] : '05B5BD';
	$color1 = ($_GET['c1']) ? $_GET['c1'] : '1CBFFF';
	$color2 = ($_GET['c2']) ? $_GET['c2'] : '9D0000';
	$color3 = ($_GET['c3']) ? $_GET['c3'] : '05B5BD';
	$color4 = ($_GET['c4']) ? $_GET['c4'] : '00BD00';
	$color5 = ($_GET['c5']) ? $_GET['c5'] : 'E0FFFF';
	$main = $_GET['main'] ? $_GET['main'] : $color1;

?>
@charset "UTF-8";
/* CSS Document */

html {
	
}

body {
/*	background: #F5F5ED;*/
/*	background: #EDEDED;
*/	
	font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;	
/*	border-top: 10px solid #6D6D6D;*/
}

a {
	color: #<?= $main?>;
	text-decoration: none;
}

a:hover {
	text-decoration: underline;	
}

a.contact {
	color: #<?= $color5?>;	
}

h1 {
	color: #393939;
	font-size: 25px;	
	margin: 0 0 10px;	
}

h1.top {
	margin: 0 0 24px;	
}

h2 {
/*	color: #6d6d6d;
*/	color: #494949;
	font-size: 16px;
	margin-bottom: 7px;
}

ul {
	margin: 0;
	padding: 0;
}	

ul li {
	color: #888;
	list-style: none;
	margin: 3px 0 0 15px;	
}

.container_12 {
}

p.car {
	/*width: 690px;*/
}

.carcontact {
	padding-top: 45px;
    font-size: 1.35em;
    font-weight: lighter;
}

span.fullscreen {
	display: block;
    position: absolute;
    bottom: 21px;
    left: 3px;
    width: 127px;
    background-color: white;
    padding: 0 4px;
    pointer-events: none;
}

div.top {
	height: 9px;
	margin: 0 0 30px 0;
	/*background: #6D6D6D;
	-moz-box-shadow: 0px 6px 6px #ddd;
	-webkit-box-shadow: 0px 6px 6px #ddd;
	box-shadow: 0px 0px 0px #ddd;*/
	background: url(top_gr.gif) top left repeat-x;
	border-top: 6px solid #393939;
}

div.feature {
	border-top: thin solid #ccc;	
	padding: 40px 0 20px 0;
	border-bottom: thin solid #ccc;	
	background: url('feature.gif') repeat-x top left #eee;
	margin: 0 0 25px;
/*	-moz-box-shadow: -10px 0px 10px #e7e7e7;
	-webkit-box-shadow: -10px 0px 10px #e7e7e7;
	box-shadow: -10px 0px 10px #ddd;*/
}

div.frontfeature {
	text-align: right;
	height: 380px;	
	margin-top: 16px;
}

div.separator {
	border-top: thin solid #6D6D6D;	
	padding-top: 30px;
}

div.get span {
	display: none;	
}

div#diagram {
	position: relative;
	margin-top: -40px;
}

h2.pagetitle {
	color: #<?= $color1;?>;	
	font-family: Times New Roman, Times, sans-serif;
	font-style: italic;
	font-weight: 100;
}

p {
	color: #6D6D6D;	
}

div.grey {
	border-bottom: thin solid #C1C1C1;	
}

div.name {	
	margin: 15px 0 0 6px;
}

span.first {
	color: #6D6D6D;
}

span.last {
	color: #393939;
}

span.media {
	color: #<?= $main;?>;
    font-family: Times New Roman, Times, serif;
    font-style: italic;
    font-size: 14px;
    display: block;
    width: 40px;
    position: absolute;
    top: 64px;
    left: 349px;
}

img.logo-bg {
	background-color: #<?= $main;?>;	
}

div.quote {
	color: #6D6D6D;
	font-weight: 200;
	margin: -6px 0 0 8px;
	padding: 0;
	/*font-family: Times New Roman, Times, serif;
	font-style: italic;*/
	font-size: 14px;
	clear: left;	
}

div.nav {
	text-align: right;	
	margin: 85px 10px 0;
	float: right;
	/*font-family: "Times New Roman", Times, serif;*/
}

div.nav ul {
	float: right;
	height: 25px;
		
}

div.nav ul li{
	list-style: none;
	display: inline;
	font-size: 15px;
	color: #aaa;	
	width: 10px;
	font-weight: 200;
}

li {
	margin-left: 23px;	
}

div.nav ul li a.current {
	border: thin solid #ccc;	
	background-color: #eee;
	padding: 0 4px 2px 4px;
    border-radius: 3px;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
}

li.home {
	background: url('home.png') no-repeat scroll left top #<?= $color1?>;
	padding-left: 22px;
}

li.design {
	background: url('design.png') no-repeat scroll left top #<?= $color2?>;
	padding-left: 22px;
}

li.code {
	background: url('code.png') no-repeat scroll left -1px #<?= $color3?>;
	padding-left: 22px;
}

li.audio {
	background: url('audio.png') no-repeat scroll left top #<?= $color4?>;
	padding-left: 22px;
}

li.contact {
	background: url('contact.png') no-repeat scroll left -1px #<?= $color5?>;
	padding-left: 22px;
}

li.audio a {
	background: #fff;
		
}

div.nav ul a.current {
	color:#393939;	
	/*font-weight: 400;*/
	
}

div.nav ul li a{
/*	font-style: italic;
*/	text-decoration: none;
	color: #6D6D6D;	
	
}

div#foot {
	padding: 0 0 20px 0;
	margin: 10px 0 0;
	width: 100%;
	color: white;
	min-height: 80px;
	background: url(bottom.gif) top left repeat-x #393939;
}

div#foot ul li a {
	margin: 0 0 0 4px;
}

div#foot ul li a img {
	padding: 2px;
    border: thin solid #777;
}

div#innerfoot {
	width: 940px;
	margin: 10px auto 10px;
	padding: 24px 10px 0;	
}

div.audio, div.design {
	margin-top: 27px;	
}

div.grid_4 img {
	
}

div.audio div.grid_4, div.design div.grid_4 {
	min-height: 292px;	
	margin: 0 10px 50px 10px;
}

div.audio div.grid_4 img, div.design div.grid_4 img {
	width: 300px;
	border: thin solid #999;
	padding: 1px;
}	
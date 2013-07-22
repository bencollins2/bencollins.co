<?php

	$color1 = ($_GET['c1']) ? $_GET['c1'] : '1CBFFF';
	$color2 = ($_GET['c2']) ? $_GET['c2'] : '9D0000';
	$color3 = ($_GET['c3']) ? $_GET['c3'] : '05B5BD';
	$color4 = ($_GET['c4']) ? $_GET['c4'] : '00BD00';
	$color5 = ($_GET['c5']) ? $_GET['c5'] : 'FF9600';
	
	$main = $color3;

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Ben Collins</title>
<link rel="shortcut icon" href="favicon.ico" />
<link rel="stylesheet" href="http://bencollins.co/css/reset.css" />
<link rel="stylesheet" href="http://bencollins.co/css/text.css" />
<link rel="stylesheet" href="http://bencollins.co/css/960.css" />
<link rel="stylesheet" href="http://bencollins.co/css/ben.php?c1=<?= $color1?>&c2=<?= $color2?>&c3=<?= $color3?>&c4=<?= $color4?>&c5=<?= $color5?>&main=<?= $main?>" />

<script src="http://code.jquery.com/jquery-1.5.js"></script>
<script src="http://bencollins.co/script/jquery.color.js"></script>

</head>
<body>

<div class="top"></div>

<div class="container_12">
		
       
        <!--div class="grey"></div-->
        <div class="grid_6 name">
            <h1 class="top"><img class="logo-bg" src="http://bencollins.co/css/logo_transp.png" /><!--span class="first">ben</span><span class="last">collins</span--><span class="media"> media</span><div class="quote">&#8220;LAMP for fun and profit.&#8221;</div></h1>
        </div>
        
        <div class="grid_6 nav">
            <ul>
                <li class="home">
                    <a href="http://bencollins.co">Home</a>
                </li>
                <li class="design">
                    <a href="http://bencollins.co/design">Design</a>
                </li>
                <li class="code">
                    <a class="current" href="http://bencollins.co/code">Code</a>
                </li>
                <li class="audio">
                    <a href="http://bencollins.co/audio">Audio</a>
                </li>
                <li class="contact">
                    <a href="mailto:bencollins2@gmail.com">Contact</a>
                </li>
            </ul>
        </div>
	<div class="clear"></div>
</div>

<!--div class="separator"></div-->
    



<div class="feature">
	<div class="container_12">
   	 <div class="grid_4">
    	<h1>Code</h1>
        
        <p>My experience as a "web-person" started with back-end development.  I've worked mainly in PHP and MySQL, and lightly with numerous other methods of database interaction (.NET, ColdFusion, Ruby).</p>
       

	 </div>
    <div class="clear"></div>
   </div>
    
  </div>
<div class="container_12">   
     <div class="clear"></div>
   <div class="design">
	<div class="grid_4">
        <h2>News Service</h2>
        <p><i>Still in Production</i><br />(Joomla template creation, ZOO CCK integration)</p>
        <a href="http://ns.umich.edu"><img src="http://bencollins.co/img/ns.jpg" /></a>
    </div>
    
    <div class="grid_4">
        <h2>Michigan Today</h2>
        <p>Online magazine<br />(Built issue-based CMS from the ground-up)</p>
        <a href="http://michigantoday.umich.edu"><img src="http://bencollins.co/img/mt.jpg" /></a>
    </div>
    
    <div class="grid_4">
        <h2>U-M "Books" System</h2>
        <p>University publications<br />(Built CMS from the ground-up)</p>
        <a href="http://ns.umich.edu/books"><img src="http://bencollins.co/img/books.jpg" /></a>
    </div>
    
    <div class="grid_4">
        <h2>U-M Stem Cell Research</h2>
        <p>News and research updates from U-M<br />(Mostly maintenance, design tweaks)</p>
        <a href="http://www.umich.edu/stemcell"><img src="http://bencollins.co/img/stem.jpg" /></a>
    </div>

   </div>
    


</div>
<!-- end .container_12 -->
<div class="clear"></div>
<? include('../foot.php');?>

</body>

<script>
$hoverColor = "#<?= $color1?>";

$(function(){	
	
	$( ".nav li a" ).hover(function(){
		
		if ($(this).data('color') == undefined) { 
			$(this).data('color', $(this).css('color')) 
		}
		
		if ($('img.logo-bg').data('background-color') == undefined) { 
			$('img.logo-bg').data('background-color', $('img.logo-bg').css('backgroundColor')) 
		}
		
		if ($('span.media').data('color') == undefined) { 
			$('span.media').data('color', $('span.media').css('color')) 
		}
		
		if ($('div.top').data('color') == undefined) { 
			$('div.top').data('color', $('div.top').css('border-top-color')) 
		}
		
		$parentcolor = $(this).parent().css('backgroundColor');
		
		//alert($(this).data('color'));
		
		$(this).stop()
		.css({"color": $(this).data("color")})
		.animate({color: $parentcolor}, 300);
				
		$("img.logo-bg")//.stop
		//.css({"backgroundColor": $("img.logo-bg").data("background-color")})
		.animate({backgroundColor: $parentcolor}, 300);
		
		$("span.media")//.stop
		//.css({"backgroundColor": $("img.logo-bg").data("background-color")})
		.animate({color: $parentcolor}, 300);
		
		$("div.top")
		.animate({borderTopColor: $parentcolor}, 300);
	
	}, function (){
		$(this).stop()
		.animate({color: $(this).data('color')}, 250);	
		
		$("img.logo-bg").stop()
		.animate({backgroundColor: $("img.logo-bg").data("background-color")}, 250);
		
		$("span.media").stop()
		.animate({color: $("span.media").data("color")}, 250);
		
		$("div.top").stop()
		.animate({borderTopColor: $("div.top").data("color")}, 250);
	});
});
</script>


</html>
<?php

	$color1 = ($_GET['c1']) ? $_GET['c1'] : '1CBFFF';
	$color2 = ($_GET['c2']) ? $_GET['c2'] : '9D0000';
	$color3 = ($_GET['c3']) ? $_GET['c3'] : '05B5BD';
	$color4 = ($_GET['c4']) ? $_GET['c4'] : '00BD00';
	$color5 = ($_GET['c5']) ? $_GET['c5'] : 'FF9600';
	
	$main = $color4;

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
            <h1 class="top"><img class="logo-bg" src="http://bencollins.co/css/logo_transp.png" /><!--span class="first">ben</span><span class="last">collins</span--><span class="media"> media</span><div class="quote">&#8220;Making things sound less bad.&#8221;</div></h1>
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
                    <a href="http://bencollins.co/code">Code</a>
                </li>
                <li class="audio">
                    <a class="current" href="http://bencollins.co/audio">Audio</a>
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
    	<h1>Audio</h1>
        
        <p>My degree is in Performing Arts Technology,	 from the University of Michigan School of Music.  I mix and master with <a href="http://apple.com/logic">Logic 9 Studio</a>.  Here is some of my work:</p>
       

	 </div>
    <div class="clear"></div>
   </div>
    
  </div>
<div class="container_12">   
     <div class="clear"></div>
   <div class="audio">
	<div class="grid_4">
        <h2>Lightning Love</h2>
        <p>November Birthday<br />(tracking, mixing, some mastering)</p>
        <a href="http://lightninglove.com"><img src="http://bencollins.co/img/ll_nb.jpg" /></a>
    </div>
    
    <div class="grid_4">
        <h2>Starry Eyed Dreamers</h2>
        <p>Start Evil<br />(tracking, mixing)</p>
        <a href="http://starryeyeddreamers.com"><img src="http://bencollins.co/img/sed_se.jpg" /></a>
    </div>
    
    <div class="grid_4">
        <h2>Gun Lake</h2>
        <p>Balfour <br />(mixing, production)</p>
        <a href="http://gunlake.bandcamp.com"><img src="http://bencollins.co/img/gl_b.jpg" /></a>
    </div>

    <div class="grid_4">
        <h2>Ben Collins</h2>
        <p>Feel Good Garden<br />(songwriting, tracking, mixing)</p>
        <a href="http://ghoststori.es/album/feel-good-garden-demos"><img src="http://bencollins.co/img/bc_fgg.jpg" /></a>
    </div>
        
    <div class="grid_4">
        <h2>The Hounds Below</h2>
        <p>Self titled<br />(mixing, production)</p>
        <a href="http://thehoundsbelow.bandcamp.com"><img src="http://bencollins.co/img/hb_st.jpg" /></a>
    </div>
    
    <div class="grid_4">
        <h2>Ben Collins</h2>
        <p>Ghost Stories <br />(songwriting, tracking, mixing)</p>
        <a href="http://ghoststori.es/album/ghost-stories"><img src="http://bencollins.co/img/bc_gs.jpg" /></a>
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
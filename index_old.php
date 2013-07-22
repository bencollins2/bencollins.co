<?php

	$color1 = ($_GET['c1']) ? $_GET['c1'] : '1CBFFF';
	$color2 = ($_GET['c2']) ? $_GET['c2'] : '9D0000';
	$color3 = ($_GET['c3']) ? $_GET['c3'] : '05B5BD';
	$color4 = ($_GET['c4']) ? $_GET['c4'] : '00BD00';
	$color5 = ($_GET['c5']) ? $_GET['c5'] : 'FF9600';
	

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Ben Collins</title>
<link rel="stylesheet" href="css/reset.css" />
<link rel="stylesheet" href="css/text.css" />
<link rel="stylesheet" href="css/960.css" />
<link rel="stylesheet" href="css/ben.php?c1=<?= $color1?>&c2=<?= $color2?>&c3=<?= $color3?>&c4=<?= $color4?>&c5=<?= $color5?>&" />

<script src="script/jquery.js"></script>
<script src="script/jquery.color.js"></script>
<script src="script/raphael.js" type="text/javascript"></script>
<script src="script/init.js" type="text/javascript"></script>

</head>
<body>

<div class="top"></div>

<div class="container_12">
		
       
        <!--div class="grey"></div-->
        <div class="grid_6 name">
            <h1 class="top"><img class="logo-bg" src="css/logo_transp.png" /><!--span class="first">ben</span><span class="last">collins</span--><span class="media"> media</span><div class="quote">&#8220;Web things, and other stuff.&#8221;</div></h1>
        </div>
        
        <div class="grid_6 nav">
            <ul>
                <li class="home">
                    <a class="current" href="index.php">Home</a>
                </li>
                <li class="design">
                    <a href="design.php">Design</a>
                </li>
                <li class="code">
                    <a href="code.php">Code</a>
                </li>
                <li class="audio">
                    <a href="audio.php">Audio</a>
                </li>
                <li class="contact">
                    <a href="mailto:bencollins2@gmail.com">Contact</a>
                </li>
            </ul>
        </div>
	<div class="clear"></div>
</div>

<!--div class="separator"></div-->
    
<div class="full feature frontfeature">
    <div class="container_12">
        <div class="grid_12 slideshow">
            <?php
                include_once('slideconnect.php');
                
                ?>
        </div>
        <div class="clear"></div>
    </div>
</div>

<div class="container_12">
    <div class="grid_4">
    	<h1>Hello,</h1><h2>my name is Ben Collins.</h2>
        <p>I'm a web designer, developer, and media-maker.</p>
        <p>I have a degree in <i>performing arts technology</i> from the University of Michigan, who also happens to be my employer.  I design websites for the U-M News Service.</p>
        <p>I'm also a mixing/mastering engineer.  Please see the <a href="audio">audio</a> section for more.</p>
        <p><h2>Feel free to <a class="contact" href="mailto:bencollins2@gmail.com">contact me</a> with any questions!</h2></p>
  	</div>
    
  
    
    <div class="grid_3">
        <div id="content">
			<div id="diagram"></div>
		</div>

		<div class="get">
			<div class="arc">
				<span class="text">HTML</span>
				<input type="hidden" class="percent" value="90" />
				<input type="hidden" class="color" value="#<?= $color5;?>" />
			</div>
			<div class="arc">
				<span class="text">CSS</span>
				<input type="hidden" class="percent" value="84" />
				<input type="hidden" class="color" value="#<?= $color2;?>" />
			</div>
			<div class="arc">
				<span class="text">PHP</span>
				<input type="hidden" class="percent" value="50" />
				<input type="hidden" class="color" value="#<?= $color3;?>" />
			</div>
			<div class="arc">
				<span class="text">Audio</span>
				<input type="hidden" class="percent" value="87" />
				<input type="hidden" class="color" value="#<?= $color4;?>" />
			</div>
			<div class="arc">
				<span class="text">Graphing my skills</span>
				<input type="hidden" class="percent" value="30" />
				<input type="hidden" class="color" value="#<?= $color1;?>" />
			</div>
		</div>
        
  	</div>
     <div class="clear"></div>
   
</div>
<!-- end .container_12 -->
<div class="clear"></div>
<div id="foot">

    <div id="innerfoot">
    </div>

</div>
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
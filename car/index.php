<?php

	$color1 = ($_GET['c1']) ? $_GET['c1'] : '1CBFFF';
	$color2 = ($_GET['c2']) ? $_GET['c2'] : '9D0000';
	$color3 = ($_GET['c3']) ? $_GET['c3'] : '05B5BD';
	$color4 = ($_GET['c4']) ? $_GET['c4'] : '00BD00';
	$color5 = ($_GET['c5']) ? $_GET['c5'] : 'FF9600';
	
	$main = $color2;

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
            <h1 class="top"><img class="logo-bg" src="http://bencollins.co/css/logo_transp.png" /><!--span class="first">ben</span><span class="last">collins</span--><span class="media"> media</span><div class="quote">Info on my car accident (unlisted)</div></h1>
        </div>
        
        <div class="grid_6 nav">
            <ul>
                <li class="home">
                    <a href="http://bencollins.co/">Home</a>
                </li>
                <li class="design">
                    <a href="http://bencollins.co/design">Design</a>
                </li>
                <li class="code">
                    <a href="http://bencollins.co/code">Code</a>
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
   	 <div class="grid_8">
    	 <h1>To whom it may concern...</h1>
        <p class="car">When you look at the final report from my breath alcohol interlock device, you may see that on two occasions, the battery voltage was not sufficient to start the car. I understand that this can constitute a violation, so I'm writing to explain and document exactly why this happened.</p>
      	<p class="car">At some point between <i>March 13, 2012</i> and <i>March 19, 2012</i>, my car was struck on the side of the road where it was parked. I had left my car there for a few days to do some work out of town.</p>

		<p class="car">As a result, the driver-side of the car was completely smashed in. The car also appeared to hop-up onto the curb from the impact, and the passenger-side tires were damaged in the process.</p>

		<p class="car">I left my car on the curb for a few days to sort out the insurance situation. It was then towed away (I guess it was reported as abandoned, which I suppose is understandable based on how it looked). I was able to drive it home from the tow yard, but the car was shaking and I decided it wasn't generally safe to drive.</p>

		<p class="car">The car sat on the road from the beginning of April until my mandatory calibration on <i>May 2nd</i>. To avoid a mobile fee, I decided to take a chance and drive it over to the shop.</p>

		<p class="car">When I tried to start the car, the engine failed to fully turn over. I blew into the device again and it read a low voltage. I proceeded to try and jump the car to no avail. Finally, I put the car on a battery charger for a little while, and after some time I was able to start it and drive to my calibration.</p>

		<p class="car">On May 14th, I needed to bring the vehicle back to the shop to pull my final report. I had the same trouble starting the car, so I put it on the charger. This time, it was enough to start it on the second try.</p>

		<p class="car">The whole situation has been a bit of a headache, as you might imagine. To think that a hit and run might indirectly cause me a BAID violation is beyond frustrating, so please feel free to contact me if anything is unclear.</p>
		
	 </div>
     <div class="grid_4 carcontact">
        <p>
            <strong>Ben Collins</strong><br />
            (734) 223-5428<br />
            2324 Nixon rd<br />
            Ann Arbor, MI<br />
       		48105
        </p>
        <p>
            Ypsilanti police report number: 12-3796<br />
            Insurance claim number: 1021109246 <br />
            Original DUI case number: DR1-11-0000097<br />
        </p>
     </div>
     
    <div class="clear"></div>
   </div>
    
  </div>
<div class="container_12">   
     <div class="clear"></div>
   <div class="design">
	<div class="grid_4">
        <h2>Accident image one</h2>
        <p>North Huron and Cross, Ypsilanti MI</p>
        <a href="img/Accident1.jpg"><img src="img/Accident1_sm.jpg" /></a>
        <span class="fullscreen">Click for full screen...</span>
    </div>
    
    <div class="grid_4">
        <h2>Accident image two</h2>
        <p>North Huron and Cross, Ypsilanti MI</p>
        <a href="img/claim.jpg"><img src="img/Accident2_sm.jpg" /></a>
        <span class="fullscreen">Click for full screen...</span>
    </div>
    
    <div class="grid_4">
        <h2>Police report page one</h2>
        <p>Page one (<a href="img/Police_Report_1.pdf">View PDF</a>)</p>
        <a href="img/Police_Report_1.jpg"><img src="img/Police_Report_1_sm.jpg" /></a>
        <span class="fullscreen">Click for full screen...</span>
    </div>

    <div class="grid_4">
        <h2>Police report page two</h2>
        <p>Page two (<a href="img/Police_Report_2.pdf">View PDF</a>)</p>
        <a href="img/Police_Report_2.jpg"><img src="img/Police_Report_2_sm.jpg" /></a>
        <span class="fullscreen">Click for full screen...</span>
    </div>
    
    <div class="grid_4">
        <h2>Insurance damage estimate</h2>
        <p>(<a href="img/claim.pdf">View PDF</a>)</p>
        <a href="img/claim.jpg"><img src="img/claim_sm.jpg" /></a>
        <span class="fullscreen">Click for full screen...</span>
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
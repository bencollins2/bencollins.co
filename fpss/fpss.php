<?php
/**
 * @version		$Id: fpss.php 200 2010-12-29 20:00:05Z joomlaworks $
 * @package		Frontpage Slideshow (standalone)
 * @author		JoomlaWorks http://www.joomlaworks.gr
 * @copyright	Copyright (c) 2006 - 2010 JoomlaWorks, a business unit of Nuevvo Webware Ltd. All rights reserved.
 * @license		Commercial - This code cannot be redistributed without permission from Nuevvo Webware Ltd.
 */

// Defines
define('DS',DIRECTORY_SEPARATOR);
define('SITE_URL',$siteURL);
define('SITE_PATH',$sitePath);

// Includes
require_once(dirname(__FILE__).DS.'slideshows'.DS.$slideshow.DS.'parameters.php');
require_once(dirname(__FILE__).DS.'slideshows'.DS.$slideshow.DS.'data.php');
require_once(dirname(__FILE__).DS.'languages'.DS.$fpsslanguage.'.php');
require_once(dirname(__FILE__).DS.'includes'.DS.'helper.php');

// JoomlaWorks reference parameters
$mod_copyrights_start   = "\n\n<!-- JoomlaWorks \"Frontpage Slideshow (standalone)\" (v2.1) starts here -->\n";
$mod_copyrights_end     = "\n<!-- JoomlaWorks \"Frontpage Slideshow (standalone)\" (v2.1) ends here -->\n\n";

// Parameters
$fpssTemplate 								= $fpssTemplate; // Default value: 'Movies'
$fpssEngine 									= $fpssEngine; // Default value: 'jquery'
$fpssJSLibrary								= (int) $fpssJSLibrary; // Default value: 1
$width 												= (int) $width; // Default value: 500
$height 											= (int) $height; // Default value: 308
$sidebarWidth 								= (int) $sidebarWidth; // Default value: 200
$hideNavigation 							= (int) $hideNavigation; // Default value: 0
$delay 												= (int) $delay; // Default value: 6000
$transition 									= (int) $transition; // Default value: 1000
$loadingTime 									= (int) $loadingTime; // Default value: 800
$autoStart 										= ($autoStart) ? 'true' : 'false';
$rotateAction 								= $rotateAction; // Default value: 'click'
$mootoolsTextTransition 			= ($mootoolsTextTransition) ? 'true' : 'false';
$mootoolsTextTransitionTime 	= (int) $mootoolsTextTransitionTime; // Default value: 1000
$fpssOrdering 								= (int) $fpssOrdering; // Default value: 1
$fpssSlideLimit 							= (int) $fpssSlideLimit;
$fpssSlideTextWordLimit 			= (int) $fpssSlideTextWordLimit;
$fpssSlideLinksDisable				= (int) $fpssSlideLinksDisable; // Default value: 0
$fpssCssInclusionMethod				= (int) $fpssCssInclusionMethod; // Default value: 0
$debugMode										= (int) $debugMode; // Default value: 1
if($debugMode==0) error_reporting(0); // Turn off all error reporting

// Hide the navigation bar if requested
if($hideNavigation){
	$sidebarWidth = 0;
	$hideNavigationCSS = '#navi-outer {display:none;}';
} else {
	$hideNavigationCSS = '';
}

// Loop through the slideshow contents
foreach($slides as $count=>$slide){

	// Perform slide limit
	if($fpssSlideLimit && $count>=$fpssSlideLimit) continue;
	
	// Use slide IDs for indexing the array
	$key = $count+1;

	// Slide name
	$output[$key]->name = $slide->title;

	// Slide name used in alt attributes
	$output[$key]->altname = htmlentities($output[$key]->name, ENT_QUOTES, 'UTF-8');
	
	// Slide link
	if($slide->link){
		$output[$key]->link = JWFrontpageSlideshowHelper::ampReplace($slide->link);
	} else {
		$output[$key]->link = 'javascript:void(0);';
	}
	
	// Slide link target
	$output[$key]->target = ($slide->linkOpensInNewWindow && $output[$key]->link != 'javascript:void(0);') ? ' target="_blank"' : '' ;

	// Slide text
	$output[$key]->text = $slide->text;

	// Slide tagline
	$output[$key]->tagline = strip_tags($slide->tagline);
	
	// Slide "read more..." link
	$output[$key]->readMore = $slide->showReadMore;

	// Category
	$output[$key]->secCatPath = $slide->category;

	// Slide image (main)
	$output[$key]->mainImage = SITE_URL.'/fpss/slideshows/'.$slideshow.'/images/'.$slide->image;

	// Slide image (thumb)
	if($slide->thumbImage){
		$output[$key]->thumbImage = SITE_URL.'/fpss/slideshows/'.$slideshow.'/images/'.$slide->thumbImage;
	} else {
		$output[$key]->thumbImage = SITE_URL.'/fpss/slideshows/'.$slideshow.'/images/'.$slide->image;
	}
	
	// Slide counter
	if(($count+1) < 10) $output[$key]->counter = "0".($count+1); else $output[$key]->counter = $count+1;

	// Slide rotate action
	if($rotateAction=='mouseover'){
		$output[$key]->rotateAction = ' onclick="parent.location=\''.$output[$key]->link.'\';return false;"';
	} else {
		$output[$key]->rotateAction = '';
	}

	// --------------- Content processing ---------------
	// Word limit on slide text
	if($fpssSlideTextWordLimit) $output[$key]->text = JWFrontpageSlideshowHelper::wordLimiter($output[$key]->text,$fpssSlideTextWordLimit);
	
	// Hide slide content completely if the each slide content element is hidden as well
	if(!$slide->title && !$slide->category && !$slide->text && !$slide->tagline && !$slide->showReadMore){
		$output[$key]->content = false;
	} else {
		$output[$key]->content = true;
	}
	
	// Disable all slide links
	if($fpssSlideLinksDisable) $output[$key]->link = 'javascript:void(0);';
	
}

// Ordering
switch($fpssOrdering) {
	case 1: break;
	case 2: asort($output); 	break;
	case 3: arsort($output); 	break;
	case 4: shuffle($output); break;
}

// Load FPSS head includes
$fpssTemplatePath = SITE_URL.'/fpss/templates/'.$fpssTemplate;

// Define main CSS inclusion method
if($fpssCssInclusionMethod){
	ob_start();
	$fpssTemplateIncluded = true;
	include(SITE_PATH.DS.'fpss'.DS.'templates'.DS.$fpssTemplate.DS.'css'.DS.'template_css.php');
	$getFpssTemplate = ob_get_contents();
	ob_end_clean();
	$getFpssTemplate = "\n".str_replace('url(../images/','url(fpss/templates/'.$fpssTemplate.'/images/',$getFpssTemplate)."\n".$hideNavigationCSS;
	$getFpssTemplateWithJs = preg_replace("/\t|\r|\n/"," ",$getFpssTemplate);
	$getFpssTemplateWithJs = str_replace('\'','\\\'',$getFpssTemplateWithJs);
} else {
	$getFpssTemplate = '
	<!--
	@import "'.$fpssTemplatePath.'/css/template_css.php?w='.$width.'&h='.$height.'&sw='.$sidebarWidth.'";
	'.$hideNavigationCSS.'
	//-->
	';
	$getFpssTemplateWithJs = '@import "'.$fpssTemplatePath.'/css/template_css.php?w='.$width.'&h='.$height.'&sw='.$sidebarWidth.'"; '.$hideNavigationCSS;
}

?>

<?php echo $mod_copyrights_start; ?>
<?php if($fpssJSLibrary): ?>
<?php if($fpssEngine=='jquery'): ?>
<!-- Load jQuery 1.2.6 remotely -->
<script type="text/javascript" src="http://www.google.com/jsapi"></script>
<script type="text/javascript">google.load("jquery", "1.2.6");</script>
<?php elseif($fpssEngine=='mootools12'): ?>
<!-- Load Mootools 1.2 -->
<script type="text/javascript" src="<?php echo SITE_URL; ?>/fpss/includes/libraries/mootools-1.2.4-upgrade.js"></script>
<?php elseif($fpssEngine=='mootools'): ?>
<!-- Load Mootools 1.1 remotely -->
<script type="text/javascript" src="http://www.google.com/jsapi"></script>
<script type="text/javascript">google.load("mootools", "1.1");</script>
<?php endif; ?>
<?php endif; ?>
<script type="text/javascript">
	//<![CDATA[
	document.write('<style type="text/css" media="all"><?php echo $getFpssTemplateWithJs; ?></style>');
	//]]>
</script>
<!--[if lte IE 7]>
<link rel="stylesheet" href="<?php echo $fpssTemplatePath; ?>/css/template_css_ie.css" type="text/css" />
<![endif]-->
<script type="text/javascript" src="<?php echo SITE_URL; ?>/fpss/includes/engines/<?php echo $fpssEngine; ?>-fpss-comp.js"></script>
<script type="text/javascript">
	//<![CDATA[
	var fpssPlayText = "<?php echo TEXT_PLAY; ?>";
	var fpssPauseText = "<?php echo TEXT_PAUSE; ?>";
	var navTrigger = "<?php echo $rotateAction; ?>";
	var crossFadeDelay = <?php echo $delay; ?>;
	var crossFadeSpeed = <?php echo $transition; ?>;
	var fpssLoaderDelay = <?php echo $loadingTime; ?>;
	var autoslide = <?php echo $autoStart; ?>;
	var CTRtext_effect = <?php echo $mootoolsTextTransition; ?>;
	var CTRtransitionText = <?php echo $mootoolsTextTransitionTime; ?>;
	//]]>
</script>
<?php echo $mod_copyrights_end; ?>

<?php 
// Output content with template
echo $mod_copyrights_start;
require(SITE_PATH.DS.'fpss'.DS.'templates'.DS.$fpssTemplate.DS.'default.php');
echo JWFrontpageSlideshowHelper::setCrd();
echo $mod_copyrights_end;

// END

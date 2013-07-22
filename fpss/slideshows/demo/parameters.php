<?php
/**
 * @version		$Id: parameters.php 200 2010-12-29 20:00:05Z joomlaworks $
 * @package		Frontpage Slideshow (standalone)
 * @author		JoomlaWorks http://www.joomlaworks.gr
 * @copyright	Copyright (c) 2006 - 2010 JoomlaWorks, a business unit of Nuevvo Webware Ltd. All rights reserved.
 * @license		Commercial - This code cannot be redistributed without permission from Nuevvo Webware Ltd.
 */

/* --------------------------------------------------------------------------- */
/* ------------ Your parameters file for this slideshow instance. ------------ */
/* --------------------------------------------------------------------------- */

/* ----- LANGUAGE ----- */
$fpsslanguage = "english"; /* Language: Set your slideshow language here. Available choices: english, french. To add a new language file, simply copy the english.php file from the /fpss/includes/languages/ folder, rename it to your language, e.g. italian.php and then simply translate the related messages to your language. */

/* ----- SLIDESHOW PARAMETERS ----- */
$fpssTemplate = "FSD"; /* Select slideshow template: AVAILABLE CHOICES: Default, FSD, Movies, JJ-Obs, JJ-Rasper, Movies, Sleek, TT, Uncut - See them all live on: http://demo.joomlaworks.gr */
$fpssEngine = "jquery"; /* Select slideshow engine: Choose appropriately to avoid any javascript issues with other extensions or even your template! If you choose the jQuery based slideshow engine and you are already using or loading jQuery elsewhere, consider choosing the third option that does not load one more instance of the jQuery library. AVAILABLE CHOICES: jquery, mootools, mootools12 */
$fpssJSLibrary = 1; /* Include the Mootools 1.1/1.2 or jQuery 1.2.6 JavaScript library required by the slideshow. If you are already loading Mootools or jQuery (e.g. in Drupal or WordPress), set this option to 0 so you don't load additional instances of the same library. AVAILABLE CHOICES: 0 for "no", 1 for "yes". Default is 1. */
$width = "738"; /* Slideshow Width (in px): The width of the slideshow displaying on your site. */
$height = "340"; /* Slideshow Height (in px): The height of the slideshow displaying on your site. */
$sidebarWidth = "196"; /* Sidebar Width (in px - applies to certain FPSS templates only): Width of the sidebar in pixels. Applies to the 'Uncut', 'FSD', 'Movies' and 'Sleek' templates by default. This width will be added to the overall width of the slideshow or otherwise. */
$hideNavigation = "0"; /* Hide navigation bar?: Choose if you want to show or hide the navigation bar at the bottom of the slideshow. AVAILABLE CHOICES: 0 for "no", 1 for "yes". Default is 0. */
$delay = "18000"; /* Delay time (in ms): The pause time between slides in milliseconds. 1000 milliseconds equal 1 second. */
$transition = "1000"; /* Transition time (in ms): The cross fading time between slides in milliseconds. 1000 milliseconds equal 1 second. */
$loadingTime = "800"; /* Preloader image delay time (in ms): Time in milliseconds. 1000 milliseconds equal 1 second. */
$autoStart = "1"; /* Autostart slideshow: Choose whether the slideshow will start or pause on page load. AVAILABLE CHOICES: 0 for "no", 1 for "yes". Default is 1. */
$rotateAction = "click"; /* Website visitors can switch slides manually on...: Choose how slides switch when using the navigation. AVAILABLE CHOICES: click, mouseover */
$mootoolsTextTransition = "0"; /* Use text transition effect (Mootools engine only): Adds a nice transition for text when switching between slides. AVAILABLE CHOICES: 0 for "no", 1 for "yes". Default is 0. */
$mootoolsTextTransitionTime = "1000"; /* Text transition effect time (in ms - Mootools engine only): Applies only if you've selected 'Yes' to the above option. Time in milliseconds. 1000 is 1 second. */

/* ----- CONTENT PARAMETERS ----- */
$fpssOrdering = "1"; /* Slide order: The order in which slides will appear on the slideshow. AVAILABLE CHOICES: 1 for "default ordering", 2 for "Alphabetical", 3 for "Reverse alphabetical", 4 for "Random". Default is 1.*/
$fpssSlideLimit = ""; /* Slide limit: This option can be very useful if you have for example 30 slides on your slideshow but only want to show 10 at a time. You input '10' in this case and only 10 slides will appear. If you combine this option with the 'Random' ordering option right above, you'll get a smart display feature for your slideshow. By default this option is empty to enable the display of all slides. */
$fpssSlideTextWordLimit = "40"; /* Word limit for main text: Word limit. Enter 0 to disable it. When the word limit is on, all html tags in main text will be stripped to avoid HTML code breaking. */
$fpssSlideLinksDisable = "0"; /* Disable slide links: Allows you to click disable all links in this slideshow. AVAILABLE CHOICES: 0 for "no", 1 for "yes". Default is 0. */

/* ----- ADVANCED ----- */
$fpssCssInclusionMethod = "0"; /* CSS inclusion method: If you encounter a broken slideshow, e.g. slides are shown one below the other, then your hosting company may pose limitations to including the Frontpage Slideshow dynamic CSS files. In that case, switch this option to '1' and the slideshow will work properly. AVAILABLE CHOICES: 0 for "no", 1 for "yes". Default is 0. */
$debugMode = "1"; /* Debug mode: Enable this option to display possible errors or other warnings. Useful for debugging. Enabled by default. You should disable this option on production websites. AVAILABLE CHOICES: 0 for "no", 1 for "yes". Default is 1. */

/* ----- END ----- */

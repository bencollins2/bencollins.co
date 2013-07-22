<?php
/**
 * @version		$Id: data.php 125 2010-09-28 21:22:02Z joomlaworks $
 * @package		Frontpage Slideshow (standalone)
 * @author		JoomlaWorks http://www.joomlaworks.gr
 * @copyright	Copyright (c) 2006 - 2010 JoomlaWorks, a business unit of Nuevvo Webware Ltd. All rights reserved.
 * @license		Commercial - This code cannot be redistributed without permission from Nuevvo Webware Ltd.
 */

/* -------------------------------------------------------------------------- */
/* ------------------------- Your slideshow content ------------------------- */
/* -------------------------------------------------------------------------- */

/*
*** TIP ***
-----------
To add more slides to your FPSS slideshow, simple copy/paste and then change per your needs the data blocks marked with "slide elements".

The order of the blocks defines the default slide order.
*/

$slides = (object)array(
// --- Start slide list ---

				// slide elements
				(object)array(
					"title" => "MCubed",
					"category" => "Layout and graphic design",
					"text" => "Michigan Engineering's <b>MCubed</b> initiative allows research to be funded almost instantly. All that's needed is interdisciplinary collaboration.",
					"image" => "mc_f.png",
					"thumbImage" => "cube.png",
					"link" => "http://mcubed.umich.edu",
					"linkOpensInNewWindow" => 1,
					"showReadMore" => 0,
				),	

				// slide elements
				(object)array(
					"title" => "Lightning Love",
					"category" => "Custom Tumblr template design",
					"text" => "For this site, I chose Tumblr as the back-end.  I integrated the Tumblr block elements with HTML, CSS, and JQuery.",
					"image" => "LL.jpg",
					"thumbImage" => "",
					"link" => "http://www.lightninglove.com",
					"linkOpensInNewWindow" => 1,
					"showReadMore" => 0,
				),
				
				
				// slide elements
				(object)array(
					"title" => "Michigan Today",
					"category" => "CMS built from the ground-up",
					"text" => "I built a custom CMS for Michigan Today.  No pre-existing CMS was used.",
					"image" => "mt.jpg",
					"thumbImage" => "",
					"link" => "http://michigantoday.umich.edu",
					"linkOpensInNewWindow" => 1,
					"showReadMore" => 0,
				),				
				
				// slide elements (***TIP***: copy this data block and paste it right below to add more slides)
				(object)array(
					"title" => "\"Ghost Stories\"",
					"category" => "Songwriting, audio recording, album artwork",
					"text" => "This is a series of songs I wrote and recorded based on Michigan folklore.  The page is hosted by bandcamp, and the artwork is my own design.",
					"image" => "ghoststories.jpg",
					"thumbImage" => "",
					"link" => "http://ghoststori.es",
					"linkOpensInNewWindow" => 1,
					"showReadMore" => 0,
				),



// --- End slide list ---
);

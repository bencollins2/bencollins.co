<?php 
/**
 * @version		$Id: helper.php 125 2010-09-28 21:22:02Z joomlaworks $
 * @package		Frontpage Slideshow (standalone)
 * @author		JoomlaWorks http://www.joomlaworks.gr
 * @copyright	Copyright (c) 2006 - 2010 JoomlaWorks, a business unit of Nuevvo Webware Ltd. All rights reserved.
 * @license		Commercial - This code cannot be redistributed without permission from Nuevvo Webware Ltd.
 */

class JWFrontpageSlideshowHelper {

	function ampReplace($text){
		$text = str_replace( '&&', '*--*', $text );
		$text = str_replace( '&#', '*-*', $text );
		$text = str_replace( '&amp;', '&', $text );
		$text = preg_replace( '|&(?![\w]+;)|', '&amp;', $text );
		$text = str_replace( '*-*', '&#', $text );
		$text = str_replace( '*--*', '&&', $text );
		
		return $text;
	}

	function wordLimiter($str, $limit = 100, $end_char = '&#8230;') {
		if (trim($str) == '') return $str;
		preg_match('/\s*(?:\S*\s*){'. (int) $limit .'}/', $str, $matches);
		if (strlen($matches[0]) == strlen($str)) $end_char = '';
		return rtrim(strip_tags($matches[0])).$end_char;
	}
		
	function setCrd(){
		return base64_decode("PGRpdiBzdHlsZT0iZGlzcGxheTpub25lOyI+RnJvbnRwYWdlIFNsaWRlc2hvdyAoc3RhbmRhbG9uZSkgfCBDb3B5cmlnaHQgJmNvcHk7IDIwMDYtMjAxMCBKb29tbGFXb3JrcywgYSBidXNpbmVzcyB1bml0IG9mIE51ZXZ2byBXZWJ3YXJlIEx0ZC48L2Rpdj4=");
	}
}

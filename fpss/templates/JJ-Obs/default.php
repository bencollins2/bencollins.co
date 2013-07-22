<?php
/**
 * @version		$Id: default.php 125 2010-09-28 21:22:02Z joomlaworks $
 * @package		Frontpage Slideshow (standalone)
 * @author		JoomlaWorks http://www.joomlaworks.gr
 * @copyright	Copyright (c) 2006 - 2010 JoomlaWorks, a business unit of Nuevvo Webware Ltd. All rights reserved.
 * @license		Commercial - This code cannot be redistributed without permission from Nuevvo Webware Ltd.
 */

?>

<div id="fpss-outer-container">
	<div id="fpss-container">
		<div id="fpss-slider">
			<div id="slide-loading"></div>
			<div id="slide-wrapper">
				<div id="slide-outer">
				<?php foreach($output as $slide): ?>
				<div class="slide">
					<div class="slide-inner">
						<a<?php echo $slide->target; ?> href="<?php echo $slide->link; ?>" class="fpss_img">
							<span>
								<span style="background:url(<?php echo $slide->mainImage; ?>) no-repeat;">
									<span>
										<img src="<?php echo $slide->mainImage; ?>" alt="<?php echo $slide->altname; ?>" />
									</span>
								</span>
							</span>
						</a>
						<?php if($slide->content): ?>
						<div class="fpss-introtext">
							<div class="slidetext">

								<?php if($slide->name): ?>
								<h1><a<?php echo $slide->target; ?> href="<?php echo $slide->link; ?>"><?php echo $slide->name; ?></a></h1>
								<?php endif; ?>

								<?php if($slide->secCatPath): ?>
								<h2><?php echo $slide->secCatPath; ?></h2>
								<?php endif; ?>

								<?php if($slide->tagline): ?>
								<h3><?php echo $slide->tagline; ?></h3>
								<?php endif; ?>

								<?php if($slide->text): ?>
								<p><?php echo $slide->text; ?></p>
								<?php endif; ?>

								<?php if($slide->link && $slide->readMore): ?>
								<a<?php echo $slide->target; ?> href="<?php echo $slide->link; ?>" title="<?php echo TEXT_READMOREABOUT; ?> <?php echo $slide->altname; ?>" class="readon"><?php echo TEXT_MORE; ?></a>
								<?php endif; ?>
							</div>
						</div>
						<?php endif; ?>
					</div>
				</div>
				<?php endforeach; ?>
				</div>
			</div>
		</div>
		<div id="navi-outer">
			<div id="pseudobox"></div>
				<div class="ul_container">
					<ul>
						<?php foreach($output as $slide): ?>
						<li>
							<a class="navbutton off navi" href="javascript:void(0);"<?php echo $slide->rotateAction; ?> title="<?php echo $slide->name; ?>">
								<span class="navbar-img">
									<img src="<?php echo $slide->thumbImage; ?>" alt="<?php echo TEXT_NAVIGATETO; ?> <?php echo $slide->altname; ?>" />
								</span>
								<span class="navbar-key"><?php echo $slide->counter; ?></span>
								<span class="navbar-title"><?php echo $slide->name; ?></span>
								<span class="navbar-tagline"><?php echo $slide->tagline; ?></span>
								<span class="navbar-clr"></span>
							</a>
						</li>
						<?php endforeach; ?>
						<li class="noimages"><a id="fpss-container_next" href="javascript:void(0);" onclick="showNext();clearSlide();" title="<?php echo TEXT_NEXT; ?>"></a></li>
						<li class="noimages"><a id="fpss-container_playButton" href="javascript:void(0);" onclick="ppButtonClicked();return false;" title="<?php echo TEXT_PLAYPAUSESLIDE; ?>"><?php echo TEXT_PAUSE; ?></a></li>
						<li class="noimages"><a id="fpss-container_prev" href="javascript:void(0);" onclick="showPrev();clearSlide();" title="<?php echo TEXT_PREVIOUS; ?>"></a></li>
						<li class="clr"></li>
					</ul>
				</div>
			</div>
		<div class="fpss-clr"></div>
	</div>
	<div class="fpss-clr"></div>
</div>

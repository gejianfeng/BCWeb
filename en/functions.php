<?php

function get_top_banner()
{
	$ret = '';
	$ret.= "<div class='banner-container box-container'>";
		$ret.= "<div class='wrap'>";
			$ret.= "<div class='banner-logo'></div>";
			$ret.= "<div class='banner-lang'>";
				$ret.= "<span class='text-transparent'>Chinese</span> | English";
			$ret.= "</div>";
			$ret.= "<span class='banner-company-name'><b>Goldpebble Research</b></span>";

	if (is_home()) {
			$ret.= "<div class='banner-nav-home-pressed'>HOME</div>";
	} 
	else {
			$ret.= "<div class='banner-nav-home' style='cursor:pointer' onclick='SwitchPage(0)'><div class='text-transparent'>HOME</div></div>";
	}

	if (is_page('quantamentalresearch')) {
			$ret.= "<div class='banner-nav-research-pressed'>Quantamental Research</div>";
	} 
	else {
			$ret.= "<div class='banner-nav-research' style='cursor:pointer' onclick='SwitchPage(1)'><div class='text-transparent'>Quantamental Research</div></div>";
	}

	if (is_page('alternativeinvesting')) {
			$ret.= "<div class='banner-nav-investing-pressed'>Alternative Investing</div>";
	} 
	else {
			$ret.= "<div class='banner-nav-investing' style='cursor:pointer' onclick='SwitchPage(2)'><div class='text-transparent'>Alternative Investing</div></div>";
	}

	if (is_page('blockchaintechnology')) {
			$ret.= "<div class='banner-nav-blockchain-pressed'>Blockchain Technology</div>";
	} 
	else {
			$ret.= "<div class='banner-nav-blockchain' style='cursor:pointer' onclick='SwitchPage(3)'><div class='text-transparent'>Blockchain Technology</div></div>";
	}

	if (is_page('career')) {
			$ret.= "<div class='banner-nav-career-pressed'>Careers</div>";
	} 
	else {
			$ret.= "<div class='banner-nav-career' style='cursor:pointer' onclick='SwitchPage(4)'><div class='text-transparent'>Careers</div></div>";
	}

		$ret.= "</div>";
	$ret.= "</div>";
	echo $ret;
}

?>
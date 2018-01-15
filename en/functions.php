<?php

function get_top_banner($page_name)
{
	$ret = '';
	$ret.= "<div class='banner-container box-container'>";
		$ret.= "<div class='wrap banner-wrap'>";
			$ret.= "<div class='banner-logo'></div>";
			$ret.= "<div class='banner-lang'>";
				$ret.= "<span class='text-transparent'>Chinese</span> | English";
			$ret.= "</div>";
			$ret.= "<span class='banner-company-name'><b>Goldpebble Research</b></span>";

	if ($page_name == "home") {
			$ret.= "<div class='banner-nav-home'>HOME</div>";
	} 
	else {
			$ret.= "<div class='banner-nav-home text-transparent'>HOME</div>";
	}

	if ($page_name == "research") {
			$ret.= "<div class='banner-nav-research'>Quantamental Research</div>";
	} 
	else {
			$ret.= "<div class='banner-nav-research text-transparent'>Quantamental Research</div>";
	}

	if ($page_name == "investing") {
			$ret.= "<div class='banner-nav-investing'>Alternative Investing</div>";
	} 
	else {
			$ret.= "<div class='banner-nav-investing text-transparent'>Alternative Investing</div>";
	}

	if ($page_name == "blockchain") {
			$ret.= "<div class='banner-nav-blockchain'>Blockchain Technology</div>";
	} 
	else {
			$ret.= "<div class='banner-nav-blockchain text-transparent'>Blockchain Technology</div>";
	}

	if ($page_name == "career") {
			$ret.= "<div class='banner-nav-career'>Careers</div>";
	} 
	else {
			$ret.= "<div class='banner-nav-career text-transparent'>Careers</div>";
	}

		$ret.= "</div>";
	$ret.= "</div>";
	echo $ret;
}

?>
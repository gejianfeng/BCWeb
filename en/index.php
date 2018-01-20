<?php
/*
Template Name: index.php
*/
?>
<?php get_header(); ?>

<!-- index.php start -->

<script type="text/javascript">
	var bBcPlayed = false;
	var bBusinessPlayed = false;

	$(document).ready(function(){
		$("#main-logo").animate({"top": "180px", "opacity" : "1"}, 1000);
		$("#main-cp-name").delay(500).animate({"top": "280px", "opacity" : "1"}, 1000);
		$("#main-title").delay(1000).animate({"top": "380px", "opacity" : "1"}, 1000);
		$("#main-content").delay(1500).animate({"top": "510px", "opacity" : "1"}, 1000);
	});

	$(window).scroll(function(){
		if (!bBcPlayed)
		{
			var bc_div = document.getElementById("bc");
			var bottomPos = bc_div.offsetTop + bc_div.offsetHeight / 2;
			if (bottomPos >= $(window).scrollTop() && bottomPos < ($(window).scrollTop()+$(window).height())) {
				bBcPlayed = true;

				$("#bc1").animate({"opacity" : "1"}, 1000);
				$("#bc2").delay(1000).animate({"opacity" : "1"}, 1000);
				$("#bc3").delay(2000).animate({"opacity" : "1"}, 1000);
			}
		}

		if (!bBusinessPlayed)
		{
			var biz_div = document.getElementById("business");
			var bottomPos = biz_div.offsetTop + biz_div.offsetHeight;
			if (bottomPos >= $(window).scrollTop() && bottomPos < ($(window).scrollTop()+$(window).height())) {
				bBusinessPlayed = true;

				$("#business1").animate({"opacity" : "1"}, 1000);
				$("#business111").delay(1000).animate({"opacity" : "1"}, 1000);
				$("#business112").delay(1000).animate({"opacity" : "1"}, 1000);
				$("#business113").delay(1000).animate({"opacity" : "1"}, 1000);
				$("#business121").delay(2000).animate({"opacity" : "1"}, 1000);
				$("#business122").delay(2000).animate({"opacity" : "1"}, 1000);
				$("#business123").delay(2000).animate({"opacity" : "1"}, 1000);
				$("#business2").delay(3000).animate({"opacity" : "1"}, 1000);
				$("#business211").delay(4000).animate({"opacity" : "1"}, 1000);
				$("#business212").delay(4000).animate({"opacity" : "1"}, 1000);
				$("#business221").delay(5000).animate({"opacity" : "1"}, 1000);
				$("#business222").delay(5000).animate({"opacity" : "1"}, 1000);
			}
		}
	});
</script>

<div class="index-header-container">
	<?php get_top_banner(); ?>

	<div class='index-part1-container box-container'>
		<div class="wrap">
			<div id="main-logo" class="index-part1-logo"></div>
			<div id="main-cp-name" class="index-part1-name page-sub-title text-white">Goldpebble</div>
			<div id="main-title" class="index-part1-main text-white">Investing Technology Company</div>
			<div id="main-content" class="index-part1-content text-white">Building Investing Edge <br/>with Quantamental Data Technology</div>
		</div>
	</div>
</div>

<div class="index-business-container">
	<div id="business" class='index-part2-container box-container'>
		<div class="wrap">
			<div class="index-part2-sub-container index-part2-research">
				<div class="page-sub-title index-part2-title text-white">Quantamental Research   <font size="5">➔</font></div>
				<div id="business1" class="index-part2-line">
					<hr/>
				</div>
				<div id="business111" class="index-part2-icon index-part2-icon-QR"></div>
				<div id="business121" class="index-part2-icon index-part2-icon-AD"></div>
				<div id="business112" class="sec-title index-part2-title-QR text-white">Quantamental Research</div>
				<div id="business113" class="sec-content index-part2-content-QR text-white">Fundamental Investors</div>
				<div id="business122" class="sec-title index-part2-title-AD text-white">Alternative Data</div>
				<div id="business123" class="sec-content index-part2-content-AD text-white">Strategic Investors</div>
			</div>
			<div class="index-part2-sub-container index-part2-investing">
				<div class="page-sub-title index-part2-title text-white">Alternative Investing   <font size="5">➔</font></div>
				<div id="business2" class="index-part2-line">
					<hr/>
				</div>
				<div id="business211" class="index-part2-icon index-part2-icon-BC"></div>
				<div id="business221" class="index-part2-icon index-part2-icon-LE"></div>
				<div id="business212" class="sec-title index-part2-title-BC text-white">Cryptocurrencies</div>
				<div id="business222" class="sec-title index-part2-title-LE text-white">Live Events</div>
			</div>
		</div>
	</div>
</div>

<div class="index-blockchain-container">
	<div id="bc" class='index-part3-container box-container'>
		<div class="wrap">
			<div class="page-sub-title index-part3-title-BC text-darkblue">Blockchain Technology</div>
			<div class="darkblue index-part3-title-line"></div>
			<div id="bc1" class="index-part3-BC-frame index-part3-BC-frame1">
				<div class="index-part3-BC-frame-icon index-part3-BC-frame-icon1"></div>
				<div class="sec-title index-part3-BC-frame-title text-darkblue">Decentralization</div>
				<div class="sec-content index-part3-BC-frame-content text-darkblue">Secure with Distributed <br/>System</div>
			</div>
			<div id="bc2" class="index-part3-BC-frame index-part3-BC-frame2">
				<div class="index-part3-BC-frame-icon index-part3-BC-frame-icon2"></div>
				<div class="sec-title index-part3-BC-frame-title text-darkblue">Openess</div>
				<div class="sec-content index-part3-BC-frame-content text-darkblue">Trust with Transparency</div>
			</div>
			<div id="bc3"  class="index-part3-BC-frame index-part3-BC-frame3">
				<div class="index-part3-BC-frame-icon index-part3-BC-frame-icon3"></div>
				<div class="sec-title index-part3-BC-frame-title text-darkblue">Ecosystem</div>
				<div class="sec-content index-part3-BC-frame-content text-darkblue">Grow with Collective <br/>Self Interest</div>
			</div>
			<div class="index-part3-info index-part3-info1">
				<div class="index-part3-icon index-part3-icon1"></div>
				<div class="index-part3-info-title text-white">Data</div>
				<div class="index-part3-info-content content text-white">With the development of data storage and processing capabilities, large scale data and information can now be digitized and stored. Search engine technology and crowdsourcing make data easily accessible.</div>
			</div>
			<div class="index-part3-info index-part3-info2">
				<div class="index-part3-icon index-part3-icon2"></div>
				<div class="index-part3-info-title text-white">Edge</div>
				<div class="index-part3-info-content content text-white">Goldpebble excels in bottoms-up quantamental analysis through primary data acquisition and cutting edge technology.</div>
			</div>
			<div class="index-part3-info index-part3-info3">
				<div class="index-part3-icon index-part3-icon3"></div>
				<div class="index-part3-info-title text-white">Technology</div>
				<div class="index-part3-info-content content text-white">Using propreitary quantamental algorithms, Goldpebble acquires the most relevant data through traditional company filings, media news and economic data, as well as, company websites, social networks and big data.</div>
			</div>
			<div class="index-part3-read-more">
				<div class="index-part3-read-more-text text-white">Read more</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	var CurMaIdx = 0;
	var MoveMaCount = 0;
	var MaObjCount = 0;
	var MaObjPosArray;

	var CurNrIdx = 0;
	var MoveNrCount = 0;
	var NrObjCount = 0;
	var NrObjPosArray;

	$(document).ready(function(){
		//Main Achievements
		for(var i = 0; i < 6; ++i)
		{
			var obj = document.getElementById("ma" + i.toString());
			if (obj != null)
			{
				MaObjCount++;
			}
			else
			{
				break;
			}
		}

		MaObjPosArray = new Array(MaObjCount);
		for(var i = 0; i < MaObjCount; ++i)
		{
			MaObjPosArray[i] = i;
		}

		//News Report
		for(var i = 0; i < 6; ++i)
		{
			var obj = document.getElementById("nr" + i.toString());
			if (obj != null)
			{
				NrObjCount++;
			}
			else
			{
				break;
			}
		}

		NrObjPosArray = new Array(NrObjCount);
		for(var i = 0; i < NrObjCount; ++i)
		{
			NrObjPosArray[i] = i;
		}
	});

	function OnMAPreviewClicked()
	{
		if (MoveMaCount > 0 || MaObjCount <= 0)
		{
			return;
		}

		for(var i = 0; i < MaObjCount; ++i)
		{
			var obj_name = "#ma" + i.toString();

			var CurPosIdx = MaObjPosArray[i];

			if (CurPosIdx > 2) {
				CurPosIdx = CurPosIdx - MaObjCount;
			}

			var NextPosIdx = CurPosIdx + 1;

			MaObjPosArray[i] = NextPosIdx;

			var StartPos = (232 + 26) * CurPosIdx;
			var EndPos = (232 + 26) * NextPosIdx;

			MoveMaCount++;

			$(obj_name).css({"left":StartPos.toString() + "px"});

			if (CurPosIdx >= -1 && CurPosIdx <= 2)
			{
				$(obj_name).show();
			}
			else {
				$(obj_name).hide();
			}
				
			$(obj_name).animate({left:EndPos.toString() + 'px'}, 'slow', function(){
				if (NextPosIdx < 0 || NextPosIdx > 2)
				{
					$(obj_name).hide();
				}
				MoveMaCount--;
			});
		}
	}

	function OnMANextClicked()
	{
		if (MoveMaCount > 0 || MaObjCount <= 0)
		{
			return;
		}

		for(var i = 0; i < MaObjCount; ++i)
		{
			var obj_name = "#ma" + i.toString();

			var CurPosIdx = MaObjPosArray[i];

			if (CurPosIdx < 0) {
				CurPosIdx = CurPosIdx + MaObjCount;
			}

			var NextPosIdx = CurPosIdx - 1;

			MaObjPosArray[i] = NextPosIdx;

			var StartPos = (232 + 26) * CurPosIdx;
			var EndPos = (232 + 26) * NextPosIdx;

			MoveMaCount++;

			$(obj_name).css({"left":StartPos.toString() + "px"});

			if (CurPosIdx >= 0 && CurPosIdx <= 3)
			{
				$(obj_name).show();
			}
			else {
				$(obj_name).hide();
			}
				
			$(obj_name).animate({left:EndPos.toString() + 'px'}, 'slow', function(){
				if (NextPosIdx < 0 || NextPosIdx > 2)
				{
					$(obj_name).hide();
				}
				MoveMaCount--;
			});
		}
	}

	function OnNRPreviewClicked()
	{
		if (MoveNrCount > 0 || NrObjCount <= 0)
		{
			return;
		}

		for(var i = 0; i < NrObjCount; ++i)
		{
			var obj_name = "#nr" + i.toString();

			var CurPosIdx = NrObjPosArray[i];

			if (CurPosIdx > 0) {
				CurPosIdx = CurPosIdx - NrObjCount;
			}

			var NextPosIdx = CurPosIdx + 1;

			NrObjPosArray[i] = NextPosIdx;

			var StartPos = 822 * CurPosIdx;
			var EndPos = 822 * NextPosIdx;

			MoveNrCount++;

			$(obj_name).css({"left":StartPos.toString() + "px"});

			if (CurPosIdx >= -1 && CurPosIdx <= 0)
			{
				$(obj_name).show();
			}
			else {
				$(obj_name).hide();
			}
				
			$(obj_name).animate({left:EndPos.toString() + 'px'}, 'slow', function(){
				if (NextPosIdx != 0)
				{
					$(obj_name).hide();
				}
				MoveNrCount--;
			});
		}
	}

	function OnNRNextClicked()
	{
		if (MoveNrCount > 0 || NrObjCount <= 0)
		{
			return;
		}

		for(var i = 0; i < NrObjCount; ++i)
		{
			var obj_name = "#nr" + i.toString();

			var CurPosIdx = NrObjPosArray[i];

			if (CurPosIdx < 0) {
				CurPosIdx = CurPosIdx + NrObjCount;
			}

			var NextPosIdx = CurPosIdx - 1;

			NrObjPosArray[i] = NextPosIdx;

			var StartPos = 822 * CurPosIdx;
			var EndPos = 822 * NextPosIdx;

			MoveNrCount++;

			$(obj_name).css({"left":StartPos.toString() + "px"});

			if (CurPosIdx >= 0 && CurPosIdx <= 1)
			{
				$(obj_name).show();
			}
			else {
				$(obj_name).hide();
			}
				
			$(obj_name).animate({left:EndPos.toString() + 'px'}, 'slow', function(){
				if (NextPosIdx != 0)
				{
					$(obj_name).hide();
				}
				MoveNrCount--;
			});
		}
	}
</script>

<div class="index-achievements-container">
	<div class='index-part4-container box-container'>
		<div class="wrap">
			<div class="page-sub-title index-part4-title text-white">Main Achievements</div>
			<div class="white index-part4-title-line"></div>

<?php
	$ma_query = new WP_Query('category_name=MainAchievements');

	$ma_count = 0;
	//$ma_year = array();
	$ma_content = array();

	if ($ma_query->have_posts()):
		while($ma_query->have_posts()) :
			$ma_query->the_post();

			/*
			$tmp = $post->post_title;
			$tmp = explode('|', $tmp);
			if (count($tmp) == 2) {
				$ma_year[] = $tmp[0];
				$ma_content[] = $tmp[1];

				$ma_count++;
			}
			*/
			$ma_content[] = $post->post_content;
			$ma_count++;
		endwhile;
	endif;

	// limit only show 6 latest banner
	if ($ma_count > 6)
	{
		$ma_count = 6;
	}

	wp_reset_query();

	if ($ma_count > 3)
	{
		echo "<div class='index-arrow-left index-part4-arrow-left' style='cursor:pointer;' onclick='OnMAPreviewClicked();'></div>";
		echo "<div class='index-arrow-right index-part4-arrow-right' style='cursor:pointer;' onclick='OnMANextClicked();'></div>";
	}

	if ($ma_count > 0)
	{
		echo "<div style='position:absolute; top:200px; left: 138px; overflow:hidden; height:284px; width:748px'>";
			
		for($i=0; $i<$ma_count; $i++)
		{
			$offset = (232 + 26) * $i;
			$idx = $ma_count - 1 - $i;

			echo "<div id='ma" . $i ."' class='index-part4-frame' style='left:" . $offset . "px'>";
				echo "<div class='index-part4-icon'>";
					echo $ma_content[$idx];
					//echo "<div class='index-part4-year text-white sec-title'>" . $ma_year[$idx] . "</div>";
					//echo "<div class='index-part4-content sec-content text-darkblue' style='font-weight: bold'>" . $ma_content[$idx] . "</div>";
				echo "</div>";
			echo "</div>";
		}

		echo "</div>";
	}
?>
		</div>
	</div>
</div>

<div class="index-news-container">
	<div class='index-part5-container box-container'>
		<div class="wrap">
			<div class="page-sub-title index-part5-title text-darkblue">News Report</div>
			<div class="darkblue index-part5-title-line"></div>

<?php
	$nr_query = new WP_Query('category_name=NewsReport');

	$nr_count = 0;
	//$nr_date = array();
	$nr_content = array();
	//$nr_icon = array();

	if ($nr_query->have_posts()):
		while($nr_query->have_posts()) :
			$nr_query->the_post();

			/*
			$tmp = $post->post_title;
			$tmp = explode('|', $tmp);
			if (count($tmp) == 2) {
				$nr_date[] = $tmp[1];
				$nr_content[] = $post->post_content;
				$nr_icon[] = get_stylesheet_directory_uri() . "/assets/image/1/news_icon.png";

				$nr_count++;
			}
			else if (count($tmp) == 3) {
				$nr_date[] = $tmp[1];
				$nr_content[] = $post->post_content;
				$nr_icon[] = $tmp[2];

				$nr_count++;
			}
			*/
			$nr_content[] = $post->post_content;
			$nr_count++;
		endwhile;
	endif;

	// limit only show 6 latest banner
	if ($nr_count > 6)
	{
		$nr_count = 6;
	}

	wp_reset_query();

	if ($nr_count > 1)
	{
		echo "<div class='index-arrow-left index-part5-arrow-left' style='cursor:pointer;' onclick='OnNRPreviewClicked();'></div>";
		echo "<div class='index-arrow-right index-part5-arrow-right' style='cursor:pointer;' onclick='OnNRNextClicked();'></div>";
	}

	if ($nr_count > 0)
	{
		echo "<div style='position:absolute; top:185px; left: 101px; overflow:hidden; height:208px; width:822px'>";
			
		for($i=0; $i<$nr_count; $i++)
		{
			$offset = 822 * $i;
			$idx = $nr_count - 1 - $i;

			echo "<div id='nr" . $i ."' class='index-part5-frame' style='left:" . $offset . "px'>";
				echo $nr_content[$idx];
				//echo "<div class='index-part5-icon' style='background-image: url(" . $nr_icon[$idx] . ");'></div>";
				//echo "<div class='index-part5-more'></div>";
				//echo "<div class='index-part5-icon-calendar' style='text-align: right; font-size:18px; color:#1e408a;'>" . $nr_date[$idx] . "</div>";
				//echo "<div class='index-part5-content text-darkblue sec-content'>" . $nr_content[$idx] . "</div>";
			echo "</div>";
		}

		//<div class="index-part5-icon"></div>

		echo "</div>";
	}
?>
		</div>
	</div>
</div>

<!-- index.php end -->

<?php get_footer(); ?>
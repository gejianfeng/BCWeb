<?php
/*
Template Name: career.php
*/
?>
<?php get_header(); ?>

<!-- career.php start -->

<script type="text/javascript">
	var bTeamAnimPlayed = false;
	var bCareerAnimPlayed = false;

	$(document).ready(function(){
		$("#main-title").animate({"top": "110px", "opacity" : "1"}, 500);
		$("#main-content").delay(500).animate({"top": "195px", "opacity" : "1"}, 500);
	});

	$(window).scroll(function(){
		if (!bTeamAnimPlayed)
		{
			var team_div = document.getElementById("team");
			var bottomPos = team_div.offsetTop + team_div.offsetHeight;
			if (bottomPos >= $(window).scrollTop() && bottomPos < ($(window).scrollTop()+$(window).height())) {
				bTeamAnimPlayed = true;

				$("#team-title").animate({"top": "78px", "opacity" : "1"}, 500);
				$("#team-content").delay(500).animate({"top": "150px", "opacity" : "1"}, 500);
			}
		}

		if (!bCareerAnimPlayed)
		{
			var cp_div = document.getElementById("cp");
			var bottomPos = cp_div.offsetTop + cp_div.offsetHeight;
			if (bottomPos >= $(window).scrollTop() && bottomPos < ($(window).scrollTop()+$(window).height())) {
				bCareerAnimPlayed = true;

				$("#cp_point1").animate({"opacity" : "1"}, 500);

				$("#cp_text_up1").delay(500).animate({"opacity" : "1"}, 500);
				$("#cp_text_down1").delay(500).animate({"opacity" : "1"}, 500);

				$("#cp_connect1").delay(1000).animate({"opacity" : "1"}, 500);

				$("#cp_point2").delay(1500).animate({"opacity" : "1"}, 500);

				$("#cp_text_up2").delay(2000).animate({"opacity" : "1"}, 500);
				$("#cp_text_down2").delay(2000).animate({"opacity" : "1"}, 500);

				$("#cp_connect2").delay(2500).animate({"opacity" : "1"}, 500);

				$("#cp_point3").delay(3000).animate({"opacity" : "1"}, 500);

				$("#cp_text_up3").delay(3500).animate({"opacity" : "1"}, 500);
				$("#cp_text_down3").delay(3500).animate({"opacity" : "1"}, 500);

				$("#cp_connect3").delay(4000).animate({"opacity" : "1"}, 500);

				$("#cp_point4").delay(4500).animate({"opacity" : "1"}, 500);

				$("#cp_text_up4").delay(5000).animate({"opacity" : "1"}, 500);
				$("#cp_text_down4").delay(5000).animate({"opacity" : "1"}, 500);

				$("#cp_connect4").delay(5500).animate({"opacity" : "1"}, 500);

				$("#cp_point5").delay(6000).animate({"opacity" : "1"}, 500);

				$("#cp_text_up5").delay(6500).animate({"opacity" : "1"}, 500);
				$("#cp_text_down5").delay(6500).animate({"opacity" : "1"}, 500);

				$("#cp_connect5").delay(7000).animate({"opacity" : "1"}, 500);

				$("#cp_point6").delay(7500).animate({"opacity" : "1"}, 500);

				$("#cp_text_up6").delay(8000).animate({"opacity" : "1"}, 500);
				$("#cp_text_down6").delay(8000).animate({"opacity" : "1"}, 500);
			}
		}
	});

</script>

<div class="career-header-container">
	<?php get_top_banner(); ?>

	<div class='career-part1-container box-container'>
		<div class="wrap">
			<span id="main-title" class="page-title career-title">Culture</span>
			<span id="main-content" class="text-white career-title-content">We are truth seekers, problem solvers and people developers. We are finding <br/>solutions to combine investments and technologies through collaborative work of <br/>people from diversified background.</span>
		</div>
	</div>
</div>

<div id="cp" class="career-path-container">
	<div class='career-part2-container box-container'>
		<div class="wrap">
			<div class="career-part2-title1 page-sub-title text-darkblue">Career Path</div>

			<div id="cp_text_up1" class="career-part2-jb-title career-part2-jb-text1 text-darkblue">&nbsp;<br/>PTA</div>
			<div id="cp_text_up2" class="career-part2-jb-title career-part2-jb-text2 text-darkblue">Intern<br/>(Assistant Analyst)</div>
			<div id="cp_text_up3" class="career-part2-jb-title career-part2-jb-text3 text-darkblue">&nbsp;<br/>Analyst</div>
			<div id="cp_text_up4" class="career-part2-jb-title career-part2-jb-text4 text-darkblue">&nbsp;<br/>Senior Analyst</div>
			<div id="cp_text_up5" class="career-part2-jb-title career-part2-jb-text5 text-darkblue">&nbsp;<br/>Principle</div>
			<div id="cp_text_up6" class="career-part2-jb-title career-part2-jb-text6 text-darkblue">&nbsp;<br/>Partner</div>

			<div id="cp_text_down1" class="career-part2-jb-time career-part2-jb-text1 text-darkblue"><font size="5">0</font>Month</div>
			<div id="cp_text_down2" class="career-part2-jb-time career-part2-jb-text2 text-darkblue"><font size="5">3</font>Month</div>
			<div id="cp_text_down3" class="career-part2-jb-time career-part2-jb-text3 text-darkblue"><font size="5">15</font>Month</div>
			<div id="cp_text_down4" class="career-part2-jb-time career-part2-jb-text4 text-darkblue"><font size="5">39</font>Month</div>
			<div id="cp_text_down5" class="career-part2-jb-time career-part2-jb-text5 text-darkblue"><font size="5">63</font>Month</div>
			<div id="cp_text_down6" class="career-part2-jb-time career-part2-jb-text6 text-darkblue"><font size="5">99</font>Month</div>

			<div id="cp_connect1" class="career-part2-jb-connect career-part2-jb-connect1 darkblue"></div>
			<div id="cp_connect2" class="career-part2-jb-connect career-part2-jb-connect2 darkblue"></div>
			<div id="cp_connect3" class="career-part2-jb-connect career-part2-jb-connect3 darkblue"></div>
			<div id="cp_connect4" class="career-part2-jb-connect career-part2-jb-connect4 darkblue"></div>
			<div id="cp_connect5" class="career-part2-jb-connect career-part2-jb-connect5 darkblue"></div>

			<div id="cp_point1" class="career-part2-point career-part2-point1"></div>
			<div id="cp_point2" class="career-part2-point career-part2-point2"></div>
			<div id="cp_point3" class="career-part2-point career-part2-point3"></div>
			<div id="cp_point4" class="career-part2-point career-part2-point4"></div>
			<div id="cp_point5" class="career-part2-point career-part2-point5"></div>
			<div id="cp_point6" class="career-part2-point career-part2-point6"></div>

			<div class="career-part2-title2 page-sub-title text-darkblue">Application</div>
			<div class="career-part2-frame">
				<div class="career-part2-mail"></div>
				<div class="career-part2-mail-content sec-content text-darkblue">Goldpebble actively recruits passionate, open-minded, and accomplished people from <br/>around the world. If you are interested in pursuing a career with Goldpebble, <br/>please apply by email <a href="http://hr@goldpebble.com"><u>hr@goldpebble.com</u></a></div>
			</div>
		</div>
	</div>
</div>

<div id="team" class="career-team-container">
	<div class='career-part3-container box-container'>
		<div class="wrap">
			<span id="team-title" class="career-part3-title page-sub-title text-white">Team</span>
			<span id="team-content" class="sec-content career-part3-content text-white">Goldpebble’s strategy is based on over 50 years’ collective experience among the <br/>partners in areas including investment research/management, due diligence in <br/>both the public and private markets, and global macro.<br/>Goldpebble employs over a dozen professionals globally with an additional 70 <br/>engineers and survey professionals throughout China.</span>
		</div>
	</div>
</div>

<script type="text/javascript">
	function SwitchIntro(index)
	{
		if (index < 1 || index > 3)
		{
			return;
		}

		switch (index)
		{
			case 1:
			{
				$("#bg1").show();
				$("#bg2").hide();
				$("#bg3").hide();

				$("#bigicon1").show();
				$("#bigicon2").hide();
				$("#bigicon3").hide();

				$("#smlicon1").hide();
				$("#smlicon2").show();
				$("#smlicon3").show();

				$("#title1").show();
				$("#title2").hide();
				$("#title3").hide();

				$("#name1").show();
				$("#name2").hide();
				$("#name3").hide();

				$("#intro1").show();
				$("#intro2").hide();
				$("#intro3").hide();
				break;
			}
			case 2:
			{
				$("#bg1").hide();
				$("#bg2").show();
				$("#bg3").hide();

				$("#bigicon1").hide();
				$("#bigicon2").show();
				$("#bigicon3").hide();

				$("#smlicon1").show();
				$("#smlicon2").hide();
				$("#smlicon3").show();

				$("#title1").hide();
				$("#title2").show();
				$("#title3").hide();

				$("#name1").hide();
				$("#name2").show();
				$("#name3").hide();

				$("#intro1").hide();
				$("#intro2").show();
				$("#intro3").hide();
				break;
			}
			case 3:
			{
				$("#bg1").hide();
				$("#bg2").hide();
				$("#bg3").show();

				$("#bigicon1").hide();
				$("#bigicon2").hide();
				$("#bigicon3").show();

				$("#smlicon1").show();
				$("#smlicon2").show();
				$("#smlicon3").hide();

				$("#title1").hide();
				$("#title2").hide();
				$("#title3").show();

				$("#name1").hide();
				$("#name2").hide();
				$("#name3").show();

				$("#intro1").hide();
				$("#intro2").hide();
				$("#intro3").show();
				break;
			}
		}
	}

</script>

<div class="career-partners-container">
	<div class='career-part4-container box-container'>
		<div class="wrap">
			<div id="bg1" class="career-part4-icon-bg career-part4-icon-bg1" style="display:none;"></div>
			<div id="bg2" class="career-part4-icon-bg career-part4-icon-bg2"></div>
			<div id="bg3" class="career-part4-icon-bg career-part4-icon-bg3" style="display:none;"></div>

			<div id="bigicon1" class="career-part4-icon-big career-part4-icon-big1" style="display:none;"></div>
			<div id="bigicon2" class="career-part4-icon-big career-part4-icon-big2"></div>
			<div id="bigicon3" class="career-part4-icon-big career-part4-icon-big3" style="display:none;"></div>

			<div id="smlicon1" class="career-part4-icon-sml career-part4-icon-sml1" style="cursor:pointer" onclick='SwitchIntro(1)'></div>
			<div id="smlicon2" class="career-part4-icon-sml career-part4-icon-sml2" style="display:none; cursor:pointer;" onclick='SwitchIntro(2)'></div>
			<div id="smlicon3" class="career-part4-icon-sml career-part4-icon-sml3" style="cursor:pointer" onclick='SwitchIntro(3)'></div>

			<div id="title1" class="career-part4-title text-white" style="display:none;">PARTNERS</div>
			<div id="title2" class="career-part4-title text-white">PARTNERS</div>
			<div id="title3" class="career-part4-title text-white" style="display:none;">ADVISORS</div>

			<div id="name1" class="career-part4-name sec-title text-white" style="display:none;">M. Adnan Gilani</div>
			<div id="name2" class="career-part4-name sec-title text-white">Yifeng Mao</div>
			<div id="name3" class="career-part4-name sec-title text-white" style="display:none;">Minglei Shi</div>

			<div id="intro1" class="career-part4-content text-white sec-content" style="display:none;">M. Adnan Gilani, Co-Founder, Head of Macro Strategy, has had a career in capital markets and international finance spanning almost two decades. He has led FX, Emerging Markets and Derivatives units in Goldman Sachs, HSBC and Citigroup. Adnan was also Director of the Debt Office in the Ministry of Finance after which he started an Asia Infrastructure/Macro fund in New York. He has degrees in Chemical Engineering and Finance from Wharton and did his graduate studies at the University of Chicago in Analytic Finance.</div>
			<div id="intro2" class="career-part4-content text-white sec-content">Yifeng Mao, CFA, Founder, Head of Research, has developed investment strategies and institutions both on the buy and sell sides.  He has managed global hedge funds in Singapore and Hong Kong as well as setting up a family office in the United States.  Yifeng is considered a pre-eminent name in the data intensive bottoms-up investment research arena with particular stress in Chinese listed companies.  He is a featured speaker on international business channels which solicit his indigenously developed proprietary cutting edge analysis techniques which have proven to be non-consensus and highly accurate.  He graduated from Shanghai Jiao Tong University with dual undergraduate degrees in Computer Science and Finance.</div>
			<div id="intro3" class="career-part4-content text-white sec-content" style="display:none;">Minglei Shi, Senior Advisor, has over 15 years of investment experience in the Greater China region and advises on business strategy and product design for Goldpebble. He was previously the fund manager for China International Capital Corporation Asset Management (Hong Kong) and has extensive knowledge of QDII and RQFII products. Minglei has also served as the company director and portfolio manager for Everest Capital (Singapore), where he spent over ten years, and was the chief representative in Templeton Investment’s Shanghai office, responsible for China business development. Mr. Shi has a masters in accounting and finance from the London School of Economics.</div>

			<div class="career-line"/></div>
		</div>
	</div>
</div>

<?php
	$employee_query = new WP_Query('category_name=Employee');

	$employee_count = 0;
	//$employee_photo = array();
	$employee_content = array();

	if ($employee_query->have_posts()):
		while($employee_query->have_posts()) :
			$employee_query->the_post();

			/*
			$tmp = $post->post_title;
			$tmp = explode('|', $tmp);
			if (count($tmp) == 2) {
				// photo
				$employee_photo[] = $tmp[1];
			} else {
				// default image
				$employee_photo[] = get_stylesheet_directory_uri() . "/assets/image/5/Team_photo_small.png";
			}
			*/

			$employee_content[] = $post->post_content;

			$employee_count++;
		endwhile;
	endif;

	wp_reset_query();

	$height = 104 + 30 + 50 + 98 - 25 + (219 + 25) * $employee_count;

	echo "<div class='career-associates-container box-container nattierblue' style='height:" . $height . "px'>";
		echo "<div class='career-part5-container box-container' style='height:" . $height . "px'>";
			echo "<div class='wrap'>";
				echo "<span class='career-part5-title page-sub-title text-darkblue'>ANALYSTS/ASSOCIATES</span>";

				for($i=0; $i<$employee_count; $i++)
				{
					$offset = 184 + (219 + 25) * $i;

					echo "<div class='career-employee-cell' style='top:" . $offset . "px'>";
						echo $employee_content[$i];
						//echo "<div class='career-employee-icon' style='background-image:url(" . $employee_photo[$i] .")'></div>";
						//echo "<div class='career-employee-intro sec-content text-darkblue')'>" . $employee_content[$i] ."</div>";

					echo "</div>";
				}

			echo "</div>";
		echo "</div>";
	echo "</div>";

?>


<!-- career.php end -->

<?php get_footer(); ?>
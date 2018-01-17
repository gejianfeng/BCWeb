<?php
/*
Template Name: career.php
*/
?>
<?php get_header(); ?>

<!-- career.php start -->

<div class="career-header-container">
	<?php get_top_banner(); ?>

	<div class='career-part1-container box-container'>
		<div class="wrap">
			<span class="page-title career-title">Culture</span>
			<span class="text-white career-title-content">We are truth seekers, problem solvers and people developers. We are finding <br/>solutions to combine investments and technologies through collaborative work of <br/>people from diversified background.</span>
		</div>
	</div>
</div>

<div class="career-path-container">
	<div class='career-part2-container box-container'>
		<div class="wrap">
			<div class="career-part2-title1 page-sub-title text-darkblue">Career Path</div>

			<div class="career-part2-jb-title career-part2-jb-text1 text-darkblue">&nbsp;<br/>PTA</div>
			<div class="career-part2-jb-title career-part2-jb-text2 text-darkblue">Intern<br/>(Assistant Analyst)</div>
			<div class="career-part2-jb-title career-part2-jb-text3 text-darkblue">&nbsp;<br/>Analyst</div>
			<div class="career-part2-jb-title career-part2-jb-text4 text-darkblue">&nbsp;<br/>Senior Analyst</div>
			<div class="career-part2-jb-title career-part2-jb-text5 text-darkblue">&nbsp;<br/>Principle</div>
			<div class="career-part2-jb-title career-part2-jb-text6 text-darkblue">&nbsp;<br/>Partner</div>

			<div class="career-part2-jb-time career-part2-jb-text1 text-darkblue"><font size="5">0</font>Month</div>
			<div class="career-part2-jb-time career-part2-jb-text2 text-darkblue"><font size="5">3</font>Month</div>
			<div class="career-part2-jb-time career-part2-jb-text3 text-darkblue"><font size="5">15</font>Month</div>
			<div class="career-part2-jb-time career-part2-jb-text4 text-darkblue"><font size="5">39</font>Month</div>
			<div class="career-part2-jb-time career-part2-jb-text5 text-darkblue"><font size="5">63</font>Month</div>
			<div class="career-part2-jb-time career-part2-jb-text6 text-darkblue"><font size="5">99</font>Month</div>

			<div class="career-part2-jb-connect career-part2-jb-connect1 darkblue"></div>
			<div class="career-part2-jb-connect career-part2-jb-connect2 darkblue"></div>
			<div class="career-part2-jb-connect career-part2-jb-connect3 darkblue"></div>
			<div class="career-part2-jb-connect career-part2-jb-connect4 darkblue"></div>
			<div class="career-part2-jb-connect career-part2-jb-connect5 darkblue"></div>

			<div class="career-part2-point career-part2-point1"></div>
			<div class="career-part2-point career-part2-point2"></div>
			<div class="career-part2-point career-part2-point3"></div>
			<div class="career-part2-point career-part2-point4"></div>
			<div class="career-part2-point career-part2-point5"></div>
			<div class="career-part2-point career-part2-point6"></div>

			<div class="career-part2-title2 page-sub-title text-darkblue">Application</div>
			<div class="career-part2-frame">
				<div class="career-part2-mail"></div>
				<div class="career-part2-mail-content sec-content text-darkblue">Goldpebble actively recruits passionate, open-minded, and accomplished people from <br/>around the world. If you are interested in pursuing a career with Goldpebble, <br/>please apply by email <a href="http://hr@goldpebble.com"><u>hr@goldpebble.com</u></a></div>
			</div>
		</div>
	</div>
</div>

<div class="career-team-container">
	<div class='career-part3-container box-container'>
		<div class="wrap">
			<span class="career-part3-title page-sub-title text-white">Team</span>
			<span class="sec-content career-part3-content text-white">Goldpebble’s strategy is based on over 50 years’ collective experience among the <br/>partners in areas including investment research/management, due diligence in <br/>both the public and private markets, and global macro.<br/>Goldpebble employs over a dozen professionals globally with an additional 70 <br/>engineers and survey professionals throughout China.</span>
		</div>
	</div>
</div>

<div class="career-partners-container">
</div>

<?php
	$employee_query = new WP_Query('category_name=Employee');

	$employee_count = 0;
	$employee_photo = array();
	$employee_content = array();

	if ($employee_query->have_posts()):
		while($employee_query->have_posts()) :
			$employee_query->the_post();

			$tmp = $post->post_title;
			$tmp = explode('|', $tmp);
			if (count($tmp) == 2) {
				// photo
				$employee_photo[] = $tmp[1];
			} else {
				// default image
				$employee_photo[] = get_stylesheet_directory_uri() . "/assets/image/5/Team_photo_small.png";
			}

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

						echo "<div class='career-employee-icon' style='background-image:url(" . $employee_photo[$i] .")'></div>";
						echo "<div class='career-employee-intro sec-content text-darkblue')'>" . $employee_content[$i] ."</div>";

					echo "</div>";
				}

			echo "</div>";
		echo "</div>";
	echo "</div>";

?>


<!-- career.php end -->

<?php get_footer(); ?>
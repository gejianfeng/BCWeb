<?php
/*
Template Name: investing.php
*/
?>
<?php get_header(); ?>

<!-- investing.php start -->
<script type="text/javascript">
	$(document).ready(function(){
		$("#title").animate({"top": "92px", "opacity" : "1"}, 500);
		$("#content").delay(500).animate({"top": "175px", "opacity" : "1"}, 500);
	});
</script>

<div class="investing-header-container">
	<?php get_top_banner(); ?>

	<div class='investing-part1-container box-container'>
		<div class="wrap">
			<span id="title" class="page-title investing-title">Alternative Investments</span>
			<span id="content" class="content text-white investing-title-content">Traditional asset classes have been densely covered, too crowded and matured for <br/>general investors to achieve high risk adjusted returns. Higher risk adjusted returns <br/>are usually accompanied with alternative assets integrating long value in a market <br/>of limited liquidity which have been thoroughly researched. With the world leading <br/><i>quantamental</i> research capability, Goldpebble is dedicated to investment in these <br/>alternative assets.</span>
		</div>
	</div>
</div>

<div class="investing-s1-container box-container white">
	<div class='investing-part2-container box-container'>
		<div class="wrap">
			<span class="page-sub-title text-darkblue investing-sub-title1">Cryptocurrencies</span>
			<span class="content text-darkblue investing-sub-title1-content">With the unique characteristics endowed by blockchain technology, Cryptocurrencies differentiates themselves from other assets: it is hard to carry out valuation as cryptocurrencies usually do not generate future cash flows, and the technical properties build a barrier for traditional investors to understand their fundamentals. With <i>quantamental</i> research expertise, Goldpebble has been developing a proprietary valuation framework to pick out the most valuable ones from thousands of candidates.</span>
			<div class="investing-line"/>
				<hr/>
			</div>
			<span class="page-sub-title text-darkblue investing-sub-title2">Live Events</span>
			<span class="content text-darkblue investing-sub-title2-content">Goldpebble, through its sister company in China, manages the largest live event fund in China. With <i>quantamental</i> capacities, Goldpebble can precisely estimate the attendance and revenue of a live event, thus figuring out the profitable events among thousands of candidates. Goldpebble is the only company that provides funds to hundreds of live events every year.</span>
			<div class="investing-live-image investing-live-image1"></div>
			<div class="investing-live-image investing-live-image2"></div>
			<div class="investing-live-image investing-live-image3"></div>
			<div class="investing-live-image investing-live-image4"></div>
		</div>
	</div>
</div>

<!-- investing.php end -->

<?php get_footer(); ?>
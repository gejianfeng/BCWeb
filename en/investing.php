<?php
/*
Template Name: investing.php
*/
?>
<?php get_header(); ?>

<!-- investing.php start -->
<script type="text/javascript">
	$(document).ready(function(){
		$("#title").animate({"top": "92px", "opacity" : "1"}, 1000);
		$("#content").delay(1000).animate({"top": "175px", "opacity" : "1"}, 1000);
	});
</script>

<div class="investing-header-container">
	<?php get_top_banner(); ?>

	<div class='investing-part1-container box-container'>
		<div class="wrap">
			<span id="title" class="page-title investing-title">Alternative Investments</span>
			<span id="content" class="content text-white investing-title-content">Goldpebble believes more research, less liquidity and longer value chain integration <br/>bring extra risk adjusted return to investors.  The traditional asset classes have been </br>too crowded and too mature for such return.<br/>With the world leading quantamental research capability, Goldpebble dedicatedly <br/>invests in alternative assets.</span>
		</div>
	</div>
</div>

<div class="investing-s1-container box-container white">
	<div class='investing-part2-container box-container'>
		<div class="wrap">
			<span class="page-sub-title text-darkblue investing-sub-title1">Cryptocurrencies</span>
			<span class="content text-darkblue investing-sub-title1-content">Cryptocurrencies, based on blockchain technology and introduced by Bitcoin, have its unique characteristics.  They do not usually generate future cash flows and are misunderstood by many traditional investors. Due to the technology and financial nature of the cryptocurrencies, Goldpebble’s team is well equipped and among the very first financial firms to understand their fundamentals.   Goldpebble has been developing a proprietary valuation framework, using quantamental research technology, to pick out the most valuable ones from thousands cryptocurrencies.</span>
			<div class="investing-line"/>
				<hr/>
			</div>
			<span class="page-sub-title text-darkblue investing-sub-title2">Live Events</span>
			<span class="content text-darkblue investing-sub-title2-content">Goldpebble, through its sister company in China, manages China’s largest live event fund.  By estimating live event’s attendance and pricing, Goldpebble provides funding to hundreds of live events every year while almost no traditional investors do.</span>
		</div>
	</div>
</div>

<!-- investing.php end -->

<?php get_footer(); ?>
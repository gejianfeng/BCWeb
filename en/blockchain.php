<?php
/*
Template Name: blockchain.php
*/
?>
<?php get_header(); ?>

<!-- blockchain.php start -->
<script type="text/javascript">
	$(document).ready(function(){
		$("#main-title").animate({"top": "145px", "opacity" : "1"}, 1000);
		$("#main-content").delay(1000).animate({"top": "240px", "opacity" : "1"}, 1000);
		$("#box1").delay(2000).animate({"opacity" : "1"}, 1000);
		$("#box2").delay(3000).animate({"opacity" : "1"}, 1000);
		$("#box3").delay(4000).animate({"opacity" : "1"}, 1000);
	});
</script>


<div class="blockchain-header-container">
	<?php get_top_banner(); ?>

	<div class='blockchain-part1-container box-container'>
		<div class="wrap">
			<span id="main-title" class="page-title blockchain-title">Blockchain Technology</span>
			<span id="main-content" class="text-white blockchain-title-content">Brought up by Bitcoin, blockchain technology is <br/>an open, secure, distributed computer system.  Such system makes <br/>transactions take place without the need of a trusted authority or <br/>central server.  The Bitcoin successfully applied blockchain technology <br/>into the digital currency and made blockchain a great ledger to record <br/>value best associated with financial industry. <br/>Not only treats blockchain as the backbone of cryptocurrencies, <br/>Goldpebble also develops blockchain applications.</span>
			<div id="box1" class="blockchain-box-container blockchain-box1">
				<div class="blockchain-box-icon blockchain-box1-icon"></div>
				<span class="blockchain-box-title text-darkblue">
					Decentralization
				</span>
				<span class="blockchain-box-content text-darkblue">
					Secure with Distributed <br/>System
				</span>
			</div>
			<div id="box2" class="blockchain-box-container blockchain-box2">
				<div class="blockchain-box-icon blockchain-box2-icon"></div>
				<span class="blockchain-box-title text-darkblue">
					Openess
				</span>
				<span class="blockchain-box-content text-darkblue">
					Trust with Transparency
				</span>
			</div>
			<div id="box3" class="blockchain-box-container blockchain-box3">
				<div class="blockchain-box-icon blockchain-box3-icon"></div>
				<span class="blockchain-box-title text-darkblue">
					Ecosystem
				</span>
				<span class="blockchain-box-content text-darkblue">
					Grow with Collective <br/>Self Interest
				</span>
			</div>
		</div>
	</div>
</div>


<!-- blockchain.php end -->

<?php get_footer(); ?>
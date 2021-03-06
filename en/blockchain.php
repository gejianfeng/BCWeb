<?php
/*
Template Name: blockchain.php
*/
?>
<?php get_header(); ?>

<!-- blockchain.php start -->
<script type="text/javascript">
	var CoinCount = 7;

	$(document).ready(function(){
		CreateCoin();

		$("#main-title").animate({"top": "145px", "opacity" : "1"}, 500);
		$("#main-content").delay(500).animate({"top": "240px", "opacity" : "1"}, 500);
		$("#box1").delay(1000).animate({"opacity" : "1"}, 500);
		$("#box2").delay(1500).animate({"opacity" : "1"}, 500);
		$("#box3").delay(2000).animate({"opacity" : "1"}, 500);

		StartCoinAnim();
	});

	function CreateCoin()
	{
		var root_div = document.getElementById("anim");

		for (var i = 0; i < CoinCount; ++i)
		{
			var coin_div = document.createElement("div");
			coin_div.className = "blockchain-coin";
			coin_div.id = "coin" + i.toString();
			root_div.appendChild(coin_div);
		}
	}

	function StartCoinAnim()
	{
		for (var i = 0; i < CoinCount; ++i)
		{
			RunCoinAnim(i);
		}
	}

	function RunCoinAnim(idx)
	{
		var id_name = "#coin" + idx.toString();

		var rand = GetRandomDelayTime();

		var x = GetRandomPosX();
		var y = GetRandomPosY();

		var delay_duration = GetRandomDelayTime();
		var anim_duration = GetRandomAnimTime();

		$(id_name).css("left" , x.toString() + "px");
		$(id_name).css("top" , y.toString() + "px");
		$(id_name).css("opacity" , "0");
		$(id_name).css("width" , "0px");
		$(id_name).css("height" , "0px");

		$(id_name).delay(delay_duration).animate({"opacity":"0.65", "width":"16px", "height":"16px"}, 100).animate({"opacity":"0.1", "width":"158px", "height":"157px"}, anim_duration, function() {
			RunCoinAnim(idx);
		});
	}

	function FinishCoinAnim(idx)
	{
		RunCoinAnim(idx);
	}

	function GetRandomDelayTime()
	{
		var x = 6000;
		var y = 2000;
		return parseInt(Math.random() * (x - y + 1) + y);
	}

	function GetRandomAnimTime()
	{
		var x = 2000;
		var y = 1000;
		return parseInt(Math.random() * (x - y + 1) + y);
	}

	function GetRandomPosX()
	{
		var x = 1024 - 158;
		var y = 0;
		return parseInt(Math.random() * (x - y + 1) + y);
	}

	function GetRandomPosY()
	{
		var x = 500 - 157;
		var y = 0;
		return parseInt(Math.random() * (x - y + 1) + y);
	}

</script>


<div class="blockchain-header-container">
	<?php get_top_banner(); ?>

	<div class='blockchain-part1-container box-container'>
		<div class="wrap">
			<div id="anim" class="blockchain-anim"></div>

			<span id="main-title" class="page-title blockchain-title">Blockchain Technology</span>
			<span id="main-content" class="text-white blockchain-title-content">Pioneered by Bitcoin, blockchain technology is a decentralized and distributed ledger which is open and secure. The technology enables transactions without the need of a trusted authority or central sever. Cryptocurrency (represented by Bitcoin) provided the prototype for the application into digital currency, and smart contract platform (represented by Ethereum) further broadens the boundary. Blockchain has gone much further from the backbone of cryptocurrencies to a technology with potentials to renew the landscape of several existing markets. Goldpebble also develops blockchain applications.</span>
			<div id="box1" class="blockchain-box-container blockchain-box1">
				<div class="blockchain-box-icon blockchain-box1-icon"></div>
				<span class="blockchain-box-title text-darkblue">
					Decentralization
				</span>
				<span class="blockchain-box-content text-darkblue">
					Security with Distributed <br/>System
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
					Growth with Collective <br/>Self Interests
				</span>
			</div>
		</div>
	</div>
</div>


<!-- blockchain.php end -->

<?php get_footer(); ?>
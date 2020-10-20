<?php include"inc/header.php";?>
<style>
	.dimen {
		background: white;
		margin: 50px;
		text-align: center;
		padding: 20px;
		border: 40px solid #111;
		font-size: 50px;
	}

</style>
<section id="maincontent">
	<h2>Dimension</h2>
	<hr>
	<script>
		$(document).ready(function() {
			$('#select').click(function() {
				var val = " ";
				val += "Width is : " + $('.dimen').width() + "</br>";
				val += "height is : " + $('.dimen').height() + "</br>";
				val += "Innerwidth is : " + $('.dimen').innerWidth() + "</br>";
				val += "Innerheight is : " + $('.dimen').innerHeight() + "</br>";
				val += "Outerwidth is : " + $('.dimen').outerWidth(true) + "</br>";//if true then with margin and padding
				val += "Outerheight is : " + $('.dimen').outerHeight() + "</br>";
				$("#state").html(val);//if no true user then no padding and margin is considered

			});
		});

	</script>
	<p class="dimen">We are learning jquery.</p>
	<br>
	<div id="state"></div>

	<button id="select">Display</button>
</section>
<?php include"inc/footer.php";?>

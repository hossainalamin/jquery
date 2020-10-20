<?php include"inc/header.php";?>
<style>
	.text {
		float: right;
		color: red;
		border: 1px solid #ffff;
		padding: 10px;
		border-radius: 5px;
	}

	.bg {
		background: black;
		color: white;
	}

	.bg:hover {
		color: red;
	}

</style>
<?php
function removetext()
{
	echo "text";
}
?>
<section id="maincontent">
	<h2 class="text">Css Classes</h2>
	<hr>
	<script>
		$(document).ready(function() {
			$('#style').click(function() {
				$('p').addClass("text bg");
			});
			$('#remove').click(function() {
				$('h2').removeClass("<?php removetext(); ?>");
			});
			$('#toogle').click(function() {
				$('p').toggleClass("text bg");
			});
		});

	</script>
	<div class="box1">
	</div>
	<p>We are learning jquery.</p>

	<br>
	<button id="style">Give Style</button>
	<button id="remove">Remove Class</button>
	<button id="toogle">Toggle Class</button>
</section>
<?php include"inc/footer.php";?>

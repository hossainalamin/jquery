<?php include"inc/header.php";?>
<?php
$font = "font-size";
$fontSize ="50px";
$margin = "margin-left";
$mgvalue = "10px";
?>
<section id="maincontent">
	<h2>Css Classes</h2>
	<hr>
	<script>
		$(document).ready(function() {
			$('#style').click(function() {
				$('p').css(
					{
					"background"       : "black",
					"color"            : "white",
					"<?php echo $font; ?>"  : "<?php echo $fontSize;?>",
					"<?php echo $margin;?>" : "<?php echo $mgvalue; ?>"
				});
			});
		});

	</script>
	<div class="box1">
	</div>
	<p>We are learning jquery.</p>

	<br>
	<button id="style">Add Style</button>
</section>
<?php include"inc/footer.php";?>

<?php include"inc/header.php";?>
<section id="maincontent">
	<h2>Get content and attribute</h2>
	<hr>
	<script>
		$(document).ready(function() {
			$('#text').click(function() {
				alert("The text is : " + $('#lorem').text());
			})
			$('#html').click(function() {
				alert("The text is : " + $('#lorem').html());
			});
			$('#value').click(function() {
				alert("The name is : " + $('#name').val());
			});
		});

	</script>
	<div>
		name:<input type="text" value="Almain" id="name" />
	</div>
	<p id="lorem">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, unde.<strong>Alamin</strong></p>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<button id="text">Show text</button>
	<button id="html">Show html</button>
	<button id="value">Show Value</button>
</section>
<?php include"inc/footer.php";?>

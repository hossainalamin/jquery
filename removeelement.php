<?php include"inc/header.php";?>
<?php
?>
<section id="maincontent">
	<h2>Remove element Element</h2>
	<hr>
	<script>
		$(document).ready(function() {
			$('#remove').click(function(){
				$('.box1').remove();
			});
			$('#empty').click(function(){
				$('#jquery').empty();
			});
		});

	</script>
	<div class="box1">
		<p id="jquery">We are learning jquery.</p>
	</div>
	
	<br>
	<button id="remove">Remove</button>
	<button id="empty">Empty</button>
</section>
<?php include"inc/footer.php";?>

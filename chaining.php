<?php include"inc/header.php";?>
<section id="maincontent">
	<h2>Chaining</h2>
	<hr>
	<script>
		$(document).ready(function() {
			$("#animation").click(function() {
				$('.box1').animate({
					left: '400px'
				});
			});
			$("#animation").click(function() {
				$('.box2').animate({
					width: '500px'
				});
			});
			$("#animation").click(function() {
				$('.box3').animate({
					width: '500px',
					marginLeft: '200px',
					opacity: '.4',
					height: '250px'
					
				},5000,function(){
					alert("hello");
				});
			});
			
			$('#chain').click(function(){
				$('.box1').css("background","white")
					.slideUp(3000)
					.slideDown(3000);
			})
		});

	</script>
	<div class="box1"></div>
	<div class="box2"></div>
	<div class="box3"></div>
	<button id="animation">Animation</button>
	<button id="chain">Click here</button>
</section>
<?php include"inc/footer.php";?>

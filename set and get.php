<?php include"inc/header.php";?>
<section id="maincontent">
	<h2>Set & get content and attribute</h2>
	<hr>
	<script>
		$(document).ready(function() {
			$('#show').click(function() {
				alert($('#link').attr('href'));
			});
			$('#change').click(function() {
				alert($('#link').attr('href',"http://youtube.com"));
			});
			
			$("#change").click(function(){
				$("#link").attr({
					"href" : "http://youtube.com",
					"title" : "Youtube Tittle"
				});
			});
		});

	</script>
	<p><a href="http://facebook.com" id="link" title="Fb title">Facebook</a></p>
	<br>
	<button id="show">Show</button>
	<button id="change">Change</button>
</section>
<?php include"inc/footer.php";?>

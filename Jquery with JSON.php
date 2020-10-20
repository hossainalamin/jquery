<?php include"inc/header.php";?>
<section id="maincontent">
	<h2>Jquery With Json  </h2>
	<hr>
	<script>
		$(document).ready(function() {
			var personJSON = {

				"Alamin" : {
					"name": "Alamin",
					"skill": "PHP",
					"Email": "hossainalamin980@gmail.com"
				},
				"Rokeb" :{
					"name": "Rokeb",
					"skill": "PHP",
					"Email": "rokeb980@gmail.com"
				}
			};
			$("#state").html(personJSON.Rokeb.Email);
		});

	</script>
	<div id="subcontent">
		<div id="state"></div>
	</div>

</section>
<?php include"inc/footer.php";?>

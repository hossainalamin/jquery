<?php include"inc/header.php";?>
<section id="maincontent">
	<h2>Ajax Method </h2>
	<hr>
	<script>
		$(document).ready(function() {
			JnU();

		});
		function JnU() {
			$.ajax({
				url: "practice.xml",
				dataType: "xml",
				error: function(e) {
					alert("An error occurred while processing XML file");
					console.log("XML reading Failed: ", e);
				},
				success: function(data) {
					$("ul").children().remove();
					$(data).find("student").each(function() {
						var allData = "<li>Name: " + $(this).find("name").text() + "</li>"+
						"<li>Skill: " + $(this).find("skill").text() + "</li>"+
						"<li>Institute: " + $(this).find("institution").text() + "</li>";
						$("ul").append(allData);
					});
				}
			});
		}

	</script>
	<div id="subcontent">
	<ul></ul>
	</div>

</section>
<?php include"inc/footer.php";?>

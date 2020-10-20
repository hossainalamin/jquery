<?php include"inc/header.php";?>
<section id="maincontent">
	<h2>Conditional Logic(If else)</h2>
	<hr>
	<script>
		$(document).ready(function() {
			$('#submit').click(function(e) {
				var isValid = true;
				$("input[type='text']#required").each(function() {
					if ($(this).val() == '') {
						isValid = false;
						$(this).css({
							"border": "1px solid red",
							"background": "#ffcece"
						})
					} else {
						$(this).css({
							"border": "",
							"background": ""
						})
					}
					if (isValid = false) {
						e.preventDefault();
					} else {
						//document.getElementById("state").innerHtml="Thank You";
						return false;
					}
				});
			});


		});

	</script>
	<div id="subcontent">
		<form>
			<table>
				<tr>
					<td>First Name</td>
					<td><input type="text" id="required"></td>
				</tr>
				<tr>
					<td>Last Name</td>
					<td><input type="text"></td>
				</tr>
				<tr>
					<td>Email address</td>
					<td><input type="text" id="required"></td>
				</tr>
				<tr>
					<td>Website</td>
					<td><input type="text"></td>
				</tr>
				<tr>
					<td></td>
					<td><button id="submit">Submit</button></td>
				</tr>


			</table>
		</form>
	</div>
	<div id="state"></div>
	<br>

</section>
<?php include"inc/footer.php";?>

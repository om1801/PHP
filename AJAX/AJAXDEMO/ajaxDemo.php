<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sequential Demo Without AJAX</title>
</head>
<body onload="fillCountry()">

	<form>
		<table>
			<tr>
				<td>Select Country</td>
				<td>:</td>
				<td>
					<select name="countryDD" id="countryDD" onchange="fillState(this.value)">
						<option value="-1">---Select Country---</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Select State</td>
				<td>:</td>
				<td>
					<select name="stateDD" id="stateDD" onchange="fillCity(this.value)">
						<option value="-1">---Select State---</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Select City</td>
				<td>:</td>
				<td>
					<select name="cityDD" id="cityDD">
						<option value="-1">---Select City---</option>
					</select>
				</td>
			</tr>
		</table>
	</form>



	<script type="text/javascript">
		function fillCountry() {
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					countries = JSON.parse(this.responseText)['data'];
					options = '<option value="-1">---Select Country---</option>';
					for (var i = 0; i <= countries.length - 1; i++) {
						options = options + '<option value="'+countries[i].id+'">'+countries[i].name+'</option>'
					}
					document.getElementById('countryDD').innerHTML = options;
				}
			}
			xhttp.open("GET", "http://localhost/DU_BTech_5_2023-24/AJAXAPIS/countriesApi.php", true);
			xhttp.send();


		}

		function fillState(cid) {
			cid = parseInt(cid);
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					states = JSON.parse(this.responseText)['data'];
					options = '<option value="-1">---Select State---</option>';
					for (var i = 0; i <= states.length - 1; i++) {
						options = options + '<option value="'+states[i].id+'">'+states[i].name+'</option>'
					}
					document.getElementById('stateDD').innerHTML = options;
					fillCity(-1);
				}
			}
			xhttp.open("GET", "http://localhost/DU_BTech_5_2023-24/AJAXAPIS/statesApi.php?country_id="+cid, true);
			xhttp.send();
		}


		function fillCity(sid) {
			sid = parseInt(sid);
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					cities = JSON.parse(this.responseText)['data'];
					options = '<option value="-1">---Select City---</option>';
					for (var i = 0; i <= cities.length - 1; i++) {
						options = options + '<option value="'+cities[i].id+'">'+cities[i].name+'</option>'
					}
					document.getElementById('cityDD').innerHTML = options;
				}
			}
			xhttp.open("GET", "http://localhost/DU_BTech_5_2023-24/AJAXAPIS/citiesApi.php?state_id="+sid, true);
			xhttp.send();
		}


	</script>

</body>
</html>
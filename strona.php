<html>
<head>
	<title>Czas na swiecie</title>
</head>
<body>
	<h1>Witaj na stronie stworzonej przez kontener 1</h1><br />
	<h2>Lublin </h2>
	<p id="time_lub">01.01.2000, 00:00:00<p>
	<h2>Nowy york </h2>
	<p id="time_ny">01.01.2000, 00:00:00<p>
	<h2>Sydney</h2>
	<p id="time_syd">01.01.2000, 00:00:00<p>
<script>
	func();
	function func(){
	document.getElementById('time_lub').textContent=
		new Date().toLocaleString('pl-PL',{timeZone:'Europe/Warsaw'});
	document.getElementById('time_ny').textContent=
		new Date().toLocaleString('pl-PL',{timeZone:'America/New_york'});
	document.getElementById('time_syd').textContent=
		new Date().toLocaleString('pl-PL',{timeZone:'Australia/Sydney'});
		setTimeout(func, 1000);
		}
</script>
</body>


</html>

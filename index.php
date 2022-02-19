/* AUTEUR : TECOLO
REDIGE PAR LE PROPRIETAIRE : LUDWIG BOUDEWEEL */
<html>
	<head>
		<title>Tecolo</title>
		<link rel="stylesheet" href="style.css"/>
	</head>
	
	<body>
		<section class="background-home">
			<section class="bloc">
				<section class="connect">
					<button>inscription</button>
					<h3>connexion à Tecolo</h3>
					<form action="connexion.php" method="POST">
						<input name="username" type="text" placeholder="Identifiant"/>
						<input name="password" type="password" placeholder="Mot de passe"/>
						<input style="margin-top:20px;cursor:pointer" class="connect" type="submit" value="connexion"/>
						<p class="clear"></p>
						<p class="lien_1">mot de passe oublié ?</p>
					</form>
				</section>
			
				<section class="lesaviezvous">
					<p id="div1">Le saviez vous ?</p>
				</section>
			</section>
		</section>
		
			<script>
	function load() {
	var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("div1").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "conseil.php", true);
  xhttp.send();
}setInterval(load, 10000);
</script>
	</body>
</html>

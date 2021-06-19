<!DOCTYPE html>
  <html>
	<head>
		<meta charset="utf-8">
	  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	  	<!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
		<title> Gestion Formulaire </title>
		<link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="CSS/monstyle.css">
		<!-- <link rel="stylesheet" type="text/javascript" href="JS/Javastyle.js"> -->
	</head>
	<body style="background-image:url(Images/7.jpg) ; background-size: cover;">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-offset-4 col-md-4 col-sm-6 col-xs-12" style="margin-top: 50px; background-color: rgba(233, 233, 233, 0.8); border-radius: 10px; box-shadow: 0px 0px 20px rgba(32, 255, 255, 0.5);">
					<form method="post" action="Traitement.php" enctype="multipart/form-data"> 

						<h3 class="text-center"> Creez Votre Compte Gratuitement </h3>
						<hr style="height: 8px;">

						<p>
							<label for="Nom"> <sup style="color: red;">* </sup>Nom : </label>
							<div class="input-group">
								<span Class="input-group-addon essai"><span class="glyphicon glyphicon-user"></span></span>
								<input  class="form-control inputt " type="text" name="Noms" id="Nom" required="" placeholder="Votre Nom" minlength="4" pattern="^[A-Za-z0-9_.]+${3,20}" maxlength="50" title=" saisir votre nom sans caractere special">	
								<span class="input-group-addon essai Valid"> <span class="validity " style="background-color: none;"></span> </span>
							</div>
							<div class="alert alert-danger"> Veillez Remplir le champ ci dessus </div>
						</p>

						<p>
							<label for="Prenom"> <sup style="color: red;">* </sup>Prenom : </label>
							<div class="input-group">
								<span Class="input-group-addon essai"><span class="glyphicon glyphicon-user"></span></span>
								<input class="form-control inputt" type="text" name="Prenoms" id="Prenom" required="" placeholder="Votre Prenom" minlength="4" pattern="^[A-Za-z0-9_.]+${3,20}" maxlength="50">
								<span class="input-group-addon essai Valid"> <span class="validity" style="background-color: none;"> </span></span>
							</div>
						  <div class="alert alert-danger"> Veillez Remplir le champ ci dessus </div>
						</p>


						<p>
							<label> <sup style="color: red;">* </sup>Sexe : </label>
						</p>

						<p style="margin-left: 40px; font-size: 18px;">
							<label for="Homme"> H </label> <input  type="radio" name="Sexe" value="Homme" id="Homme"checked="checked" />
							<label for="Femme"> F </label> <input  type="radio" name="Sexe" value="Femme" id="Femme" />
							<!-- <div class="alert alert-danger"> Vous devez faire un choix </div> -->
						</p>

						<p>
							<label for="Nom"> <sup style="color: red;">* </sup>Date de Naissance : </label>
							<div class="input-group">
								<span class="input-group-addon essai"> <span class="glyphicon glyphicon-time"></span> </span>
								<input  class="form-control inputt" type="date" name="Date_Naissance" id="Date_Nais" required="" placeholder="Exple: 11 - 08 - 2021" pattern="(0[1-9]|[12][0-9]|3[01])[\/](0[1-9]|1[012])[\/](19|20)\d\d">
								<span class="input-group-addon essai Valid"> <span class="validity" style="background-color: none;"> </span></span>
							</div>
							<div class="alert alert-danger"> Veillez Remplir le champ ci dessus </div>
						</p>

						<p>
							<label for="Tel"> <sup style="color: red;">* </sup>Numéro Tel : </label>
							<div class="input-group">
								<span class="input-group-addon essai"> <span class="glyphicon glyphicon-earphone"></span> </span>
								<input class="form-control inputt" type="tel" name="Telephone" id="Tel" required="" placeholder="Numero de tel" pattern="[0-9]+" minlength="9" maxlength="20">
								<span class="input-group-addon essai Valid"> <span class="validity" style="background-color: none;"></span> </span>
							</div>
						  <div class="alert alert-danger"> Veillez Remplir le champ ci dessus </div>
						</p>

						 <p>
							<label for="Email"> <sup style="color: red;">* </sup>E-mail : </label>
							<div class="input-group">
								<span class="input-group-addon essai"> <span class="glyphicon glyphicon-envelope"> </span> </span>
								<input class="form-control inputt" type="email" name="Email" id="Email" required="" placeholder="Example@example.com" pattern="[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([_\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})">
								<span class="input-group-addon essai Valid"> <span class="validity" style="background-color: none;"></span> </span>
							</div>
						  <div class="alert alert-danger"> Veillez Remplir le champ ci dessus </div> 
						</p>


						<p>
							<label for="Tel"> <sup style="color: red;">* </sup>PassWord : </label>
							<div class="input-group">
								<span class="input-group-addon essai"> <span class="glyphicon glyphicon-lock"> </span> </span>
								<input class="form-control inputt" type="PassWord" name="Pswd" id="Pswd" required="" minlength="5" title="Entrer un mot de passe d'au moins 5 caracteres">
								<span class="input-group-addon essai Valid"> <span class="validity" style="background-color: none;"></span> </span>
							</div>
						  <div class="alert alert-danger"> Veillez Remplir le champ ci dessus </div>
						</p>


						<p>
							<label for="Nationalite"> <sup style="color: red;">* </sup>Choix du Pays : </label>
					    <select id="Nationalite" class="form-control inputt" name="Pays" required="" >
					      <option selected="selected" disabled="" style="background-color: rgb(180, 180, 180);"> choisir votre pays d'origine </option>
					      <option value="camerounaise"> cameroun </option>
					      <option value="gabonaise"> sénégal </option>
					      <option value="congolaise"> congo </option>
					      <option value="marocaine"> maroc </option>
					      <option value="ivoirienne"> Cote_ivoire </option>
					      <option value="Tunisienne"> Tunisie </option>
					      <option value="Egyptienne"> Egypte </option>
					    </select>
					    <div class="alert alert-danger"> Vous devez faire un choix </div>
						</p>

						<p id="Image">
							<label for="photo" ><sup style="color: red;">* </sup>Ajoutez Votre photo (.png, .jpeg, .jpg | 100 Mo ) <br></label>
					    <input class="form-control inputt" type="file" id="photo" name="Photo_Profil" accept="image/*" onchange="loadFile(event)" required=""/><br>
					    <div id="Bloc_Photo"> <img id="pp" style="height: 143px; width: 143px;"> </div>
					    <div class="alert alert-danger"> le champ image de profil est vide </div>
						</p>

						<p> <input id="Send" class="btn  btn-success pull pull-left" type="submit" value="CREER"></p>
						<p> <input id="Clear" class="btn   btn-danger pull pull-right" type="reset" value="ANNULER" style="margin-bottom: 20px !important;"></p>
					</form>
				</div>
			</div>
		</div>
	<script type="text/javascript">
		var cpt = 0;
		var Message_erreur = document.getElementsByClassName('alert');
		var Etoile_erreur = document.getElementsByTagName('sup');
		var Valid = document.getElementsByClassName('Valid');
		var Send = document.getElementById('Send');
		var Zone = document.getElementsByTagName('input');
		var pays = document.getElementById('Nationalite');
		var formulaire = document.getElementsByTagName('form');
		var Clear = document.getElementById('Clear');
		// console.log(Message_erreur);

    // previsualisation image dans formulaire
		var loadFile = function(event) {
    var profil = document.getElementById('pp');
      profil.src = URL.createObjectURL(event.target.files[0]);
    };


		// Masquage Message erreur
		function Masque() {	
			for (var i = Message_erreur.length - 1; i >= 0; i--) {
			  Message_erreur[i].style.opacity = '0';
			}

			for (var i = Etoile_erreur.length - 1; i >= 0; i--) {
				Etoile_erreur[i].style.opacity = '0';
			}

			for (var i = Valid.length - 1; i >= 0; i--) {
				Valid[i].style.opacity = '0';
			}

		}
		Masque();


		// Detection Appui Boutton Send
		Send.addEventListener('click' , function(){
			for (var i = Zone.length - 1; i >= 0; i--) {
				if (Zone[i].value == 0 || pays.value == "disabled" ) {
					Message_erreur[i].style.opacity = '1';
					cpt+=1;
				}

				if (cpt != 0) {
					formulaire.submit();
					break;
				}
			}
		})


		// Detection appui sur Clear
		Clear.addEventListener('click' , function(){
			Masque();
		})

		// Evenement sur nom
		Zone[0].addEventListener('blur' , function(){
			Valid[0].style.opacity = '1';
			if (Zone[0].value == 0 || Zone[0].value == "disabled" ) {
					Message_erreur[0].style.opacity = '1';
					Etoile_erreur[0].style.opacity = '1';
					Zone[0].style.boxShadow = '0px 0px 5px red';
					Zone[0].style.backgroundColor = 'rgb(255,202,202)';
			}else{
					Message_erreur[0].style.opacity = '0';
					Etoile_erreur[0].style.opacity = '0';
					Zone[0].style.boxShadow = '0px 0px 5px rgb(0, 255, 0)';
					Zone[0].style.backgroundColor = 'rgb(183,255,179)';
			}
		})

		// Evenement sur prenom
		Zone[1].addEventListener('blur' , function(){
			Valid[1].style.opacity = '1';
			if (Zone[1].value == 0 || Zone[0].value == "disabled" ) {
					Message_erreur[1].style.opacity = '1';
					Etoile_erreur[1].style.opacity = '1';
					Zone[1].style.boxShadow = '0px 0px 5px red';
			}else{
					Message_erreur[1].style.opacity = '0';
					Etoile_erreur[1].style.opacity = '0';
					Zone[1].style.boxShadow = '0px 0px 5px rgb(0, 255, 0)';
			}
		})

		// Evenement sur Date Naissance
		Zone[4].addEventListener('blur' , function(){
			Valid[2].style.opacity = '1';
			if (Zone[4].value == 0 || Zone[4].value == "disabled" ) {
					Message_erreur[2].style.opacity = '1';
					Etoile_erreur[3].style.opacity = '1';
					Zone[4].style.boxShadow = '0px 0px 5px red';
			}else{
					Message_erreur[2].style.opacity = '0';
					Etoile_erreur[3].style.opacity = '0';
					Zone[4].style.boxShadow = '0px 0px 5px rgb(0, 255, 0)';
			}
		})

		// Evenement sur Num telephone
		Zone[5].addEventListener('blur' , function(){
			Valid[3].style.opacity = '1';
			if (Zone[5].value == 0 || Zone[5].value == "disabled" ) {
					Message_erreur[3].style.opacity = '1';
					Etoile_erreur[4].style.opacity = '1';
					Zone[5].style.boxShadow = '0px 0px 5px red';
			}else{
					Message_erreur[3].style.opacity = '0';
					Etoile_erreur[4].style.opacity = '0';
					Zone[5].style.boxShadow = '0px 0px 5px rgb(0, 255, 0)';
			}
		})

		// Evenement sur Email
		Zone[6].addEventListener('blur' , function(){
			Valid[4].style.opacity = '1';
			if (Zone[6].value == 0 || Zone[6].value == "disabled" ) {
					Message_erreur[4].style.opacity = '1';
					Etoile_erreur[5].style.opacity = '1';
					Zone[6].style.boxShadow = '0px 0px 5px red';
			}else{
					Message_erreur[4].style.opacity = '0';
					Etoile_erreur[5].style.opacity = '0';
					Zone[6].style.boxShadow = '0px 0px 5px rgb(0, 255, 0)';
			}
		})

		// Evenement sur password
		Zone[7].addEventListener('blur' , function(){
			Valid[5].style.opacity = '1';
			if (Zone[7].value == 0 || Zone[7].value == "disabled" ) {
					Message_erreur[5].style.opacity = '1';
					Etoile_erreur[6].style.opacity = '1';
					Zone[7].style.boxShadow = '0px 0px 5px red';
			}else{
					Message_erreur[5].style.opacity = '0';
					Etoile_erreur[6].style.opacity = '0';
					Zone[7].style.boxShadow = '0px 0px 5px rgb(0, 255, 0)';
			}
		})

		// Evenement sur pays
		Zone[8].addEventListener('blur' , function(){
			Valid[6].style.opacity = '1';
			if (Zone[8].value == 0 || pays.value == "disabled" ) {
					Message_erreur[6].style.opacity = '1';
					Etoile_erreur[7].style.opacity = '1';
					Zone[8].style.boxShadow = '0px 0px 5px red';
			}else{
					Message_erreur[6].style.opacity = '0';
					Etoile_erreur[7].style.opacity = '0';
					Zone[8].style.boxShadow = '0px 0px 5px rgb(0, 255, 0)';
			}
		})


		// Evenement sur image
		Zone[9].addEventListener('blur' , function(){
			Valid[7].style.opacity = '1';
			if (Zone[9].value == 0 || pays.value == "disabled" ) {
					Message_erreur[9].style.opacity = '1';
					Etoile_erreur[8].style.opacity = '1';
					Zone[9].style.boxShadow = '0px 0px 5px red';
			}else{
					Message_erreur[9].style.opacity = '0';
					Etoile_erreur[8].style.opacity = '0';
					Zone[9].style.boxShadow = '0px 0px 5px rgb(0, 255, 0)';
			}
		})


  </script>
</body>
</html>


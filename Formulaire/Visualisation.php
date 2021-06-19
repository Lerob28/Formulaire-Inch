<?php 

    $Bdd = new PDO( 'mysql:host=localhost;dbname=inchclass','root','',array( PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION) );
?>
<!DOCTYPE html>
<html>
<head>
	<title>visualisation</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="fonts/ionicons.min.css">
	<link rel="stylesheet" type="text/css" href="CSS/style1.css">
</head>

<body> 
<?php 
   $response = $Bdd->query('SELECT* FROM inch_group ORDER BY id DESC');
  echo '<div class="container-fluid">
        <div class="row">
        <div class="table-responsive-md table-responsive-sm table-responsive-xl">
        <table class="table table-md table table-sm table table-xl ">
        <div class="col-md-12 col-sm-12 col-xl-12">
        <thead class="bg-primary"><td>ID</td><td class="nom">NOM</td><td class="prenom">PRENOM</td><td class="sexe">SEXE</td><td class="pays">PAYS</td>
        <td class="telephone">TELEPHONE</td><td class="naissance">NAISSANCE</td><td class="email">EMAIL</td><td class="mot_de_passe">MOT_DE_PASSE</td><td class="photo_profil">PHOTO_PROFIL</td></thead></div>';
        $i = 1;      
  while ($donnees =$response->fetch()) { 
  $a = $donnees['Photo_Profil'];            
  echo '<div class="col-md-12 col-sm-12 col-xl-12">
        <tbody class="bg-info"><td class="bg-primary">'.$i.'</td><td class="nom">'.$donnees ['Noms'].'</td>
        <td class="prenom">'.$donnees['Prenoms'].'</td> <td class="sexe">'.$donnees['Sexe'].'</td><td class="pays">'.$donnees['Pays'].'</td>
        <td class="telephone">'.$donnees['Telephone'].'</td> <td class="naissance">'.$donnees['Date_Naissance'].'</td> <td class="email">'.$donnees['Email'].'</td>
        <td class="mot_de_passe">'.$donnees['Pswd'].'</td> <td class="photo_profil"> <img src= "Images/'.$a.'" style = " width: 120px; height: 120px; border-raduis: 50%;"></td></tbody>';   
    $i++;                
  } 
  
?>
</body>
</html>
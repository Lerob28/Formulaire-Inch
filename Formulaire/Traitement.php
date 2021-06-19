<!-- connect to Database -->
<?php 

  if ( isset($_POST) )
  {
    $Bdd = new PDO( 'mysql:host=localhost;dbname=inchclass','root','',array( PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION) );
    $requete = $Bdd->prepare( 'INSERT INTO inch_group ( Noms, Prenoms, Sexe, Date_Naissance, Telephone, Email, Pswd, Pays, Photo_Profil) VALUES(?,?,?,?,?,?,?,?,?)' );
    $requete->execute( array( 
                 $_POST['Noms'], $_POST['Prenoms'], $_POST['Sexe'], 
                 $_POST['Date_Naissance'], $_POST['Telephone'], $_POST['Email'],
                 $_POST['Pswd'], $_POST['Pays'],$_FILES['Photo_Profil']['name']
              ) );  
  }


  if (isset($_FILES['Photo_Profil']) AND $_FILES['Photo_Profil']['error'] == 0)
  {
    if ($_FILES['Photo_Profil']['size'] <= 100000000)
    {
      $infosfichier = pathinfo($_FILES['Photo_Profil']['name']);
      $extension_upload = $infosfichier['extension'];
      $extensions_autorisees = array('jpg', 'jpeg', 'png','JPG','JPEG','PNG');
      if (in_array($extension_upload, $extensions_autorisees))
      {
        move_uploaded_file($_FILES['Photo_Profil']['tmp_name'], 'Images/' .basename($_FILES['Photo_Profil']['name']));
        $p = $_FILES['Photo_Profil']['name'];
        // echo "<img src='Images/".$p."' width=\"250 px;\" height=\"250 px;\">";
      }
    }
  }

?>

<!DOCTYPE HTML>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
  <title> Inch_Group Users Platefrome </title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link href='//fonts.googleapis.com/css?family=Carrois+Gothic+SC' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      $('.boxgrid.caption').hover(function(){
        $(".cover", this).stop().animate({top:'170px'},{queue:false,duration:160});
      }, function() {
        $(".cover", this).stop().animate({top:'220px'},{queue:false,duration:160});
      });
    });
  </script>
</head>

<body style="background-image:url(Images/b1.jpg) ; background-size: cover;">
  <div class="container-fluid"> 
    <div class="row">
      <!-- A EXPLOITER 0 -->
        <div class="header">
            <div class="wrap">
            <!-- Logo Debut -->
            <div class="logo">
              <a href="index.html"><img src="Images/logo.png" title="logo" /></a>
            </div>
            <!-- Logo Fin-->
            <div class="header-nav">
              <ul>
                <li><a href="#">Home</a></li>
                <li><a href="Visualisation.php">Blog</a></li>
                <li><a href="#">About us</a></li>
                <li class="active"><a href="#">Gallery</a></li>
                <li><a href="formulaire.php">Contact</a></li>
              </ul>
            </div>
            <div class="clear"> </div>
          </div>
        </div>
      <!-- A EXPLOITER 0 -->
    </div>
    <div class="row">
      <!-- A EXPLOITER 1  -->
        <div class="wrap">
          <div class="about">
            <div class="product-grids">
                <div class="bloder-content">
                  <h6> Plateform Members </h6>
                </div>
            </div>
          </div>
        </div>
      <!-- A EXPLOITER 1  -->
    </div>
    <div class="row">
    <?php 
      $response = $Bdd->query('SELECT* FROM inch_group ORDER BY id DESC');
      while( $donnees = $response->fetch() ){
        $a = $donnees['Photo_Profil']; // photo profil
        $b = $donnees['Noms'];  // Noms
        $c = $donnees['Prenoms'];  // Prenom
        $d = $donnees['Email'];  // Email
        echo 
             "
              <div class=\"col-md-4\">
                <div class=\"boxgrid caption content-gallery \">
                  <img src=\"images/".$a."\"/>
                  <div class=\"cover boxcaption\">
                    <h3>".$b."</h3>
                    <p>".$c."<br/><a href=\"#\" target=\"_BLANK\">".$d."</a></p>
                  </div>
                </div>
              </div>

             ";
    }
   ?>
    </div>
    <div class="row">
      <!-- A EXPLOITER 3  -->
        <div class="footer footer1" style="position: relative; bottom: 0; width: 100%;">
          <p class="link">
            <span>
              © 2021 Inch_grouph  All rights Reserved | Designed And Implement by&nbsp; 
              <a href="http://www.inchclass.org"> Lerob Nangue</a> 
            </span>
          </p>
        </div>
      <!-- A EXPLOITER 3  -->
    </div>
  </div> 
  </body>
</html>
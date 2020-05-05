<?php
session_start();

require "connection.php";

    $sql= "SELECT * FROM inscription";
    $ret = mysqli_query($conn, $sql) or die();
/*je donne les valeurs a notre variable super globale $_SESSION; Cette superglobale est un tableau associatif qui stocke les différentes
variables de sessions avec leurs noms en index du tableau et leurs valeurs en valeurs du tableau.*/
    while ( $col = mysqli_fetch_assoc($ret) ){
        $_SESSION['id'] = $col['id'];
        $_SESSION['nom_user'] = $col['nom_user'];
        $_SESSION['prenom_user'] = $col['prenom_user'];
        $_SESSION['mail_user'] = $col['mail_user'];
        $id = $col['id'];
    }


echo "<h2  id='bienvenu'>bienvenue  ". $_SESSION['nom_user']."</h2>";
// $permission = false;pour la sécurisation du site si mes input sont rempli et validés par le submit, fais moi le require de l'entete
$permission = false;
if (isset($_POST['submit'])) {
   // echo "oh la la";
    $nom_user = $_POST['nom_user'];
    $prenom_user = $_POST['prenom_user'];
    $pwd_user = $_POST['pwd_user'];
    $mail_user = $_POST['mail_user'];
    $permission = false;

   echo  $_SESSION;
    if ((isset($nom_user) && isset($prenom_user) && isset($pwd_user) && isset($mail_user)) && !empty($nom_user)
        && !empty($prenom_user) && !empty($pwd_user) && !empty($mail_user)) {
        $conn->query("INSERT INTO `inscription`(id,nom_user,prenom_user,pwd_user,mail_user) VALUES(NULL,'$nom_user','$prenom_user','$pwd_user','$mail_user')");
        $permission = true;
        header("location:pageAccueil.php?id=".$_SESSION['id']);

    }
}

if($permission) {

    $conn = new mysqli('localhost','root','', 'projet_fin_formation');
    if(isset($nom_user)){
        $sql= "SELECT * FROM inscription";
        $ret = mysqli_query($conn, $sql) or die();

        while ( $col = mysqli_fetch_assoc($ret) ){
            echo $col['nom_user'];
            echo "<br>";
        }
    }

}
$id = 0;
$req = "SELECT nom_user, id " . "FROM inscription ORDER BY nom_user";
    if(isset($_POST['submit'])) {
        $conn = new mysqli('localhost','root','', 'projet_fin_formation');
        if(isset($nom_user)){
            $sql= "SELECT id FROM inscription WHERE nom_user= $nom_user";
            $ret = mysqli_query($conn, $sql) or die();

            while ( $col = mysqli_fetch_assoc($ret) ){
                $id =  $col['id'];
            }
        }

    }



if (isset($_POST['submit1'])){
    $nom_client= $_POST['nom_client'];
   $civilite_client= $_POST['civilite_client'];
   $prenom_client= $_POST['prenom_client'];
   $mail_client= $_POST['mail_client'];
   $designation_art= $_POST['designation_art'];
   $modele_art= $_POST['modele_art'];
   $taille_art= $_POST['taille_art'];
   $prix_art= $_POST['prix_art'];
   $num_com= $_POST['num_com'];
   $montant_com= $_POST['montant_com'];
   $designation_com= $_POST['designation_com'];
   $detail_com= $_POST['detail_com'];
   $detail_ref= $_POST['detail_ref'];
   $detail_qte= $_POST['detail_qte'];

    if ((isset($nom_client) && isset($prenom_client) && isset($civilite_client) && isset($mail_client)) && !empty($nom_client)
        && !empty($prenom_client) && !empty($civilite_client) && !empty($mail_client) ) {
       // echo "mnuber one";
        $conn->query("INSERT INTO `client`(id,nom_client,prenom_client,civilite_client,mail_client) VALUES(NULL,'$nom_client','$prenom_client','$civilite_client','$mail_client')");

    }

    if ((isset($nom_client) && isset($designation_art) && isset($modele_art) && isset($taille_art) && isset($prix_art)) && !empty($nom_client) && !empty($designation_art)
        && !empty($modele_art) && !empty($taille_art) && !empty($prix_art)) {
        //echo "mnuber 2";
        $conn->query("INSERT INTO `articles`(id,nom_client,designation_art,modele_art,taille_art,prix_art) VALUES(NULL,'$nom_client','$designation_art','$modele_art','$taille_art','$prix_art')");

    }
    if ((isset($nom_client) && isset($num_com) && isset($montant_com) && isset($designation_com)  && isset($detail_ref)) && !empty($nom_client) && !empty($num_com)
        && !empty($montant_com) && !empty($designation_com) ) {
       // echo "mnuber three";
        $conn->query("INSERT INTO `commande`(id,nom_client,num_com,montant_com,designation_com,detail_ref) VALUES(NULL,'$nom_client','$num_com','$montant_com','$designation_com','$detail_ref')");

    }

    if ((isset($nom_client) && isset($detail_com) && isset($detail_ref) && isset($detail_qte)) && !empty($nom_client) && !empty($detail_com)
        && !empty($detail_ref) && !empty($detail_qte) ) {
       // echo "number four";
        $conn->query("INSERT INTO `detail`(id,nom_client,detail_com,detail_ref,detail_qte) VALUES(NULL,'$nom_client','$detail_com','$detail_ref','$detail_qte')");

    }

}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Projet fin d'année</title>

    <?php require 'meta_css.php'; ?>
</head>
<header>
<div class="container">
    <div  class="col-lg-12  row">
             <div  class="col-lg-4">
                     <img  id="logo" src="images/pellFourche.jpg">
             </div>

                     <div  class="col-lg-8">
                           <h2  style="background-color: mediumorchid;width: 260px;">RECUPERATION</h2><br>
                           <h5 id="dechet1" style="margin: inherit;">DES DECHETS AUX OBJETS UTILES</h5>
                     </div>
    </div>


    <?php


        require "entête.php";

        ?>
    <div class="col-lg-12  row">

          <div class="col-lg-9">
              <div ><img  id="dechet2" src="images/chuteTissus.jpg"><img  id="dechet6" src="images/masque2.jpg"><img id="dechet10"  src="images/sacTisse.jpg"></div>
              <div ><img id="dechet3" src="images/compost2.jpg"><img id="dechet7" src="images/paille.jpg"><img id="dechet11" src="images/compost4_.jpg"> </div>
              <div ><img id="dechet4" src="images/Dech.jpg"><img  id="dechet8" src="images/imagePiece.jpg"><img  id="dechet12" src="images/Macocottes3.jpg"></div>
              <div ><img id="dechet5" src="images/copaux1.jpg"><img  id="dechet9" src="images/spatule2.jpg"><img  id="dechet13" src="images/meuble2.jpg"></div>
          </div>
        <div  class="col-lg-3">
                              <h4>DESIGNATION ; PRIX</h4>
            <div id="textil">TISSUS<br>masques : 4euro/pièce;<br>sac tissé : 15eur/pièce</div><br>
            <div id="comp">COMPOST<br>sacs de compost:5eur/pièce</div><br>
            <div  id="auto" >ALUMINIUM<br>pièces grandes tailles:25eur<br>pièces petites tailles: 15eur<br>casseroles:10eur/pièce</div><br>
            <div  id="bois" style="background-color: lawngreen;width: 200px;">BOIS<br> spatules:1.5eur/pièce<br>meuble:150eur/pièce</div>

       </div>
      </div>
</div>
</header>
<body>
       <div  class="container"  style="color: white;">
           <div class="col-lg-12  row"  style="text-align: center;">
               <div  class="col-xs-6" style="width: 200px;">
               </div>
               <div  class="col-xs-6"  style="background-color: darkorange;">     <h4  >FAITES UNE COMMANDE DE GROS  OU A L'UNITE</h4>
               </div>
           </div><br><br>
           <form    class="formulaire2"  action ="pageAccueil.php"  enctype="multipart/form-data"   method="post"  >
               <div class="col-lg-12  row"  style="background-color: darkgrey;height: 500px;">
                       <div  class="col-lg-3">
                                    <h4>CLIENT</h4><br>
                                     <h5 >VOTRE NOM:</h5>
                               <input class="form-control  input-lg"  type="text"  name="nom_client" value="">
                               <h5>CIVILITE</h5>
                               <input class="form-control  input-lg"  type="text" name="civilite_client" value="">
                               <h5>VOTRE PRENOM:</h5>
                               <input class="form-control  input-lg"  type="text"  name="prenom_client" value="">
                               <h5>VOTRE E-MAIL:</h5>
                               <input class="form-control  input-lg"  type="email"  name="mail_client" value=""><br>
                       </div>
                                <div  class="col-lg-3" >
                                    <h4>ARTICLES</h4><br>
                                    <h5>designation de l'article</h5>
                                    <input class="form-control  input-lg"  type="text"  name="designation_art" value="">
                                    <h5>modele de l'article</h5>
                                    <input class="form-control  input-lg"  type="text" name="modele_art" value="">
                                    <h5>taille de l'article</h5>
                                    <input class="form-control  input-lg"  type="text"  name="taille_art" value="">
                                    <h5>prix de l'article</h5>
                                    <input class="form-control  input-lg"  type="number"  name="prix_art" value=""><br>
                                </div>
                                       <div  class="col-lg-3">
                                           <h4>COMMANDE</h4><br>

                                           <h5>Numéro commande</h5>
                                           <input class="form-control  input-lg"  type="number" name="num_com" value="">
                                           <h5>montant_commandes</h5>
                                           <input class="form-control  input-lg"  type="number"  name="montant_com" value="">
                                           <h5>Désignation des commandes</h5>
                                           <input class="form-control  input-lg"  type="text"  name="designation_com" value=""><br>

                                       </div>
                                             <div class="col-lg-3" >
                                                 <h4>DETAIL</h4><br>
                                                 <h5>detail commandes</h5>
                                                 <input class="form-control  input-lg"  type="number" name="detail_com" value="">
                                                 <h5>Detail reference</h5>
                                                 <input class="form-control  input-lg"  type="number"  name="detail_ref" value="">
                                                 <h5>Detail quantité</h5>
                                                 <input class="form-control  input-lg"  type="number"  name="detail_qte" value=""><br>
                                                 <h3>VALIDEZ:</h3>
                                                 <input class="form-control  input-lg"  type="submit"  name="submit1" >

                                             </div>
                   </form>
               </div>

       </div>

    <script src="script.js"></script>

</body>
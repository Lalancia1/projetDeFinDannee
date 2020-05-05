<?php
session_start();
require "connection.php";
// $permission = false;pour la sécurisation du site si mes input sont rempli et validés par le submit, fais moi le require de l'entete
$permission = false;
$id;
if (isset($_POST['submit'])) {
    // echo "oh la la";
    $nom_user = $_POST['nom_user'];
    $prenom_user = $_POST['prenom_user'];
    $pwd_user = $_POST['pwd_user'];
    $mail_user = $_POST['mail_user'];
    $permission = false;
    $formulaire1=false;

    if ((isset($nom_user) && isset($prenom_user) && isset($pwd_user) && isset($mail_user)) && !empty($nom_user)
        && !empty($prenom_user) && !empty($pwd_user) && !empty($mail_user)) {
        $conn->query("INSERT INTO `inscription`(id,nom_user,prenom_user,pwd_user,mail_user) VALUES(NULL,'$nom_user','$prenom_user','$pwd_user','$mail_user')");
        $permission = true;


    }
}
/* soit une variable que je soumet en booleen,$permission est "true" lorsque l'insertion des informations est faite dans la base de données
et false lorsque rien ne se passe d'où false à l'exterieur;   maintenant si l'insertion est faite, donc s'il y'a cette variable(ça
 veut dire qu'elle est vraie,true.SI on a cette variable $permission alors il y'a connection à ma base de donnée ;le visiteur est inscrit
je récupere son nom par un tableau*/
if($permission) {

    $conn = new mysqli('localhost','root','', 'projet_fin_formation');
    if(isset($nom_user)){

        $sql= "SELECT * FROM inscription";
        $ret = mysqli_query($conn, $sql) or die();

        /* mon tableau associatif doit prendre les informations dans ma table inscription pour que je m'en serve.Tant tu me renvoi un tableau associ
        atif, fait qu'à chaque fois une ligne contienne l'instruction :*/

        while ( $col = mysqli_fetch_assoc($ret) ){
            $_SESSION['id'] = $col['id'];
            echo "session". $_SESSION['id'] ;
            $_SESSION['nom_user'] = $col['nom_user'];
            $_SESSION['prenom_user'] = $col['prenom_user'];
            $_SESSION['mail_user'] = $col['mail_user'];
            $id = $col['id'];
        }
        header("location:pageAccueil.php?id=".$col['id']);
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
    <div class="container"  style="width: auto">
        <div  class="  row" >
                    <div  class="col-xs-4">
                                      <img  id="logo" src="images/pellFourche.jpg">
                    </div>
                                <div  class="col-xs-6"  style="width: 500px;">

                                </div>

            <div  class="col-xs-6" >
                           <h2  style="background-color: mediumorchid;width: 260px;">RECUPERATION</h2><br>
                           <h5 id="dechet1" style="margin: inherit;">DES DECHETS AUX OBJETS UTILES</h5>
            </div>
        </div>
<div style="height: 40px; ">

</div>

        <div class=" row col-xs-12">
                <div  class="col-xs-4"  style="width: 20%;height: 20%">
                    <h5 >INSCRIVEZ-VOUS:</h5>
                    <form  class=" form-control  input-xs"  class="formulaire2"  action ="pageAccueil.php"  enctype="multipart/form-data"
                           method="post" >
                        <h6 >VOTRE NOM:</h6>
                        <input class="form-control  input-xs"  type="text"  name="nom_inscrit" value="">
                        <h6>VOTRE PRENOM:</h6>
                        <input class="form-control  input-xs"  type="text"  name="prenom_inscrit" value="">
                        <h6>VOTRE MOT DE PASSE</h6>
                        <input class="form-control  input-xs"  type="password"  name="pwd_inscrit" value="">
                        <h6>VALIDEZ:</h6>
                        <input class="form-control  input-xs"  type="submit" name="submit" >

                </div>
                <div  class="col-xs-1"style="width: 10%">

                </div>

                <div  class="col-xs-7">
                    <h5 >CONNECTEZ-VOUS SI VOUS ETES INSCRITS </h5><br>
                <form    class="formulaire1"  action ="pageAccueil.php?id=<?= $id ;?>"  enctype="multipart/form-data"   method="post"
                style="width: 60%;">
                    <h6 >VOTRE NOM:</h6>
                    <input class="form-control  input-xs"  type="text"  name="nom_user" value="">

                    <h6>VOTRE PRENOM:</h6>
                    <input class="form-control  input-xs"  type="text"  name="prenom_user" value="">
                    <h6>VOTRE MOT DE PASSE</h6>
                    <input class="form-control  input-xs"  type="password"  name="pwd_user" value="">
                    <h6>VOTRE E-MAIL:</h6>
                    <input class="form-control  input-xs"  type="email"  name="mail_user" value="">
                    <h6>VALIDEZ:</h6>
                    <input class="form-control  input-xs"  type="submit"  name="submit2" >

                </form>
                </div>
            </div>
</div>
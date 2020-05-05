<?php
require 'connection.php';

if (isset($_POST['submit'])) {
    $nom = $_POST['nom'];
    $name_text = $_POST['nom_text_art'];
    $price_text = $_POST['prix_text_art'];
    $nbre_text = $_POST['nombre_text_art'];

    if ((isset($nom) && isset($name_text) && isset($price_text) && isset($nbre_text)) && !empty($nom)
        && !empty($name_text) && !empty($price_text) && !empty($nbre_text)) {
        $conn->query("INSERT INTO `textile`(id,nom,nom_text_art,prix_text_art,nombre_text_art) VALUES(NULL,'$nom','$name_text','$price_text ','$nbre_text')");

    }
}

?>


<div class="container"  ><!--cont-->
    <?php
    require 'meta_css.php';

    ?>

    <div  class="row ">
        <div class="col-xs-4">
            <img  id="logo" src="images/pellFourche.jpg">
        </div>
        <div class="col-xs-2" style="width: 250px;">

        </div>
        <div   class="col-xs-6" >
            <h2  style=" background-color: mediumorchid; ">TEXTILES</h2>
            <h5  id="dechet1" style="margin: inherit;">DES DECHETS AUX OBJETS UTILES</h5>
        </div>
    </div><br>


    <?php
    require "entête.php";
    ?>
<div class="row ">
    <div  class="col-xs-7"  style="width:55%">
        <h4>RECUPERATION  DES DECHETS TEXTILES</h4>
        <p>Les chûtes de tissus sont  jetées par tonnes chaque jour ,alors qu’on pourrait <br>
        réaliser des produits utiles dans notre quotidien. Ceci contribuerait à diminuer<br>
        le volume de nos ordures. C’est l’exemple des masques que nous  utilisons aujourd’hui<br>
        pour nous protéger et protéger les autres contres des maladies.<br>
        Des sacs en tissus ,des couvertures en patchwork  etc.<br><br>
        ***Les sacs tissés (cette réalisation fut mon idée il y’a une trentaine d’années).<br>

        1)première étape:  prendre des morceaux de tissus, faire des lamelles de 3cm de large ;<br>
        les longueurs des lamelles et les couleurs ou motifs peuvent être variées.<br>

        2)deuxième étape : coudre les lamelles bout à bout  afin de réaliser des lianes en tissus ;<br>

        3)troisième étape:fabriquer un moule ,de préférence en carton.Le moule devra être léger;car ici <br>
        ,pour ceux qui ont observé les meubles en tissés en rotin ;nous allons utiliser le même procédé sauf<br>
        que ça sera avec un moule.<br>

        4)quatrième étape:enrouler la longue corde autour du carton de manière à ce qu’on ne puisse plus<br>
        voir le carte que vous aurez recouvert.<br>

        5)Commencer le tissage,en introduisant le bout de votre corde à travers les cordes horizontales pour<br>
        former un tissage qui ressemble à celui des chaises en rotin;surtout faites en sorte que les mailles<br>
        de votre tissage soient serrées à chaque  tour.<br>

        6)préparer deux cordes tressées pour faire des lanières de votre sacs .<br>

        7)préparer une doublure et deux fermetures;une petite fermeture qui servira pour la poche<br>
        interne cousue sur la doublure. Et une seconde fermeture pour ouvrir notre sac.<br>

        8)placer nos lanières la grande fermeture, vérifiez les finitions.<br>
        </p>
    </div>
            <div  class="col-xs-5" style="width:20% ">
                <div >
                    Chûtes de tissus<br>
                    <img  src="images/chuteTissus.jpg" ></div><br>

                <div>
                    Sac tissé en tissus <br>
                    <img  src="images/sacTisse.jpg" ></div><br>
                <div>
                    Masques de protection<br>
                    <img  src="images/masque2.jpg">
                </div>
            </div>
                <div  class="col-xs-3"  style="width:25%;">
                    <form  action ="textil1.php"  enctype="multipart/form-data"   method="post">
                        <h6>VOTRE NOM</h6>
                        <input class="form-control  input-lg"  type="text"  name="nom" value="" >
                        <h6>NOM DE L'ARTICLE</h6>
                        <input class="form-control  input-lg"  type="text"  name="nom_text_art" value="" >
                        <h6>SON PRIX</h6>
                        <input class="form-control  input-lg"  type="number"  name="prix_text_art" value="" >
                        <h6>COMBIEN EN VOULEZ VOUS?</h6>
                        <input class="form-control  input-lg"  type="number" name="nombre_text_art" value="" >
                        <h6>VALIDEZ:</h6>
                        <input class="form-control  input-lg"  type="submit"  name="submit">
                    </form>


                    <div  class="col-xs-12">
                        <div  class="col-xs-2" style="height: 50px;" >

                        </div>
                        <div class="col-xs-4"  id="theBlock">
                            <div class= "carre" id="one"><h4>prix compétitifs</h4></div>
                            <div class= "carre" id="two"><h5>masques<br>tailles et couleurs <br>sur commandes</h5> </div>
                            <div  class= "carre" id="tree"><h5>prix unité:<br>de 4euros à 50 euros</h5> </div>
                            <div  class= "carre" id="four"><h5>masques à des prix compétitfs</h5></div>
                            <div  class= "carre" id="five"><h5>sacs<br>pachworks<br>masques </h5></div>
                        </div>
                    </div>
                    <div class="col-xs-4" style="height: 400px;"></div>
                    <div class="col-xs-2">
                        <section id="buttonSpace"  style="">
                            <button onclick="clickMe();">on button</button>
                        </section>
                    </div>
                </div>
                </div>
    <script src="script.js"></script>
            </div>
</div>
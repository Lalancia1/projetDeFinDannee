<?php
require 'connection.php';

if (isset($_POST['submit'])) {
    $nom = $_POST['nom'];
    $name_bois = $_POST['nom_bois_art'];
    $price_bois = $_POST['prix_bois_art'];
    $nbre_bois = $_POST['nombre_bois_art'];
    if ((isset($nom) && isset($name_bois) && isset($price_bois) && isset($nbre_bois)) && !empty($nom)
        && !empty($name_bois) && !empty($price_bois) && !empty($nbre_bois)) {
        $conn->query("INSERT INTO `bois`(id,nom,nom_bois_art,prix_bois_art,nombre_bois_art) VALUES(NULL,'$nom','$name_bois','$price_bois ','$nbre_bois')");

    }
}

?>
<div class="container" ><!--cont-->
    <?php
    require 'meta_css.php';

    ?>


    <div  class="row">
        <div class="col-xs-4">
            <img  id="logo" src="images/pellFourche.jpg">
        </div>
        <div class="col-xs-2" style="width: 250px;">

        </div>
        <div   class="col-xs-6" >
            <h2  style=" background-color: mediumorchid; ">BOIS</h2>
            <h5  id="dechet1" style="margin: inherit;">DES DECHETS AUX OBJETS UTILES</h5>
        </div>
    </div><br>
    <?php
    require "entête.php";
    ?>
    <div class="row ">
            <div class="col-lg-5" style="width:50%;" ><h4>Transformation des déchets de bois</h4>
            Les chûtes de bois peuvent servir de plusieurs manières qu'à la poubelle.
                Nous pouvons, en fonction des dimensions de celle-ci fabriquer plusieurs d'objets utiles dans la vie quotidienne.
            Nous pouvons fabriquer des ustensiles de cuisine.
            Exemple :
                <h6>FABRICATION DES SPATULES</h6><br>
            1)première étape:
            Récupérer les morceaux de bois; leurs donner la taille que nous voulons;
            pour les morceaux qui n'auraient pas la taille adaptée, coller les morceaux de bois pour élargir la surface de l'objet<br><br>
            2) Deuxième étape: Les morceaux collés nous également à générer les motif variés
            après qu'on ait procédé à la découpe,en fonction de la couleur  des morceaux.
                On laisse ensuite sécher la colle et on s'assure que l'objet en bois est bien lisse et poncé.<br><br>
            3) Troisième étape:
            Couper les parties superflues ensuite aplanir si possible sur  un robot le ssurfaces collées.<br><br>
                4)Quatrième étape:
                On dessine les contours de l'objet désiré pour la découpe.<br><br>
                5)cinquième étape:
                Une fois l'objet obtenu,par la découpe, on procède au ponçage pour donner une forme définitive.<br><br>
                <h6>UNE FOURCHE À SALADE</h6><br>
                1)Première étape:
                Prendre des morceaux de bois;leurs donner la taille désirée.<br><br>
                2)Deuxième étape:
                Les tailler en 4 faces  d'environ 30cm rectangulaires.<br><br>
                3)Troisième étape:
                Mettre les trous espacés,d'environ 5cm sur une seule et même face.<br><br>
                4)Quatrième étape:
                Fabriquer les morceaux de bois en forme cylindrique,comme des pailles pour jus de fruits.
                leurs donner environ 20à25cm;<br><br>
                5)Cinquième étape:
                Mettre la colle dans des trous préparés,y introduire les bois en forme de pailles préparées au début;
                Y introduire les bois en forme de pailles préparée;Donner un coup à chacun pour qu'il se plce bien au fond; nettoyer.
                La fourche à salade est prête

            </div>
        <div  class="col-lg-4" style="width:25%;" >
            <div>MORCEAUX DE BOIS <br><img  src="images/copaux1.jpg"  style="width: 200px; height: 200px;"></div><br>
            <div>MEUBLE EN COPEAUX<br><img  src="images/meuble2.jpg"   style="width: 200px; height: 200px;"></div>
            <div>BOIS RECUPERES<br><img  src="images/brico.jpg"  style="width: 200px; height: 200px;"></div>
            <div>SPATULES<br><img  src="images/spatule2.jpg"  style="width: 200px; height: 200px;"></div>
        </div>
        <div  class="col-xs-3"  style="width:25%;">
            <form  action ="pageDbois.php"  enctype="multipart/form-data" method="post">
                <h6>VOTRE NOM</h6>
                <input class="form-control  input-lg"  type="text"  name="nom" value="" style="">
                <h6>NOM DE L'ARTICLE</h6>
                <input class="form-control  input-lg"  type="text"  name="nom_bois_art" value="" >
                <h6>SON PRIX</h6>
                <input class="form-control  input-lg"  type="number"  name="prix_bois_art" value="" >
                <h6>COMBIEN EN VOULEZ VOUS?</h6>
                <input class="form-control  input-lg"  type="number" name="nombre_bois_art" value="" >
                <h6>VALIDEZ:</h6>
                <input class="form-control  input-lg"  type="submit"  name="submit">
            </form>
            <div  class="col-xs-12">
                <div  class="col-xs-2" style="height: 50px;" >

                </div>
                <div class="col-xs-4"  id="theBlock">
                    <div class= "carre" id="one"><h4>prix compétitifs</h4></div>
                    <div class= "carre" id="two"><h5>bois,<br>spatule de 1.5eur<br>sur commandes</h5> </div>
                    <div  class= "carre" id="tree"><h5>prix meuble:<br>25 euros</h5> </div>
                    <div  class= "carre" id="four"><h5>nous nous adaptons <br>à vos besoins </h5></div>
                    <div  class= "carre" id="five"><h5>Les livraisons peuvent  <br>s'effectuer dans votre domicile. </h5></div>
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

<?php
require "connection.php";

if (isset($_POST['submit'])) {
    $nom = $_POST['nom'];
    $name_alim = $_POST['nom_alim_art'];
    $price_alim = $_POST['prix_alim_art'];
    $nbre_alim = $_POST['nombre_alim_art'];

    if ((isset($nom) && isset($name_alim) && isset($price_alim) && isset($nbre_alim)) && !empty($nom)
        && !empty($name_alim) && !empty($price_alim) && !empty($nbre_alim)) {
        $conn->query("INSERT INTO `alimentaire`(id,nom,nom_alim_art,prix_alim_art,nombre_alim_art) VALUES(NULL,'$nom','$name_alim','$price_alim ','$nbre_alim')");

    }
}

?>
<div class="container" ><!--cont-->
    <?php
    require 'meta_css.php';

    ?>

<div  class="row  col-xs-12">
    <div class="col-xs-4">
        <img  id="logo" src="images/pellFourche.jpg">
    </div>
    <div class="col-xs-2" style="width: 250px;">

    </div>
    <div   class="col-xs-6" >
        <h2  style=" background-color: mediumorchid; ">ALIMENTAIRE</h2>
        <h5  id="dechet1" style="margin: inherit;">DES DECHETS AUX OBJETS UTILES</h5>
    </div>
</div><br>

    <?php
    require "entête.php";
    ?>
    <div  class="row  col-xs-12">
        <div class="col-xs-5"  style="width:55%;">
            <h4>Transformation des déchets alimentaires</h4>
            Le processus de compostage est la transformation biologique<br>
            des matières organiques en présence d’eau et d’oxygène.Une fermentation<br>
            s’opère,des micro-organismes transforment les déchets pour former ,après<br>
            maturation du compost ,qui est un produit stabilisé.<br>
                     C’est un geste écologique car ceci réduit le volume de nos ordures<br>
            ménagères ; On peout ainsi faire  du compost avec :<br>
            Des déchets de cuisine,des épluchures,des fruits et légumes abîmés ,coquilles d’oeufs<br>
            -les déchets de jardin:gazon tondu,feuilles exemptes de maladies.<br>
            -Déchets de maison : cendres,papier journal,sciures…<br>

            Selon les cas on peut utiliser le compost à des différents stades de maturation.<br>
            On a un compost jeune de 1 ou 2 mois, qu’on peut mettre en paillage pour nourrir le sol.<br>
            On peut le laisser mûrir pendant 6 à 12 mois;afin de l’utiliser comme angrais organique;<br>
            il va nourrir directement  les plantes et améliorer le sol.<br>
            Le compost améliore la rétention d’eau du sol ; Il va donner une bonne structure au sol ;<br>
            il va donner une couleur plus  noire au sol,ce qui  va permettre à celui- ci de mieux capter<br>
            les rayons du soleil . Le compost permet une belle oxygénation du sol.<br>
            Toujours mélanger les déchets de cuisine avec d’autres déchets. Afin d’équilibrer l’apport<br>
            en carbone et favoriser l’oxygénation.<br>
            Déchets de cuisines, rapport carbone:10<br>
            Fumiers ,rapport carbone:30 ,<br>
            Déchet de pelouse:10 ,<br>
            Terre:10,Fruits et légumes:15<br>
            Feuilles mortes:30 à 60,Broyats de rameaux:50à 70,<br>
            Pailles:100 à 150 ,<br>
            Papier en carton:100à 150 ,<br>
            écorces:150 ;<br>
            On mélange les matières, sachant qu’autant elles sont sèches ,autant leurs taux <br>
            de carbone est élevé.Le but étant oxygéner le sol,il est bon de mélanger de la paille<br>
            sèche et les restes alimentaires ,pour équilibrer les apports.la proportion c’est deux<br>
            portions de matières humides pour une portions de matières sèches.<br>
            On laisse à la décomposition  quelques semaines .<br>
            On peut par la suite tamiser pour mettre dans des sacs pour la  vente.<br>
            Ce qui se passe c’est qu’au bout de quelques semaines,le mélange contient des bactéries des<br>
            champignons,des vers de terre, coléoptères  etc..qui vont dégrader les apports de matières<br>
            organiques pour nourrir un sol dégradé en le structurant.Plus le sol est pauvre,donc avec<br>
            peu de vie ,plus il a besoin d’aide .
        </div>
                   <div class="col-xs-4"   style="width:20%;">
                       <h5>Au cas où vous êtes interessés,<br>nous vendons le compost par sacs de 5kg  et 10kg</h5><br>
                                     <P>ALIMENTS</P><br>
                          <div  class="t1"><img src="images/compost2.jpg" style="width: 200px; height: 200px;"> </div><br>
                                      <p>Paille</p><br>
                          <div class="t1"><img src="images/paille.jpg"style="width: 200px; height: 200px;" ></div><br>
                                      <p>Compost</p><br>
                          <div class="t1"><img src="images/compost4_.jpg"  style="width: 200px; height: 200px;"></div>

                   </div>
        <div  class="col-xs-3"  style="width:25%;">
            <form  action ="pageAlimentaire.php"  enctype="multipart/form-data"   method="post">
                <h6>VOTRE NOM</h6>
                <input class="form-control  input-lg"  type="text"  name="nom" value="" >
                <h6>NOM DE L'ARTICLE</h6>
                <input class="form-control  input-lg"  type="text"  name="nom_alim_art" value="" >
                <h6>SON PRIX</h6>
                <input class="form-control  input-lg"  type="number"  name="prix_alim_art" value="" >
                <h6>COMBIEN EN VOULEZ VOUS?</h6>
                <input class="form-control  input-lg"  type="number" name="nombre_alim_art" value="" >
                <h6>VALIDEZ:</h6>
                <input class="form-control  input-lg"  type="submit"  name="submit">
            </form>
            <div  class="col-xs-12">
                <div  class="col-xs-2" style="height: 50px;" >

                </div>
                <div class="col-xs-4"  id="theBlock">
                    <div class= "carre" id="one"><h4>prix compétitifs</h4></div>
                    <div class= "carre" id="two"><h5>compost  <br>sur commandes</h5> </div>
                    <div  class= "carre" id="tree"><h5>prix des sacs de compost<br>de 6euros/les 5kg<br> à 15 euros/les10kg</h5> </div>
                    <div  class= "carre" id="four"><h5>compost biologique <br>pour nourrir vos plantes</h5></div>
                    <div  class= "carre" id="five"><h5>Nous livrons chez vous à domicile </h5></div>
                </div>
            </div>
            <div class="col-xs-4" style="height: 400px;"></div>
            <div class="col-xs-2">
                <section id="buttonSpace"  style="">
                    <button onclick="clickMe();">on button</button>
                </section>
            </div>
            <script src="script.js"></script>
        </div>
        </div>

    </div>

</div>
<?php
require 'connection.php';


if (isset($_POST['submit'])) {
    $nom = $_POST['nom'];
    $name_alu = $_POST['nom_alu_art'];
    $price_alu = $_POST['prix_alu_art'];
    $nbre_alu = $_POST['nombre_alu_art'];
    if ((isset($nom) && isset($name_alu) && isset($price_alu) && isset($nbre_alu)) && !empty($nom)
        && !empty($name_alu) && !empty($price_alu) && !empty($nbre_alu)) {
        $conn->query("INSERT INTO `aluminium`(id,nom,nom_alu_art,prix_alu_art,nombre_alu_art) VALUES(NULL,'$nom','$name_alu','$price_alu ','$nbre_alu')");

    }
}
?>
<div class="container" ><!--cont-->

<?php
require 'meta_css.php';

?>

    <div  class="row  ">
                         <div class="col-xs-4">
                             <img  id="logo" src="images/pellFourche.jpg">
                         </div>
        <div class="col-xs-2" style="width: 250px;">

        </div>
                   <div   class="col-xs-6" >
                       <h2  style=" background-color: mediumorchid; ">ALUMINIUM</h2>
                       <h5  id="dechet1" style="margin: inherit;">DES DECHETS AUX OBJETS UTILES</h5>
                   </div>
      </div><br>

<?php
require "entête.php";
?>
     <div class="row ">
              <div  class="col-xs-4" style="width: 52%;">
                        <h4 >TRANSFORMATION DES DECHETS D'ALUMINIUM</h4><br>
         <p>Les métaux tels que les canettes, les tôles rouillées;tous ce que nous<br> considérons comme de la ferraille ,sont récupérés.<br>

        1) La première étape : Elle consiste a réaliser un moule;pour cela on<br>  découpe 4 morceaux de contre-plaqué avec des dimensions <br>
        proportionnelles à l’objet que nous désirons fabriquer. Nous les clouons<br>  ensemble en formant un moule carré.<br><br>

        2)la deuxième étape : On rempli ce moule en bois de sable fin,en veillant<br>  à ce que le sable soit compact. Lorsque le moule est<br>
        plein à ras;le talc est utilisé pour nous aider à séparer les deux parties<br>  du moule à l’ouverture.  Creuser ensuite un canal <br>
        d’alimentation.On peut faire deux canaux pour assurer un bon remplissage.<br><br>

        3)La troisième étape: pour fabriquer un four :<br>
        -Récupérer un vieux seau en plastique ,couper le fond pour faire un cylindre ;<br>
        l’entourer de scotch pour qu’il ne cède pas à la pression du béton. Mettez ce<br>  dernier à l’intérieur d’un seau métallique légèrement<br>
        plus grand .Coller les deux seaux.<br><br>


        4)La quatrième étape:trouver une boîte cylindrique de diamètre inférieur à celui<br>  des deux seaux préparés;mettre ce cylindre à l’intérieur<br>
        du dispositif, après y avoir soudé deux bâtons en fer .<br><br>

        5)La cinquième étape : faire un mélange de béton, comprenant : du ciment, du sable<br>  et du gravier pouzzolane ; verser le béton obtenu dans<br>
        l’espace entre le deux cylindre pour faire un cylindre en béton;  ensuite   y faire<br>  un trou d’aération .Ce trou servira à chauffer la ferraille;<br>
        laisser sécher…<br>
        Encastrer le cylindre en béton dans un cylindre préparé exprès .<br><br>

        6) Au cas où  vous n’auriez pas un moule de l’objet à fabriqué, vous pourriez en fabriquer<br>  un en plastique, avec une imprimante 3D<br><br>

        7)La septième étape: On fait fondre les métaux stockés; on verse ensuite la ferraille <br> fondue dans le trou laissé au dessus formé a sur<br>
        le sable compacté ,en veillant à ce que le flot d’aluminium  en fusion n’amène pas les<br>  grains de sable ans la pièce(pensez  à prévoir<br>
        un récipient pour mettre les excédants en lingots, qui pourront être refondus plus) .<br>  À haute température<br>
        -pour le sable de moulage : on prend pour 1kg de sable fin 0,10à 0,12kg  de bentonite<br>   et 0,03 à 0,05kg d’eau...<br><br>

        6)Attention à ne pas faire un excès d’eau . Tout excès d’eau peut s’avérer catastrophiques?<br> risque d’explosion  et de blessures
        graves .<br>

        -on  retire les impuretés qui surnagent sur le bain d’aluminium. Comme lingotière, test<br>  préférable d’utiliser la forme conique. <br>
        Celle-ci permet un démoulage facile du lingot

                               </p>
           </div>
                <div  class="col-xs-4"  style="width: 20%">
                    <div><h4>FAITES VOS COMMANDES</h4></div>
                        <div  class="I1"  style="padding: 40px;">  canettes <br>
                            <img  src="images/can.jpg"  style="width: 200px; height: 200px; "></div><br><br>
                        <div  class="I1"  style="padding: 40px;">  dechets alu <br>
                            <img  src="images/Dech.jpg"  style="width: 200px; height: 200px; "></div><br><br>
                        <div  class="I1"  style="padding: 40px;">  pièces auto <br>
                            <img  src="images/imagePiece.jpg"  style="width: 200px; height: 200px; "></div><br><br>
                       <div  class="I1"  style="padding: 40px;">  casseroles en fonte <br>
                            <img  src="images/Macocottes3.jpg"  style="width: 200px; height: 200px; "></div>

                </div>
                                <div  class="col-xs-1" style="width: 3%;">

                                </div>
            <div  class="col-xs-3"  style="width:25%; height: auto">
                   <form  action ="pageAlu.php"  enctype="multipart/form-data"   method="post">
                                      <h6>VOTRE NOM</h6>
                         <input class="form-control  input-lg"  type="text"  name="nom" value="" >
                                      <h6>NOM DE L'ARTICLE</h6>
                         <input class="form-control  input-lg"  type="text"  name="nom_alu_art" value="" >
                                      <h6>SON PRIX</h6>
                         <input class="form-control  input-lg"  type="number"  name="prix_alu_art" value="" >
                                      <h6>COMBIEN EN VOULEZ VOUS?</h6>
                         <input class="form-control  input-lg"  type="number" name="nombre_alu_art" value="" >
                                      <h6>VALIDEZ:</h6>
                         <input class="form-control  input-lg"  type="submit"  name="submit">
                   </form>
                         <div  class="col-xs-12">
                                              <div  class="col-xs-2" style="height: 50px;" >

                                              </div>
                                 <div class="col-xs-4"  id="theBlock">
                                        <div class= "carre" id="one"><h4>prix compétitifs</h4></div>
                                        <div class= "carre" id="two"><h5>casserole<br>diamètres et couleurs <br>sur commandes</h5> </div>
                                        <div  class= "carre" id="tree"><h5>prix pièces:<br>de 10euros à150 euros</h5> </div>
                                        <div  class= "carre" id="four"><h5>casseroles à des prix compétitfs</h5></div>
                                        <div  class= "carre" id="five"><h5>boulons<br>ecrous<br>vis </h5></div>
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

          </div>
    <script src="script.js"></script>
</div>
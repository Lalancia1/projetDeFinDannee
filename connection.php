<?php
$conn = new mysqli('localhost','root','', 'projet_fin_formation');
if ($conn->connect_errno) {
    echo "Echec lors de la connexion à MySQL : (" . $conn->db->connect_errno . ") " . $conn->db->connect_error;
}
?>
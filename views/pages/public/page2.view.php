<h1>Titre Page 2</h1>
<h2>Page 2 Contiendra</h2>
<p>Contenu Page 2</p>
<br>
<?php
foreach ($datas as $data) {
    echo $data["nom"] ." / ". $data["type"] ." / ". $data["pv"] ." / ". $data["atk"] ."<br>";
    // afficherTableau($data);
}
?>
<br><br>

<?php

afficherTableau($datas);

?>
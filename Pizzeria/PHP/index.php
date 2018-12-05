<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Bienvenue sur le site de la pizzeria</title>
        <script type="text/javascript" src="../JQuery/jquery-3.1.1.js"></script>
        <script type="text/javascript" src="../JS/fonctions.js"></script>
    </head>

    <table width="100%" border="1" cellspacing="1" cellpadding="1" >
    <tr><td><div align="center">Numero de la commande </div> </td>
    <td><div align="center">Choix du livreur</div> </td>
    <td><div align="center">Choix du client</div> </td></tr>
    <tr><td><div align="center"> </div> </td>
    <td><div align="center">
    <?php
            include 'cnx.php';

            $liv = $bdd->prepare("select nomLiv from livreurs ");
            $liv->execute();
            echo "<label></label><br>";
            echo "<select id=lstActivites onchange='AfficherLesFormations()'>";
           
            foreach($liv->fetchAll(PDO::FETCH_ASSOC) as $ligne)
            {
                echo "<option value='".$ligne['nomLiv']."'>".$ligne['nomLiv']."</option>";                
            }
            echo "</select>";
        ?>
        </div> </td>
    <td><div align="center">
    <?php
            include 'cnx.php';

            $liv = $bdd->prepare("select nomCli from clients ");
            $liv->execute();
            echo "<label></label><br>";
            echo "<select id=lstActivites onchange='AfficherLesFormations()'>";
           
            foreach($liv->fetchAll(PDO::FETCH_ASSOC) as $ligne)
            {
                echo "<option value='".$ligne['nomCli']."'>".$ligne['nomCli']."</option>";                
            }
            echo "</select>";
        ?>
        </div> </td></tr>
</table>
<table width="100%" border="1" cellspacing="1" cellpadding="1" >
    <tr><td><div align="center">Choix de la pizza</div> </td></tr>
</table>
    <body>
    <div class="container">          
  <table class="table">
    <thead>
      <tr>
        <th>Nom pizza</th>
        <th>Nombre de personnes</th>
        <th>Prix</th>
        <th>Quantité</th>
      </tr>
    </thead>
    <tbody>
    <?php
            include 'cnx.php';

            $liv = $bdd->prepare("select nomPiz, nbPers, prix from pizzas ");
            $liv->execute();
            $i=1;
           
            foreach($liv->fetchAll(PDO::FETCH_ASSOC) as $ligne)
            {
                echo "<tr>";
                echo "<td>".$ligne['nomPiz']."</td>";
                echo "<td><div align='center'>".$ligne['nbPers']."</div></td>";
                echo "<td>".$ligne['prix']."</td>";
                echo "<td><input type='range' id='start' name='qte' min='0' max='11' step='1' value='1'> </td>";
                     
            }  
        ?>

  </table>

    </body>
</html>
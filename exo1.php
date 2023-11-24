
<?php
     $etudiant = [
      "classe" => "L2B",
      "nom" => "BANAKINAO",
      "prenom" => "irin",
      "age" => 18
    ];
     

  
  ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice tableau associatif</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

<center>
<div class="col col-lg-4 mt-5">

<table class="table table-dark table-striped-columns table-bordered">
<thead>
  <tr>
    <th scope="col">clé</th>
    <th scope="col">Valeur</th>
  </tr>
</thead>
<tbody>
<?php  foreach ($etudiant as $key => $value) {?>
   
        <tr>
        <td scope="row"><?php echo $key?></td> 
        <td><?php echo $value  ?></td>
        </tr>
  <?php }?>
</tbody>
</table>
</div>

</center>
</body>
</html>
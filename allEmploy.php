<?php
require_once 'model.php';
$model = new model;
$employes = $model->All_Employe();
?>

<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
    <center><h1>List des Employes</h1></center>

    <center>
    <table border="1">
        <tr>            
            <th colspan="2">Action</th>
            <th>Numero</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Sexe</th>
            <th>Adresse</th>
            <th>Date de Naissance</th>
            <th>Numero de Service</th>
            
        </tr>



            <?php
            foreach ($employes as $row)
            { ?>

            <tr>
             
            <td> <a href="controler.php?action=del&code=<?php echo $row['code'] ?> "><img src="delete.png" width=30 height=30></a></td>
            <td> <a href="controler.php?action=edit&code=<?php echo $row['code'] ?>"> <img src="edit.png" width=30 height=30></a></a> </td>
            <td><?php echo $row['code']; ?></td>
            <td><?php echo $row['nom']; ?></td>
            <td><?php echo $row['prenom']; ?></td>
            <td><?php echo $row['sexe']; ?></td>
            <td><?php echo $row['adresse']; ?></td>
            <td><?php echo $row['dateNaissance']; ?></td>
            <td><?php echo $row['numServ']; ?></td>

            </tr>
                <?php
            }
            ?>
                  

    </table>
     
</center>
</body>
</html>


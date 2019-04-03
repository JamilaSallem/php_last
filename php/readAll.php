<?php
//inclure un fichier
include "config.php";

//appel fonction
$base=connect();

$req="SELECT * FROM users";
//la fonction query ne fonctionne qu'avec la requete SELECT
$result=$base->query($req);

?>
<table>
    <thead>
        <tr>
            <th>Email</th>
            <th>Mdp</th>
        </tr>
    </thead>
</table>
<tbody>
    <?php
    //fetchObject:permet de récuperer le résutat de chaque itération et de l'affecter à un objet |fetchAssoc
    while($user=$result->fetchObject()){
    ?>
    <tr>
        <td><?php echo $user->email; ?></td>
        <td><?php echo $user->password; ?></td>
    </tr>
    <?php
    }
    ?>
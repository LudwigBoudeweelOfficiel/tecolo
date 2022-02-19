/* AUTEUR : TECOLO
REDIGE PAR LE PROPRIETAIRE : LUDWIG BOUDEWEEL 

/!\ CERTAINES DONNEES, MOT CLES SENSIBLES ONT ETE SUPPRIME(E)S PAR MESURE DE SECURITE */
<meta charset="UFT-8">
<?php
ini_set("display_errors",0);
session_start();
// [DONNEES PROTEGEE];
// Connexion à la base de données
try
{
    /* [DONNEES PROTEGEE] */
	
	
    
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}


// [DONNEES PROTEGEES];

if($drecherche['tinscri']==0){
    // [DONNEES PROTEGEE]
    ?>
    <script>
    window.location.href="finaliser.php";
    </script>
    <?php
}


if($pass==$vpass){
    // [DONNEES PROTEGES]
        ?>
        
        <?php
    }else{
        ?>
        <script>window.location.href="ip.php";</script>
        <?php
    }*/
    ?>

    
    <?php
    if($drecherche['Mail']==""){
        ?>
        <script>
    window.location.href="email.php";
    </script>
        <?php
    }else{
        ?>
        <script>
            window.location.href="fil";
        </script>
        <?php
    }
    ?>

    <?php

    // [DONNEES PROTEGEES]

     // Envoi
     // mail($to, $subject, $message, implode("\r\n", $headers));

    
    if(mail($to, $subject, $message, implode("\r\n", $headers)))
    {
        echo '<p style="text-align:center;color:green;margin-left:10px;margin-right:10px"></br></br>Le propriétaire du compte à été prévenu</p>';
    }
    else // Non envoyé
    {
        echo '<script languag="javascript">alert("Votre message n\'a pas pu être envoyé");</script>';
    }
*/
}else{
    ?>
    <script>
    window.location.href="login.php";
    </script>
    <?php
}
?>

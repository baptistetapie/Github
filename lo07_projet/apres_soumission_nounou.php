<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Confirmation | Les Bambins</title>
    </head>
    <body>
        Bonjour <?php
        echo $_POST ['prenom'] . '<br/>' ;
        
        move_uploaded_file($_FILES['monfichier']['tmp_name'], 'uploads/' . basename($_FILES['monfichier']['name']));
                        echo "L'envoi a bien été effectué !";
                        
       /*$destination ='/Users/baptistetapie/netbeans-workplace/htdocs/lo07_projet/uploads' ;
       $resultat = move_uploaded_file($_FILES['photo']['tmp_name'], $destination );
                        
       if ($resultat){
       echo "L'envoi a bien été effectué !";}
        else
            {
            echo"fail" ;
        }
        
        //. basename($_FILES['photo']['name']) 
        */
        
        ?>
    </body>
</html>

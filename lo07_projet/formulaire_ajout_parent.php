<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Inscription parents | Les Bambins</title>
    </head>
    <body>
        <form name="ajout_parent" method='post' action='apres_soumission_parent.php' >
            
            <p>
                <label for="prenom">PrÃ©nom</label> : <input type="text" name="prenom" id="prenom" />
            </p>
            
            <p>
                <label for="nom">Nom</label> : <input type="text" name="nom" id="nom"  />
            </p>
            
            <p>
                <label for="ville">Ville</label> : <input type="text" name="ville" id="ville" />
            </p>
            
            <p>
                <label for="mail">Mail</label> : <input type="email" name="mail" id="mail"  />
            </p>
            
            <p>
                <label for="tel">TÃ©lÃ©phone</label> : <input type="tel" name="tel" id="tel" />
            </p>
            
            <p>
                <label for="age">Age</label> : <input type="number" name="age" id="age" />
            </p>
            
            <p>
                <label for="langue"></label>Langue  : <input type="text" name="langue" id="langue"/> <input type="button" onclick="ajout(element);" value="+"/>
            </p>
            
            <p>
                <label for="presentation">Une phrase de prÃ©sentation</label> : <textarea name="presentation" id="presentation" ></textarea>
            </p>
            
            <p>
                <input type="submit" value="Envoyer" />
            </p>   
              
                        
        </form> 
        
        
    </body>
</html>

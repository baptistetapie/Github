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
        <style>
            div {
                border-radius: 5px;
                background-color: #f2f2f2;
                padding: 20px;
            }
            input[type=submit] {
                width: 100%;
                background-color: #4CAF50;
                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }

            input[type=submit]:hover {
                background-color: #45a049;
            }
        </style>
    </head>
    <body>
        <div>
        <h1>Formulaire d'inscription des parents</h1>
        <form name="ajout_parent" method='post' action='apres_soumission_parent.php' >
            
            <p>
                <label for="prenom">PrÃ©nom</label> : <input type="text" name="prenom" id="prenom" placeholder="Votre prénom..." required/>
            </p>
            
            <p>
                <label for="nom">Nom</label> : <input type="text" name="nom" id="nom" placeholder="Votre nom..." required />
            </p>
            
            <p>
                <label for="ville">Ville</label> : <input type="text" name="ville" id="ville" placeholder="Votre adresse..."  required />
            </p>
            
            <p>
                <label for="mail">Mail</label> : <input type="email" name="mail" id="mail" placeholder="Votre email..." required />
            </p>
            
            <p>
                <label for="tel">TÃ©lÃ©phone</label> : <input type="tel" name="tel" id="tel" placeholder="Votre numéro de téléphone..."  required />
            </p>
            
            <p>
                <label for="age">Age</label> : <input type="number" name="age" id="age" placeholder="Votre âge..." required />
            </p>
            
            <p>
                <label for="langue"></label>Langue  : <input type="text" name="langue" id="langue"/> <input type="button" onclick="ajout(element);" value="+"/>
            </p>
            
            <p>
                <label for="presentation">Une phrase de prÃ©sentation</label> : <textarea name="presentation" id="presentation"required ></textarea>
            </p>
            
            <p>
                <input type="submit" value="Envoyer" />
            </p>   
              
                        
        </form> 
        </div>
        
    </body>
</html>

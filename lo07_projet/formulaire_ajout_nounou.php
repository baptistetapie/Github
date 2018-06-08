<!DOCTYPE html>

<html>
    <head>
        <title>Inscription nounou | Les Bambins</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
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
            div {
                border-radius: 5px;
                background-color: #f2f2f2;
                padding: 20px;
             }  
               
        </style>
    </head>
    <body>
        <h1> Formulaire d'inscription nounou </h1>
        
        <form  method="post" action="apres_soumission_nounou.php">
            <div>
            <p>
                <label for="prenom">Prénom</label> : <input type="text" name="prenom" id="prenom" placeholder="Votre nom..."/>
            </p>
            
            <p>
                <label for="nom">Nom</label> : <input type="text" name="nom" id="nom" placeholder="Votre prénom..." />
            </p>
            
            <p>
                <label for="ville">Ville</label> : <input type="text" name="ville" id="ville" />
            </p>
            
            <p>
                <label for="mail">Mail</label> : <input type="email" name="mail" id="mail"  />
            </p>
            
            <p>
                <label for="tel">Téléphone</label> : <input type="tel" name="tel" id="tel" />
            </p>
            
            <p>
                <label for="presentation">Une Phrase de présentation</label> : <textarea name="presentation" id="presentation" ></textarea>
            </p>
            
            <p>
                <input type="submit" value="Envoyer" />
            </p>   
            
            <p>
                Formulaire d'envoi de fichier :<br />
                
                <input type="file" name="monfichier" /><br />
                
            </p>
           </div>  
        </form>
        
    </body>
</html>

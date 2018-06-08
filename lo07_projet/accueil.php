<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Accueil | Les Bambins</title>
        <link rel="stylesheet" href="accueil.css"/>
    </head>
    <body>
        
        <a name="haut" id="haut"></a>
        
        <div style="background:#fff2cc;padding:5px">
        <h4 style="text-align:center">Projet de LO07 P18</h4>
        </div>


        <div class="header">
          <h1>Les Bambins</h1>
        </div>
          
        <div class="navbar">
          <a href="formulaire_ajout_nounou.php">Inscription nounou</a>
          <a href="formulaire_ajout_parent.php">Inscription parent</a>
        </div>
        
        <div class="row">
            <div class="side">
                <h2>Nos services</h2>
                <h3>Baby-sitting:</h3>
                <p>Description</p>
                <h3>Langue:</h3>
                <p>Description</p>
                <h3>Sortie d'école:</h3>
                <p>Description</p>
            </div>
                <div class="main">
                <h2>Présentation</h2>
                <p>
                Vous aimez vos enfants, mais avec le travail, vos activités ou vos soirées, vous n'avez pas forcément tout le temps nécessaire à leur 
                consacrer. Nous sommes la pour vous aider et nous occuper de vos enfants quand vous ne pouvez pas. Notre offre est adaptée sur mesure 
                à vos besoins : nous vous proposons des baby-sitters, lorsque qu'une soirée improvisée s'organise et que vous ne pouvez pas amener
                vos bambins avec vous. Nos nounous peuvent également assurer des gardes ponctuelles, comme les sorties d'école les soirs de semaine.
                Enfin, une partie de nos nounous parlent étranger et peuvent transmettent leurs compétences linguistiques pendant la garde.
                </p>
            </div>
        </div>
                
        <div class="footer">
            <h2>Restons en contact!</h2>
            <p>Teléphone : 0768962414</p>
            <p>Email : lesbambins@utt.fr</p>
            <p>Rue d'Astorg, 15, 75008 Paris</p>
        </div>
        
        <div><a id="cRetour" class="cInvisible" href="#haut"></a></div>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
            window.onscroll = function(ev) {
            document.getElementById("cRetour").className = (window.pageYOffset > 100) ? "cVisible" : "cInvisible";
            };
            });
            
            document.addEventListener('DOMContentLoaded', function() {
              var aLiens = document.queryselectorAll('a[href*="#"]');
              for(var i=0, len = aLiens.length; i<len; i++) {
                aLiens[i].onclick = function () {
                  if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                    var target = this.getAttribute("href").slice(1);
                    if (target.length) {
                      scrollTo(document.getElementById(target).offsetTop, 1000);
                      return false;
                    }
                }
                };
              }
            });

        function scrollTo(element, duration) {
            var e = document.documentElement;
            if(e.scrollTop===0){
                var t = e.scrollTop;
                ++e.scrollTop;
                e = t+1===e.scrollTop--?e:document.body;
            }
            scrollToC(e, e.scrollTop, element, duration);
        }

        function scrollToC(element, from, to, duration) {
            if (duration < 0) return;
            if(typeof from === "object")from=from.offsetTop;
            if(typeof to === "object")to=to.offsetTop;

            scrollToX(element, from, to, 0, 1/duration, 20, easeOutCuaic);
        }

        function scrollToX(element, x1, x2, t, v, step, operacion) {
            if (t < 0 || t > 1 || v <= 0) return;
            element.scrollTop = x1 - (x1-x2)*operacion(t);
            t += v * step;

            setTimeout(function() {
                scrollToX(element, x1, x2, t, v, step, operacion);
            }, step);
        }

           function easeOutCuaic(t){
            t--;
            return t*t*t+1;
        }
        </script>
        
    </body>
</html>

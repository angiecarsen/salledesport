<?php $connecteur = new PDO('mysql:host=localhost;dbname=salle_de_sport','salledesport','cfjacquet15');
          $resultatsalle = $connecteur->query('SELECT * FROM salle ;')->fetchAll(PDO::FETCH_ASSOC); 
                    


    ?>
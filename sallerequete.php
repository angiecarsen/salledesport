<?php $connecteur = new PDO('mysql:host=localhost;dbname=salledesport','salledesport','hopeforce3');
          $resultatsalle = $connecteur->query('SELECT * FROM salle ;')->fetchAll(PDO::FETCH_ASSOC); 
                    


    ?>
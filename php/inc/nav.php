<nav>
      <ul>
    <?php 

        $navigation = [
            'Plan du site' => './plan_de_site.php',
            'Mentions légales' => "./mentions_legales.php",
            'Contact' => "./contact.php",  
        ];

           foreach($navigation as $key => $chemin) {
            echo "<li class=left__nav-item><a href=$chemin 
            class=left__nav-link>$key</a></li>";
           }    

    ?>
    </ul> 
    </nav>


   
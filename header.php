<?php 
        
        $page_name = basename($_SERVER['SCRIPT_NAME'], '.php' );
        if ( $page_name == 'index' )
             $page_name = 'domov';

      

    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="//cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js" integrity="sha512-d8F1J2kyiRowBB/8/pAWsqUl0wSEOkG5KATkVV4slfblq9VRQ6MyDZVxWl2tWd+mPhuCbpTB4M7uU/x9FlgQ9Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inconsolata&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@1,500&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/counter.css">
    <link rel="stylesheet" href="./css/image.css">
    <script src="./js/nav.js"></script>


    <title> 
        
    <?php 
    
    if($page_name == 'nasesluzby'){
        echo ('Naše služby'), " / " ;
    }
    else if($page_name == 'galeria'){
        echo ('Galéria'), " / " ;

    }
    else if($page_name == 'kontakt'){
        echo ('Kontakt'), " / " ;

    }
    else{
    echo ucfirst($page_name), " / " ;
    }
    ?>
    JT Audio</title>


    <?php 
    
        if($page_name == 'kontakt'){
            echo ('<link rel="stylesheet" href="subcss/kontakt.css"');
        }
    
    ?>



</head>
<body>




    <nav class="main-nav <?php echo $page_name ?>">
        
        <a href="./index.php"><img class="logo-img" src="./img/jtaudio.png"></a>
     
         <ul class="menu">

            <?php
 
                

                if ($page_name == 'kontakt') {
                    echo '<li class="menu-item"><span class="page-highlight">Kontakt</span></li>' ;
                }
                else {
                    echo '<li class="menu-item"><a href="kontakt.php">Kontakt</a></li>' ;
                }

                if ($page_name == 'galeria') echo '<li class="menu-item"><span class="page-highlight">Galéria</span></li>' ;
                else {echo '<li class="menu-item"><a href="galeria.php">Galéria</a></li>' ;}

                if ($page_name == 'nasesluzby') { echo '<li class="menu-item"><span class="page-highlight">Naše služby</span></li>'; }
                else { echo '<li class="menu-item"><a href="nasesluzby.php">Naše služby</a></li>' ;}

            ?>
         </ul>
         <button class="hamburger">
            <div class="bar"></div>
         </button>
    </nav>

    <ul class="mobile-menu">

            <?php
 
                

                if ($page_name == 'kontakt') echo '<li class="menu-item"><strong>Kontakt</strong></li>' ;
                else echo '<li class="menu-item"><a href="kontakt.php">Kontakt</a></li>' ;

                if ($page_name == 'galeria') echo '<li class="menu-item"><strong>Galéria</strong></li>' ;
                else echo '<li class="menu-item"><a href="galeria.php">Galéria</a></li>' ;

                if ($page_name == 'nasesluzby') echo '<li class="menu-item"><strong>Naše služby</strong></li>' ;
                else echo '<li class="menu-item"><a href="nasesluzby.php">Naše služby</a></li>' ;

            ?>
    </ul>
 

<script src="./js/hamburger.js"></script>
<script src="./js/nav.js"></script>
<script src="./js/slideview.js"></script>


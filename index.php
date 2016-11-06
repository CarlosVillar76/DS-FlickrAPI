<?php
/*
 * phpFlickr API Class - Ejercicio para Desarrollo en Servidor
 */

//Incluimos los archivos necesarios para la aplicacion
require 'config.php';
require 'phpFlickr.php';

// Instanciamos la clase phpFlickr con los parametros detallados en config.php

$flickr      = new phpFlickr(FLICKR_API_KEY, FLICKR_API_SECRET, true);

?>

<!DOCTYPE html>
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<title>FlickrAPI - Ejercicio de Desarrollo en Servidor</title>
</head>
<body>
    <header>
        
    </header>
    <container>
    <div class="formulario">
        <form action="index.php" method="get">
            <label for="">Busqueda: </label><input type="text" name="tag"/>
            <input type="submit" name="submit" value="Submit"/>
        </form>
    </div>
    <div class="foto_cont">
        <?php
        $photos = $flickr->photos_search(array("tags"=>$_GET["tag"], "sort"=>"date-posted-desc", "privacy_filter"=>"1", "per_page"=>"20"));
        if(isset($_GET["submit"])) {
            if (is_array($photos['photo'])) {
                foreach($photos['photo'] as $photo) {
                    echo '<img src="http://farm' . $photo["farm"] . '.static.flickr.com/' . $photo["server"] . '/' . $photo["id"] . '_' . $photo["secret"] . '.jpg">'; 
                }
            }
        }
        ?>
    </div>
    </container>
</body>
</html>
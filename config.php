<?php
/*
 * Archivo de configuracion
 */

/*
 * API Key
 *
 * Es un requisito para TODAS las llamadas a la API.
 * Se consigue en http://www.flickr.com/services/api/key.gne
 * 
 * @var     string
 */
defined('FLICKR_API_KEY') || define('FLICKR_API_KEY', '3dca25c82f4bb71f40d16cd44f288b85');

/*
 * API Secret
 *
 * Es un requisito para todas las llamadas PRIVADAS a la API.
 * NO es necesaria para las consultas PUBLICAS.
 * Tambien se consigue en http://www.flickr.com/services/api/key.gne
 *
 * @var     string
 */
defined('FLICKR_API_SECRET') || define('FLICKR_API_SECRET', 'bf9f9e2e06ad5e4f');

?>
<?php
// Definir URL base automaticamente
if ($_SERVER['HTTP_HOST'] == 'localhost') {
    $base_url = "http://localhost/maktub-site/";  
} else {
    $base_url = "https://maktubpromotora.com.br/";  
}

// Disponibilizar a variável globalmente
define('BASE_URL', $base_url);
?>
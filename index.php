
<?php

//system dosyalarını otomatik include ediyoruz.
function __autoload($className) {
    include_once 'system/libs/' . $className . '.php';
}

//config dosyasını include ediyoruz
include_once 'app/config/config.php';
//bootstrap bölümü
$boot = new Bootstrap();
?>


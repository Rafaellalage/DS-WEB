<?php

    //Criando um Cookie
    setcookie("usuario", "Tocantis", time() + 7*24*(60*60), '/');
    setcookie("usuarioAntigo", "Rafa Lage", time() + 7*24*(60*60), '/');

    //Destruindo um cookie
    //setcookie("usuarioAntigo", "Rafa Lage", -3600, '/');
    print_r($_COOKIE)
?>
<?php

declare(strict_types = 1);
include 'app.php';

function includeTemplate( string $nombre, bool $inicio = false, bool $visible = false ){
    include TEMPLATES_URL . "/${nombre}.php";
}
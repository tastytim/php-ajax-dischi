<?php

require_once __DIR__. "/../../php-ajax-dischi/data/cd.php";

header("Content-Type: application/json");

echo json_encode([
    "cdList" => $cdList
]);
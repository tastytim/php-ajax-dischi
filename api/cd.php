<?php

require_once __DIR__. "/../data/cd.php";

header("Content-Type: application/json");

echo json_encode([
    "cdList" => $cdList
  ]);
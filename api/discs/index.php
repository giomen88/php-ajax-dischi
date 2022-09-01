<?php 

require_once __DIR__ . '/../../data.php';

$results = $discs;


header('Content-Type: application/json');
echo json_encode($results);

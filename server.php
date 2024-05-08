<?php

$recordsString = file_get_contents('dischi.json');
$recordsArray = json_decode($recordsString, true);

header('Content-type: application/json');

$data = [
  'results' => $recordsArray,
  'succes' => true
];

echo json_encode($data);
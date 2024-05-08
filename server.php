<?php

$recordsString = file_get_contents('dischi.json');
$recordsArray = json_decode($recordsString, true);

var_dump($recordsArray);
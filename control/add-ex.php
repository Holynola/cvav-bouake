<?php

include('dbConf.php');

// Genre
$repGen = $bdd->query('SELECT * FROM gender');

// Doyenné
$repDoy = $bdd->query('SELECT * FROM doyen');

// Section
$repSec = $bdd->query('SELECT * FROM section');

// Level
$repLev = $bdd->query('SELECT * FROM levels');

// Title
$repTle = $bdd->query('SELECT * FROM title');

// Mifa
$repMif = $bdd->query('SELECT * FROM mifa');
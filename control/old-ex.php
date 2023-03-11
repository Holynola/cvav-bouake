<?php

include('dbConf.php');

$repv = $bdd->query("SELECT * FROM vaillant ORDER BY fullname ASC");
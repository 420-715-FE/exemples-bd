<?php

$infosBD = [
    'hote' => 'localhost',
    'nomBD' => 'contacts',
    'nomUtilisateur' => 'root',
    'motDePasse' => ''
];

$bd = new PDO("mysql:host={$infosBD['hote']};dbname={$infosBD['nomBD']};charset=utf8", $infosBD['nomUtilisateur'], $infosBD['motDePasse']);
$bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>

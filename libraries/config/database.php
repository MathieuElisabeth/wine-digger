<?php

/**
 * Retourne une connexion à la DB
 * 
 * @return PDO
 */

function getPDO(): PDO
{

  $servername = '';
  $dbname = '';
  $user = '';
  $pass = '';

  $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $user, $pass, [
    PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
  ]);

  return $pdo;
}
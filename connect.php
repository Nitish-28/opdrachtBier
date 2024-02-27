<?php

// Variabelen met gegevens voor database
$servername = "localhost";
$dbname = "beer-casus";
$username = "RootMe";
$password = "$2y$10$0WRPYX5mIMYpTBFwObG.OOY4EaVGhcVeSrx9ia/VUFD1cCgBFEk/6";

try {
  // PDO object aanmaken en parameters met gegevens over database erin verwerken
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // Stel error reporting in. De waarde maakt gebruik van exceptions als er SQL errors zijn
  // en het script stopt met draaien.
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // Catch de PDOException om de error te zien als de connectie met de database misgaat
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

?>

<?php
$pdo = new PDO('mysql:host=localhost;port=3306;dbname=soil_analysis',
   'soil', 'grp10');
// See the "errors" folder for details...
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "Connected successfully";

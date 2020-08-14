<?php
  include 'dbconnect.php';
  $table1 = "DROP TABLE  ezhardware";

$table2 = "DROP TABLE  componenttype";

$table3 = "DROP TABLE  accessorytype";

$table4 = "DROP TABLE  accessorylog";

$table5 = "DROP TABLE  ezhardwares";

$table6 = "DROP TABLE  ezhwtype";

$table7 = "DROP TABLE  hardware";

$table8 = "DROP TABLE  hardwareio";

$table9 = "DROP TABLE  hardwares";

$table10 = "DROP TABLE  hwtype";

$table11 = "DROP TABLE  kisacc";

$table12 = "DROP TABLE  accessory";

$table13 = "DROP TABLE  tkinfo";

$table14 = "DROP TABLE  acc";

$table15 = "DROP TABLE  accessories";

$tables = [$table1, $table2,$table3, $table4,$table5, $table6,$table7, $table8,$table9, $table10,$table11, $table12,$table13, $table14,$table15];
$errors=['-','-','-','-','-','-','-','-','-','-','-','-','-','-','-'];

for($i=0;$i<15;$i++){
  $query = mysql_query($tables[$i]);
  if(!$query)
       $errors[$i] = "Table ".$i." : Creation failed";
    else
       $errors[$i] = "Table ".$i." : Creation done";


}

for($i=0;$i<15;$i++){
  echo($errors[$i]);


}


header("Location: http://".$_SERVER['HTTP_HOST'].'/kis/dbcheck.php');
// echo($error);
// foreach($errors as $msg) {
//    echo "$msg <br>";
// }

?>
<?php
  include 'dbconnect.php';
  $table1 = "CREATE TABLE  ezhardware (
  id int NOT NULL AUTO_INCREMENT,
  hw_name varchar(255)  NOT NULL DEFAULT '-',
  hw_type varchar(255)  NOT NULL DEFAULT '-',
  amount varchar(255)  NOT NULL DEFAULT '-',
  avail varchar(255)  NOT NULL DEFAULT '-',
  ram_info varchar(255)  NOT NULL DEFAULT '-',
  mhz_info varchar(255)  NOT NULL DEFAULT '-',
  slot_number varchar(255)  NOT NULL DEFAULT '-',
  current_ram varchar(255)  NOT NULL DEFAULT '-',
  max_ram varchar(255)  NOT NULL DEFAULT '-',
  spec_link varchar(255)  NOT NULL DEFAULT '-',
  building varchar(255)  NOT NULL DEFAULT '-',
  floor varchar(255)  NOT NULL DEFAULT '-',
  room_number varchar(255)  NOT NULL DEFAULT '-',
  room_name varchar(255)  NOT NULL DEFAULT '-',
  purchase_date varchar(255)  NOT NULL DEFAULT '-',
  user_type varchar(255)  NOT NULL DEFAULT '-',
  age varchar(255)  NOT NULL DEFAULT '-',
  deploy_date varchar(255)  NOT NULL DEFAULT '-',
  description varchar(100)  NOT NULL,
  image longblob NOT NULL,
  status varchar(255)  NOT NULL DEFAULT 'active',
  groups varchar(50)  NOT NULL DEFAULT '-',
  PRIMARY KEY (id)
) ;";

$table2 = "CREATE TABLE  componenttype (
  id int NOT NULL AUTO_INCREMENT,
  list varchar(255)  NOT NULL DEFAULT '-',
  PRIMARY KEY (id)
) ;";

$table3 = "CREATE TABLE  accessorytype (
  id int NOT NULL AUTO_INCREMENT,
  list varchar(255)  NOT NULL DEFAULT '-',
  PRIMARY KEY (id)
) ;";

$table4 = "CREATE TABLE  accessorylog (
  id int NOT NULL AUTO_INCREMENT,
  account varchar(255)  NOT NULL DEFAULT '-',
  date varchar(255)  NOT NULL DEFAULT '-',
  time varchar(255)  NOT NULL DEFAULT '-',
  hwid varchar(255)  NOT NULL DEFAULT '-',
  hw_name varchar(255)  NOT NULL DEFAULT '-',
  hw_type varchar(255)  NOT NULL DEFAULT '-',
  amount varchar(255)  NOT NULL DEFAULT '-',
  ram_info varchar(255)  NOT NULL DEFAULT '-',
  mhz_info varchar(255)  NOT NULL DEFAULT '-',
  slot_number varchar(255)  NOT NULL DEFAULT '-',
  current_ram varchar(255)  NOT NULL DEFAULT '-',
  max_ram varchar(255)  NOT NULL DEFAULT '-',
  spec_link varchar(255)  NOT NULL DEFAULT '-',
  building varchar(255)  NOT NULL DEFAULT '-',
  floor varchar(255)  NOT NULL DEFAULT '-',
  room_number varchar(255)  NOT NULL DEFAULT '-',
  room_name varchar(255)  NOT NULL DEFAULT '-',
  purchase_date varchar(255)  NOT NULL DEFAULT '-',
  user_type varchar(255)  NOT NULL DEFAULT '-',
  avail varchar(255)  NOT NULL DEFAULT '-',
  status varchar(255)  NOT NULL DEFAULT '-',
  PRIMARY KEY (id)
) ;";

$table5 = "CREATE TABLE  ezhardwares (
  id int NOT NULL AUTO_INCREMENT,
  account varchar(255)  NOT NULL DEFAULT '-',
  date varchar(255)  NOT NULL DEFAULT '-',
  time varchar(255)  NOT NULL DEFAULT '-',
  hwid varchar(255)  NOT NULL DEFAULT '-',
  hw_name varchar(255)  NOT NULL DEFAULT '-',
  hw_type varchar(255)  NOT NULL DEFAULT '-',
  amount varchar(255)  NOT NULL DEFAULT '-',
  ram_info varchar(255)  NOT NULL DEFAULT '-',
  mhz_info varchar(255)  NOT NULL DEFAULT '-',
  slot_number varchar(255)  NOT NULL DEFAULT '-',
  current_ram varchar(255)  NOT NULL DEFAULT '-',
  max_ram varchar(255)  NOT NULL DEFAULT '-',
  spec_link varchar(255)  NOT NULL DEFAULT '-',
  building varchar(255)  NOT NULL DEFAULT '-',
  floor varchar(255)  NOT NULL DEFAULT '-',
  room_number varchar(255)  NOT NULL DEFAULT '-',
  room_name varchar(255)  NOT NULL DEFAULT '-',
  purchase_date varchar(255)  NOT NULL DEFAULT '-',
  user_type varchar(255)  NOT NULL DEFAULT '-',
  avail varchar(255)  NOT NULL DEFAULT '-',
  status varchar(255)  NOT NULL DEFAULT '-',
  groups varchar(50)  NOT NULL DEFAULT '-',
  PRIMARY KEY (id)
) ;";

$table6 = "CREATE TABLE  ezhwtype (
  id int NOT NULL AUTO_INCREMENT,
  list varchar(255)  NOT NULL DEFAULT '-',
  PRIMARY KEY (id)
) ;";

$table7 = "CREATE TABLE  hardware (
  id int NOT NULL AUTO_INCREMENT,
  hw_name varchar(255)  NOT NULL DEFAULT '-',
  hw_type varchar(255)  NOT NULL DEFAULT '-',
  amount varchar(255)  NOT NULL DEFAULT '-',
  avail varchar(255)  NOT NULL DEFAULT '-',
  ram_info varchar(255)  NOT NULL DEFAULT '-',
  mhz_info varchar(255)  NOT NULL DEFAULT '-',
  slot_number varchar(255)  NOT NULL DEFAULT '-',
  current_ram varchar(255)  NOT NULL DEFAULT '-',
  max_ram varchar(255)  NOT NULL DEFAULT '-',
  spec_link varchar(255)  NOT NULL DEFAULT '-',
  building varchar(255)  NOT NULL DEFAULT '-',
  floor varchar(255)  NOT NULL DEFAULT '-',
  room_number varchar(255)  NOT NULL DEFAULT '-',
  room_name varchar(255)  NOT NULL DEFAULT '-',
  purchase_date varchar(255)  NOT NULL DEFAULT '-',
  user_type varchar(255)  NOT NULL DEFAULT '-',
  age varchar(255)  NOT NULL DEFAULT '-',
  deploy_date varchar(255)  NOT NULL DEFAULT '-',
  description varchar(100)  NOT NULL,
  image longblob NOT NULL,
  status varchar(255)  NOT NULL DEFAULT 'active',
  groups varchar(50)  NOT NULL DEFAULT '-',
  note varchar(255)  NOT NULL DEFAULT '-',
  info varchar(255)  NOT NULL DEFAULT '-',
  brand varchar(255)  NOT NULL DEFAULT '-',
  contact varchar(255)  NOT NULL DEFAULT '-',
  PRIMARY KEY (id)
) ;";

$table8 = "CREATE TABLE  hardwareio (
  id int NOT NULL AUTO_INCREMENT,
  accid varchar(255)  NOT NULL DEFAULT '-',
  hwid varchar(255)  NOT NULL DEFAULT '-',
  amount varchar(255)  NOT NULL DEFAULT '-',
  odate varchar(255)  NOT NULL DEFAULT '-',
  otime varchar(255)  NOT NULL DEFAULT '-',
  idate varchar(255)  NOT NULL DEFAULT '-',
  itime varchar(255)  NOT NULL DEFAULT '-',
  iostatus varchar(255)  NOT NULL DEFAULT '-',
  groups varchar(50)  NOT NULL DEFAULT '-',
  PRIMARY KEY (id)
) ;";

$table9 = "CREATE TABLE  hardwares (
  id int NOT NULL AUTO_INCREMENT,
  account varchar(255)  NOT NULL DEFAULT '-',
  date varchar(255)  NOT NULL DEFAULT '-',
  time varchar(255)  NOT NULL DEFAULT '-',
  hwid varchar(255)  NOT NULL DEFAULT '-',
  hw_name varchar(255)  NOT NULL DEFAULT '-',
  hw_type varchar(255)  NOT NULL DEFAULT '-',
  amount varchar(255)  NOT NULL DEFAULT '-',
  ram_info varchar(255)  NOT NULL DEFAULT '-',
  mhz_info varchar(255)  NOT NULL DEFAULT '-',
  slot_number varchar(255)  NOT NULL DEFAULT '-',
  current_ram varchar(255)  NOT NULL DEFAULT '-',
  max_ram varchar(255)  NOT NULL DEFAULT '-',
  spec_link varchar(255)  NOT NULL DEFAULT '-',
  building varchar(255)  NOT NULL DEFAULT '-',
  floor varchar(255)  NOT NULL DEFAULT '-',
  room_number varchar(255)  NOT NULL DEFAULT '-',
  room_name varchar(255)  NOT NULL DEFAULT '-',
  purchase_date varchar(255)  NOT NULL DEFAULT '-',
  user_type varchar(255)  NOT NULL DEFAULT '-',
  avail varchar(255)  NOT NULL DEFAULT '-',
  status varchar(255)  NOT NULL DEFAULT '-',
  groups varchar(50)  NOT NULL DEFAULT '-',
  note varchar(255)  NOT NULL DEFAULT '-',
  info varchar(255)  NOT NULL DEFAULT '-',
  brand varchar(255)  NOT NULL DEFAULT '-',
  contact varchar(255)  NOT NULL DEFAULT '-',
  PRIMARY KEY (id)
) ;";

$table10 = "CREATE TABLE  hwtype (
  id int NOT NULL AUTO_INCREMENT,
  list varchar(255)  NOT NULL DEFAULT '-',
  PRIMARY KEY (id)
) ;";

$table11 = "CREATE TABLE  kisacc (
  id int NOT NULL AUTO_INCREMENT,
  username varchar(255)  NOT NULL,
  password varchar(255)  NOT NULL,
  name varchar(255)  NOT NULL,
  email varchar(255)  NOT NULL,
  phone varchar(255)  NOT NULL,
  type varchar(255)  NOT NULL,
  status varchar(255)  NOT NULL DEFAULT '-',
  description varchar(100)  NOT NULL,
  image longblob NOT NULL,
  PRIMARY KEY (id)
) ;";
$table12 = "CREATE TABLE  accessory (
  id int NOT NULL AUTO_INCREMENT,
  hw_name varchar(255)  NOT NULL DEFAULT '-',
  hw_type varchar(255)  NOT NULL DEFAULT '-',
  amount varchar(255)  NOT NULL DEFAULT '-',
  avail varchar(255)  NOT NULL DEFAULT '-',
  ram_info varchar(255)  NOT NULL DEFAULT '-',
  mhz_info varchar(255)  NOT NULL DEFAULT '-',
  slot_number varchar(255)  NOT NULL DEFAULT '-',
  current_ram varchar(255)  NOT NULL DEFAULT '-',
  max_ram varchar(255)  NOT NULL DEFAULT '-',
  spec_link varchar(255)  NOT NULL DEFAULT '-',
  building varchar(255)  NOT NULL DEFAULT '-',
  floor varchar(255)  NOT NULL DEFAULT '-',
  room_number varchar(255)  NOT NULL DEFAULT '-',
  room_name varchar(255)  NOT NULL DEFAULT '-',
  purchase_date varchar(255)  NOT NULL DEFAULT '-',
  user_type varchar(255)  NOT NULL DEFAULT '-',
  age varchar(255)  NOT NULL DEFAULT '-',
  deploy_date varchar(255)  NOT NULL DEFAULT '-',
  description varchar(100)  NOT NULL,
  image longblob NOT NULL,
  status varchar(255)  NOT NULL DEFAULT 'active',
  PRIMARY KEY (id)
) ;";

$table13 = "CREATE TABLE  tkinfo (
  id int NOT NULL AUTO_INCREMENT,
  sender varchar(255)  NOT NULL DEFAULT '-',
  question_header varchar(255)  NOT NULL DEFAULT '-',
  question_content varchar(255)  NOT NULL DEFAULT '-',
  send_date varchar(255)  NOT NULL DEFAULT '-',
  send_to varchar(255)  NOT NULL DEFAULT '-',
  reply_content varchar(255)  NOT NULL DEFAULT '-',
  reply_by varchar(255)  NOT NULL DEFAULT '-',
  reply_date varchar(255)  NOT NULL DEFAULT '-',
  PRIMARY KEY (id)
) ;";

$table14 = "CREATE TABLE  acc (
  username varchar(255)  NOT NULL,
  password varchar(255)  NOT NULL,
  user varchar(255)  NOT NULL,
  status int(8) NOT NULL,
  getUser varchar(255)  NOT NULL,
  getPass varchar(255)  NOT NULL,
  getFrom varchar(255)  NOT NULL
) ;";


$tables = [$table1, $table2,$table3, $table4,$table5, $table6,$table7, $table8,$table9, $table10,$table11, $table12,$table13, $table14];
$errors=['-','-','-','-','-','-','-','-','-','-','-','-','-','-'];

for($i=0;$i<14;$i++){
  $query = mysql_query($tables[$i]);
  if(!$query)
       $errors[$i] = "Table ".$i." : Creation failed";
    else
       $errors[$i] = "Table ".$i." : Creation done";


}

for($i=0;$i<14;$i++){
  echo($errors[$i]);


}


$set1 = "INSERT INTO componenttype (id, list) VALUES
(1, 'CPU'),
(2, 'RAM'),
(3, 'ROM'),
(4, 'GPU');";


$set2 = "INSERT INTO accessorytype (id, list) VALUES
(1, 'MOUSE'),
(2, 'KEYBOARD'),
(3, 'EARPHONE'),
(4, 'MICROPHONE'),
(5, 'SPEAKER');";




$set3 = "INSERT INTO ezhwtype (id, list) VALUES
(1, 'RAM'),
(2, 'ROM'),
(3, 'CPU');";



$set4 = "INSERT INTO hwtype (id, list) VALUES
(1, 'COMUPER'),
(2, 'MONITOR'),
(3, 'PRINTER'),
(4, 'SCANNER'),
(5, 'PROJECTOR');";


$set5 = "INSERT INTO kisacc (`id`, `username`, `password`, `name`, `email`, `phone`, `type`, `status`, `description`, `image`) VALUES
(1, 'kukkui', '1234', 'kukkui', 'kukkui2537@gmail.com', '0843877786', 'ADMIN', '-', '', ''),
(2, 'user', '1234', 'user', 'user@gmail.com', '0822343322', 'USER', '-', '', ''),
(3, 'editor', '1234', 'edit', 'edit@gmail.com', '0822343322', 'EDITOR', '-', '', ''),
(4, 'admin', '1234', 'admin', 'admin@gmail.com', '0822343322', 'ADMIN', '-', '', '');";
$setinfo = [$set1,$set2,$set3,$set4,$set5];
$error2 = ['-','-','-','-','-'];

for($i=0;$i<5;$i++){
  $query = mysql_query($tables[$i]);
  if(!$query)
       $error2[$i] = "Table ".$i." : Creation failed";
    else
       $error2[$i] = "Table ".$i." : Creation done";


}

for($i=0;$i<5;$i++){
  echo($error2[$i]);


}
header("Location: http://".$_SERVER['HTTP_HOST'].'/kis/dbcheck.php');
// echo($error);
// foreach($errors as $msg) {
//    echo "$msg <br>";
// }

?>
<?php 
define('DSN', 'mysql:host=db;dbname=pet_shop;charset=utf8');
define('USER', 'staff');
define('PASSWORD', '9999');

try {
  $dbh = new PDO(DSN, USER, PASSWORD);
} catch (PDOexception $e) {
  echo $e->getMessage();
  exit;
}

$sql = "SELECT * FROM animals";
$stmt = $dbh->prepare($sql);
$stmt->execute();

$animals = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach($animals as $animal);
echo $animal['type'].'の'.$animal['classification'].'ちゃん'.'<br>';
echo $animal['description'].'<br>';
echo $animal['birthday'].'生まれ'.'<br>';
echo '出身地 '.$animal['birthplace'].'<hr>';

?>
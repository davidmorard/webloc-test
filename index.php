<!DOCTYPE html>
<html>
<head>
	<title>Webloc application d'entraide pour les propriétaires</title>
</head>
<body>
<?php  
$subscribe = new User([
	'pseudo' => 'MauriceDurand',
	'password'=>'0000',
	'nom'=>'Durand',
	'first_name'=>'Maurice',
	'email'=>'mauricedurand@email.com',
	'status'=>true,
	'phone'=>'06 06 08 08 07'
]);

$db = new PDO('mysql:host=localhost;dbname=webloc', 'root', 'root');
$manager = new UserManager($db);

$manager->add($subscribe);
?>
</body>
</html>
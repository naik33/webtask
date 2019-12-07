<?php
$cars = [["id"=>1,"maker"=>"Toyota","model"=>"Camry 50","price"=>30000],["id"=>2,"maker"=>"Mercedes","model"=>"C 100","price"=>20000],["id"=>3,"maker"=>"Daewoo","model"=>"Nexia","price"=>15000],["id"=>4,"maker"=>"Mercedes","model"=>"S 500","price"=>27000]];
$basket = null;
if (isset($_COOKIE["basket"])){
	$basket = json_decode($_COOKIE["basket"]);
}
else{
	$basket = [];
}
foreach ($cars as $car) {
	if (isset($_COOKIE['basket'])) {
    foreach ($_COOKIE['basket'] as $cars => $car) {
        echo "$cars : $value <br>";
while($u = mysql_fetch_array($sql))
{ 
session_regenerate_id(true);
$session_id = $u[id];
$session_username = $cars;
$session_level = $cars[car];

$_SESSION['user_id'] = $session_id;
$_SESSION['user_maker'] = $session_maker;
$_SESSION['user_model'] = $session_model;
$_SESSION['user_cars'] = car();
    }
}
}

?>
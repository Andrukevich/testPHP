<?php

// подключается composer
require_once "vendor/autoload.php";

// подключается faker
require_once 'vendor/fzaninotto/faker/src/autoload.php';
$faker = Faker\Factory::create();



?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test_PHP_Andrukevich</title>
</head>
<body>

<!--<h1>Hello <?= $faker->name  ?></h1>-->
<h1>Hello <?= $faker->name  ?></h1>

</body>
</html>
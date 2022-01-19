<?php
use Illuminate\Database\Capsule\Manager as Capsule;
$capsule = new Capsule;
$capsule->addConnection([
 'driver'    => 'mysql',
 'host'      => getenv('PHP_DB_HOST') ?: 'ID338996_integration3.db.webhosting.be',
 'database'  => getenv('PHP_DB_DATABASE') ?: 'ID338996_integration3',
 'username'  => getenv('PHP_DB_USERNAME') ?: 'ID338996_integration3',
 'password'  => getenv('PHP_DB_PASSWORD') ?: 'E0d22672760jpeM1C351',
 'charset'   => 'utf8mb4',
 'collation' => 'utf8mb4_unicode_ci',
 'prefix'    => '',
]);
$capsule->setAsGlobal();
$capsule->bootEloquent();

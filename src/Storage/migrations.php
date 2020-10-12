<?php
/**
 * Here you can run migration and set database with tables
 */

require __DIR__ . '/../../vendor/autoload.php';

$container = \App\Bootstrap\Container::get();

$container->register(new \App\Provider\ConfigProvider());
$container->register(new \App\Provider\DatabaseProvider());

$capsule = $container['db']['capsule'];

$capsule::schema()->create('urls', function ($table) {
    $table->increments('id');
    $table->string('link');
    $table->string('path')->unique();
    $table->timestamps();
});

//Illuminate\Database\Capsule\Manager::table('urls')->insert([
//    'link' => 'fb.com',
//    'path' => 'asf234'
//]);
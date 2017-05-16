<?php
/**
 * Created by PhpStorm.
 * @author Yann Le Scouarnec <bunkermaster@gmail.com>
 * Date: 16/05/2017
 * Time: 10:38
 */
require_once "vendor/autoload.php";

$loader = new Twig_Loader_Filesystem(__DIR__.'/view');
$twig = new Twig_Environment($loader, array(
    'debug' => true,
    'cache' => false,
//    'cache' => __DIR__.'/cache',
));
$twig->addExtension(new Twig_Extension_Debug());

$table = [
    ["prenom" => "Bob"],
    ["prenom" => "Patrick"],
    ["prenom" => "Carlos"]
];

echo $twig->render('table.html.twig', [
    'listeprenoms' => $table,
    'toto' => 'Bravo niels'
]);

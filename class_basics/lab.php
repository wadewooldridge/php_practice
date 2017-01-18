<?php
require_once("dog.php");

$lab = new Dog("", "", "", 0);
echo "<hr>";
$lab->printSummary();
$lab->speak();
$lab->speak(3);

echo "<hr>";
$lab->setName('Poindexter');
$lab->setBreed('Labrador Retriever');
$lab->setColor('golden');
$lab->setWeight(75);
$lab->printSummary();

echo "<hr>";
$lab->setName('PoindexterPoindexterPoindexter21');
$lab->setBreed('Labrador Retriever mixed with Newfoundland');
$lab->setColor('off-white');
$lab->setWeight(5000);
$lab->printSummary();

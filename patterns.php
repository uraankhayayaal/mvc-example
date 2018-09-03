<?php

include 'factory.php';
include 'singletone.php';
include 'adapter.php';
include 'facade.php';
?>

<h3>Factory</h3>
<?php
// have the factory create the Automobile object
$veyron = AutomobileFactory::create('Bugatti', 'Veyron');
print_r($veyron->getMakeAndModel()); // outputs "Bugatti Veyron"
?>
<br>
<?php
$toyota = AutomobileFactory::create('Toyota', 'Camry');
print_r($toyota->setNumber(134324)->getDoc()); // outputs "Array ( [make] => Toyota [model] => Camry [number] => 134324 )"
?>

<h3>Singletone</h3>
<?php
$client = new SomeClient();

// Want an array?
$client->setOutput(new ArrayOutput());
$data = $client->loadOutput(['apple', 'banana', 'tomat']);
var_dump($data);
?>
<br>
<?php
// Want some JSON?
$client->setOutput(new JsonStringOutput());
$data = $client->loadOutput(['apple', 'banana', 'tomat']);
var_dump($data);
?>

<h3>Factory + Singletone</h3>
<?php
$nissan = AutomobileFactory::create('Nissan', 'Teana');
$doc = $nissan->setNumber(777)->getDoc();
$client->setOutput(new HtmlOutput());
$data = $client->loadOutput($doc);
echo $data;
?>


<h3>Adapter</h3>
<?php
$some = new SomeClass;
echo $some->sum(2,2);
?>
<br>
<?php
$another = new AnotherClass;
echo $another->sum(5,2);
?>

<h3>Facade</h3>
<?php
$computer = new Computer();
$computer->startComputer();
?>
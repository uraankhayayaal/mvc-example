<?php

interface OutputInterface
{
    public function load($arrayOfData);
}

class SerializedArrayOutput implements OutputInterface
{
    public function load($arrayOfData)
    {
        return serialize($arrayOfData);
    }
}

class JsonStringOutput implements OutputInterface
{
    public function load($arrayOfData)
    {
        return json_encode($arrayOfData);
    }
}

class ArrayOutput implements OutputInterface
{
    public function load($arrayOfData)
    {
        return $arrayOfData;
    }
}

class HtmlOutput implements OutputInterface
{
    public function load($arrayOfData)
    {
        $html = '<table>';
        foreach ($arrayOfData as $key => $value) {
            $html .= '<tr><td>' .$key. '</td><td>' .$value. '</td></tr>';
        }
        $html .= '</table>';
        return $html;
    }
}

class SomeClient
{
    private $output;

    public function setOutput(OutputInterface $outputType)
    {
        $this->output = $outputType;
    }

    public function loadOutput($arrayOfData = null)
    {
        return $this->output->load($arrayOfData);
    }
}


// $client = new SomeClient();

// // Want an array?
// $client->setOutput(new ArrayOutput());
// $data = $client->loadOutput(['apple', 'banana', 'tomat']);
// var_dump($data);

// // Want some JSON?
// $client->setOutput(new JsonStringOutput());
// $data = $client->loadOutput(['apple', 'banana', 'tomat']);
// var_dump($data);
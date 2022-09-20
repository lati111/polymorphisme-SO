<?php
interface IDocument
{
    public function getNaam();
}
class TextDocument implements IDocument
{
    private $name;
    //Specifieke properties voor een textdoc weggelaten 

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getNaam()
    {
        return $this->name;
    }
}


class Worksheet implements IDocument
{
    private $name;
    //Specifieke properties voor een worksheet weggelaten 

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getNaam()
    {
        return $this->name;
    }
}


class Drawing implements IDocument
{
    private $name;
    //Specifieke properties voor een drawing weggelaten 

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getNaam()
    {
        return $this->name;
    }
}


$handleiding = new TextDocument('Handleiding boekhouding versie 1');
$boekhouding1920 = new Worksheet('Boekhouding Bedrijf X 20192020');
$boekhouding2021 = new Worksheet('Boekhouding Bedrijf X 20202021');
$grafiekresult = new Drawing('Resultaten boekjaar 2019 - 2020');
$bedrijfdocs = array($handleiding, $boekhouding1920, $boekhouding2021, $grafiekresult);
foreach ($bedrijfdocs as $doc) {
    echo $doc->getNaam() . "<br>";
    // Wat gebeurt hier? Goed over nadenken! 
}

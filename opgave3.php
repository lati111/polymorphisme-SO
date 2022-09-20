<?php
interface IShape
{
    public function calculateSurface();
    public function calculatePerimiter();
}

class Circle implements IShape
{
    private int $straal;

    function __construct(int $straal)
    {
        $this->straal = $straal;
    }

    public function calculateSurface()
    {
        return ($this->straal * $this->straal) * pi();
    }

    public function calculatePerimiter()
    {
        return $this->straal * 2 * pi();
    }
}

class Rectangle implements IShape
{
    private int $width;
    private int $height;

    function __construct(int $width, int $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateSurface()
    {
        return $this->width * $this->height;
    }

    public function calculatePerimiter()
    {
        return $this->width * 2 + $this->height * 2;
    }
}

class Triangle implements IShape
{
    private int $side1;
    private int $side2;
    private int $side3;

    function __construct(int $side1, int $side2, int $side3)
    {
        $this->side1 = $side1;
        $this->side2 = $side2;
        $this->side3 = $side3;
    }

    public function calculateSurface()
    {
        $s = $this->calculatePerimiter() / 2;
        $a = $s - $this->side1;
        $b = $s - $this->side2;
        $c = $s - $this->side3;
        return sqrt($s * $a * $b * $c);
    }

    public function calculatePerimiter()
    {
        return $this->side1 + $this->side2 + $this->side3;
    }
}

$cirkel1 = new Circle(20); // straal 
$cirkel2 = new Circle(10);
$rechthoek = new Rectangle(20, 10); // breedte en hoogte 
$driehoek = new Triangle(10, 20, 15); // lengte van de zijden 
$vormen = array($cirkel1, $rechthoek, $cirkel2, $driehoek);
foreach ($vormen as $vorm) {
    echo $vorm->calculateSurface() . "<br>"; // De 'magic' 
}

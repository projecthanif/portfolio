<?php


class Fun{
    public $x;
    protected $y;
    private  $z;
    function __construct(){
        $this->x=20;
        $this->y=10;
        $this->z=12;
    }
    
    function play(){
        echo $this->x;
        echo "<br>";
        echo $this->y;
        echo "<br>";
        echo $this->z;
        echo "<br>";
    }
}
$fun = new Fun;
$fun->play();
echo "break";
echo "<br>";
class Sch extends Fun{
    function __construct(){
        $this->x=10;
        $this->y = 12;
        $this->z = 1;

    }
    function giv(){
        echo $this->x;
        echo "<br>";
        echo $this->y;
        echo "<br>";
        echo $this->z;
    }
}
$play = new Sch;
echo $play->play();

echo "<br>";
echo "Space";
echo "<br>";
echo $play->giv();


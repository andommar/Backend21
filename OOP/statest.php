<?php
class Statest{
    public static $staVar = "I'm Static!";
    public static function echovar(){
        echo "Im a static var and this is my txt: ". self::$staVar;
    }
}
//$statest = new Statest();
//echo $state;

Statest::echovar();
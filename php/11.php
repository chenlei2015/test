<?php
$a=10;
echo hell();

function hello(){
    $a=$a+10;
    return $a;
}

echo $a;
echo (hello()+$a);
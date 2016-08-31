<?php
$time=mktime(0,0,0,5,18,2013)-mktime(0,0,0,10,19,2007);
function cha($time){
    var_dump($time);
    $day=$time/(24*3600);
    var_dump($day);
}
cha($time);
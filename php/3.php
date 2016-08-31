<?php
//обтьм╪ф╛
//header("Content-type: image/jpg");
//header("Content-Disposition:attachment;filename=1.jpg");
//readfile("../images/1.jpg");
//$f=fopen('www.fnp2p.com/','r');
//$read=fgetcsv($f);
//var_dump($read);
//$f=fsockopen('www.baidu.com',80);
//$read=fgetc($f);
$age=array("Peter","Ben","Joe","Harry");
print_r(array_chunk($age,3,true));


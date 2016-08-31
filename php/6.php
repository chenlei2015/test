<?php
function myfunction($a,$b)
{
    if ($a===$b)
    {
        return 1;
    }
    return 0;
}

$a1=array("a"=>"red","b"=>"green","e"=>"blue");
$a2=array("d"=>"red","b"=>"green","e"=>"blue");

$result=array_intersect_uassoc($a1,$a2,"myfunction");
print_r($result);

echo chr(97);

echo ord('a');

$arr=mb_strlen('到但是但是鼓个梵蒂冈地方捣鼓捣','utf-8');
$arr=mb_substr('到但是但是鼓捣鼓捣风动旛动',0,$arr-3,'utf-8');

var_dump($arr);

echo  mb_internal_encoding ('utf-8');
echo  mb_internal_encoding ();
echo '<br>';
$time=time()-mktime(0,0,0,12,9,1987);
echo $time;
echo '<br>';
echo floor($time/(365*24*3600));
echo '<br>';
var_dump(getdate(time()));
echo '<br>';
echo time();
echo '<br>';
echo strtotime('Monday');
echo '<br>';

$str="法 规 尽 快 来 访 的 赶 紧 来 付 款";
//$str="jjjjjjjjieyueoiueo";
$arr= preg_split('/ /',$str,-1,PREG_SPLIT_NO_EMPTY);
var_dump($arr);
echo '<br>';
echo getcwd();
chdir("images");
echo getcwd();
$dir="../ye";
function scan($dir){
        $arr=scandir($dir);
        var_dump($arr);
}
scan();



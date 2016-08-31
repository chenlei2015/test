<?php
/**
 * Created by PhpStorm.
 * User: 123
 * Date: 2016/2/18
 * Time: 9:18
 */

$arr=array(1,2,3,4,5,6,7,8,9);

foreach($arr as $v){
    if($v>4){
        break;
    }
    echo $v.'<br>';
}

echo '跳出来了<br>';

foreach($arr as $v){
    if($v%2==0) {
        //echo"没有偶数<br>";
        continue;
        echo"没有偶数<br>";
    }
    echo $v.'<br>';
}


for($i=1;$i<=9;$i++){
    for($j=1;$j<=$i;$j++){
        echo $j.'x'.$i.'='.$j*$i;
        echo '&nbsp;&nbsp;';
    }
    echo '<br>';
}

for($x=1;$x<=9;$x++){
    for($y=1;$y<=$x;$y++){
        echo '*';
    }
    echo '<br>';
}
$num=949598;
function num($num){
    $count=0;
    $he=array();
    if($num>=0){
        do{
            $num=(string)$num/10;
            $num=explode('.',$num);
            $wei=array_pop($num);
            $num=(int)$num[0];
            if($wei>0){
                switch($wei){
                    case 1:
                        $han='一';
                        break;
                    case 2:
                        $han='二';
                        break;
                    case 3:
                        $han='三';
                        break;
                    case 4:
                        $han='四';
                        break;
                    case 5:
                        $han='五';
                        break;
                    case 6:
                        $han='六';
                        break;
                    case 7:
                        $han='七';
                        break;
                    case 8:
                        $han='八';
                        break;
                    case 9:
                        $han='九';
                        break;
                }
                if($count>0) {
                    switch ($count) {
                        case 1:
                            $dan = '十';
                            break;
                        case 2:
                            $dan = '百';
                            break;
                        case 3:
                            $dan = '千';
                            break;
                        case 4:
                            $dan = '万';
                            break;
                        case 5:
                            $dan = '十万';
                            break;
                        case 6:
                            $dan = '百万';
                            break;
                        case 7:
                            $dan = '千万';
                            break;
                        case 8:
                            $dan = '亿';
                            break;
                        case 9:
                            $dan = '十亿';
                            break;
                    }
                }

            }
            array_unshift($he,$han.$dan);
            $count++;
       }while($num>0);
    }
    $cai=array();
    $qi=0;
    foreach($he as $k=>$va){
        if(strpos($va,'万')>0){
            $va=str_replace('万','',$va);
            array_push($cai,$va);
        }else{
            if($qi>0){
                $cai[$k]=$he[$k];
            }else{
                $cai[$k-1]=$he[$k-1];
                $cai[$k]=$he[$k];
                $qi++;
                continue;
            }

        }


    }
    return $cai;
}

var_dump(num($num));
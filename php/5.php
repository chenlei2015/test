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

echo '��������<br>';

foreach($arr as $v){
    if($v%2==0) {
        //echo"û��ż��<br>";
        continue;
        echo"û��ż��<br>";
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
                        $han='һ';
                        break;
                    case 2:
                        $han='��';
                        break;
                    case 3:
                        $han='��';
                        break;
                    case 4:
                        $han='��';
                        break;
                    case 5:
                        $han='��';
                        break;
                    case 6:
                        $han='��';
                        break;
                    case 7:
                        $han='��';
                        break;
                    case 8:
                        $han='��';
                        break;
                    case 9:
                        $han='��';
                        break;
                }
                if($count>0) {
                    switch ($count) {
                        case 1:
                            $dan = 'ʮ';
                            break;
                        case 2:
                            $dan = '��';
                            break;
                        case 3:
                            $dan = 'ǧ';
                            break;
                        case 4:
                            $dan = '��';
                            break;
                        case 5:
                            $dan = 'ʮ��';
                            break;
                        case 6:
                            $dan = '����';
                            break;
                        case 7:
                            $dan = 'ǧ��';
                            break;
                        case 8:
                            $dan = '��';
                            break;
                        case 9:
                            $dan = 'ʮ��';
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
        if(strpos($va,'��')>0){
            $va=str_replace('��','',$va);
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
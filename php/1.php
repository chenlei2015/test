<?php
/**
 * Created by PhpStorm.
 * User: 123
 * Date: 2016/1/15
 * Time: 15:12
 */
function conmysql(){
    $con=mysql_connect('localhost','root','');
    if(!$con){
        die('Α¬½ΣΚ§°ά£Ί'.mysql_error());
    }
    mysql_set_charset('utf-8');
    mysql_select_db('fnp2p');
    return $con;
}

$con=conmysql();
$name='select * from p2p_user where user="chenlei"';
//$name = mysql_real_escape_string('select * from p2p_user where user="chenlei" ');
//var_dump($name);
$res=mysql_query($name,$con);
$arr=array();
while($row=mysql_fetch_assoc($res)){
     $arr[]=$row['user'];
}
//var_dump($arr);


class lei{

}

$obj= new lei();

var_dump($obj);
<?php
/**
 * Created by PhpStorm.
 * User: 123
 * Date: 2016/2/14
 * Time: 11:15
 */
header("Content-type:text/html;charset=utf-8");

function simplexml($path){
    $obj=simplexml_load_file($path);
    $i=0;
    foreach($obj as $group){
        $item[$i]=(array)($group->attributes());
        $arr[$i]['name']=$item[$i]['@attributes']['name'];
        foreach($group->children() as $child){
            $key=$child->getName();
            $value=strval($child);
            $arr[$i]['son'][$key]=$value;
        }
        $i++;
    }
    return $arr;
}
$path='menu.xml';
$arr = simplexml($path);
print_r($arr);
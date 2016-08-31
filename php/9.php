<?php
/**
 * Created by PhpStorm.
 * User: 123
 * Date: 2016/3/21
 * Time: 11:25
 */

class pey{
    const PI=3.1415926;
    private $a='nihao';
    protected  $b=456;
    public static $count=0;
    function __construct(){
         echo  pey::$count++;
         echo '<br>';
         isset($this->a);
       // echo pey::PI;
       // $this->to();
    }
    protected function num(){

   }
    function __isset(){
         echo 888888888;
    }
    public static  function to(){
        echo 8881;
    }

}

new pey();
//new pey();
//new pey();
//new pey();

$obj=new pey();

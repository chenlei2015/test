<?php
class resessionHandler extends SessionHandler {
    public function close ( ){
            echo "close";
    }
    public function  create_sid (){
            echo "create_id";
    }
    public function destroy ($session_id ){
            echo "destroy";
    }
    public function gc ( $maxlifetime ){
            echo "gc";
    }
    public function open ( $save_path ,$session_name ){
           echo $save_path."++++".$session_name;
           echo "open<br>";
    }
    public function  read ($session_id){
            echo "read<br>";
    }
    public function write ( $session_id,$session_data){
        var_dump($session_id);
        var_dump($session_data);
        echo "write";
    }
}
$sh = new resessionHandler();
session_set_save_handler($sh,true);
session_start();
//ini_set('session.save_handler','user');
$_SESSION['username']="chenlei";
$_SESSION['uid']=2000;
$_SESSION['alais']="php";
var_dump($_SESSION);
//session_destroy();
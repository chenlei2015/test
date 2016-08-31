<?php
$path="D:/xamp/htdocs/ye/js";
function listFile($path){
    $handle=opendir($path);

    while($file=readdir($handle)){
        if($file!="." && $file!=".."){
            $files=$path."/".$file;
            if(is_file($files)){
                echo  $file."<br>";
            }
            if(is_dir($files)){
                echo  $file."<br>";
                listFile($files);
            }
        }
    }
    closedir($handle);
}
listFile($path);
//var_dump(glob("D:/xamp/htdocs/ye/js/*r"));
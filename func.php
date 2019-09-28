<?php
    function unzip($location,$newLocation){
        if(exec("unzip $location",$arr)){
            mkdir($newLocation);
            for($i = 1;$i< count($arr);$i++){
                $file = trim(preg_replace("~inflating: ~","",$arr[$i]));
                copy($location.'/'.$file,$newLocation.'/'.$file);
                unlink($location.'/'.$file);
            }
            return TRUE;
        }else{
            return FALSE;
        }
    }
?>

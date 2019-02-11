<?php

$file="example.txt";

if($handle = fopen($file,'w')){

fwrite($handle,'i love PHP!');    
    
fclose($handle);
    
}else{
    echo "Not able to write";
}

?>
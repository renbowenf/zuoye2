<?php
    $a=fopen("1.txt","r") or die("Unable to open file!");
    $x=fgets($a);
    $c=json_decode($x);
    $b=0;				
    for($i=0;$i<count($c);$i++){
        for($j=0;$j<count($c)-$i-1;$j++){
            if($c[$j]>$c[$j+1]){
               $b=$c[$j];
               $c[$j]=$c[$j+1];
               $c[$j+1]=$b;
            }
        }
    }
    file_put_contents("Ã°ÅÝÅÅÐò.txt",serialize($c));
    print_r($c);
?>   
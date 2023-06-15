<?php

    $number=20;
    
    for($i=1;$i<=$number;$i++){
        $numbers[$i]=$i;
    }
    $middle=round($number/2);
    $pass=[$middle];
    for($y=1;$y<=$number;$y++){
        
        if($y!=1 && $y<=$middle){
                $passFirstKey=array_key_first($pass);
                $passLastKey=array_key_last($pass);
                array_unshift($pass,$pass[$passFirstKey]-1);
                array_push($pass,$pass[$passLastKey+1]+1);
            }elseif($y>$middle){
                $passFirstKey=array_key_first($pass);
                $passLastKey=array_key_last($pass);
                unset($pass[$passFirstKey]);
                unset($pass[$passLastKey]);
            }
            
        for($z=1;$z<=$number;$z++){
            if(in_array($z,$pass)){
              echo '+'; 
            }else{
                echo '#';
            }
            
        }
        echo "\n";
    }
    //print_r($pass);
    
     
?>

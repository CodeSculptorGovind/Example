<?php
    /**
    Here i uses array function to filter those number where i need to print start and where i have put space
    **/
    $number=20;
    
    for($i=1;$i<=$number;$i++){
        $numbers[$i]=$i;
    }
    
    if($number%2==0){
        $number=$number-1;
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
              echo '/'; 
            }else{
                echo '-';
            }
            
        }
        echo "\n";
    }
    echo $y;
    //print_r($pass);
    
    
?>

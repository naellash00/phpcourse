<?php 

function add($x, $y){
    return $x+$y;
}
echo add(15, 10);

function hello($x){
    $user = "anas";

    if($user==="nour"){

        echo "hello" . $user;

    } else{

        echo "bye" . $user;

    }
    
}
hello("nour");

?>
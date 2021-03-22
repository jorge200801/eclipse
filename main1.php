<?php

$n=5;
$factor=1;

if($factor<=0){
    echo "El nuemro no es valido";
    
}else{
    
    for($i=1;$i<=$n;$i++){
        
        $factor=$factor*$n;
        
    };
    return $factor;
};

    

?>
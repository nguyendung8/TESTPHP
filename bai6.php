
<?php 

$a= 6;
function giaiThua($n){
    $giai_thua =1;
    if($n ==0 || $n ==1){
        return $giai_thua;
    }
    else{
        for($i=2;$i<=$n;$i++){
            $giai_thua *= $i;
    }
    return $giai_thua;
}
}

echo 'Giai thừa của ' . $a . ' = ' . giaiThua($a);
?>
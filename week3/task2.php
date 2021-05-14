<?php

function sortEven($arr) {
    for($i=0; $i<count($arr); $i++){
        if ($arr[$i] % 2==0) {
            print"<br>". $arr[$i];
        }
    }
}

$arr = [2,3,4,6,7,9,11,20];
print_r(sortEven($arr));

?>
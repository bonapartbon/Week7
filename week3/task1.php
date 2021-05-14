<?php 

function reverse($string){
$reversed = "";
$temp = "";
for($i = 0; $i < strlen($string); $i++) {
    if($string[$i] == " ") {
        $reversed .= $temp . " ";
        $temp = "";
        continue;
    }
    $temp = $string[$i] . $temp;    
}
$reversed .= $temp;
print $reversed;
}

@reverse("emocleW ot PHP");


?>

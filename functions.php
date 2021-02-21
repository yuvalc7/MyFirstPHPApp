<?php


function myCalculator($num01, $oper , $num02){
    $sum = 0;
    switch($oper){
        case "add":
            $sum = $num01 + $num02;
            break;
        case "sub":
            $sum = $num01 - $num02;
            break;
        default:
            $sum = "There was an error!";
            break;    
    }
  

    
    return $sum;
} 


$num01 = $_POST["num01"];
$oper = $_POST["oper"];
$num02 = $_POST["num02"];


echo "Value: " . myCalculator($num01,$oper,$num02);
echo '<form><input type="button" value="return to previous page" onClick="javascript:history.go(-1)" ></form>';
?>    
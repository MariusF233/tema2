<?php

function emptyInput($salary)
{

    $result=false;
    if(empty($salary)){
     $result=true;

    }
    else{
        $result=false;
    }
    return $result;
}

function calculateNetSalary($salary)
{

  

$netSalary=($salary*7)/10;

return $netSalary;

}

?>
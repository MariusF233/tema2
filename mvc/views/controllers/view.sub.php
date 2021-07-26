<?php

if(isset($_POST["submit"])){
   // echo 'ok';
   
   $salary=$_POST["salary"];

   require_once 'models/functions.php';

   if(emptyInput($salary) != false){
   echo "empty field";

  }else{
  $net=0; 
  $net = calculateNetSalary($salary);

  echo "your net salary is: ".$net;
}
  

}

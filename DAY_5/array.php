<?php
 //Numerical Array
 //Method 1
 $a[0]=10;
 $a[1]=20;
 $a[2]=20.50;
 $a[3]="c";
 $a[4]="4";
 
 //Method 2
 $a[]=10;
 $a[]=20;
 $a[]=20.50;
 $a[]="c";
 $a[]="4";
 
 
 //Method 3
 //Always use this method to create an Array
 $a = array(10,20,30,"C","C++",10.5);
 
 //print Array value
 echo$a[3];
 
 //print whole Array
 for($i=0; $i< count($a); $i++)
 {
 echo "<br/>".$a[$i];
 }

  $sum=array_sum($a);
echo $sum;

$sum=array_product($a);
echo $sum;

  // 3 Inbuilt functions to Debug an Array
  echo "<pre>";
  print_r($a);
  echo "<pre>";
  
   echo "<pre>";
  var_dump($a);
  echo "<pre>";
  
  
  
  
  


 
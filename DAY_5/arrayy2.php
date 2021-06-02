<?php
  //Associative  Array
  //Key & value combination
  //Method 1
  $a[0]=10;
  $a['C']="Computer";
  $a['php']="Web Development";
  $a[10]="Ten";
  $a[50]=50.50;
  
  //Method 2
  ////Always use this method to create an Array
  $a=array(
  0=>10,
  "C"=>"Computer",
  "php"=>"Web Development",
  10=>"Ten",
  50=>50.50
  );
  
  //print value
  echo "C for".$a['C'];
  
  foreach($a as $value){
  echo"<br> value is $value";
  }
  
  foreach($a as $key => $value){
  echo"<br/> Key is <b> $key </b> and value is <b>$value </b>";
  }
  
  // 3 Inbuilt functions to Debug an Array
  echo "<pre>";
  print_r($a);
  echo "<pre>";
  
   echo "<pre>";
  var_dump($a);
  echo "<pre>";
  
  
  


<?php
//count()
$arr = array('php','c','c++','java','Android');
echo count($arr);
?>
<br/>



<?php
//array_count_values

$arr = array("C","php","c","android","php","java");
$newarr = array_count_values($arr);
foreach ($newarr as $key => $value) {
echo "<br/>$key - <strong>$value</strong> ";
}
?>
<br/>
<br/>
<br/>



<?php
//array_reverse
$arr = array('c', 'c++', 'java', 'android', 'php');
$revarr = array_reverse($arr);
print_r($revarr);

?>
<br/>
<br/>
<br/>

<?php
//in_array
$arr = array('c', 'c++', 'java', 'android', 'php');
$temp = in_array('php',$arr);
echo $temp;
?>
<br/>


<?php

//Select multiple keys at random
$arr = array('c', 'c++', 'java', 'android', 'php');
$indexofarray = array_rand($arr,2);//Returns Array Index 
foreach ($indexofarray as $key => $value) 
{
echo "<br />$key - <strong>" . $arr[$value] . "</strong>";
}
?>
<br/>
<br/>

<?php
//array_unique
$arr = array('c', 'c++','android', 'java', 'android', 'php');
print_r(array_unique($arr));
?>
<br/>
<br/>

<?php

//array_merge
$arr1 = array('c','c++','android','java','php');
$arr2 = array(10,20,30,40,50);
$NewArr = array_merge($arr1,$arr2);
print_r($NewArr);
?>
<br/>
<br/>

<?php
//array_search
$myarr = array('c', 'c++','android', 'java', 'php');
$check = array_search('android', $myarr);
echo $check; // Return Index
?>
<br/>
<br/>

<?php
//range
$arr = range("11", "20");
foreach($arr as $key => $value)
{
echo "<br /> $key - $value ";
} 
?>
<br/>
<br/>

<?php
//sort
$arr = array(80,60,50,40,8,74);
sort($arr);
print_r($arr);
?>
<br/>
<br/>

<?php
//resort
$arr = array(80,60,50,40,8,74);
rsort($arr);
print_r($arr);
?>
<br/>
<br/>

<?php
//asort
$arr = array(80,60,50,40,8,74);
asort($arr);
print_r($arr);
?>
<br/>
<br/>

<?php
//key_sort
$arr = array(
"Banana" => "Yellow", 
"Apple" => "Red", 
"Mango" => "Green");
ksort($arr);
foreach ($arr as $key => $value) {
echo "<br />$key - $value ";
}
?>
<br/>
<br/>

<?php
//shuffle
$myArray = array("Football", "Baseball", "Hockey", "Tennis", 
"Boxing");
shuffle($myArray); // Shuffle the array
foreach ($myArray as $key => $value) {
echo "<br /> $value ";
}
?>
<br/>
<br/>

<?php
//array_key_exists
$arr = array("a" => "apple", "b" => "banana");
echo array_key_exists('a',$arr);
?>
<br/>
<br/>

<?php
//array_change_key_case
$arr = array(
"Banana" => "Yellow", 
"Apple" => "Red", 
"Mango" => "Green");
$uppercase = array_change_key_case($arr,CASE_UPPER);
print_r($uppercase);
?>
<br/>
<br/>

<?php
//array_combine
$arr1 = array("Banana" , "Apple" , "Mango");
$arr2 = array("Yellow","Red", "Green");
$NewVar = array_combine($arr1, $arr2);
print_r($NewVar);
?>
<br/>
<br/>

<?php
//end
$myarr = array('c', 'c++','android', 'java', 'php');
echo end($myarr);
?>
<br/>
<br/>

<?php
//compact
$name = "Tanvi";
$subject = "php";
$arr = compact("name", "subject");
print_r($arr);
?>
<br/>
<br/>

<?php
//array_filp
$arr = array("a" => "Tanvi", "b" => "apple", "c" => "computer");
$fliparray = array_flip($arr);
print_r($fliparray);
?>
<br/>
<br/>

<?php
//array_diff
$a=array("Tanvi","c","c++","java","php","android");
$b=array("Tanvi","c","java","php");
$diff = array_diff($a, $b);
print_r($diff);
?>
<br/>
<br/>

<?php
//array_intersect
$arr1 = array(0=>"Sunday",1=>"Monday",2=>"Tuesday");
$arr2 = array(3=>"Tuesday",4=>"Sunday",5=>"Thursday");
print_r(array_intersect($arr1,$arr2));
?>
<br/>
<br/>

<?php
//array_values
$arr = array("i"=>"c","want"=>"c++","learn"=>"php");
$myarr = array_values($arr);
foreach($myarr as $key => $value) {
echo " <br />$key - $value";
}
?>
<br/>
<br/>

<?php
//array_push
$a=array("c","c++");
array_push($a,"java","php");
print_r($a);
?>
<br/>
<br/>

<?php
//array_pop
$a = array("c", "c++", "Java", "PHP", "ASP");
array_pop($a); //Remove
print_r($a);
array_pop($a); //Remove
print_r($a);
?>
<br/>
<br/>

<?php
//explode
$mystring = "I Love PHP Language";
$arr = explode(" ",$mystring);
print_r($arr);
?>
<br/>
<br/>

<?php
//implode
$arr = array("i","love","php","language");
$mystring = implode(" ", $arr);
echo $mystring;
?>
<br/>
<br/>
















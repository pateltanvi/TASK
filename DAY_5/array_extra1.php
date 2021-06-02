<?php

//array_sum 


$myarray = array(1,2,3,4,5);
echo array_sum($myarray);
?>
<br/>
<br/>



<?php
//array_product 


$myarray = array(1,2,3,4,5);
echo array_product($myarray);
?>
<br/>
<br/>

<form method="post">
Programming :
C<input type="checkbox" name="cbox[]" value="c">
C++<input type="checkbox" name="cbox[]" value="c++">
PHP<input type="checkbox" name="cbox[]" value="php">
<input type="submit">
</form>
<?php
if($_POST)
{
$programming= $_POST['cbox'];
$string = implode(",", $programming);
echo $string;
}
?>





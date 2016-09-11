<?php
/*
 * Author: Indu Prakash Chaube
 * Subject: This is a test program " Hello World " for php and git test
 */

//Message printing
echo "Hello World";

//including class file
include_once('includes/calculator.php');
//Adding two numbers with the class calculator.

$cal_obj=new calculator();
//Printing results
echo '<BR />';
echo 'Addition of two numbers is: ';
echo $cal_obj->add_num(1,2);

//END of files
?>

<?php
//Convert string in array with the matching separator.
//Explode in php
$str = "My name is Indu Prakash";

//exploding along with space and printing array
print_r (explode(" ",$str));
?>

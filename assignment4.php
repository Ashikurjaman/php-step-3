<?php

//1.Write a PHP function to sort an array of strings by their length, in ascending order.

$arr=['a','bcv','dc','cdcd','efddd','fdddd'];

function sortStringsByLength($arr) {
  usort($arr, function($a, $b) {
    return strlen($a) - strlen($b);
  });
  return $arr;
}

print_r(sortStringsByLength($arr));
echo PHP_EOL;


//2.Write a PHP function to concatenate two strings, but with the second string starting from the end of the first string.

function concatTwoString($str1, $str2)
{
    return $str1 . substr($str2, strlen($str2) - strlen($str1));
}
$str1="Hello";
$str2="Bangladesh";
echo concatTwoString($str1, $str2); 

echo PHP_EOL;


//3.Write a PHP function to remove the first and last element from an array and return the remaining elements as a new array.

$array=['Apple','Banana','Mango','Orange'];
function removeFirstAndLast($array)
{
    array_shift($array);
    array_pop($array);
    return $array;
}

$newArray=removeFirstAndLast($array);
print_r($newArray);
echo PHP_EOL;


//4.Write a PHP function to check if a string contains only letters and whitespace.

function chkStringOnly($string)
{
    if (preg_match('/^[a-zA-Z\s]+$/', $string)) {
        return "Yes, This is String";
        
    }
    return "No, This is not String";

    
}

$string="Bangladesh";
echo chkStringOnly($string);
echo PHP_EOL;

//5.Write a PHP function to find the second largest number in an array of numbers.

function secondLargestNumber($number)
{
    
    sort($number);
    return $number[count($number) - 2];

}

$number = array(100, 60, 30, 40, 50, 90, 70, 80, 10);
echo "Second largest number is : " . secondLargestNumber($number);
echo PHP_EOL;

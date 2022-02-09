<?php

error_reporting(E_ALL);              //is used to print errors in the web page .. 
ini_set('display_errors', '1');

echo "Tamilselvan\n";
/*
This 
is
multiline
commend
*/

// single line commend 
$degree = "MTech";

$name = "Tamilselan K";

$age = 22;

printf("This is Tamilselvan K %s \n<br>", $degree,); // this the printf statement in php ...

//parenthesis is optional 
print "my name is" . $name; // this is another type of print statement , here we use '.' instead of %s...


echo "my name is" . $name . "and my age is " . $age; //  here we can concatinate string and int values using (.)...


//Boolean

$truevar = true;
$falsevar = false;

print("<br>\n" . 'truevar is' . $truevar . 'and falsevar is' . $falsevar . "    <br>\n");
print("$truevar :" . $truevar . 'and falsevar is' . (int)$falsevar . "<br>\n");  /*(int) is used to do variable 
                                                                                         formating into int */
$stringvar = "Tamilselvan";
print("$stringvar is type of :" . gettype($stringvar) . "<br>\n");
print('$stringvar is type of :' . gettype((bool)$stringvar) . "<br>\n");
print ("$falsevar is type of :" . gettype($falsevar)) . ("<br>\n");
print ("$falsevar is type of :" . gettype(0)) . ("<br>\n");

if (Null == 0 and Null == false and false == 0) {
    print('Null==0 and Null==false and false==0 is True' . "<br>\n");
}

if (1 == true) {
    print('1==true is true ' . "<br>\n");
}

if (23 == (int)true) {
    print('23==true is a true');
} else {
    print('23==true is a false' . "<br>\n");
}

//integers

$int = 20;   //positive integer.
$int1 = -345;  //negative integer.
$int2 = 0123;  // octal value
$int3 = 0xfff;  //hex value
$int4 = 0b101100011101; //binary value

print($int + $int1 . ",br>\n");
print($int2 . ",br>\n");
print($int3 . ",br>\n");
print($int4 . ",br>\n");
print($int3 + $int4 . ",br>\n");

//float

$f1 = 2.33;
$f2 = 2.1e3; // 2 x 10^3;
printf("%.10f is the <br>\n ", $f1);
printf("%.10f is the <br>\n ", $f2);
$f3 = 2.600e-3; //2 x10^-3;
printf("%.4f is the <br>\n ", $f3);
unset($f3);
printf("%.4f is the <br>\n ", $f3);


//arithmetics

$add = 10 + 20;
$sub = 10 - 20;
$mul = 10 * 20;
$div = 10 / 20;
$modulo = 22 % 10;
$expo = 25 ** 2;

print($add . "<br>\n");
print($sub . "<br>\n");
print($mul . "<br>\n");
print($div . "<br>\n");
print($modulo . "<br>\n");
print($expo . "<br>\n");


//shorthand arithmetics

$num = 0;
$num = $num + 1;
print($num . "<br>\n");
$num++; //c like increment
print($num . "<br>\n");
$num += 1; //python like increment
print($num . "<br>\n");

//multiline string

$str = <<< tamil
This <br>
is my <br> $num // here we can populate $ num variable 
name Periyasamy.<br>
tamil;

print($str);

$str1 = <<<'tamil'
This  <br>
is  <br>
my  <br> $num // here we cannot populate $num variable 
name  <br>
periyasmy  <br>
tamil;

print($str1 . "<br>\n");

//arrays

$arr = [2, 3, 5, 6, 7];
//      0  1  2  3  4
//    Indexed array
$duplicate_array = [7, 3, 5, 8, 9, 4];


echo ($arr[2] . "<br>\n");

//for loops in php:

for ($i = 0; $i < 5; $i++) {
    printf("%d\n", $arr[$i]);
}

printf("\n");

$arr1 = ["tamil", 22, 2.22, True, 012, $duplicate_array];

for ($i = 0; $i < count($arr1); $i++) {
    printf("%s\n", gettype($arr1[$i]));
}

//patter for loop ...

for ($i = 1; $i <= 10; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo ("$j ");
    }
    printf("\n" . "<br>");
}
//echo ("\n");
$last = 10;
for ($i = 1; $i <= 10; $i++) {
    for ($j = 1; $j <= $last; $j++) {
        echo ("$j ");
    }
    print("\n" . "<br>");
    $last--;
}

//Associatie array (These arrays don't have index , but have key to access the values )
// here we can use any data types for key and values. 

$arr2 = [
    "one" => "tamil",
    "one" => "Hun",
    "two" => "Apple",
    "Three" => "True",
    "four" => "orange",
    "five" => "duplicate_array"
];

echo ($arr2["one"] . "\n");
print_r($arr2);

//array functions:

// array_flip 

print_r(array_flip($arr2)); //only string and integer will be key of associative array:

// array_change_key_case 

print_r(array_change_key_case($arr2, CASE_UPPER));  // it will return all the keys in upper case 
print_r(array_change_key_case($arr2, CASE_LOWER));  // it will return all the keys in lower case 

//array_chunck

print_r(array_chunk($arr, 4, true));  //if we use true - index values not changed 

print_r(array_chunk($arr, 2, false)); // if we use false   - index values changed to 0 and start from it in new array 
/*
function testfunc($tamil, $ram)
{
    print("$ram=$tamil<br>\n");
}

array_walk($arr2, 'testfunc');

for ($i = 0; $i <= count($arr2); $i++) {
    testfunc($arr2[$i], $i);
}
*/
?>
<pre>
<?
$arr5 = array(10, 20, 30, 40, 50, 60, 70);
print_r(array_pad($arr5, -20, "Tamil"));  // if the int value is negative then it start printing from upper side . 
?>
</pre>
<?php// Difference between //   $w = array_keys($v);// and//   list($w) = array_keys($v);$v=array(1 => 1, 2 => 4, 3 => 9, 4 => 16);echo "Input:\n";print_r($v);$w = array_keys($v);echo "\nResult of '\$w = array_keys(\$v);':\n";assert(is_array($w));print_r($w);assert($w == array(1,2,3,4));list($x) = array_keys($v);echo "\nResult of 'list(\$x) = array_keys(\$v);':\n";assert(!is_bool($x));assert( is_integer($x));assert($x == 1);assert($x == true);echo $x;echo "\n\n(Hypothesis: the number of columns 'array_keys(\$v);' has,";echo "\nwhich equals one)\n";/* Screen output:Input:Array(    [1] => 1    [2] => 4    [3] => 9    [4] => 16)Result of '$w = array_keys($v);':Array(    [0] => 1    [1] => 2    [2] => 3    [3] => 4)Result of 'list($x) = array_keys($v);':1(Hypothesis: the number of columns 'array_keys($v);' has,which equals one)*/?>
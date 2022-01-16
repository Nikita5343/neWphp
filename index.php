<?php 

//namespace App\Users;
use function funct\Collection\flatten;
use function funct\Collection\firstN;
require '/Users/nikita/newlevel/vendor/autoload.php';

print_r(firstN([1,2,3]));
print_r(flatten(['a', ['b', ['c', ['d']]]]));


//$arr = [5,2,9,111,1,1,2,2];

function sor($arr) {
    sort($arr);
    return $arr;
}
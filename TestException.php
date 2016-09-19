<?php
/**
 * Created by PhpStorm.
 * User: rado
 * Date: 19.09.16
 * Time: 14:15
 */

ini_set("display_errors", 1);

//try {
//    $ba = (2/0 );
//} catch (Exception $e) {
//    echo 'Caught exception: ', $e->getMessage(), "\n";
//}

//echo PHP_RELEASE_VERSION;

set_error_handler(function($errno, $errstr, $errfile, $errline){
   throw new ErrorException($errstr, 0,$errno, $errfile, $errline);
});


$a='12';
switch ($a) {
    case '1':
        echo "Is one<br>";
        break;
    case '2':
        echo "Is two<br>";
        break;
    default:
        echo "Is default";

}
$a=2/0;
echo $a;
<?php
/**
 * Created by PhpStorm.
 * User: rado
 * Date: 14.09.16
 * Time: 14:10
 */
ini_set('display_errors',1);
require 'vendor/autoload.php';
use Revasion\Tag as RevasionTag;
use League\Flysystem\Filesystem;
use League\Flysystem\ZipArchive\ZipArchiveAdapter as Adapter;

$filesystem = new Filesystem(new Adapter(__DIR__.'/jupload-6.0.3-src-6.0.3.zip'));
$contents = $filesystem->listContents();

foreach ($contents as $content){
    echo "Zip Content: ".$content['path']."<br>";
}



$date = new DateTime('2016-09-01 12:34:00');
$date1 = new DateTime('2017-09-03');

if ($date<$date1){
    $diff = $date1->diff($date);
echo $diff->days."\n";
    echo "Yes! ".$diff->format("%d");
}


$today = (new DateTime())->setTimezone(new DateTimeZone('Europe/Paris'));
//$today->setTimezone(new DateTimeZone('Pacific/Chatham'));

//;

//date_timezone_set($today, timezone_open('Pacific/Chatham'));
//date_timezone_set($date, timezone_open('Pacific/Chatham'));

//phpinfo();
mb_internal_encoding('UTF-8');
$asd='тествам си и нищо не търся';
$asd=mb_strtoupper($asd);
?>

<p>The output date is: <?= $today->format('d.m.Y H:i')?></p>
<p>The output date is: <?= $date->format('d.m.Y H:i')?></p>

<p>The output date is: <?= $asd?></p>


<?php
$o = new RevasionTag();
$o->shoTag();
echo "<br>";

//foreach(range(1,5) as $n){
//    echo "$n","<br>";
//}

$calback = function ($value){
    return ($value * $value * $value);
};

//var_dump(array_map($calback, range(1,5)));


?>
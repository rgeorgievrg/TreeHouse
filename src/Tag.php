<?php
/**
 * Created by PhpStorm.
 * User: rado
 * Date: 15.09.16
 * Time: 23:42
 */

namespace Revasion;


class Tag
{
    private $test;
    const OPALA="opala";

    public function shoTag()
    {
        echo "This is tag";
    }

    public function count()
    {
       for ($i=0;$i<1000;$i++){
           echo $i;
       }
    }
}
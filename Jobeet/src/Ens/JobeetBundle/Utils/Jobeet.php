<?php
/**
 * Created by PhpStorm.
 * User: DAN
 * Date: 27-Nov-16
 * Time: 23:00
 */

namespace Ens\JobeetBundle\Utils;


class Jobeet
{
    static public function slugify($text){
        // replace all non letters or digits with -
        $text = preg_replace('/\W+/', '-', $text);

        // trim and lowercase
        $text= strtolower(trim($text, '-'));

        return $text;
    }
}
<?php
namespace Karpuzkan\Trslug;

class trslug {

    protected $tr;
    protected $str;

    function __construct() {
        $this->tr = array('ç','Ç','ı','İ','ğ','Ğ','ü','ö','Ş','ş','Ö','Ü',',',' ','(',')','[',']');
        $this->str  = array('c','C','i','I','g','G','u','o','S','s','O','U','','_','','','','');
    }

    public function trslug($str)
    {
        return str_slug(str_replace($this->tr, $this->str, $str));
    }
}

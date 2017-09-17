<?php
namespace App\Traits;
use Illuminate\Support\Facades\Config;

trait  General
{
    public $data;
    public function data($key,$value)
    {
       return $this->data[$key] = $value;
    }
    public function title($back,$seperator=' : : ',$front=null){
        if(!isset($front)){
           $front = Config::get('title.name');
        }
        return $front.$seperator.$back;
    }
}

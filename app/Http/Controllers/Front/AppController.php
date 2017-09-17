<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AppController extends FrontController
{
    public function __construct()
    {
        parent::__construct();
    }


    public function index()
    {
        $this->data('title',$this->title('Welcome'));
        return view($this->page.'.home',$this->data);
    }
}

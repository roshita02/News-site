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
        return view($this->page.'.home');
    }
}

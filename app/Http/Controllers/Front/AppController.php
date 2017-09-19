<?php

namespace App\Http\Controllers\Front;

use App\News;
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
        $this->data('newsData',News::paginate(3));
        return view($this->page.'.welcome',$this->data);
    }
}
